<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>- | <?php echo $servername; ?> | -</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>


    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">

    <style id="css-main">@font-face{font-family:myFirstFont;src:url(assets/fonts/hcdd.ttf)/*tpa=http://ts-mc.cf/assets/fonts/hcdd.ttf*/ format('truetype');unicode-range:U +0600-06EF , U +06FA-0903}@font-face{font-family:dinar2;src:url(assets/fonts/ge-dinar2.ttf)/*tpa=http://ts-mc.cf/assets/fonts/ge-dinar2.ttf*/ format("truetype");font-weight:normal;font-style:normal;unicode-range:U +0600-06EF , U +06FA-0903}@font-face{font-family:h-tunisia;src:url(assets/fonts/H-Tunisia.ttf)/*tpa=http://ts-mc.cf/assets/fonts/H-Tunisia.ttf*/ format('truetype');unicode-range:U +0600-06EF , U +06FA-0903}@font-face{font-family:h-tunisia;src:url(assets/fonts/H-Tunisia-B.ttf)/*tpa=http://ts-mc.cf/assets/fonts/H-Tunisia-B.ttf*/ format('truetype');font-weight:bold;unicode-range:U +0600-06EF , U +06FA-0903}@font-face{font-family:h-pro;src:url(assets/fonts/H-Promoter.ttf)/*tpa=http://ts-mc.cf/assets/fonts/H-Promoter.ttf*/ format('truetype');unicode-range:U +0600-06EF , U +06FA-0903}@font-face{font-family:h-pro;src:url(assets/fonts/H-Promoter-M.ttf)/*tpa=http://ts-mc.cf/assets/fonts/H-Promoter-M.ttf*/ format('truetype');font-weight:bold;unicode-range:U +0600-06EF , U +06FA-0903}div h1,div h2,div h3,div h4,div p,div.h1,div.h2,div.h3,div.h3{font-family:'Open Sans',dinar2}div{font-family:myFirstFont,'Open Sans'}font1{font-family:myFirstFont,'Open Sans'!important}font2{font-family:dinar2,'Open Sans'!important}.progamer{font-family:h-pro!important;font-weight:bold!important}</style>

<script 
src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript"> $(window).load(function() {
	$(".loader").fadeOut("slow");
})
</script>

</head>
<body>
<div class="loader"></div>

<div class="wrapper">
    <div class="sidebar" data-background-color="black" data-active-color="danger">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                  <i class="ti-crown"></i>  HoltersMC
                </a>
            </div>

            <ul class="nav">
<li <?php 
$filename = $_SERVER['PHP_SELF'];
$homename = 'index';

if(stristr($filename,$homename)){ echo 'class="active"'; }?>>
                    <a href="index.php">
                        <i class="ti-home"></i>
                        <p>???????????? ????????????????</p>
                    </a>
                </li>
<li <?php 
$filename = $_SERVER['PHP_SELF'];
$homename = 'features';

if(stristr($filename,$homename)){ echo 'class="active"'; }?>>
                    <a href="features.php">
                        <i class="ti-settings"></i> </i>
                        <p>?????????????? ??????????????</p>
                    </a>

                </li>
<li <?php 
$filename = $_SERVER['PHP_SELF'];
$homename = 'games';

if(stristr($filename,$homename)){ echo 'class="active"'; }?>>
                    <a href="games.php">
                        <i class="ti-star"></i>
                        <p>?????????????? ??????????????</p>
                    </a>
                </li>

<li <?php 
$filename = $_SERVER['PHP_SELF'];
$homename = 'Top';

if(stristr($filename,$homename)){ echo 'class="active"'; }?>>
                    <a href="Top.php">
                        <i class="ti-view-list-alt"></i>
                        <p>???????? ??????????????</p>
                    </a>
                </li>

<li <?php 
$filename = $_SERVER['PHP_SELF'];
$homename = 'Youtube';

if(stristr($filename,$homename)){ echo 'class="active"'; }?>>
                    <a href="Youtube.php">
                        <i class="ti-youtube"></i>
                        <p>?????????? ??????????????????</p>
                    </a>
                </li>

<li <?php 
$filename = $_SERVER['PHP_SELF'];
$homename = 'Room';

if(stristr($filename,$homename)){ echo 'class="active"'; }?>>
                    <a href="Room.php">
                        <i class="ti-lock"></i>
                        <p>???????? ????????</p>
                    </a>
                </li>

<li <?php 
$filename = $_SERVER['PHP_SELF'];
$homename2 = 'YT';

