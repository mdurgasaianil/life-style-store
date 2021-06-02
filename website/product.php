<?php
session_start();
UNSET($_SESSION['msg']);
 ?>
<html>
  <head>
    <title>Lifestyle store</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link type="text/css" rel="stylesheet" href="product.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
        .btn{
          margin-top: 10px;
        }
        </style>
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
          <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart">(<?php echo $count; ?>)</span> Cart</a></li>
          <li><a href="setting.php"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
          <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> log out</a></li>
        </ul>
      </div>
      </div>
    </nav>
    <div class="container container_decor">
      <div class="jumbotron">
        <h1>welcome to our Lifestyle store !</h1>
        <p id="size">we have the best cameras, watches, shirts for you. No need to hunt around, We have all in one place</p>
      </div>
    </div>
    <div class="container">
    <div class="row">                                                                            <!--row1 -->
      <div class="col-lg-3 col-sm-6 col-xs-6">
        <div class="thumbnail">
        <img src="5.jpg" alt="cannon EOS" class="img-responsive">
        <div class="caption" align="center">
          <h3 class="mat">Cannon EOS</h3>
          <p>Price: Rs.36000.00</p>
          <form action="viewcart.php" method="POST">
          <button type="submit" name="add" class="btn btn-primary btn-block">Add to Cart</button>
            <input type="hidden" name="item_name" value="Cannon">
            <input type="hidden" name="price" value="36000">
            </form>
        </div>
      </div>
      </div>
      <div class="col-lg-3 col-sm-6 col-xs-6">
        <div class="thumbnail">
        <img src="2.jpg" alt="Sony DSLR" class="img-responsive">
        <div class="caption" align="center">
          <h3 class="mat">Sony DSLR</h3>
          <p>Price: Rs.40000.00</p>
          <form action="viewcart.php" method="POST">
          <button type="submit" name="add" class="btn btn-primary btn-block">Add to Cart</button>
            <input type="hidden" name="item_name" value="sony">
            <input type="hidden" name="price" value="40000">
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 col-xs-6">
        <div class="thumbnail">
        <img src="3.jpg" alt="Sony DSLR" class="img-responsive">
        <div class="caption" align="center">
          <h3 class="mat">Sony DSLR</h3>
          <p>Price: Rs.50000.00</p>
          <form action="viewcart.php" method="POST">
          <button type="submit" name="add" class="btn btn-primary btn-block">Add to Cart</button>
            <input type="hidden" name="item_name" value="sony2">
            <input type="hidden" name="price" value="50000">
            </form>
        </div>
      </div>
      </div>
      <div class="col-lg-3 col-sm-6 col-xs-6">
        <div class="thumbnail">
        <img src="4.jpg" alt="Olympus DSLR" class="img-responsive">
        <div class="caption" align="center">
          <h3 class="mat">Olympus DSLR</h3>
          <p>Price: Rs.80000.00</p>
          <form action="viewcart.php" method="POST">
          <button type="submit" name="add" class="btn btn-primary btn-block">Add to Cart</button>
            <input type="hidden" name="item_name" value="Olympus DSLR">
            <input type="hidden" name="price" value="80000.00">
            </form>
        </div>
      </div>
      </div>
    </div>
    </div>
    <div class="container">
      <div class="row">                                                                 <!--row2 -->
        <div class="col-lg-3 col-sm-6 col-xs-6">
          <div class="thumbnail">
          <img src="9.jpg" alt="Titan Model #301" class="img-responsive">
          <div class="caption" align="center">
            <h3 class="mat">Titan Model #301</h3>
            <p>Price: Rs.13000.00</p>
            <form action="viewcart.php" method="POST">
            <button type="submit" name="add" class="btn btn-primary btn-block">Add to Cart</button>
              <input type="hidden" name="item_name" value="Titan Model #301">
              <input type="hidden" name="price" value="13000.00">
              </form>
          </div>
        </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-6">
          <div class="thumbnail">
          <img src="10.jpg" alt="Titan Model #201" class="img-responsive">
          <div class="caption" align="center">
            <h3 class="mat">Titan Model #201</h3>
            <p>Price: Rs.3000.00</p>
            <form action="viewcart.php" method="POST">
            <button type="submit" name="add" class="btn btn-primary btn-block">Add to Cart</button>
              <input type="hidden" name="item_name" value="Titan Model #201">
              <input type="hidden" name="price" value="3000.00">
              </form>
          </div>
        </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-6">
          <div class="thumbnail">
          <img src="11.jpg" alt="HMT milan" class="img-responsive">
          <div class="caption" align="center">
            <h3 class="mat">HMT milan</h3>
            <p>Price: Rs.80000.00</p>
            <form action="viewcart.php" method="POST">
            <button type="submit" name="add" class="btn btn-primary btn-block">Add to Cart</button>
              <input type="hidden" name="item_name" value="HMT milan">
              <input type="hidden" name="price" value="80000.00">
              </form>
          </div>
        </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-6">
          <div class="thumbnail">
          <img src="12.jpg" alt="Faber Luba #111" class="img-responsive">
          <div class="caption" align="center">
            <h3 class="mat">Faber Luba #111</h3>
            <p>Price: Rs.18000.00</p>
            <form action="viewcart.php" method="POST">
            <button type="submit" name="add" class="btn btn-primary btn-block">Add to Cart</button>
              <input type="hidden" name="item_name" value="Faber Luba #111">
              <input type="hidden" name="price" value="18000.00">
              </form>
          </div>
        </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">                                                                  <!--row3 -->
        <div class="col-lg-3 col-sm-6 col-xs-6">
          <div class="thumbnail">
          <img src="8.jpg" alt="H&W" class="img-responsive">
          <div class="caption" align="center">
            <h3 class="mat">H&W</h3>
            <p>Price: Rs.800.00</p>
            <form action="viewcart.php" method="POST">
            <button type="submit" name="add" class="btn btn-primary btn-block">Add to Cart</button>
              <input type="hidden" name="item_name" value="H&W">
              <input type="hidden" name="price" value="800.00">
              </form>
          </div>
        </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-6">
          <div class="thumbnail">
          <img src="6.jpg" alt="Luis Phil" class="img-responsive">
          <div class="caption" align="center">
            <h3 class="mat">Luis Phil</h3>
            <p>Price: Rs.1000.00</p>
            <form action="viewcart.php" method="POST">
            <button type="submit" name="add" class="btn btn-primary btn-block">Add to Cart</button>
              <input type="hidden" name="item_name" value="Luis Phil">
              <input type="hidden" name="price" value="1000.00">
              </form>
          </div>
        </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-6">
          <div class="thumbnail">
          <img src="13.jpg" alt="John Zok" class="img-responsive">
          <div class="caption" align="center">
            <h3 class="mat">John Zok</h3>
            <p>Price: Rs.1500.00</p>
            <form action="viewcart.php" method="POST">
            <button type="submit" name="add" class="btn btn-primary btn-block">Add to Cart</button>
              <input type="hidden" name="item_name" value="John Zok">
              <input type="hidden" name="price" value="1500.00">
              </form>
          </div>
        </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-6">
          <div class="thumbnail">
          <img src="14.jpg" alt="Jhalsani" class="img-responsive">
          <div class="caption" align="center">
            <h3 class="mat">Jhalsani</h3>
            <p>Price: Rs.1300.00</p>
            <form action="viewcart.php" method="POST">
            <button type="submit" name="add" class="btn btn-primary btn-block">Add to Cart</button>
              <input type="hidden" name="item_name" value="Jhalsani">
              <input type="hidden" name="price" value="1300.00">
              </form>
          </div>
        </div>
        </div>
      </div>
    </div>

    <div class="container-fluid footer">
      <center>
      <p id="copy"><span class="entity">Copyright  </span> Lifestyle Store. All Rights Reserved| Contact Us: +91 90000 00000</p>
      </center>
    </div>
    </body>
</html>
