<?php
session_start();
require("../inc/data.php");
require('../libraries/TeamSpeak3/TeamSpeak3.php');

    function getClientIp() {
        if (!empty($_SERVER['HTTP_CLIENT_IP']))
            return $_SERVER['HTTP_CLIENT_IP'];
        else if(!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
            return $_SERVER['HTTP_X_FORWARDED_FOR'];
        else if(!empty($_SERVER['HTTP_X_FORWARDED']))
            return $_SERVER['HTTP_X_FORWARDED'];
        else if(!empty($_SERVER['HTTP_FORWARDED_FOR']))
            return $_SERVER['HTTP_FORWARDED_FOR'];
        else if(!empty($_SERVER['HTTP_FORWARDED']))
            return $_SERVER['HTTP_FORWARDED'];
        else if(!empty($_SERVER['REMOTE_ADDR']))
            return $_SERVER['REMOTE_ADDR'];
        else
            return false;
    }
        $result = array();
        $verfied = "0";
        try {
                $ts3_VirtualServer = TeamSpeak3::factory("serverquery://". $config['teamspeak']['loginname'] .":". $config['teamspeak']['loginpass'] ."@". $config['teamspeak']['ip'] .":". $config['teamspeak']['queryport'] ."/?server_port=". $config['teamspeak']['serverport'] ."&nickname=". urlencode($config['teamspeak']['displayname']) ."");
$ts3 = $ts3_VirtualServer;
                foreach ($ts3->clientList() as $cl) {
                                        if ($cl->getProperty('connection_client_ip') == getClientIp()) {
                                                $result[] = $cl->client_nickname;
                                                $client_info = $cl;
                                                $verfied++;
												$unid = $client_info["client_unique_identifier"];
$client_db = $client_info["client_database_id"];
$nickname = $cl->client_nickname;
$_SESSION['ggids'] = explode(",", $client_info["client_servergroups"]);

                $_SESSION['client_uid'] = $unid;
        $client_uid = $unid;
        $client_uid = $unid;
$client = $client_info;
$client_verified = $client;
$nicknames[] = $client["client_nickname"];
$nickname = $client["client_nickname"];
$description = $client["client_description"];
$totalconnections = $client["client_totalconnections"];
$platform = $client["client_platform"];
$country = strtolower($client["client_country"]);
$dbid = $client["client_database_id"];
$_SESSION ['ggids'] = explode(",", $client_verified["client_servergroups"]);
$uid = $client["client_unique_identifier"];
$ggids = explode(",", $client["client_servergroups"]);
$client_db = $client["client_database_id"];
                                }
                        }
                }      
                catch (Exception $e) { 
                        echo '<div style="background-color:red; color:white; display:block; font-weight:bold;">QueryError: ' . $e->getCode() . ' ' . $e->getMessage() . '</div>';
                        die;
                        }

if(in_array($Activated,$ggids)){

   header("Location: ../");
   exit;

}
?>
<!--
By Mr.omar
www.omar-info.cf

Telegram : @Mr_omarr
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Error : Not Act</title>
	<link rel="icon" type="image/png" sizes="96x96" href="../assets/img/favicon.png">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href='//fonts.googleapis.com/css?family=Fenix' rel='stylesheet' type='text/css'>
</head>
<body>
<?php
if(!in_array($Activated,$ggids)){

if(isset($_POST['act'])){



if($client_info["client_platform"] == 'Windows'){
try{
$ts3_VirtualServer->clientGetByUid($uid)->addservergroup($Activated);
$ts3_VirtualServer->clientGetByUid($uid)->addservergroup($windows);
$ts3_VirtualServer->clientGetByDbid($client_db)->move($doneact);
$ts3_VirtualServer->clientGetByDbid($client_db)->poke("???? ???????????? ?????????? !");
   header("Location: ../");

                }      
                catch (Exception $e) { 
                        echo '<div style="background-color:red; color:white; display:block; font-weight:bold;">QueryError: ' . $e->getCode() . ' ' . $e->getMessage() . '</div>';
                        die;
                        }

}


if($client_info["client_platform"] == 'Linux'){
try{
$ts3_VirtualServer->clientGetByUid($uid)->addservergroup($Activated);
$ts3_VirtualServer->clientGetByUid($uid)->addservergroup($linux);
$ts3_VirtualServer->clientGetByDbid($client_db)->move($doneact);
$ts3_VirtualServer->clientGetByDbid($client_db)->poke("???? ???????????? ?????????? !");
   header("Location: ../");

                }      
                catch (Exception $e) { 
                        echo '<div style="background-color:red; color:white; display:block; font-weight:bold;">QueryError: ' . $e->getCode() . ' ' . $e->getMessage() . '</div>';
                        die;
                        }

}


if($client_info["client_platform"] != 'Windows' and  $client_info["client_platform"] != 'Linux'){
try{
$ts3_VirtualServer->clientGetByUid($uid)->addservergroup($Activated);
$ts3_VirtualServer->clientGetByUid($uid)->addservergroup($phone);
$ts3_VirtualServer->clientGetByDbid($client_db)->move($doneact);
$ts3_VirtualServer->clientGetByDbid($client_db)->poke("???? ???????????? ?????????? !");
   header("Location: ../");

                }      
                catch (Exception $e) { 
                        echo '<div style="background-color:red; color:white; display:block; font-weight:bold;">QueryError: ' . $e->getCode() . ' ' . $e->getMessage() . '</div>';
                        die;
                        }


}
}
}
?>
  <div class="wrap">
	 <div class="main">
		<h3>ProRevolution</h3>
		<h1>?????? ?????? ???????? !</h1>
			<span>???????????? ???????????????? ?????????????????? ????????????</span></p>
			<div class="search">





 ?????? ???????????? ???????? ??????????????<br>
<br>
 ???????? ???????????? ?????? ???????????????? ?????????????? ???? ???????????????? , ???????????? ?????? ?????? ?????????? ???????? ?????????? ??????????????<br><br>

 ???????? ?????? ?????????????? ???? IP ?????? ????????<br><br>

 ???????????? ??????????<br><br>

 ???????? ?????????? ?????????????? ?????????????????? ???? ???????? ?????????? ???? ?????? ??????????<br><br>

 ?????????? ?????? ???????? ?????? ?????? ?????????? ???????????????? ?????????? ???????? ????????????????<br><br>


<hr>
				<form method='post'>
					<input type="submit" value="??????????" name="act">		
				</form>
			</div>
   </div>
	<div class="footer"><center>
		<p>&copy; 2018 ProRevolution. All Rights Reserved | <small> Developed  by  <a href='www.omar-info.cf'>#Mr.omar </a></small></p>
    </div>
  </div>
</body>
</html>

