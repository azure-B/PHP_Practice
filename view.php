<?php
ini_set( 'display_errors', '0' );

include $_SERVER["DOCUMENT_ROOT"]."/dbcon.php";

$ID=$_GET["ID"];
$result = $mysqli->query("select * from CRUD where ID=".$ID) or die("query error => ".$mysqli->error);
$rs = $result->fetch_object();

echo "<pre>";
print_r($rs);

?>