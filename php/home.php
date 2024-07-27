<?php

include 'config.php';

session_start();

 $user_id = $_SESSION['user_id'];

if(!isset($user_id)){
      header('location:login.php');
    } ?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Radiant Events/home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/home.css">
  

</head>
<body>
   


<div class="container">

<?php
// include header as we are using same header with different values so send the data
$go_where='#servicespage';
$navbar_text = 'Services';
 include 'header.php'; ?> 
<div class="home">
    <!-- first look -->
   <div class="content">
      <h3>Creating unforgettable moments with brillance and elegance</h3>
      <div class="contentlinks">
        <!-- links -->
      <a href="aboutus.php" class="black-btn">Discover more</a>
      <a href="contact.php" class="brown-btn">Contact us</a>
      </div>
   </div>

   </div>
</div>
<!-- about section having pic and some data -->
 <section class="about">

   <div class="flex">

      <div class="image">
         <img src="image/w4.jpg" alt="">
      </div>

      <div class="content">
         <h3>About us</h3>
         <p>We are a dedicated team of event planning professionals who are passionate about memorable experiences tailored to your needs.</p>
         <a href="aboutus.php" class="brown-btn">Read More</a>
      </div>

   </div>

</section> 
<!-- services section having data about services -->
<div class="servicescontainer"  id="servicespage">
   <h1>OUR SERVICES</h1> 
   <div class="servicesrow">
         <div class="servicescontent">
           <i class="fa-solid fa-cake-candles"></i>
            <h2>Birthday party</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. </p>


         </div>
         <div class="servicescontent">
            <i class="fa-solid fa-ring"></i>
            <h2>Wedding</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. </p>
         </div>
         <div class="servicescontent">
            <i class="fa-solid fa-building"></i>
            <h2>Corporate events</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. </p>
         </div>
         <div class="servicescontent">
            <i class="fa-solid fa-graduation-cap"></i>
            <h2>Graduation party</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. </p>
         </div>
         <div class="servicescontent">
            <i class="fa-solid fa-cake-candles"></i>
            <h2>Anniversaries</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. </p>
         </div>
         <div class="servicescontent">
         <i class="fa-solid fa-users"></i>
            <h2>Expo</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. </p>
         </div>
   </div>

</div>
<!-- some statistics about website -->
<div class="statisticscontainer">
   <div class="statisticscontent">
           
      <h2>5+</h2>
      <p>years</p>
   </div>
   <div class="statisticscontent">
           
      <h2>250+</h2>
      <p>projects</p>
   </div>
   <div class="statisticscontent">
           
      <h2>2000+</h2>
      <p>employees</p>
   </div>

</div>
<!-- packages section having data about packages -->
<div class="container-price">
   <div class="container-packages">
    <div class="table basic">
      <div class="price-section">
        <div class="price-area">
          <div class="inner-area">
            <span class="text">$</span>
            <span class="price">150</span>
          </div>
        </div>
      </div>
      <div class="package-name"></div>
      <ul class="features">
        <li>
          <span class="list-name">Simple decoration</span>
          <span class="icon check"><i class="fas fa-check"></i></span>
        </li>
        <li>
          <span class="list-name">Catering</span>
          <span class="icon check"><i class="fas fa-check"></i></span>
        </li>
        <li>
          <span class="list-name">photographers</span>
          <span class="icon cross"><i class="fas fa-times"></i></span>
        </li>
        <li>
          <span class="list-name">entertainment</span>
          <span class="icon cross"><i class="fas fa-times"></i></span>
        </li>
      </ul>
     
    </div>
    <div class="table standard">
      <div class="ribbon"><span>Recommend</span></div>
      <div class="price-section">
        <div class="price-area">
          <div class="inner-area">
            <span class="text">$</span>
            <span class="price">300</span>
          </div>
        </div>
      </div>
      <div class="package-name"></div>
      <ul class="features">
        <li>
          <span class="list-name">More elaborate decor</span>
          <span class="icon check"><i class="fas fa-check"></i></span>
        </li>
        <li>
          <span class="list-name">Catering</span>
          <span class="icon check"><i class="fas fa-check"></i></span>
        </li>
        <li>
          <span class="list-name">photographer</span>
          <span class="icon check"><i class="fas fa-check"></i></span>
        </li>
        <li>
          <span class="list-name">entertainment</span>
          <span class="icon cross"><i class="fas fa-times"></i></span>
        </li>
      </ul>
      
    </div>
    <div class="table premium">
      <div class="price-section">
        <div class="price-area">
          <div class="inner-area">
            <span class="text">$</span>
            <span class="price">500</span>
          </div>
        </div>
      </div>
      <div class="package-name"></div>
      <ul class="features">
        <li>
          <span class="list-name">Luxury decor</span>
          <span class="icon check"><i class="fas fa-check"></i></span>
        </li>
        <li>
          <span class="list-name">Catering(customizable menus)</span>
          <span class="icon check"><i class="fas fa-check"></i></span>
        </li>
        <li>
          <span class="list-name">Photographer</span>
          <span class="icon check"><i class="fas fa-check"></i></span>
        </li>
        <li>
          <span class="list-name">High-quality entertainment</span>
          <span class="icon check"><i class="fas fa-check"></i></span>
        </li>
      </ul>
      
    </div>
  </div>
</div>


<div class="review">
   <h1> review </h1>
<?php


// Retrieve review from table
$result = mysqli_query($conn, "SELECT * FROM `review`") or die('query failed');

// Check if there are review
if (mysqli_num_rows($result) > 0) {
  // Create an array to store the review
  $card = array();
 

  
  while ($row = mysqli_fetch_assoc($result)) {
    $card[] = $row;
    
  
  }; ?>
 <!-- slider to show review it will also show reviews recently added by user -->
  <div class="slider">
    <div class="slider-inner">
      <?php foreach ($card as $card) {?>
              <div class="card">
                <h2> <?php echo $card['name']; ?> </h2>
                <p> email : <span><?php echo $card['email']; ?></span> </p>
                <p> message : <span><?php echo $card['message']; ?></span> </p>
              </div>
      <?php }?>
    </div>
    <button class="prev"><i class="fa-solid fa-angle-left"></i></button>
    <button class="next"><i class="fa-solid fa-angle-right"></i></button>
  </div>
  

  <script>
    // JavaScript code to handle the slider functionality
    var slider = document.querySelector('.slider');
    var sliderInner = document.querySelector('.slider-inner');
    var card = sliderInner.children;
    var currentIndex = 0;

    function showcard(index) {
      for (var i = 0; i < card.length; i++) {
        card[i].style.display = 'none';
      }
      card[index].style.display = 'block';
    }

    showcard(currentIndex);

    document.querySelector('.next').addEventListener('click', function() {
      currentIndex++;
      if (currentIndex >= card.length) {
        currentIndex = 0;
      }
      showcard(currentIndex);
    });

    document.querySelector('.prev').addEventListener('click', function() {
      currentIndex--;
      if (currentIndex < 0) {
        currentIndex = card.length - 1;
      }
      showcard(currentIndex);
    });
  </script>

  <?php
} else {
  echo '<p class="empty">no review added yet!</p>';
}
?>
 <div class="reviewbtn">
      <a href="review.php" class=" brown-btn">Give review</a>
   </div>
</div>
<?php include 'footer.php'; ?> 


<script src="js/script.js"></script>
</body>
</html>