<?php 
  
 $con - new mysqli("localhost","root","","test");

 if(!$con){

die("Connection Failed ".mysqli_error());
}
else{

if(ifset($_POST['register']))
{

$fname - mysqli_real_escape_string($con,$_POST['fname']);
$lname - mysqli_real_escape_string($con,$_POST['lname']);
$nic - mysqli_real_escape_string($con,$_POST['nic']);
$email - mysqli_real_escape_string($con,$_POST['email']);
$password - mysqli_real_escape_string($con,$_POST['password']);
$sql - " INSERT INTO register(fname,lname,nic,email,password) VALUES('$fname' , '$lname' , 'nic' , 'email' , 'password')";
$result - mysqli_query($con,$sql);
if(!result){
echo "Not Registere....";
}
else{
echo "Registere Successfully"
}
mysqli close($con);
}
}
?>