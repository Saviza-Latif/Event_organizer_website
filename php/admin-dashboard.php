<?php

include 'config.php';

session_start();

 $user_id = $_SESSION['admin_id'];

if(!isset($user_id)){
      header('location:login.php');
    } ?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/adminpanel.css">
   

</head>
<body>
   


<div class="dashboard-container">
    <div class="header-admin">
        <?php 
            // $pageTitle = "Dashboard";
            include 'admin-home.php'; ?> 
        </div>
     
    <div class="dashboard1">
        <div class="navbar">
            <div class="navbarname1">Dashboard</div>
        </div>
        <section class="dashboard">

   

   <div class="box-container">

      <div class="box">
         <?php
           
            $select_orders = mysqli_query($conn, "SELECT * FROM `orders` WHERE payment_status = 'pending'") or die('query failed');
           
            $number_of_orders = mysqli_num_rows($select_orders);
            ?>
            <h3><?php echo $number_of_orders; ?></h3>
            <p>upcoming events</p>
        
      </div>


      <div class="box">
         <?php 
            $select_orders = mysqli_query($conn, "SELECT * FROM `orders` WHERE payment_status = 'completed'") or die('query failed');
            $number_of_orders = mysqli_num_rows($select_orders);
         ?>
         <h3><?php echo $number_of_orders; ?></h3>
         <p>completed events</p>
      </div>

      

      <div class="box">
         <?php 
            $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE user_type = 'user'") or die('query failed');
            $number_of_users = mysqli_num_rows($select_users);
         ?>
         <h3><?php echo $number_of_users; ?></h3>
         <p> users</p>
      </div>

     

     

      <div class="box">
         <?php 
            $select_messages = mysqli_query($conn, "SELECT * FROM `message`") or die('query failed');
            $number_of_messages = mysqli_num_rows($select_messages);
         ?>
         <h3><?php echo $number_of_messages; ?></h3>
         <p>messages</p>
      </div>
      <div class="box">
         <?php 
            $select_messages = mysqli_query($conn, "SELECT * FROM `review`") or die('query failed');
            $number_of_messages = mysqli_num_rows($select_messages);
         ?>
         <h3><?php echo $number_of_messages; ?></h3>
         <p>reviews</p>
      </div>

   </div>

</section>
    </div>

</div>

</body>
</html>