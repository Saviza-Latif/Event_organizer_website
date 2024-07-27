<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Radiant Events/Aboutus</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/home.css">
   

</head>
<body>
   


<div class="container_about">
   
   <?php 
   $navbar_text = 'Home';
   $go_where='home.php';
   include 'header.php'; ?> 
   <div class="aboutus">
      <div class="about-content">
         <h2>ABOUT US</h2>
      </div>

   </div>
</div>
<div class="container2-about">

  <div class="box1"></div>
  <div class="box2">
 <p>We are a dedicated team of event planning professionals who are passionate about memorable experiences tailored to your needs.</p>
  <p><br>We aim to set new standards in event planning industry by continually innovating and staying ahead of trends.</p>
  </div>

</div>
<div class="people1">

<div class="mainheading">
    <h1>OUR TEAM</h1>
</div>
<div class="people">

    <div class="peoplecontainers img1">
        <div class="peopleimg">
      <img src="image\t1.jpeg">
    </div>
      <div class="text-block">
        <h2>Emily Brooks</h2>
       
        <p class="description-block">

         FOUNDER
          </p>
          <div class="peopleicons">
            <a href="https://www.facebook.com" target=”_blank”> <i class="fa-brands fa-facebook"></i></a>
            <a href="https://www.instagram.com/z.j.associates?igsh=MTZqMGk5dmlraWFpeA==" target=”_blank” > <i class="fa-brands fa-instagram"></i></a>
            <a href="https://www.youtube.com/watch" target=”_blank” > <i class="fa-brands fa-youtube"></i></a>
            <a href="https://linkedin.com" target=”_blank” > <i class="fa-brands fa-linkedin"></i></a>
            
            </div>
      </div>
    </div>
    <div class="peoplecontainers">
        <div class="peopleimg">
            <img src="image/t2.jpeg">
          </div>
        <div class="text-block">
          <h2 >Kevin Brown</h2>
         
          <p class="description-block">

          Creative Director
          </p>
          <div class="peopleicons">
            <a href="https://www.facebook.com" target=”_blank”> <i class="fa-brands fa-facebook"></i></a>
            <a href="https://www.instagram.com/z.j.associates?igsh=MTZqMGk5dmlraWFpeA==" target=”_blank” > <i class="fa-brands fa-instagram"></i></a>
            <a href="https://www.youtube.com/watch" target=”_blank” > <i class="fa-brands fa-youtube"></i></a>
            <a href="https://linkedin.com" target=”_blank” > <i class="fa-brands fa-linkedin"></i></a>
            
            </div>
        </div>
      </div>
      <div class="peoplecontainers  img2">
        <div class="peopleimg">
            <img src="image/t3.jpeg">
          </div>
        <div class="text-block">
          <h2 >Megan Carter</h2>
          
          <p class="description-block">

         Event Director
          </p>
          <div class="peopleicons">
            <a href="https://www.facebook.com" target=”_blank”> <i class="fa-brands fa-facebook"></i></a>
            <a href="https://www.instagram.com/" target=”_blank” > <i class="fa-brands fa-instagram"></i></a>
            <a href="https://www.youtube.com/watch" target=”_blank” > <i class="fa-brands fa-youtube"></i></a>
            <a href="https://linkedin.com" target=”_blank” > <i class="fa-brands fa-linkedin"></i></a>
            
            </div>
        </div>
       
      </div>
         
</div>
</div>
<?php include 'footer.php'; ?> 


<script src="js/script.js"></script>
</body>
</html>