<?php
$dbname='rajatkal_act';
$link=mysql_connect("localhost","rajatkal_act","ManasI4URajat") or die("Couldn't make connection.");
$db = mysql_select_db($dbname, $link) or die("Couldtn't select database");
?>