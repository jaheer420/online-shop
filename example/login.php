<?php
$n=$_POST['username'];
$c=$_POST['password'];
$con=mysqli_connect("localhost","root","","login_system");
$sql="INSERT INTO users(username,password) values('$n','$c')";
$r=mysqli_query($con,$sql);
if($r)
{
header("location: index.html");
}
else
{
echo"unsuccess";
}
?>