<?php
ini_set( 'display_errors', '0' );
$hostname="localhost";

$dbuserid="HelloSQL";

$dbpasswd="13467979!Q";

$dbname="HelloSQL";



$mysqli = new mysqli($hostname, $dbuserid, $dbpasswd, $dbname);

if ($mysqli->connect_errno) {

    die('Connect Error: '.$mysqli->connect_error);

}

$ID=$_GET["ID"];
$result = $mysqli->query("select * from CRUD where ID=".$ID) or die("query error => ".$mysqli->error);
$rs = $result->fetch_object();

echo "<pre>";
print_r($rs);

?>