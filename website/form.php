<?php
session_start();
$_SESSION['email']=$_POST['email'];
$lemail = $_SESSION['email'];
echo $lemail."<br>";
$_SESSION['password']=$_POST['password'];
$lpass = md5($_SESSION['password']);
echo $lpass ."<br>";
$con = mysqli_connect("localhost","root","","lifestyle") or die(mysqli_error($con));
$fetch = "SELECT password,first_name from users where email='$lemail';";
$fetch_result = mysqli_query($con, $fetch) or die(mysqli_error($con));
$row = mysqli_fetch_assoc($fetch_result);   //mysqli_fetch_array(); it will e stored in an associative array while fetching in line 11.
$pass = $row['password'];
$_SESSION['nam'] = $row['first_name'];
if($pass == $lpass){
  header('location: front2.php');
}else{
  header('location: login2.php');
}
 ?>
