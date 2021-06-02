<html>
  <head>
    <title>Lifestyle store</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="front.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    <nav class="navbar navbar-default navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#button">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <a href="front.php" class="navbar-brand"> Lifestyle store </a>
        </div>
        <div class="collapse navbar-collapse" id="button">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> sign up</a></li>
          <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> login</a></li>
        </ul>
      </div>
      </div>
    </nav>
    <div class="background">
    <div class="container">
      <div class="col-xs-9 col-lg-offset-3">
<div class="panel panel-default">
  <div class="panel-body">
    <center>
        <h1>we sell Lifestyle</h1>
        <p>Flat 40% OFF on premium brands</p>
        </center>
    </div>
    <div class="panel-footer" align="center">
    <?php
     session_start();
     if(isset($_SESSION['email']) && isset($_SESSION['password'])){
     ?>
  <a href="product.php"><button type="submit" name="shop" class="btn btn-danger btn-lg active">Shop now</button></a>
<?php }else{ ?>
    <a href="login.php"><button type="submit" name="shop" class="btn btn-danger btn-lg active">Shop now</button></a>
  <?php } ?>
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
