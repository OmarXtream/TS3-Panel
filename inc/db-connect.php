<?php
try 
{
  $db = new PDO('mysql:host=localhost;dbname=HM;charset=utf8', 'root', 'basjokker518');
} 
catch(PDOException $e)
{
  die('خطأ:'. $e->getMessage());
}
// $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Defuelt connection
$host = "127.0.0.1";
$user = "root";
$pass = "basjokker518";
$db1 = "HM";

// Rank connection
$db = "rank";
?>