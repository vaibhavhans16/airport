<?php

    require_once 'db.inc.php';

    $emergency = $_REQUEST['emergency'];
    $normal = $_REQUEST['normal'];
    $total = $_REQUEST['lanes'];
$message_emergency = "Emergency Case";
$message_emergency2 = "Normal Case";
if($emergency>0)
{
 for ($x = 1; $x <= $emergency; $x++) 
 {
    
  $sql= "INSERT INTO security_details SET
          id    = '". mysql_real_escape_string("") ."',
          number = '". mysql_real_escape_string("") ."',
          time_limit = '". mysql_real_escape_string("") ."',
          cat   = '". mysql_real_escape_string($message_emergency) ."'";

  echo "$x";
 $retval = mysql_query($sql,$conn)or die(mysql_error());

 if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
else
{echo "Flight Entered successfully\n";

}

 }}
  if($normal>0) 
 {  for($y = 1; $y<=$normal; $y++)
 {   $sql2= "INSERT INTO security_details SET
          id    = '". mysql_real_escape_string("") ."',
          number = '". mysql_real_escape_string("") ."',
          time_limit = '". mysql_real_escape_string("") ."',
          cat   = '". mysql_real_escape_string($message_emergency2) ."'";

  
 $retval = mysql_query($sql2,$conn)or die(mysql_error());

 if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
else
{echo "Flight Entered successfully\n";

}
 }
 }
 mysql_close($conn);
?>