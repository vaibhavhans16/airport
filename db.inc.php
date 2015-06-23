<?php
define("HOST", "localhost");
define("DBUSER", "root");
define("PASS", "");
define("DB", "airport");
$conn = mysql_connect(HOST, DBUSER, PASS) or  die(mysql_error()); 
$db = mysql_select_db(DB) or  die(mysql_error());
?>
