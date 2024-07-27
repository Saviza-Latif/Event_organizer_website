<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

if(isset($_POST['send'])){
    $email =$_SESSION['user_email'];

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    
    $number = $_POST['number'];
    $msg = mysqli_real_escape_string($conn, $_POST['message']);
 
    $subject=mysqli_real_escape_string($conn, $_POST['subject']);
    $select_message = mysqli_query($conn, "SELECT * FROM `message` WHERE name = '$name' AND message = '$msg'") or die('query failed');
 
    if(mysqli_num_rows($select_message) > 0){
       $message[] = 'message sent already!';
    }else{
       mysqli_query($conn, "INSERT INTO `message`(user_id, name, email, number, subject, message) VALUES('$user_id', '$name', '$email', '$number','$subject', '$msg')") or die('query failed');
       $message[] = 'message sent successfully!';
    }
 
 }
 
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Radiant Events/contact</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/home.css">
  

</head>
<body>
   
<?php
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

<div class="container-contact">
   
    <?php 
    $navbar_text = 'Home';
    $go_where='home.php';
    include 'header.php'; ?> 
    <div class="contact">
        <div class="content">
            <h3>Contact us</h3>
        </div>
    </div>
</div>
<div class="container2-contact">
    <div class="contact1">
        <div class="contact-box">
            <div class="icon-contact">
                <i class="fa-solid fa-phone"></i>
            </div>
            <h2>PHONE</h2>
            <p>03XX-XXXXXXX</P>
           
        </div>
        <div class="contact-box">
            <div class="icon-contact">
                <i class="fa-brands fa-facebook"></i>
            </div>
            <h2>FACEBOOK</h2>
            <p>link</P>
        </div>
         <div class="contact-box">
         
            <div class="icon-contact">
                <i class="fa-brands fa-instagram"></i>
               
            </div>
            <h2>instagram</h2>
            <p>link</P>
        </div>
        <div class="contact-box">
        
            <div class="icon-contact">
                <i class="fa-solid fa-envelope"></i>
            </div>
            <h2>email</h2>
            <p>link</P>
        </div>
        <div class="contact-box">
            <div class="icon-contact">
                 <i class="fa-brands fa-whatsapp"></i>
               
            </div>
            <h2>whatsapp</h2>
            <p>0xxx-xxxxxx</P>
        </div>
        <div class="contact-box">
            <div class="icon-contact">
                <i class="fa-solid fa-location-dot"></i>
               
            </div>
            <h2>address</h2>
            <p>xxstreet x town city country</P>
        </div>
    </div>
     <div class="contact2">
        <div class="text-contact">
         <p> Get in touch</p>
        </div>
        <section class="contact">

        <form action="" method="post">
      <h3>say something!</h3>
      <input type="text" name="name" required placeholder="enter your name" class="box">
      <!-- <input type="email" name="email" required placeholder="enter your email" class="box"> -->
      <input type="number" name="number" required placeholder="enter your number" class="box">
      <input type="text" name="subject" required placeholder="subject" class="box">
      <textarea name="message" class="box" placeholder="enter your message" id="" cols="30" rows="10"></textarea>
      <input type="submit" value="send" name="send" class="brown-btn">
        </form>

</section>
        
    </div>
</div>



<?php include 'footer.php'; ?> 

<script src="js/script.js"></script>
</body>
</html>
