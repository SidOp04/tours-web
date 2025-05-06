<?php
session_start();
include("connection.php");
include("functions.php");
if($_SERVER['REQUEST_METHOD'] == "POST")
{
  $user_name= $_POST['user_name'];
  $password= $_POST['password'];
  if(!empty($user_name) && !empty($password))
  {
    $query="insert into users (user_name,password) values('$user_name','$password')";
    mysqli_query($con,$query);
    header("Location:login.php");
    die;
  }
  else
  {
    echo"enter valid information";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
</head>
<link rel="stylesheet" href="style.css">
<body>
    <div class="wrapper">

        <div class="login-box">
          <form method="post" action="">
            <h2>Signup</h2>
            <div class="input-box">
              <span class="icon">
                <ion-icon name="mail"></ion-icon>
              </span>
              <input type="email" name="user_name" required>
              <label>Email</label>
            </div>
      
            <div class="input-box">
              <span class="icon">
                <ion-icon name="lock-closed"></ion-icon>
              </span>
              <input type="password" name="password" required>
              <label>Password</label>
            </div>
    
            
            <button type="submit">Signup</button>
      
            <div class="register-link">
              <p>Already have an account? <a href="login.php">Login</a></p>
            </div>
          </form>
        </div>
      
      </div>
</body>
</html>
