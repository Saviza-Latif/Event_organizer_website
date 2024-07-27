<?php

include 'config.php';

session_start();

$user_id = $_SESSION['admin_id'];

if(!isset($user_id)){
   header('location:login.php');
}
if(isset($_POST['order_btn'])){

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $number = $_POST['number'];
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $type = mysqli_real_escape_string($conn, $_POST['type']);
    $address = mysqli_real_escape_string($conn,$_POST['houseno'].', '. $_POST['block'].', '. $_POST['city'].', '. $_POST['country'].' - '. $_POST['pin_code']);
    $placed_on = date('d-M-Y');
    $package_type = mysqli_real_escape_string($conn,$_POST['package_type']);
    $descriptiontext=mysqli_real_escape_string($conn,$_POST['descriptiontext']);
    $price=$_POST['price'];
    $event_date=mysqli_real_escape_string($conn,$_POST['event_date']);

 
 
   
 
          mysqli_query($conn, "INSERT INTO `orders`( name, number, email, type,package_type, address,descriptiontext, price,event_date, placed_on) VALUES('$name', '$number', '$email', '$type','$package_type', '$address','$descriptiontext', '$price','$event_date', '$placed_on')") or die('query failed');
          $message[] = 'order placed successfully!';
          header('location:admin-orders.php');
         
          
       }
       ?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>adminpanel/placeorders</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/adminpanel.css">

</head>
<body>
   
<div class="order-container">
    <div class="header-admin">
        <?php include 'admin-home.php'; ?> 
    </div>
     
    <div class="order">
        <div class="navbar">
            <div class="navbarname">Orders</div>
           
        </div>
        <section class="checkout">

   <form action="" method="post">
      <h3> order</h3>
      <div class="flex">
         <div class="inputBox">
            <!-- <span>name :</span> -->
            <input type="text" name="name" required placeholder="enter name">
         </div>
         <div class="inputBox">
            <!-- <span>number :</span> -->
            <input type="number" name="number" size="11" required placeholder="enter number">
         </div>
         <div class="inputBox">
            <!-- <span>email :</span> -->
            <input type="email" name="email" required placeholder="enter email">
         </div>
         <div class="inputBox">
            <!-- <span>type of event :</span> -->
            <input type="text" name="type" required placeholder="enter type of event">
         </div>
         
         <div class="inputBox">
            <!-- <span>address line 01 :</span> -->
            <input type="number" min="0" name="houseno" required placeholder="enter House no.">
         </div>
         <div class="inputBox">
            <!-- <span>address line 01 :</span> -->
            <input type="text" name="block" required placeholder="enter block name">
         </div>
         <div class="inputBox">
            <!-- <span>city :</span> -->
            <input type="text" name="city" required placeholder=" enter city">
         </div>
         
         <div class="inputBox">
            <!-- <span>country :</span> -->
            <input type="text" name="country" required placeholder="enter country">
         </div>
         <div class="inputBox">
            <!-- <span>pin code :</span> -->
            <input type="number" min="0" name="pin_code" required placeholder="enter pincode">
         </div>
         <div class="inputBox">
            <!-- <span>price :</span> -->
            <input type="number" min="0" name="price" required placeholder="enter price">
         </div>
         <div class="inputBox">
            <!-- <span>event date :</span> -->
            <input type="text" name="event_date" required placeholder="enter date of event">
         </div>
         <div class="inputBox">
           
            <select name="package_type">
            <option value="basic">packagetype</option>
               <option value="basic">basic</option>
               <option value="standard">standard</option>
               <option value="prenium">prenium</option>
               
            </select>
         </div>
      </div>
      <textarea name="descriptiontext" class="box-message" placeholder="Details of event" id="" cols="30" rows="10"></textarea>
      <input type="submit" value="order now" class="btn brown-btn" name="order_btn">
      
   </form>

</section>
    </div>
</div>
    </body>
    </html>
