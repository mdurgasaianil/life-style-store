<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    if(isset($_POST['qty_button']))
    {
       if($_POST['qty'] == 1)
    }
}
header('location: cart.php');

?>
