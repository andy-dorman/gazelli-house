<?php
//ini_set('display_errors',1); 
//error_reporting(E_ALL);
error_reporting(0);
//$mysqli = new mysqli("127.0.0.1", "root", "", "gazelli-house", 3306);
$mysqli = mysql_connect("localhost", "gazelli-house", "g4z3ll1H0u53");
if (!$mysqli) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db("gazelli-house", $mysqli);
//mysqli_select_db($mysqli, "gazelli-house");
?>
