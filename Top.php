<?php


session_start();
$starttime = microtime(true);

require_once('../RANKS/other/config.php');
require_once('../RANKS/other/session.php');
require_once('../RANKS/other/load_addons_config.php');

$addons_config = load_addons_config($mysqlcon,$lang,$dbname,$timezone,$logpath);

if(!isset($_SESSION['tsuid'])) {
	set_session_ts3($ts['voice'], $mysqlcon, $dbname, $language, $adminuuid);
}

if ($substridle == 1) {
	$dbdata = $mysqlcon->query("SELECT uuid,name,count,idle,cldgroup,online FROM $dbname.user ORDER BY (count - idle) DESC");
	$texttime = $lang['sttw0013'];
} else {
	$dbdata = $mysqlcon->query("SELECT uuid,name,count,idle,cldgroup,online FROM $dbname.user ORDER BY count DESC");
	$texttime = $lang['sttw0003'];
}
$sumentries = $dbdata->rowCount() - 10;
$db_arr = $dbdata->fetchAll();
$count10 = 0;
$top10_sum = 0;
$top10_idle_sum = 0;


foreach ($db_arr as $client) {
	$sgroups  = explode(",", $client['cldgroup']);
	if (!in_array($client['uuid'], $exceptuuid) && !array_intersect($sgroups, $exceptgroup)) {
		if ($count10 == 10) break;
		if ($substridle == 1) {
			$hours = $client['count'] - $client['idle'];
		} else {
			$hours = $client['count'];
		}
		$top10_sum = round(($client['count']/3600)) + $top10_sum;
		$top10_idle_sum = round(($client['idle']/3600)) + $top10_idle_sum;
		$client_data[$count10] = array(
		'name'		=>	$client['name'],
		'count'		=>	$hours,
		'online'	=>	$client['online']
		);
		$count10++;
	}
}

for($count10 = $count10; $count10 <= 10; $count10++) {
	$client_data[$count10] = array(
		'name'		=>	"لا يوجد",
		'count'		=>	"0",
		'online'	=>	"0"
	);
}

$all_sum_data = $mysqlcon->query("SELECT SUM(count) FROM $dbname.user");
$all_sum_data_res = $all_sum_data->fetchAll();
$others_sum = round(($all_sum_data_res[0][0]/3600)) - $top10_sum;

$all_idle_sum_data = $mysqlcon->query("SELECT SUM(idle) FROM $dbname.user");
$all_idle_sum_data_res = $all_idle_sum_data->fetchAll();
$others_idle_sum = round(($all_idle_sum_data_res[0][0]/3600)) - $top10_idle_sum;

function get_percentage($max_value, $value) {
	return (round(($value/$max_value)*100));
}

        require_once("inc/phphead.php");
        require_once("inc/head.php");
        require_once("inc/sidebar.php");


