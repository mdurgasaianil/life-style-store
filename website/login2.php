<html>
  <head>
    <title>login to Lifestyle store</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link type="text/css" rel="stylesheet" href="login.css">
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
    <div class="container container_index">
      <div class="col-sm-6 col-sm-offset-3">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <div class="glyph" align="center">
            <span class="glyphicon glyphicon-log-in circle"></span>
          </div>
          <h1>login</h1>
        </div>
        <div class="panel-body">
<p id="msg">* login to make a purchase</p>
<form action="form.php" method="POST">
  <div class="form-groups for">
      <label for="email">Email:</label>
    <input type="email" name="email" placeholder="ex:email@gmail.com" id="email" class="form-control" required="True" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
  </div>
  <div class="form-groups for">
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" placeholder="password" class="form-control" required="True" pattern=".{6,}">
    <h6 style = "color:red; font-style: italic;">
    *incorrect email and password combination</h6>
  </div>
  <div class="but">
  <button type="submit" class="btn btn-primary btn-block" name="button">Submit</button>
  </div>
</form>
  <div class="container for">
    <a href=""class="anch">Forgot password?</a>
  </div>
        </div>
        <div class="panel-footer">
          <div class="container">
            <p>Don't have an account? <a href="signup.php" class="anch">Register</a> </p>
          </div>
        </div>
      </div>
      </div>
    </div>
    <footer>
    <div class="container-fluid footer">
      <center>
      <p><span class="entity">Copyright  </span> Lifestyle Store. All Rights Reserved| Contact Us: +91 90000 00000</p>
      </center>
    </div>
    </footer>
  </body>
</html>
