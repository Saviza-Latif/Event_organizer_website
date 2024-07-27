<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

//  send button clicked
if(isset($_POST['send'])){
   // take the email of user in session
   $email =$_SESSION['user_email'];
   // data enter by user
    $name = mysqli_real_escape_string($conn, $_POST['name']);
  
    $msg = mysqli_real_escape_string($conn, $_POST['message']);
    // select all reviews from table
    $select_message = mysqli_query($conn, "SELECT * FROM `review` WHERE name = '$name' AND message = '$msg'") or die('query failed');
  // if same review by same person already exists
    if(mysqli_num_rows($select_message) > 0){
       $message[] = 'Review sent already!';
    }else{
      // insert into table
       mysqli_query($conn, "INSERT INTO `review`(user_id, name, email, message) VALUES('$user_id', '$name', '$email', '$msg')") or die('query failed');
       $message[] = 'Review sent successfully!';
    }
 
 }
 
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radiant Events/reviews</title>
    <link rel="stylesheet" href="css\home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>
<body>
        
<?php
// trigger message
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>
<!-- adding header file -->
 <?php include 'header.php'; ?>

<div class="heading">
   <h3>Review</h3>
</div>

<section class="contact">
   <!-- review form -->
   <form action="" method="post">
      <h3>say something!</h3>
      <input type="text" name="name" required placeholder="enter your name" class="box">
     
      <textarea name="message" class="box" placeholder="enter your message" id="" cols="30" rows="10"></textarea>
      <input type="submit" value="send" name="send" class="brown-btn">
   </form>

</section>





<?php include 'footer.php'; ?>
<script src="js\script.js"></script>
</body>
</html>