<?php

$hostname="localhost";

   $dbuserid="HelloSQL";

   $dbpasswd="13467979!Q";

   $dbname="HelloSQL";

   

   $mysqli = new mysqli($hostname, $dbuserid, $dbpasswd, $dbname);

   if ($mysqli->connect_errno) {

       die('Connect Error: '.$mysqli->connect_error);

   }


?>