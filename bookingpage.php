<?php
   session_start();
   include("connection.php");
   include("functions.php");
   if($_SERVER['REQUEST_METHOD'] == "POST")
   {
     $name= $_POST['name'];
     $phone= $_POST['phone'];
     $id=$_SESSION['id'];
     $place=$_POST['place'];
     if(!empty($name) && !empty($phone))
     {
       $query="update users set name='$name',phone='$phone',place='$place' where id='$id'";
       mysqli_query($con,$query);
       header("Location:booked.php");
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
    <title>Tour & Travel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- Iconscout Link  -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
</head>
    <body>
      
    <section class="contact" id="contact">
    
    <div class="wrapper1">
        <div class="title1">
          <h1>Booking Page</h1>
        </div>
        <div class="contact-form" >
            <form method = "post" action = "">
          <div class="input-fields" >
           
            <input type="text" class="input"  placeholder="Name" name="name">
            <input type="phone" class="input"  placeholder="Phone" name="phone"><br>
            <h3> 
            Choose destination:
            <input type="radio" name="place" value="manali">manali
            <input type="radio" name="place" value="delhi">delhi
            <input type="radio" name="place" value="darjeeling">Darjeeling
            <input type="radio" name="place" value="goa">goa
            <input type="radio" name="place" value="kerala">kerala
            <input type="radio" name="place" value="jaipur">jaipur</h3> 
          <div class="msg">
            <div class="btn1"><button type="submit">Book now</button></div>
          </div>
          </form>
        </div>
        </div> 
    
</section>
    </body>
</html>
