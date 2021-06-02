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
        echo "update success";
      }else{
        echo "incorrect password";
      }
    }
    else
    {
    echo "incorrect old password";
    }
  }
}
 ?>
