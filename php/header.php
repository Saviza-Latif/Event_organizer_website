<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radiant Events</title>
     <!-- custom stylesheet -->
    <link rel="stylesheet" href="css/heading.css" >
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>
<body>
<!-- starting of navbar -->
      <nav class="navbar"> 
    
        
        <div class=" fas fa-bars lefticonbar" id="LeftIcon" ></div>
           <div class="MainName">
                <a href="home.php">
                    <p class="mainName1">Radiant Events</p>
                  
                </a>
            </div>
           
            <div class="icons">
           
            <div id="user-btn" class="fas fa-user"></div>
        
           <!-- userbox  -->
         <div class="user-box">
            <p>username : <span><?php echo $_SESSION['user_name']; ?></span></p>
            <p>email : <span><?php echo $_SESSION['user_email']; ?></span></p>
            <a href="logout.php" class="delete-btn brown-btn">logout</a>
         </div>
             
               
           
            <!-- left icon bar dropdown -->
            
            <div class="sub-menu-wrap-Left hide-menu" id="subMenuLeft">
                <div class="sub-menu-Left " >
                    <div class="Left-menu">
                        <a href="<?= $go_where ?>" class="sub-menu-link-Left">
                            <p><?= $navbar_text ?></p>
                        </a>
                        
                        <a href="aboutus.php" class="sub-menu-link-Left">
                            <p>About</p>
                        </a>
                        
                       
                        
                            
                        <a href="Contact.php" class="sub-menu-link-Left">
                            <p>Contact</p>
                        </a>
                        <a href="gallery.php" class="sub-menu-link-Left">
                            <p>Gallery</p>
                          
                        </a>
                    </div>
                </div>
            </div>
      </nav>
      <!-- ending of navbar -->
     
      
    
     

 
    <script src="javascript\script.js"></script>
</body>
</html>