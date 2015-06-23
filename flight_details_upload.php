<?php

    require_once 'db.inc.php';

    $id = $_REQUEST['flight_id'];
    $name = $_REQUEST['name'];
    $source = $_REQUEST['source'];
    $destination = $_REQUEST['destination'];
    $date = $_REQUEST['date'];
    $time = $_REQUEST['time'];


$sql= "INSERT INTO flight SET
          id    = '". mysql_real_escape_string($id) ."',
          name = '". mysql_real_escape_string($name) ."',
          source = '". mysql_real_escape_string($source) ."',
          destination   = '". mysql_real_escape_string($destination) ."',
          time = '". mysql_real_escape_string($time) ."',
          date   = '". mysql_real_escape_string($date) ."'";

    
$retval = mysql_query($sql,$conn)or die(mysql_error());

if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
else
{echo "Flight Entered successfully\n";
mysql_close($conn);
}
