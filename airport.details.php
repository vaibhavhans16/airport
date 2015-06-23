<!DOCTYPE html>
<html>

<body>
    
<?php 

//connect to db
require_once 'db.inc.php';

$user=$_POST['usrname'];
$pass=$_POST['pass'];
$t=$_REQUEST['tpe'];

    if($t==0)
    {
$p= mysql_query("SELECT password FROM login WHERE username= 'jatin'");
        $result=mysql_fetch_assoc($p);
        if($result['password']== $pass)
        {  
           echo "Welcome ";
           echo $_POST["usrname"]; 
           echo "<br>";    
            
        } 
    }
else 
    die("Incorrect Username/Password!");
        
?>         
    
    
    
<form>
<fieldset>
<legend>Security Checkpoint:</legend>
<br> ENTER NUMBER OF SECURITY LANES: <input type="text" name="lanes" id="id1"><br>
   <button onclick="func();">SEGMENT LANES</button><BR><BR>    
    
<script>

function func() 
{
    var num= document.getElementById("id1").value;
    document.getElementById("id2").value= num*2/5;
    document.getElementById("id3").value= num*3/5;
    //document.getElementBYId("id3").value=num * 3/5;
    //  alert(document.getElementById("id3").value
}
</script>
    
    NUMBER OF EMERCENCY LANES: <input type="text" name="emercency" id="id2" value=""><br>
    NUMBER OF NORMAL LANES: <input type="text" name="normal" id="id3" value=""><br>
<BR>
<input type="submit" value="SUBMIT">


</fieldset>
</form>
</body>
</html>