<?php
session_start();

if($_SERVER['REQUEST_METHOD'] == "POST")
{
  if(isset($_POST['remove_item']))
  {
    foreach($_SESSION['cart'] as $key => $value)
     {
      if($value['item_name']==$_POST['item_name'])
      {
        //print_r($_POST['item_name']);
        unset($_SESSION['cart'][$key]);
        $_SESSION['cart'] = array_values($_SESSION['cart']);
        echo "<script> alert('ITEM REMOVED'); window.location.href='cart.php'; </script>";
      }
    }
  }
}


//header('location: cart.php');



 ?>
