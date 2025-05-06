<?php
session_start();
include("connection.php");
include("functions.php");
if($_SERVER["REQUEST_METHOD"] == "POST")
{
  $user_name= $_POST["user_name"];
  $password= $_POST["password"];
  if(!empty($user_name) && !empty($password))
  {
    $query="select * from users where user_name='$user_name' limit 1";
    $result=mysqli_query($con,$query);
    if($result)
    {
      if($result && mysqli_num_rows($result)>0)
     {
        $user_data=mysqli_fetch_assoc($result); 
        if( $user_data["password"]===$password)
        {
          $_SESSION["id"]=$user_data["id"];
          header("Location:index.php");
          die;
        }
     }
    }
    print "Wrong username or password";
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
    <title>Login page</title>
</head>
<link rel="stylesheet" href="style.css">
<body>
    <div class="wrapper">

        <div class="login-box"> 
          <form method="post" action="">
            <h2>Login</h2>
      
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
      \
            <button type="submit">Login</button>
      
            <div class="register-link">
              <p>Don't have an account? <a href="signup.php">Register</a></p>
            </div>
          </form>
        </div>
      
      </div>
</body>
</html>
