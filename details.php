<!DOCTYPE html>
<html>
 <head>
<style>
ul#choose {
    padding: 0;
}

ul#choose li {
    display: inline;
}

ul#choose li a {
    background-color: black;
    color: white;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 4px 4px 0 0;
}

ul#choose li a:hover {
    background-color: skyblue;
}
</style>
</head>
<body>

<?php 
session_start();

//connect to db
require_once 'db.inc.php';

$user = $_POST['username'];
$pass = $_POST['password'];
$_SESSION["user"] = $user;
$_SESSION["pass"] = $pass;
$t= $_POST['type'];
$query="select password from login where username ='".$user."' and type=".$t;
$p= mysql_query($query)or die(mysql_error());
$result=mysql_fetch_assoc($p)or die(mysql_error());
if($result['password']== $pass)
{          echo "Welcome ";
           echo $_POST["username"];
?> 
            <h2>Choose from the Below:</h2>
<?php
    if($t==1)
     { ?>
    <ul id="choose">
      <li><a href="flightdetails.html" target="frame1">Enter Flight Details</a></li>
      <li><a href="passengerdetails.html" target="frame1">Enter Passenger Details</a></li>
    </ul>  

          <iframe width="250%" height="400px"  name="frame1"></iframe>

   <?php }
    elseif($t==0){
    
         ?> <form action="t3details_upload.php" action="post">
<fieldset>
<legend>Security Checkpoint:</legend>
<br> ENTER NUMBER OF SECURITY LANES: <input type="text" name="lanes" id="id1"><br>
   <input type="button" onclick="func();" value="SEGMENT LANES"></input><BR><BR>    
    
<script>

function func() 
{
    var num= document.getElementById("id1").value;
    document.getElementById("id2").value= num*2/5;
    document.getElementById("id3").value= num*3/5;

}
function onDemandChange(id){
  var temp=document.getElementById(id).value;
  var total=document.getElementById("id1").value;
    
    if(id=='id3')    
        document.getElementById("id2").value=total-temp;
    else if(id=='id2')
        document.getElementById("id3").value=total-temp;

}
</script>
    
    NUMBER OF EMERCENCY LANES: <input type="text" name="emergency" id="id2" value="" onChange="onDemandChange(this.id);"><br>
    NUMBER OF NORMAL LANES: <input type="text" name="normal" id="id3"  onChange="onDemandChange(this.id);"><br>
<BR>
<input type="submit" value="SUBMIT">


</fieldset>
</form>
    
<?php    }
    
}
    ?>
    

</body>
</html>
