<?php

include 'config.php';
// when submit button clicked

if(isset($_POST['submit'])){
   // all parameters of user table set as taken from user
   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $password = mysqli_real_escape_string($conn, md5($_POST['password']));
   $confirmpassword = mysqli_real_escape_string($conn, md5($_POST['cpassword']));
   $user_type = 'user';
   // select all data from user table
   $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' ") or die('query failed');
   // checking if already exists
   if(mysqli_num_rows($select_users) > 0){
      $message[] = 'Already exist!';
   }else{
      // if password and confirm password same
      if($password != $confirmpassword){
         $message[] = 'Passwords  donot matched!';
      }else{
         // after checking insert into the user table
         mysqli_query($conn, "INSERT INTO `users`(name, email, password, user_type) VALUES('$name', '$email', '$confirmpassword', '$user_type')") or die('query failed');
         $message[] = 'Signup done!';
         // after signup goes to homepage
         header('location:home.php');
      }
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Radiant Events/signup</title>

   

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/login.css">

</head>
<body>


<!-- trigger message -->
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
<!-- sign up form -->
<div class="form-container">

   <form action="" method="post">
      <h3>SIGNUP</h3>
      <input type="text" name="name" placeholder="enter your name" required class="box">
      <input type="email" name="email" placeholder="enter your email" required class="box">
      <input type="password" name="password" placeholder="enter your password" required class="box">
      <input type="password" name="cpassword" placeholder="confirm your password" required class="box">
       <!-- submit button -->
      <input type="submit" name="submit" value="SIGNUP" class="btn">
      <!-- if already have account (use login) -->
      <p>Already have an account? <a href="login.php">LOGIN</a></p>
   </form>

</div>

</body>
</html>