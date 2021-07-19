<?php


        require_once("inc/phphead.php");
        require_once("inc/head.php");
        require_once("inc/sidebar.php");


?>

        <div class="content">






<?php

if (isset($_POST['send']))
{
$pdo = $db;
$IDChannel = secure($_POST['IDChannel']);
if (empty($IDChannel)){
echo'
                                <div class="alert alert-info alert-bordered alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times"></i></button>
                                    <center><strong>الرجاء وضع إسم حسابك في الخانة</strong>   </center>
                                </div>
';
}else{
  $pdo = new PDO('mysql:host='.$host.';dbname='.$db1.';charset=utf8', ''.$user.'', ''.$pass.'');

    $response = $pdo->prepare('SELECT * FROM youtube');
    $response->execute();
    $yt = $response->fetchAll();
    $response->CloseCursor();
		
    foreach($yt as $check) {

        if ($check['YTID'] == $IDChannel) {

echo'
                                <div class="alert alert-danger alert-bordered alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times"></i></button>
                                    <center><strong>لقد تم ربط هذه القناة سابقا من قبل احد الأعضاء !</strong>   </center>
                                </div>
';
        require_once("inc/footer.php");
die;
}
}
echo '<br>' ;
$url_yt = "https://www.googleapis.com/youtube/v3/channels?part=statistics&id=$IDChannel&key=AIzaSyBGXgUQTzO_KqDJ0bcqN3h-Ao9xDRMoKIA";
    $yt_array = file_get_contents($url_yt);
    $ytcount = json_decode($yt_array, true);
    $followed_by = $ytcount['items'][0]['statistics']['subscriberCount'];
$sub = $followed_by;

    $url_yt = "https://www.googleapis.com/youtube/v3/channels?part=snippet%2CcontentDetails&id=$IDChannel&key=AIzaSyBGXgUQTzO_KqDJ0bcqN3h-Ao9xDRMoKIA";
    $yt_array = file_get_contents($url_yt);
    $ytcount = json_decode($yt_array, true);
    $des = $ytcount['items'][0]['snippet']['description'];
    $useryt = $ytcount['items'][0]['snippet']['title'];
$ts3_VirtualServer->clientListReset();
$ts3_VirtualServer->channelListReset();
  if($des != $uid) { 

echo'
                                <div class="alert alert-danger alert-bordered alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times"></i></button>
                                    <center><strong>الرجاء التأكد من وضع رقم التحقق الخاص بك في وصف القناة</strong>   </center>
                                </div>
';
}else{

if($followed_by < 5000 && $followed_by >= 1000){
$ts3->serverGroupClientAdd($yt1k, $client_db);
$rankname = $ts3->serverGroupGetById($yt1k);
echo'
                                <div class="alert alert-success alert-outline alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times"></i></button>
                                 <center>     تم ربط القناة <strong>بنجاح ! </strong> <br> <img src="icon.php?id='. $yt1k . '"> '.$rankname.'  

                                </div>
</center>
';

$cid = $ts3_VirtualServer->channelCreate(array(
	"channel_name" =>  ''.$nickname.''.$smallrand.'',
	"channel_topic" => "YouTuber |Sub $followed_by +",
	"channel_codec" => TeamSpeak3::CODEC_OPUS_VOICE,
	"channel_flag_permanent" => TRUE,
	"cpid"                   => "$ytrooms",
	));
	$ts3_VirtualServer->clientGetByUid($uid)->move($cid);
	$ts3_VirtualServer->clientGetByUid($uid)->setChannelGroup($cid , $chytowner);

  $pdo = new PDO('mysql:host='.$host.';dbname='.$db1.';charset=utf8', ''.$user.'', ''.$pass.'');
        $stmt= $pdo->prepare('INSERT INTO youtube ( name,  cdb, creation_date,  sub,  sgroup, CID, YTID) 
                             VALUES (:nem,  :cdb, NOW(),  :sb,  :group, :cid, :ytid)
                           ');
        $stmt->bindValue(':nem',"$useryt",PDO::PARAM_STR);
        $stmt->bindValue(':cdb', "$client_db", PDO::PARAM_INT);
        $stmt->bindValue(':sb',"$followed_by", PDO::PARAM_INT);
        $stmt->bindValue(':group',"$yt1k", PDO::PARAM_INT);
        $stmt->bindValue(':cid',"$cid", PDO::PARAM_INT);
        $stmt->bindValue(':ytid',"$IDChannel", PDO::PARAM_STR);
        $stmt->execute();        
        $stmt->CloseCursor();



}elseif($followed_by < 10000 && $followed_by >= 5000){
$ts3->serverGroupClientAdd($yt5k, $client_db);
$rankname = $ts3->serverGroupGetById($yt5k);
echo'
                                <div class="alert alert-success alert-outline alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times"></i></button>
                                 <center>     تم ربط القناة <strong>بنجاح ! </strong> <br> <img src="icon.php?id='. $yt5k . '"> '.$rankname.'  

                                </div>
</center>
';
$cid = $ts3_VirtualServer->channelCreate(array(
	"channel_name" =>  ''.$nickname.''.$smallrand.'',
	"channel_topic" => "YouTuber |Sub $followed_by +",
	"channel_codec" => TeamSpeak3::CODEC_OPUS_VOICE,
	"channel_flag_permanent" => TRUE,
	"cpid"                   => "$ytrooms",
	));
	$ts3_VirtualServer->clientGetByUid($uid)->move($cid);
	$ts3_VirtualServer->clientGetByUid($uid)->setChannelGroup($cid , $chytowner);

  $pdo = new PDO('mysql:host='.$host.';dbname='.$db1.';charset=utf8', ''.$user.'', ''.$pass.'');
        $stmt= $pdo->prepare('INSERT INTO youtube ( name,  cdb, creation_date,  sub,  sgroup, CID, YTID) 
                             VALUES (:nem,  :cdb, NOW(),  :sb,  :group, :cid, :ytid)
                           ');
        $stmt->bindValue(':nem',"$useryt",PDO::PARAM_STR);
        $stmt->bindValue(':cdb', "$client_db", PDO::PARAM_INT);
        $stmt->bindValue(':sb',"$followed_by", PDO::PARAM_INT);
        $stmt->bindValue(':group',"$yt5k", PDO::PARAM_INT);
        $stmt->bindValue(':cid',"$cid", PDO::PARAM_INT);
        $stmt->bindValue(':ytid',"$IDChannel", PDO::PARAM_STR);
        $stmt->execute();        
        $stmt->CloseCursor();


}elseif($followed_by < 20000 && $followed_by >= 10000){
$ts3->serverGroupClientAdd($yt10k, $client_db);
$rankname = $ts3->serverGroupGetById($yt10k);
echo'
                                <div class="alert alert-success alert-outline alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times"></i></button>
                                 <center>     تم ربط القناة <strong>بنجاح ! </strong> <br> <img src="icon.php?id='. $yt10k . '"> '.$rankname.'  

                                </div>
</center>
';
$cid = $ts3_VirtualServer->channelCreate(array(
	"channel_name" =>  ''.$nickname.''.$smallrand.'',
	"channel_topic" => "YouTuber |Sub $followed_by +",
	"channel_codec" => TeamSpeak3::CODEC_OPUS_VOICE,
	"channel_flag_permanent" => TRUE,
	"cpid"                   => "$ytrooms",
	));
	$ts3_VirtualServer->clientGetByUid($uid)->move($cid);
	$ts3_VirtualServer->clientGetByUid($uid)->setChannelGroup($cid , $chytowner);

        $stmt= $db->prepare('INSERT INTO youtube ( name,  cdb, creation_date,  sub,  sgroup, CID, YTID) 
                             VALUES (:nem,  :cdb, NOW(),  :sb,  :group, :cid, :ytid)
                           ');
        $stmt->bindValue(':nem',"$useryt",PDO::PARAM_STR);
        $stmt->bindValue(':cdb', "$client_db", PDO::PARAM_INT);
        $stmt->bindValue(':sb',"$followed_by", PDO::PARAM_INT);
        $stmt->bindValue(':group',"$yt10k", PDO::PARAM_INT);
        $stmt->bindValue(':cid',"$cid", PDO::PARAM_INT);
        $stmt->bindValue(':ytid',"$IDChannel", PDO::PARAM_STR);
        $stmt->execute();        
        $stmt->CloseCursor();

}elseif($followed_by < 30000 && $followed_by >= 20000){
$ts3->serverGroupClientAdd($yt20k, $client_db);
$rankname = $ts3->serverGroupGetById($yt20k);
echo'
                                <div class="alert alert-success alert-outline alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times"></i></button>
                                 <center>     تم ربط القناة <strong>بنجاح ! </strong> <br> <img src="icon.php?id='. $yt20k . '"> '.$rankname.'  

                                </div>
</center>
';
$cid = $ts3_VirtualServer->channelCreate(array(
	"channel_name" =>  ''.$nickname.''.$smallrand.'',
	"channel_topic" => "YouTuber |Sub $followed_by +",
	"channel_codec" => TeamSpeak3::CODEC_OPUS_VOICE,
	"channel_flag_permanent" => TRUE,
	"cpid"                   => "$ytrooms",
	));
	$ts3_client->clientGetByUid($uid)->move($cid);
	$ts3_client->clientGetByUid($uid)->setChannelGroup($cid , $chytowner);

  $pdo = new PDO('mysql:host='.$host.';dbname='.$db1.';charset=utf8', ''.$user.'', ''.$pass.'');
        $stmt= $pdo->prepare('INSERT INTO youtube ( name,  cdb, creation_date,  sub,  sgroup, CID, YTID) 
                             VALUES (:nem,  :cdb, NOW(),  :sb,  :group, :cid, :ytid)
                           ');
        $stmt->bindValue(':nem',"$useryt",PDO::PARAM_STR);
        $stmt->bindValue(':cdb', "$client_db", PDO::PARAM_INT);
        $stmt->bindValue(':sb',"$followed_by", PDO::PARAM_INT);
        $stmt->bindValue(':group',"$yt20k", PDO::PARAM_INT);
        $stmt->bindValue(':cid',"$cid", PDO::PARAM_INT);
        $stmt->bindValue(':ytid',"$IDChannel", PDO::PARAM_STR);
        $stmt->execute();        
        $stmt->CloseCursor();

}elseif($followed_by < 50000 && $followed_by >= 30000){
$ts3->serverGroupClientAdd($yt30k, $client_db);
$rankname = $ts3->serverGroupGetById($yt30k);
echo'
                                <div class="alert alert-success alert-outline alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times"></i></button>
                                 <center>     تم ربط القناة <strong>بنجاح ! </strong> <br> <img src="icon.php?id='. $yt30k . '"> '.$rankname.'  

                                </div>
</center>
';
$cid = $ts3_VirtualServer->channelCreate(array(
	"channel_name" =>  ''.$nickname.''.$smallrand.'',
	"channel_topic" => "YouTuber |Sub $followed_by +",
	"channel_codec" => TeamSpeak3::CODEC_OPUS_VOICE,
	"channel_flag_permanent" => TRUE,
	"cpid"                   => "$ytrooms",
	));
	$ts3_client->clientGetByUid($uid)->move($cid);
	$ts3_client->clientGetByUid($uid)->setChannelGroup($cid , $chytowner);

  $pdo = new PDO('mysql:host='.$host.';dbname='.$db1.';charset=utf8', ''.$user.'', ''.$pass.'');
        $stmt= $pdo->prepare('INSERT INTO youtube ( name,  cdb, creation_date,  sub,  sgroup, CID, YTID) 
                             VALUES (:nem,  :cdb, NOW(),  :sb,  :group, :cid, :ytid)
                           ');
        $stmt->bindValue(':nem',"$useryt",PDO::PARAM_STR);
        $stmt->bindValue(':cdb', "$client_db", PDO::PARAM_INT);
        $stmt->bindValue(':sb',"$followed_by", PDO::PARAM_INT);
        $stmt->bindValue(':group',"$yt30k", PDO::PARAM_INT);
        $stmt->bindValue(':cid',"$cid", PDO::PARAM_INT);
        $stmt->bindValue(':ytid',"$IDChannel", PDO::PARAM_STR);
        $stmt->execute();        
        $stmt->CloseCursor();

}elseif($followed_by < 100000 && $followed_by >= 50000){
$ts3->serverGroupClientAdd($yt50k, $client_db);
try{
$rankname = $ts3->serverGroupGetById($yt50k);
                }      
                catch (Exception $e) { 
                        }

echo'
                                <div class="alert alert-success alert-outline alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times"></i></button>
                                 <center>     تم ربط القناة <strong>بنجاح ! </strong> <br> <img src="icon.php?id='. $yt50k . '"> '.$rankname.'  

                                </div>
</center>
';
$cid = $ts3_VirtualServer->channelCreate(array(
	"channel_name" =>  ''.$nickname.''.$smallrand.'',
	"channel_topic" => "YouTuber |Sub $followed_by +",
	"channel_codec" => TeamSpeak3::CODEC_OPUS_VOICE,
	"channel_flag_permanent" => TRUE,
	"cpid"                   => "$ytrooms",
	));
	$ts3_client->clientGetByUid($uid)->move($cid);
	$ts3_client->clientGetByUid($uid)->setChannelGroup($cid , $chytowner);
                        

  $pdo = new PDO('mysql:host='.$host.';dbname='.$db1.';charset=utf8', ''.$user.'', ''.$pass.'');
        $stmt= $pdo->prepare('INSERT INTO youtube ( name,  cdb, creation_date,  sub,  sgroup, CID, YTID) 
                             VALUES (:nem,  :cdb, NOW(),  :sb,  :group, :cid, :ytid)
                           ');
        $stmt->bindValue(':nem',"$useryt",PDO::PARAM_STR);
        $stmt->bindValue(':cdb', "$client_db", PDO::PARAM_INT);
        $stmt->bindValue(':sb',"$followed_by", PDO::PARAM_INT);
        $stmt->bindValue(':group',"$yt50k", PDO::PARAM_INT);
        $stmt->bindValue(':cid',"$cid", PDO::PARAM_INT);
        $stmt->bindValue(':ytid',"$IDChannel", PDO::PARAM_STR);
        $stmt->execute();        
        $stmt->CloseCursor();

}elseif($followed_by < 100000 && $followed_by >= 50000){
$ts3->serverGroupClientAdd($yt80k, $client_db);
$rankname = $ts3->serverGroupGetById($yt80k);
echo'
                                <div class="alert alert-success alert-outline alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times"></i></button>
                                 <center>     تم ربط القناة <strong>بنجاح ! </strong> <br> <img src="icon.php?id='. $yt80k . '"> '.$rankname.'  

                                </div>
</center>
';
$cid = $ts3_VirtualServer->channelCreate(array(
	"channel_name" =>  ''.$nickname.''.$smallrand.'',
	"channel_topic" => "YouTuber |Sub $followed_by +",
	"channel_codec" => TeamSpeak3::CODEC_OPUS_VOICE,
	"channel_flag_permanent" => TRUE,
	"cpid"                   => "$ytrooms",
	));
	$ts3_client->clientGetByUid($uid)->move($cid);
	$ts3_client->clientGetByUid($uid)->setChannelGroup($cid , $chytowner);

  $pdo = new PDO('mysql:host='.$host.';dbname='.$db1.';charset=utf8', ''.$user.'', ''.$pass.'');
        $stmt= $pdo->prepare('INSERT INTO youtube ( name,  cdb, creation_date,  sub,  sgroup, CID, YTID) 
                             VALUES (:nem,  :cdb, NOW(),  :sb,  :group, :cid, :ytid)
                           ');
        $stmt->bindValue(':nem',"$useryt",PDO::PARAM_STR);
        $stmt->bindValue(':cdb', "$client_db", PDO::PARAM_INT);
        $stmt->bindValue(':sb',"$followed_by", PDO::PARAM_INT);
        $stmt->bindValue(':group',"$yt80k", PDO::PARAM_INT);
        $stmt->bindValue(':cid',"$cid", PDO::PARAM_INT);
        $stmt->bindValue(':ytid',"$IDChannel", PDO::PARAM_STR);
        $stmt->execute();        
        $stmt->CloseCursor();

}elseif($followed_by < 200000 && $followed_by >= 100000){
$ts3->serverGroupClientAdd($yt100k, $client_db);
$rankname = $ts3->serverGroupGetById($yt100k);
echo'
                                <div class="alert alert-success alert-outline alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times"></i></button>
                                 <center>     تم ربط القناة <strong>بنجاح ! </strong> <br> <img src="icon.php?id='. $yt250k . '"> '.$rankname.'  

                                </div>
</center>
';
$cid = $ts3_VirtualServer->channelCreate(array(
	"channel_name" =>  ''.$nickname.''.$smallrand.'',
	"channel_topic" => "YouTuber |Sub $followed_by +",
	"channel_codec" => TeamSpeak3::CODEC_OPUS_VOICE,
	"channel_flag_permanent" => TRUE,
	"cpid"                   => "$ytrooms",
	));
	$ts3_client->clientGetByUid($uid)->move($cid);
	$ts3_client->clientGetByUid($uid)->setChannelGroup($cid , $chytowner);

        $stmt= $db->prepare('INSERT INTO youtube ( name,  cdb, creation_date,  sub,  sgroup, CID, YTID) 
                             VALUES (:nem,  :cdb, NOW(),  :sb,  :group, :cid, :ytid)
                           ');
        $stmt->bindValue(':nem',"$useryt",PDO::PARAM_STR);
        $stmt->bindValue(':cdb', "$client_db", PDO::PARAM_INT);
        $stmt->bindValue(':sb',"$followed_by", PDO::PARAM_INT);
        $stmt->bindValue(':group',"$yt100k", PDO::PARAM_INT);
        $stmt->bindValue(':cid',"$cid", PDO::PARAM_INT);
        $stmt->bindValue(':ytid',"$IDChannel", PDO::PARAM_STR);
        $stmt->execute();        
        $stmt->CloseCursor();

}elseif($followed_by < 500000 && $followed_by >= 300000){
$ts3->serverGroupClientAdd($yt300k, $client_db);
$rankname = $ts3->serverGroupGetById($yt300k);
echo'
                                <div class="alert alert-success alert-outline alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times"></i></button>
                                 <center>     تم ربط القناة <strong>بنجاح ! </strong> <br> <img src="icon.php?id='. $yt300k . '"> '.$rankname.'  

                                </div>
</center>
';
$cid = $ts3_VirtualServer->channelCreate(array(
	"channel_name" =>  ''.$nickname.''.$smallrand.'',
	"channel_topic" => "YouTuber |Sub $followed_by +",
	"channel_codec" => TeamSpeak3::CODEC_OPUS_VOICE,
	"channel_flag_permanent" => TRUE,
	"cpid"                   => "$ytrooms",
	));
	$ts3_client->clientGetByUid($uid)->move($cid);
	$ts3_client->clientGetByUid($uid)->setChannelGroup($cid , $chytowner);

  $pdo = new PDO('mysql:host='.$host.';dbname='.$db1.';charset=utf8', ''.$user.'', ''.$pass.'');
        $stmt= $pdo->prepare('INSERT INTO youtube ( name,  cdb, creation_date,  sub,  sgroup, CID, YTID) 
                             VALUES (:nem,  :cdb, NOW(),  :sb,  :group, :cid, :ytid)
                           ');
        $stmt->bindValue(':nem',"$useryt",PDO::PARAM_STR);
        $stmt->bindValue(':cdb', "$client_db", PDO::PARAM_INT);
        $stmt->bindValue(':sb',"$followed_by", PDO::PARAM_INT);
        $stmt->bindValue(':group',"$yt300k", PDO::PARAM_INT);
        $stmt->bindValue(':cid',"$cid", PDO::PARAM_INT);
        $stmt->bindValue(':ytid',"$IDChannel", PDO::PARAM_STR);
        $stmt->execute();        
        $stmt->CloseCursor();
}elseif($followed_by < 600000 && $followed_by >= 500000){
$ts3->serverGroupClientAdd($yt500k, $client_db);
$rankname = $ts3->serverGroupGetById($yt500k);
echo'
                                <div class="alert alert-success alert-outline alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times"></i></button>
                                 <center>     تم ربط القناة <strong>بنجاح ! </strong> <br> <img src="icon.php?id='. $yt500k . '"> '.$rankname.'  

                                </div>
</center>
';
$cid = $ts3_VirtualServer->channelCreate(array(
	"channel_name" =>  ''.$nickname.''.$smallrand.'',
	"channel_topic" => "YouTuber |Sub $followed_by +",
	"channel_codec" => TeamSpeak3::CODEC_OPUS_VOICE,
	"channel_flag_permanent" => TRUE,
	"cpid"                   => "$ytrooms",
	));
	$ts3_client->clientGetByUid($uid)->move($cid);
	$ts3_client->clientGetByUid($uid)->setChannelGroup($cid , $chytowner);

        $stmt= $db->prepare('INSERT INTO youtube ( name,  cdb, creation_date,  sub,  sgroup, CID, YTID) 
                             VALUES (:nem,  :cdb, NOW(),  :sb,  :group, :cid, :ytid)
                           ');
        $stmt->bindValue(':nem',"$useryt",PDO::PARAM_STR);
        $stmt->bindValue(':cdb', "$client_db", PDO::PARAM_INT);
        $stmt->bindValue(':sb',"$followed_by", PDO::PARAM_INT);
        $stmt->bindValue(':group',"$yt500k", PDO::PARAM_INT);
        $stmt->bindValue(':cid',"$cid", PDO::PARAM_INT);
        $stmt->bindValue(':ytid',"$IDChannel", PDO::PARAM_STR);
        $stmt->execute();        
        $stmt->CloseCursor();
}elseif($followed_by < 800000 && $followed_by >= 600000){
$ts3->serverGroupClientAdd($yt800k, $client_db);
$rankname = $ts3->serverGroupGetById($yt800k);
echo'
                                <div class="alert alert-success alert-outline alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times"></i></button>
                                 <center>     تم ربط القناة <strong>بنجاح ! </strong> <br> <img src="icon.php?id='. $yt800k . '"> '.$rankname.'  

                                </div>
</center>
';
$cid = $ts3_VirtualServer->channelCreate(array(
	"channel_name" =>  ''.$nickname.''.$smallrand.'',
	"channel_topic" => "YouTuber |Sub $followed_by +",
	"channel_codec" => TeamSpeak3::CODEC_OPUS_VOICE,
	"channel_flag_permanent" => TRUE,
	"channel_flag_permanent" => TRUE,
	"cpid"                   => "$ytrooms",
	));
	$ts3_client->clientGetByUid($uid)->move($cid);
	$ts3_client->clientGetByUid($uid)->setChannelGroup($cid , $chytowner);

  $pdo = new PDO('mysql:host='.$host.';dbname='.$db1.';charset=utf8', ''.$user.'', ''.$pass.'');
        $stmt= $pdo->prepare('INSERT INTO youtube ( name,  cdb, creation_date,  sub,  sgroup, CID, YTID) 
                             VALUES (:nem,  :cdb, NOW(),  :sb,  :group, :cid, :ytid)
                           ');
        $stmt->bindValue(':nem',"$useryt",PDO::PARAM_STR);
        $stmt->bindValue(':cdb', "$client_db", PDO::PARAM_INT);
        $stmt->bindValue(':sb',"$followed_by", PDO::PARAM_INT);
        $stmt->bindValue(':group',"$yt800k", PDO::PARAM_INT);
        $stmt->bindValue(':cid',"$cid", PDO::PARAM_INT);
        $stmt->bindValue(':ytid',"$IDChannel", PDO::PARAM_STR);
        $stmt->execute();        
        $stmt->CloseCursor();

}elseif($followed_by >= 1000000){
$ts3->serverGroupClientAdd($yt1m, $client_db);
$rankname = $ts3->serverGroupGetById($yt1m);
echo'
                                <div class="alert alert-success alert-outline alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times"></i></button>
                                 <center>     تم ربط القناة بنجاح <strong>بنجاح ! </strong> <br> <img src="icon.php?id='. $yt1m . '"> '.$rankname.'  

                                </div>
</center>
';
$cid = $ts3_VirtualServer->channelCreate(array(
	"channel_name" =>  ''.$nickname.''.$smallrand.'',
	"channel_topic" => "YouTuber |Sub $followed_by +",
	"channel_codec" => TeamSpeak3::CODEC_OPUS_VOICE,
	"channel_flag_permanent" => TRUE,
	"cpid"                   => "$ytrooms",
	));
	$ts3_client->clientGetByUid($uid)->move($cid);
	$ts3_client->clientGetByUid($uid)->setChannelGroup($cid , $chytowner);

  $pdo = new PDO('mysql:host='.$host.';dbname='.$db1.';charset=utf8', ''.$user.'', ''.$pass.'');
        $stmt= $pdo->prepare('INSERT INTO youtube ( name,  cdb, creation_date,  sub,  sgroup, CID, YTID) 
                             VALUES (:nem,  :cdb, NOW(),  :sb,  :group, :cid, :ytid)
                           ');
        $stmt->bindValue(':nem',"$useryt",PDO::PARAM_STR);
        $stmt->bindValue(':cdb', "$client_db", PDO::PARAM_INT);
        $stmt->bindValue(':sb',"$followed_by", PDO::PARAM_INT);
        $stmt->bindValue(':group',"$yt1m", PDO::PARAM_INT);
        $stmt->bindValue(':cid',"$cid", PDO::PARAM_INT);
        $stmt->bindValue(':ytid',"$IDChannel", PDO::PARAM_STR);
        $stmt->execute();        
        $stmt->CloseCursor();


}elseif($followed_by < 1000){
echo'
                                <div class="alert alert-danger alert-bordered alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times"></i></button>
                                   <center> <strong>للأسف!</strong> لا يوجد عدد كافي من المشتركين الحد الأدنى  ألف مشترك.</center>
                                </div>
';
        require_once("inc/footer.php");
die;
}


echo'<div class="col-lg-4">
              
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <header class="panel-title">
                                    <div class="text-center">
                                        <strong>معلومات حسابك</strong> 
                                    </div>
                                </header>
                            </div>
                            <div class="panel-body">
                                <div class="text-center" id="author">
                                    <h3>'.$useryt.'</h3>
                                    <small class="label label-primary">  '.$sub.' </small> عدد المتابعين 
                                    <div class="text-center">
                                    <p style="background-color:white">'.$des.'</p>
</div>
                                </div>
                            </div>
                        </div>
</div><div class="col-lg-4">
                        <div class="well well-success">
                            <h3>تم التنفيذ بنجاح</h3>
                            تم ربط حسابك بنجاح <br> يمكنك إرجاع الوصف الخاص بك كما كان 
                        </div>
</div>
</div>

';

        require_once("inc/footer.php");
die;
}
}
}
  $pdo = new PDO('mysql:host='.$host.';dbname='.$db1.';charset=utf8', ''.$user.'', ''.$pass.'');

    $response = $pdo->prepare('SELECT * FROM youtube');
    $response->execute();
    $yt = $response->fetchAll();
    $response->CloseCursor();
		
    foreach($yt as $check) {

        if ($check['cdb'] == $client_db) {
$sub = $check['sub'];
$useryt = secure($check['name']);
$IDChannel = $check['YTID'];
$sgroup = $check['sgroup'];

    $url_yt = "https://www.googleapis.com/youtube/v3/channels?part=snippet%2CcontentDetails&id=$IDChannel&key=AIzaSyBGXgUQTzO_KqDJ0bcqN3h-Ao9xDRMoKIA";
    $yt_array = file_get_contents($url_yt);
    $ytcount = json_decode($yt_array, true);
    $des = $ytcount['items'][0]['snippet']['description'];

echo'<div class="col-lg-4">
              
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <header class="panel-title">
                                    <div class="text-center">
                                        <strong>معلومات حسابك</strong> 
                                    </div>
                                </header>
                            </div>
                            <div class="panel-body">
                                <div class="text-center" id="author">
                                    <h3>'.$useryt.'</h3>
                                    <small class="label label-primary">  '.$sub.' </small> عدد المتابعين 
                                    <div class="text-center">
                                    <p style="background-color:white">'.$des.'</p>
</div>
                                </div>
                            </div>
                        </div>
</div><div class="col-lg-4">
                        <div class="well well-info">
                            <strong><h3>تم ربط حسابك بالفعل !</h3>
                        </div>
</div>
</div>
';
        require_once("inc/footer.php");
die;

        }
    }
?>














            <div class="container-fluid">
                <div class="row">




                    <div class="col-lg-6">
<center>=================================================
<font face="VIP" size="4"> <font color="#d22d2d"><?php echo $client_info["client_unique_identifier"];?></font>  : رقم التحقق الخاص بك</font>
<br>
=================================================
<h4>
<br>
( قم&#8236;&#8236; بوضع كود التحقق فقط في وصف قناتك&#8236;.)<br>
( Channel-&gt;About-&gt;Description-&gt;Edit-&gt;<?php echo $unid ;?> )<br>
(2) قم بكتابه معرف حسابك في اليوتيوب في الحقل.<br>
( Channel ID = https://www.youtube.com/channel/(Your Channel ID Here)/about )<br>
(3) قم بالضغط على الزر "ربط الحساب" لربط الحساب الخاص بك في اليوتيوب.<br><br><br><br>

</h4>

</div>
</center>

<center>
<form method="post">

                    <div class="col-lg-6">
                        <section class="panel">
                            <header class="panel-heading">
<h1 class="page-header"> Youtuber Script </h1>
<center><img src="assets/img/YT.png" /></center>

<hr>
                            </header>

                        <section class="panel">
                            <div class="panel-body">
                                    <div class="form-group">

                                <form class="form-horizontal" role="form">
                                        <div class="col-lg-9">



                                        <label class="col-lg-3 col-sm-3 control-label">نموذج الربط</label>
                                        <div class="col-lg-9">
                                <form role="form">
                                    <div class="form-group" >
                                        <div class="iconic-input">
                                            <i class="fa fa-user"></i>
<center>
     <form method='post'>

                                            <input style="background-color:#aaaaff" type="text" class="form-control" placeholder="أيدي القناة" name='IDChannel'><br>


                                        </div>
                            <button type="submit" name="send" class="btn btn-default"><i class="fa fa-search"></i> ربط القناة</button>

</form>

                                    </div>
                                    </div>

</div></div></div>



                        </div></div></div>
                    </div>

<?php   require_once("inc/footer.php"); ?>
    </div>
</div>


</body>


</html>
