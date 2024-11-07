<?php
include $_SERVER["DOCUMENT_ROOT"]."/dbcon.php";

print_r($_POST);

$Title=$_POST["Title"];
$content=$_POST["content"];
$userID="hong";

$sql="insert into CRUD (userID,Title,content) values ('".$userID."','".$Title."','".$content."')";
$result=$mysqli->query($sql) or die($mysqli->error);

header("Location: /index.php");
exit;
?>