if(stristr($filename,$homename2)){ echo 'class="active"'; }?>>
                    <a href="YT.php">
                        <i class="ti-bar-chart"></i>
                        <p>???????? ??????????????????</p>
                    </a>
                </li>



            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">???????? ?????????? ???????? ????????????</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-bell"></i>
                                    <p class="notification"></p>
									<p>??????????????</p>
									<b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">SooN</a></li>
                                <li><a href="#">SooN</a></li>
                              </ul>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>



        <div class="content">
            <div class="container-fluid">
                <div class="row">
		                          <div class="col-md-6" >
                            <div class="panel panel-danger">
                              <div class="panel-heading">
                <h4 class="panel-title">
                  User information
                              </div>

                              <div class="panel-body">

<b><h style="font-size:16px">Nickname : <h style='color:#4BB2FC'><?php echo htmlspecialchars($client_info["client_nickname"]);?></h></h></b><br> 
						<b><h style="font-size:16px">your IP : <h style='color:#4BB2FC'><?php echo $client_info["connection_client_ip"];?></h></h></b><br> 						
						<b><h style="font-size:16px">Description : <h style='color:#4BB2FC'><?php echo htmlspecialchars($client_info["client_description"]);?></h></h></b><br> 
						<b><h style="font-size:16px">Total Connections : <h style='color:#4BB2FC'><?php echo $client_info["client_totalconnections"];?></h></h></b><br>
						<b><h style="font-size:16px">OS : <h style='color:#4BB2FC'><?php echo $client_info["client_platform"];?></h></h></b><br>
						<b><h style="font-size:16px">Country : <h style='color:#4BB2FC'><?php echo $client_info["client_country"];?></h></h></b><br>
						<b><h style="font-size:16px">Database ID : <h style='color:#4BB2FC'><?php echo $client_info["client_database_id"];?></h></h></b><br>
						<b><h style="font-size:16px">Unique Identifier : <h style='color:#4BB2FC'><?php echo $client_info["client_unique_identifier"];?></h></h></b></div>           </div>

		          	</div>
		<div class="row" >
		
		                          <div class="col-md-6" >
                            <div class="panel panel-danger">
                              <div class="panel-heading">
                <h4 class="panel-title">
                  Levels System | ???????? ??????????????
                              </div>
							  
                              <div class="panel-body">

						<b><h style="font-size:16px">your Level  : <h style='color:#4BB2FC'>

</h></h></b><br> 	
					
						<b><h style="font-size:16px"> Next Level : <h style='color:#4BB2FC'>




</h></h></b><br> 
						<b><h style="font-size:16px">Time to Next Level  : <h style='color:#4BB2FC'>

                <div class="progress">
							<div class="progress-bar progress-bar-primary progress-bar-striped active" role="progressbar" aria-valuenow="<?PHP echo $percentage_rankup; ?>" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width: <?PHP echo $percentage_rankup; ?>%;">
								<?PHP echo $percentage_rankup," %"; ?>
</div>
					</div>			  


</h></h></b><br>

                        </div>
                    </div>
                </div>
                            </div>
                        </div></div></div>
                    </div>
<div class="content bg-white">
    <div class="row push-3-t push-3">
        <div class="col-md-6 col-md-offset-3">
     <center>     <p><marquee onmouseover="this.stop()" onmouseout="this.start()" scrollamount="3" scrolldelay="60" direction="right"><b><a  title="" target="_blank"></a></b><b><a title="" target="_blank"><span id="movetitle"><i class="ti-heart"></i> ?????????? ???? ???? ???????? ?????????? ???????? , ???? ?????????? ?????? ???????????? ?????????????? ?????????????? ?????????? ???? ???????????? ???? ???????????? ?????? ?????????? , ???????????? ???????????? ?????? ?????????????? , ?????? ???????????? ?????? ????????</span></a> </b><b><a  title="" target="_blankB.#" ????????????="" ????????????="" ??????="" ??????????????="" ????????????????)="" ..<="" a="">   </a></b></marquee></p>
		  </center>
        </div>
</div>

        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-right">
                    <ul>

                        <li>
                            <a href="#">
                                ?????????? ????????????????
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               ?????????? ??????????
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                                                ???? ????????
                            </a>
                        </li>
                    </ul>
                </nav>
    <!--   Core JS Files   -->    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/js/myscr669796.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>
    </div>
</div>


</body>

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'ti-gift',
            	message: " - ???????? ?????????? ???? - <b></b>"

            },{
                type: 'success',
                timer: 4000
            });

    	});
	</script>

</html>
