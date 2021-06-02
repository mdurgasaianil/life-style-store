<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == "POST")
{
  if(isset($_POST['add']))
  {
    if(isset($_SESSION['cart']))
    {
      $myitems = array_column($_SESSION['cart'],'item_name');
      if(in_array($_POST['item_name'],$myitems))
      {
        echo "<script> alert('ITEMS ALREADY ADDED'); window.location.href='product.php'; </script>";
      }
      else
      {
        $count = count($_SESSION['cart']);
        $_SESSION['cart'][$count] = array('item_name' => $_POST['item_name'],'price' => $_POST['price'],'quantity' => 1);
        echo "<script> alert('ITEM ADDED'); window.location.href='product.php'; </script>";
      }
    }
    else
    {
      $_SESSION['cart'][0] = array('item_name' => $_POST['item_name'],'price' => $_POST['price'],'quantity' => 1);
      echo "<script> alert('ITEM ADDED'); window.location.href='product.php'; </script>";
    }
  }
  /*if(isset($_POST['remove_item']))
  {
    foreach ($_SESSION['cart'] as $key => $value)
     {
      if($v['item_name']==$_POST['remove_item_name'])
      {
        UNSET($_SESSION['cart'][$key]);
        $_SESSION['cart'] = array_values($_SESSION['cart']);
        echo "<script> alert('ITEM REMOVED'); window.location.href='cart.php'; </script>";
      }
    }
  }*/
}

//header('location: product.php');



 ?>
