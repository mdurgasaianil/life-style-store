<?php
session_start();
$_SESSION['first_name']=$_POST['first_name'];
$first_name = $_SESSION['first_name'];
$_SESSION['nam'] = $_SESSION['first_name'];
$_SESSION['last_name']=$_POST['last_name'];
$last_name = $_SESSION['last_name'];
$_SESSION['new_email']=$_POST['new_email'];
$email = $_SESSION['new_email'];
$_SESSION['new_password']=$_POST['new_password'];
$password = md5($_SESSION['new_password']);
$_SESSION['contact']=$_POST['contact'];
$contact = $_SESSION['contact'];
$_SESSION['city']=$_POST['city'];
$city = $_SESSION['city'];
$_SESSION['address']=$_POST['address'];
$address = $_SESSION['address'];
$con = mysqli_connect("localhost","root","","lifestyle");
$insert = "insert into users(first_name,last_name,email,password,contact,city,address) values('$first_name','$last_name','$email','$password','$contact','$city','$address')";
$insert_submit = mysqli_query($con, $insert) or die(mysqli_error($con));
header('location: product.php');
 ?>