?>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                              <center>  <h4 class="title"><strong>Top Users</strong></h4>
                                <p class="category"><strong>أفضل الأعضاء</strong></p></center>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                      <thead>
                        <tr>
                          <th><strong>الحالة</strong></th>
                          <th><strong>النقاط</strong></th>
                          <th><strong>اسم العضو</strong></th>
                          <th><strong>#</strong></th>

                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row"><strong><?PHP echo ($client_data[0]['online'] == '1') ? ' <span class="text-success">'.$lang['stix0024'].'</span>' : ' <span class="text-danger">'.$lang['stix0025'].'</span>' ?></strong></th>
                          <td><strong><?PHP echo round(($client_data[0]['count']/3600)) .'&nbsp;'.$lang['']?> </strong></td>
                          <td><strong><?PHP echo htmlspecialchars(trim($client_data[0]['name']))?></strong></td>
                          <th scope="row"><strong>1</th></strong>

                        </tr>
                        <tr>
                          <th scope="row"><strong><?PHP echo ($client_data[1]['online'] == '1') ? ' <span class="text-success">'.$lang['stix0024'].'</span>' : ' <span class="text-danger">'.$lang['stix0025'].'</span>' ?></strong></th>
                          <td><strong><?PHP echo round(($client_data[1]['count']/3600)) .'&nbsp;'.$lang['']?> </strong></td>
                          <td><strong><?PHP echo '' .htmlspecialchars(trim($client_data[1]['name'])) .''?></strong></td>
                          <th scope="row"><strong>2</th></strong>

                        </tr>
                        <tr>
                          <th scope="row"><strong><?PHP echo ($client_data[2]['online'] == '1') ? ' <span class="text-success">'.$lang['stix0024'].'</span>' : ' <span class="text-danger">'.$lang['stix0025'].'</span>' ?></strong></th>
                          <td><strong><?PHP echo round(($client_data[2]['count']/3600)) .'&nbsp;'.$lang['']?> </strong></td>
                          <td><strong><?PHP echo '' .htmlspecialchars(trim($client_data[2]['name'])) .''?></strong></td>
                          <th scope="row"><strong>3</th></strong>
                        </tr>
			<tr>
                          <th scope="row"><strong><?PHP echo ($client_data[3]['online'] == '1') ? ' <span class="text-success">'.$lang['stix0024'].'</span>' : ' <span class="text-danger">'.$lang['stix0025'].'</span>' ?></strong></th>
                          <td><strong><?PHP echo round(($client_data[3]['count']/3600)) .'&nbsp;'.$lang['']?> </strong></td>
                          <td><strong><?PHP echo '' .htmlspecialchars(trim($client_data[3]['name'])) .''?></strong></td>
                          <th scope="row"><strong>4</th></strong>
                        </tr>
                        <tr>
                          <th scope="row"><strong><?PHP echo ($client_data[4]['online'] == '1') ? ' <span class="text-success">'.$lang['stix0024'].'</span>' : ' <span class="text-danger">'.$lang['stix0025'].'</span>' ?></strong></th>
                          <td><strong><?PHP echo round(($client_data[4]['count']/3600)) .'&nbsp;'.$lang['']?></strong> </td>
                          <td><strong><?PHP echo '' .htmlspecialchars(trim($client_data[4]['name'])) .''?></strong></td>
                          <th scope="row"><strong>5</th>
                        </tr>
                        <tr>
                          <th scope="row"><strong><?PHP echo ($client_data[5]['online'] == '1') ? ' <span class="text-success">'.$lang['stix0024'].'</span>' : ' <span class="text-danger">'.$lang['stix0025'].'</span>' ?></strong></th>
                          <td><strong><?PHP echo round(($client_data[5]['count']/3600)) .'&nbsp;'.$lang['']?></strong> </td>
                          <td><strong><?PHP echo '' .htmlspecialchars(trim($client_data[5]['name'])) .''?></strong></td>
                          <th scope="row"><strong>6</th>
                        </tr>
                        <tr>
                          <th scope="row"><strong><?PHP echo ($client_data[6]['online'] == '1') ? ' <span class="text-success">'.$lang['stix0024'].'</span>' : ' <span class="text-danger">'.$lang['stix0025'].'</span>' ?></strong></th>
                          <td><strong><?PHP echo round(($client_data[6]['count']/3600)) .'&nbsp;'.$lang['']?> </strong></td>
                          <td><strong><?PHP echo '' .htmlspecialchars(trim($client_data[6]['name'])) .''?></strong></td>
                          <th scope="row"><strong>7</th>
                        </tr>
                        <tr>
                          <th scope="row"><strong><?PHP echo ($client_data[7]['online'] == '1') ? ' <span class="text-success">'.$lang['stix0024'].'</span>' : ' <span class="text-danger">'.$lang['stix0025'].'</span>' ?></strong></th>
                          <td><strong><?PHP echo round(($client_data[7]['count']/3600)) .'&nbsp;'.$lang['']?> </strong></td>
                          <td><strong><?PHP echo '' .htmlspecialchars(trim($client_data[7]['name'])) .''?></strong></td>
                          <th scope="row"><strong>8</th>
                        </tr>
                        <tr>
                          <th scope="row"><strong><?PHP echo ($client_data[8]['online'] == '1') ? ' <span class="text-success">'.$lang['stix0024'].'</span>' : ' <span class="text-danger">'.$lang['stix0025'].'</span>' ?></strong></th>
                          <td><strong><?PHP echo round(($client_data[8]['count']/3600)) .'&nbsp;'.$lang['']?> </strong></td>
                          <td><strong><?PHP echo '' .htmlspecialchars(trim($client_data[8]['name'])) .''?></strong></td>
                          <th scope="row"><strong>9</th>
                        </tr>
                        <tr>
                          <th scope="row"><strong><?PHP echo ($client_data[9]['online'] == '1') ? ' <span class="text-success">'.$lang['stix0024'].'</span>' : ' <span class="text-danger">'.$lang['stix0025'].'</span>' ?></strong></th>
                          <td><strong><?PHP echo round(($client_data[9]['count']/3600)) .'&nbsp;'.$lang['']?> </strong></td>
                          <td><strong><?PHP echo '' .htmlspecialchars(trim($client_data[9]['name'])) .''?></strong></td>
                          <th scope="row"><strong>10</th>
                        </tr>

                      </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

<?php   require_once("inc/footer.php"); ?>
    </div>
</div></div></div></div></div>


</body>



</html>
