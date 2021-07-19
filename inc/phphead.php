<?php

session_start();
require("data.php");
require("functions.php");



require('libraries/TeamSpeak3/TeamSpeak3.php');


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
                if($verfied == "0"){
                //not in ts
{
echo'
<html>
<head>
<title> Not Online </title>
</head>
<style>
html,body{
background-color:#D3D3D3;
}
</style>
<body>
<center><strong><h1> انت غير متصل بسيرفر ! </h1></strong></center>













</body>
</html>';

die;

}	;
                }


if(!in_array($Activated,$ggids)){

   header("Location: NotAct");
   exit;
}

?>