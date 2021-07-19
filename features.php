<?php


        require_once("inc/phphead.php");
        require_once("inc/head.php");
        require_once("inc/sidebar.php");


?>


        <div class="content">
            <div class="container-fluid">
                <div class="row">

<?php 
if(isset($_POST['add'])){

// منع الاسبام
if(isset($_SESSION['Ad_G']) and $_SESSION['Ad_G'] >= microtime(true)){
	echo'
                                <div class="alert alert-info alert-outline alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times"></i></button>
                             <center>          <strong>عذراً! , الرجاء الإنتظار بين محاولاتك</strong></center> 
                                </div>
';
}else{
	$_SESSION['Ad_G'] = microtime(true)+5;
	
// منع الاسبام

// تم التفعيل
echo '<center>';

						  echo '<div class="alert dark alert-alt alert-success alert-dismissible" role="alert">
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">×</span>
						  </button>
						    <a class="alert-link" href="javascript:void(0)"></a><strong><h5>تم تفعيل الخاصية
						</div>';

echo '</center>'; 
// تم التفعيل
	
				if($_SESSION['his'] >= $featuerslimit){
							echo'<center><div class="alert alert-danger media fade in">
                          <p><strong>عذراً!</strong> لقد تجاوزت الحد الأقصى  '.$featuerslimit.'</p>
                        </div></center> ';
						}else{	
$game = $_POST['idgame'];
if(in_array($game,$features)){
$ts3_VirtualServer->clientGetByUid($uid)->addservergroup($game);
}
		}
}
}
if(isset($_POST['rm'])){

// منع الاسبام
if(isset($_SESSION['Rd_G']) and $_SESSION['Rd_G'] >= microtime(true)){
	echo'
                                <div class="alert alert-info alert-outline alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times"></i></button>
                             <center>          <strong>عذراً! , الرجاء الإنتظار بين محاولاتك</strong></center> 
                                </div>
';
}else{
	$_SESSION['Rd_G'] = microtime(true)+5;
	

// منع الاسبام
	
// تم التعطيل	
echo '<center>';

						  echo '<div class="alert dark alert-alt alert-danger alert-dismissible" role="alert">
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">×</span>
						  </button>
						    <a class="alert-link" href="javascript:void(0)"></a><strong><h5>تم تعطيل الخاصية
						</div>';

echo '</center>';
// تم التعطيل	

$game = $_POST['idgame'];
if(in_array($game,$features)){

$ts3_VirtualServer->clientGetByDbid($dbid)->remservergroup($game);
	}

}
}
?>
<?php 

if(!in_array($vip,$ggids)){

$allowed = $features;
}else{
$allowed = $vipfeatures;
}

            $iconosm = 0;
            
            $server_groups = $ts3_VirtualServer->serverGroupList();
            $servergroups = array();
            foreach($server_groups as $group) {
                if($group->type != 1) { continue; }
                if(in_array($group["sgid"], $allowed)) {
                    $servergroups[] = array('name' => (string)$group, 'id' => $group->sgid, 'type' => $group->type);
                }
            } 
			$_SESSION['grupos'] = $servergroups;
        
            foreach($servergroups as $group) {      
                
                $miembros = $ts3_VirtualServer->serverGroupClientList($group["id"]);
                $estaengrupo = False;
                foreach($miembros as $m) {
                    if($m["client_unique_identifier"] == $uid) { 
                        $estaengrupo = True;
                    }                                   
                }
					$gameid = $group["id"];
					$gamename = $group["name"];
				    $icon_image = '<img src="image/'.$gameid.'.png"></img> ';
					

                if($estaengrupo) {
                     $iconosm++;			
			// Here Add 
echo'
<div class="card border-left-indigo border-right-indigo" >
<div class="col-xl-4 col-md-4 col-xs-8" >
        <div class="card profile-card-with-stats box-shadow-2" style="background-color:white">
            <div class="text-xs-center">
				<hr>
                <div class="card-block">
                    <center><h4 class="card-title">'.$gamename.'</h4>
                    <ul class="list-inline list-inline-pipe"><hr>
                <center><strong><p class="label label-success"> مفعل</small>

                    </ul>
                </div>
				<hr>

                <div class="card-block">

				                                      <form method="post">
  <input type="hidden" name="idgame" value="'.$gameid.'">

                                       <input class="btn btn-lg btn-block font-medium-1 btn-outline-pink mb-1 block-page" type="submit" name="rm" value="تعطيل الخاصية" id="sa-successPR" title="اضغط لإزالة الخاصية">
					                  </form> 
                </div>
            </div>
        </div>
		
    </div>
';
                } else {
//Here Remove
			echo'
<div class="col-xl-4 col-md-4 col-xs-8" >
        <div class="card profile-card-with-stats box-shadow-2" style="background-color:white">
            <div class="text-xs-center">
				<hr>
                <div class="card-block">
                   <center> <h4 class="card-title">'.$gamename.'</h4>
                    <ul class="list-inline list-inline-pipe"><hr>
<center><strong> <p class="label label-danger"> غير مفعل</small>
                    </ul>
                </div>
<hr>
                <div class="card-block">
	<form method="post">
  <input type="hidden" name="idgame" value="'.$gameid.'">
                                       <input class="btn btn-lg btn-block font-medium-1 btn-outline-teal mb-1 block-element" type="submit" name="add" value="تفعيل الخاصية" id="sa-successPA" title="اضغط ل تفعيل الخاصية">
					                  </form> 
                </div>
            </div>
        </div>
		
    </div>';

                }
			}
			
 $_SESSION['his'] = $iconosm;

?>

                        </div>


                        </div>
                    </div>
                </div>
                            </div>
                        </div></div></div>
                    </div>

<?php   require_once("inc/footer.php"); ?>
    </div>
</div>


</body>


</html>
