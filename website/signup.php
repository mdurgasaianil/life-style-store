<html>
  <head>
    <title>sign up to Lifestyle store</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link type="text/css" rel="stylesheet" href="signup.css">
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
      <div class="panel panel-default">
        <div class="panel-heading">
          <div class="glyph" align="center">
            <span class="glyphicon glyphicon-user circle"></span>
          </div>
          <h1>sign up</h1>
        </div>
        <div class="panel-body">
            <form action="new_user.php" method="POST">
          <div class="row">
            <div class="col-xs-6">
              <div class="form-groups for">
                <input type="text" name="first_name" placeholder="first name" class="form-control" required>
              </div>
            </div>
            <div class="col-xs-6 col-xs-offset-0.5">
              <div class="form-groups for">
                <input type="text" name="last_name" placeholder="last name" class="form-control" required>
              </div>
            </div>
          </div>

  <div class="form-groups for">
    <input type="email" name="new_email" placeholder="email" class="form-control" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
  </div>
  <div class="form-groups for">
    <input type="password" name="new_password" placeholder="password" class="form-control" required pattern=".{6,}">
  </div>
  <div class="form-groups for">
    <input type="tel" name="contact" placeholder="phone number" class="form-control" required pattern="[789][0-9]{9}" required>
  </div>
  <div class="form-groups for">
    <input type="text" name="city" placeholder="city" class="form-control" required>
  </div>
  <div class="form-groups for">
    <input type="text" name="address" placeholder="address" class="form-control" required>
  </div>
  <div class="but">
  <button type="submit" class="btn btn-primary btn-block" name="button">Submit</button>
  </div>
    </form>
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
