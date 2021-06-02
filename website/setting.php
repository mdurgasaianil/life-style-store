<?php session_start(); ?>
<?php
$con = mysqli_connect("localhost","root","","lifestyle") or die(mysqli_error($con));
if($_SERVER['REQUEST_METHOD'] == "POST")
{
  if(isset($_POST['pass_button']))
  {
    $old_email = ($_POST['old_email']);    //UPDATE users SET password='abcc' WHERE email = 'aaa@gamil.com'
    $old = md5($_POST['old']);
    $new = md5($_POST['new']);
    $confirm = md5($_POST['confirm']);
    $select = "SELECT password from users where email='$old_email';";
    $select_query = mysqli_query($con, $select)or die(mysqli_error($con));
    $row = mysqli_fetch_assoc($select_query);
      if($row['password'] == $old)
      {
        if($new == $confirm)
        {
          $update = "UPDATE users SET password='$new' WHERE password = '$old';";
          $update_query = mysqli_query($con, $update)or die(mysqli_error($con));
          $_SESSION['msg'] = "password changed";
        }else{
          $_SESSION['msg'] = "incorrct password combination please check";
        }
      }
      else
      {
        $_SESSION['msg'] = "incorrect old password please check";
      }
  }
}
 ?>
<html>
  <head>
    <title> Lifestyle settings </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link type="text/css" rel="stylesheet" href="setting.css">
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
    <div class="container container_index">
      <div class="col-xs-6 col-xs-offset-3">
        <div class="panel panel-primary">
          <div class="panel-body">
            <h3 id="req">Change Password</h3>
                <div class="form-groups for">
                  <form action="setting.php" method="POST">
                  <input type="email" name="old_email" placeholder="enter your first_name or email" class="form-control" required><br>
                  <input type="password" name="old" placeholder="Old Password" class="form-control" required><br>
                  <input type="password" name="new" placeholder="New Password" class="form-control" required><br>
                  <input type="password" name="confirm" placeholder="confirm New Password" class="form-control" required><br>
                  <p> <?php if(isset($_SESSION['msg'])){
                    echo $_SESSION['msg'];
                  } ?> </p>
                </div>
            <div class="panel-footer">
              <button type="submit" name="pass_button" class="btn btn-primary">Change Password </button>
            </div>
              </form>
            </div>

        </div>
      </div><br><br><br><br><br>
          <footer>
            <div class="container-fluid footer">
              <center>
              <p id="copy"><span class="entity">Copyright  </span> Lifestyle Store. All Rights Reserved| Contact Us: +91 90000 00000</p>
              </center>
            </div>
          </footer>
    </body>
    </html>
