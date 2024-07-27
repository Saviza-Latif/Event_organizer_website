<?php

include 'config.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:login.php');
};

if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM `review` WHERE id = '$delete_id'") or die('query failed');
   header('location:admin-reviews.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>adminpanel/reviews</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/adminpanel.css">
   

</head>
<body>
   


<div class="review-container">
    <div class="header-admin">
        <?php include 'admin-home.php'; ?> 
    </div>
     
    <div class="review">
        <div class="navbar">
            <div class="navbarname">Reviews</div>
        </div>
        <section class="review1">

            <div class="box-container">
                <?php
                     $select_message = mysqli_query($conn, "SELECT * FROM `review`") or die('query failed');
                     if(mysqli_num_rows($select_message) > 0){
                     while($fetch_message = mysqli_fetch_assoc($select_message)){
      
                    ?>
                <div class="box">
                
                    <h1> <span><?php echo $fetch_message['name']; ?></span> </h1>
                    
                    <h1>  <span><?php echo $fetch_message['email']; ?></span> </h1>
                    <p class="text-review"> <?php echo $fetch_message['message']; ?> </p>
                    <a href="admin-reviews.php?delete=<?php echo $fetch_message['id']; ?>" onclick="return confirm('delete this message?');" class="delete-btn brown-btn">delete message</a>
                </div>
                 <?php
                 };
                }else{
                 echo '<p class="empty">you have no reviews!</p>';
                }
                ?>
            </div>


        
    
         </section>
    </div>

</div>
<script src="js/admin_script.js"></script>
</body>
</html>