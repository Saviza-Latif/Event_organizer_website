<?php

include 'config.php';

session_start();

$user_id = $_SESSION['admin_id'];

if(!isset($user_id)){
   header('location:login.php');
}


 
 
   
 
         
       if(isset($_POST['update_order'])){

         $order_update_id = $_POST['order_id'];
         $update_payment = $_POST['update_payment'];
         mysqli_query($conn, "UPDATE `orders` SET payment_status = '$update_payment' WHERE id = '$order_update_id'") or die('query failed');
         $message[] = 'payment status has been updated!';
      
      }
      
      if(isset($_GET['delete'])){
         $delete_id = $_GET['delete'];
         mysqli_query($conn, "DELETE FROM `orders` WHERE id = '$delete_id'") or die('query failed');
         header('location:admin-orders.php');
      }
   
 
 

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>adminpanel/orders</title>

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
            <a href="admin-placeorder.php" class="neworder">New Order</a>
        </div>

        <section class="placed-orders">



<div class="box-container">
   <?php
   $select_orders = mysqli_query($conn, "SELECT * FROM `orders`") or die('query failed');
   if(mysqli_num_rows($select_orders) > 0){
      while($fetch_orders = mysqli_fetch_assoc($select_orders)){
   ?>
   <div class="box">
   
      <p> placed on : <span><?php echo $fetch_orders['placed_on']; ?></span> </p>
      <p> name : <span><?php echo $fetch_orders['name']; ?></span> </p>
      <p> number : <span><?php echo $fetch_orders['number']; ?></span> </p>
      <p> email : <span><?php echo $fetch_orders['email']; ?></span> </p>
      <p> address : <span><?php echo $fetch_orders['address']; ?></span> </p>
      <p> type : <span><?php echo $fetch_orders['type']; ?></span> </p>
      <p> package-type : <span><?php echo $fetch_orders['package_type']; ?></span> </p>
      
      <p> price : <span>$<?php echo $fetch_orders['price']; ?>/-</span> </p>
      <p> event date : <span><?php echo $fetch_orders['event_date']; ?></span> </p>
      <p> Details : <span><?php echo $fetch_orders['descriptiontext']; ?></span> </p>
      <form action="" method="post">
         <input type="hidden" name="order_id" value="<?php echo $fetch_orders['id']; ?>">
         <select name="update_payment">
            <option value="" selected disabled><?php echo $fetch_orders['payment_status']; ?></option>
            <option value="pending">pending</option>
            <option value="completed">completed</option>
         </select>
         <input type="submit" value="update" name="update_order" class="brown-btn">
         <a href="admin-orders.php?delete=<?php echo $fetch_orders['id']; ?>" onclick="return confirm('delete this order?');" class="delete-btn brown-btn">delete</a>
      </form>
   </div>
   <?php
      }
   }else{
      echo '<p class="empty">no orders placed yet!</p>';
   }
   ?>
</div>

</section>





    </div>
    </div>






<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>