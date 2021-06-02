<?php
session_start();
UNSET($_SESSION['msg']);
 ?>
<html>
  <head>
    <title> Lifestyle </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link type="text/css" rel="stylesheet" href="cart.css?v=<?php echo time(); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    <nav class="navbar navbar-default navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">                                                                    <!--navbar header -->
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#button">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <?php if(isset($_SESSION['email'])){ ?>
          <a href="front2.php" class="navbar-brand"> Lifestyle store </a>
        <?php }
        if(isset($_SESSION['new_email'])){  ?>
          <a href="product.php" class="navbar-brand"> Lifestyle store </a>
        <?php } ?>
        </div>
        <div class="collapse navbar-collapse" id="button">
        <ul class="nav navbar-nav navbar-right">
          <?php  $count=0;
              if(isset($_SESSION['cart']))
              {
                $count = count($_SESSION['cart']);
              }
         ?>
          <li><a href="product.php"><span class="glyphicon glyphicon-new-window"></span> Continue Shopping <?php echo $_SESSION['nam'];?> </a></li>
          <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart">(<?php echo $count; ?>)</span> Cart</a></li>
          <li><a href="setting.php"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
          <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> log out</a></li>
        </ul>
      </div>
      </div>
    </nav>
    <div class="container tab">
      <div class="col-lg-9">
<table class="table table-hover">
  <tr>
    <th>serial number</th><th> Item Name</th><th>Price</th><th>Quantity</th><th>Total</th><th></th>
  </tr>
  <?php $t = 0;
if(isset($_SESSION['cart']))
{
  foreach ($_SESSION['cart'] as $key => $value)
  { $t = $t + $value['price'];  $sr = $key + 1; ?>
    <tr class="ro">
        <td> <?php echo $sr; ?> </td>
      <td><?php echo $value['item_name']; ?></td>
      <td><?php echo $value['price']; ?> <input type="hidden" class="iprice" value="<?php echo $value['price'] ?>"> </td>
      <td> <input type="number" class="text-center form-control iquantity" onchange="subtotal()" value="<?php echo $value['quantity']; ?>" min="1" max="10"> </td>
       <td class="itotal"></td>
      <td>
        <form action="unset.php" method="POST">
            <button type="submit" name="remove_item" class="btn btn-sm btn-danger">REMOVE</button>
            <input type="hidden" name="item_name" value="<?php echo $value['item_name']; ?>">
        </form>
       </td>
    </tr>
<?php  }
}
   ?>
  <tr class="ro">
    <td></td><td>Total</td><td><?php echo $t; ?></td> <td>GrandTotal</td> <td id="gtotal"></td> <td><button type="submit"class="btn btn-primary btn-block" name="confirm">Confirm Order</button></td>
  </tr>
  <tr>
    <td><a href="product.php"><span class="glyphicon glyphicon-new-window"></span> Continue Shopping <?php echo $_SESSION['nam'];?> </a></td>
  </tr>
</table>
    </div>
  </div>
    <footer>
      <div class="container-fluid footer">
        <center>
        <p id="copy"><span class="entity">Copyright  </span> Lifestyle Store. All Rights Reserved| Contact Us: +91 90000 00000</p>
        </center>
      </div>
    </footer>
<script type="text/javascript">
var gt = 0;
var iprice = document.getElementsByClassName('iprice');
var iquantity = document.getElementsByClassName('iquantity');
var itotal = document.getElementsByClassName('itotal');
var gtotal = document.getElementById("gtotal");
function subtotal()
{
  gt = 0;
  for(i=0; i<iprice.length; i++)
  {
    itotal[i].innerText = (iprice[i].value)*(iquantity[i].value);

    gt = gt + (iprice[i].value)*(iquantity[i].value);
  }
  gtotal.innerText = gt;
}
subtotal();
</script>
</body>
</html>
