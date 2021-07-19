<?php


        require_once("inc/phphead.php");
        require_once("inc/head.php");
        require_once("inc/sidebar.php");


?>

        <div class="content">


            <div class="container-fluid">
                <div class="row">


                    <div class="col-lg-12">
                        <section class="panel">
                            <header class="panel-heading">
                                توب اليوتيوبر
                            </header>
                            <table class="table table-striped table-advance table-hover">
                                <thead> 
                                    <tr>
                                        <th><i class="fa fa-bullhorn"></i> الإسم ب تيم سبيك</th>
                                        <th class="hidden-phone"><i class="fa fa-group"></i> عدد المشتركين</th>
                                        <th><i class="fa fa-user"></i> الإسم</th>
                                        <th><i class="fa fa-bookmark"></i> المركز</th>

                                    </tr>
                                </thead>
                                <tbody>
<?php

  $pdo = new PDO('mysql:host='.$host.';dbname='.$db1.';charset=utf8', ''.$user.'', ''.$pass.'');

$response = $pdo->prepare('SELECT *
FROM youtube 
ORDER BY sub DESC LIMIT 10
           ');
$response->execute();
$tops = $response->fetchAll();
$response->CloseCursor();

if($response->rowCount() > 0 )
{
$mrkz = 0;
    foreach($tops as $top) 
    {
$mrkz++;
        $id = (int)$top['id'];
        $name = htmlspecialchars($top['name']);
        $cdb = (int)$top['cdb'];
        $sgroup = (int)$top['sgroup'];
        $followers = $top['sub'];
        $IDCHANNEL = $top['YTID'];
$tsname = $ts3_VirtualServer->clientGetNameByDbid("$cdb");

echo'

                                    <tr>
                                        <td class="hidden-phone"><strong>'.secure($tsname['name']).'</strong></td>
                                        <td><span class="label label-info label-mini">'.$followers.'</span> </td>
                                        <td><a target="_blank" href="https://www.youtube.com/channel/'.$IDCHANNEL.'"><strong>'.$name.'</strong><a class="task-thumb" target="_blank" href="https://www.youtube.com/channel/'.$IDCHANNEL.'"></a></td>
                                        <td><span class="label label-danger label-mini">'.$mrkz.'</span></td>

                                    </tr>


';
echo'<br>';
    }
}
else
{
    echo '<h2 class="errors"> لا يوجد اي قناة مرتبطه حاليا  </h2><hr>';
}

?>
                                </tbody>
                            </table>

                </div>

</div></div></div>



                        </div></div></div>
                    </div>

<?php   require_once("inc/footer.php"); ?>
    </div>
</div>


</body>


</html>
