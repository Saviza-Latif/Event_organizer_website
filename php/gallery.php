
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radiant events/Gallery</title>
    <link rel="stylesheet" href="css\gallery.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>

  <div class="wrapper">
  <div class="back-home">
    <a href="home.php"><i class="fas fa-arrow-left fa-bounce" style="color: #b5734c;"></i></a>
   </div>
     <p>Gallery</p>
    <div class="filter">
      <div class="items">
        <span class="item active" data-name="all">All</span>
        <span class="item" data-name="birthday">Birthday</span>
        <span class="item" data-name="wedding">Wedding</span>
        <span class="item" data-name="graduation">Graduation</span>
        <span class="item" data-name="corporate">Corporate</span>
        <span class="item" data-name="anniversaries">Anniversaries</span>
        <span class="item" data-name="expo">Expo</span>
      </div>
    </div>
    <!-- filter Images -->
    <div class="gallery">
      <div class="image" data-name="birthday"><span><img src="image/b1.jpeg" alt=""></span></div>
      <div class="image" data-name="wedding"><span><img src="image/w1.jpg" alt=""></span></div>
      <div class="image" data-name="graduation"><span><img src="image/a1.jpg" alt=""></span></div>
      <div class="image" data-name="wedding"><span><img src="image/w4.jpg" alt=""></span></div>
      <div class="image" data-name="anniversaries"><span><img src="image/a1.jpg" alt=""></span></div>
      <div class="image" data-name="birthday"><span><img src="image/b2.jpg" alt=""></span></div>
      <div class="image" data-name="birthday"><span><img src="image/b3.jpeg" alt=""></span></div>
      <div class="image" data-name="wedding"><span><img src="image/w2.jpeg" alt=""></span></div>
      <div class="image" data-name="wedding"><span><img src="image/w3.jpg" alt=""></span></div>
      <div class="image" data-name="expo"><span><img src="image/e2.jpeg" alt=""></span></div>
      <div class="image" data-name="expo"><span><img src="image/e1.jpeg" alt=""></span></div>
    </div>
  </div>
  
 

  <script src="js\scripts.js"></script>
  <script src="js\script.js"></script>

</body>
</html>