<?php
$name = $_REQUEST['name'];
$number = $_REQUEST['phone'];
$flight = $_REQUEST['flight_id'];
$uuid= $_REQUEST['uuid'];

define("HOST", "localhost");
define("DBUSER", "root");
define("PASS", "");
define("DB", "airport");
$conn = mysql_connect(HOST, DBUSER, PASS) or  die(mysql_error()); 
$db = mysql_select_db(DB) or  die(mysql_error());
    
$query= "select MAX(id) from user";    
$newid=mysql_query($query);
$result=mysql_fetch_assoc($newid);
$id2=$result['MAX(id)']+1;

$sql= "INSERT INTO user SET
          id    = '". mysql_real_escape_string($id2) ."',
          name = '". mysql_real_escape_string($name) ."',
          phone = '". mysql_real_escape_string($number) ."',
          flight_id   = '". mysql_real_escape_string($flight) ."'";

//         lane_no = '". mysql_real_escape_string($hnumber) ."',
//          board     = '". mysql_real_escape_string($email) ."'";

$sql2 ="INSERT INTO uuid SET
          uuid = '". mysql_real_escape_string($uuid) ."',
          user_id = '". mysql_real_escape_string($id2) ."'";
    
$retval = mysql_query($sql,$conn)or die(mysql_error());
$retval2 = mysql_query( $sql2,$conn)or die(mysql_error());
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
else
{echo "Passenger Entered successfully\n";
mysql_close($conn);
}


<html>
<head>
<h1>Checkout Page</h1>
</head>
<?php

require_once('class/BCGFontFile.php');
require_once('class/BCGColor.php');
require_once('class/BCGDrawing.php');

require_once('class/BCGcode39.barcode.php');

// The arguments are R, G, and B for color.
$colorFront = new BCGColor(0, 0, 0);
$colorBack = new BCGColor(255, 255, 255);

$font = new BCGFontFile('font/Arial.ttf', 18);

$code = new BCGcode39(); // Or another class name from the manual
$code->setScale(2); // Resolution
$code->setThickness(30); // Thickness
$code->setForegroundColor($colorFront); // Color of bars
$code->setBackgroundColor($colorBack); // Color of spaces
$code->setFont($font); // Font (or 0)
$code->parse("Vaibhav Hans"); // Text

$drawing = new BCGDrawing(' ', $colorBack);
$drawing->setBarcode($code);
$drawing->draw();

header('Content-Type: image/png');

$drawing->finish(BCGDrawing::IMG_FORMAT_PNG);

?>