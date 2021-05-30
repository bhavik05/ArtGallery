<?php
session_start();

$con= new mysqli("localhost","root","","test");
$u=$_POST['usr'];
$p=$_POST['pass'];
$sql="SELECT usr,pass from login where usr='$u' and pass='$p'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$count=mysqli_num_rows($result);
if($count==1)
{
echo "<h1><center>Login successful</center></h1>";
header("Location:admin.html");
}
else
{
echo "<h1><center>Login unsuccessful</center></h1>";
header("Location:http://localhost/forms/login.html");
}
?>