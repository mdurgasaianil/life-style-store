<?php
session_start();
UNSET($_SESSION['email']);
UNSET($_SESSION['password']);
UNSET($_SESSION['nam']);
UNSET($_SESSION['new_email']);
UNSET($_SESSION['msg']);
header('location: front.php')
 ?>
