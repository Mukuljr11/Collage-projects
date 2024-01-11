<?php
  include 'bootstrap.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Gym</title>
    <link rel="stylesheet" href="index.css">
    <link rel="icon" type="image/x-icon" href="icon.jpg">
</head>
<body>  
    <!-- slide Photos -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="im1.jpg" height="333px"  alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="im2.jpg" height="333px" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="im3.png" height="333px" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
        <div class="carousel-caption  d-block">
          <h1>Fitness Gym</h1>
          <p>Welcome to my website</p>
        </div>
      </div>
        <!-- Nav Bar -->
      <?php
        include 'nav.php';
      ?>
      <!-- Columns -->
      <div class="fi row">
        <div class="fi col-sm-4">
          <video controls autoplay loop height="330px"  style="pointer-events: none;">
            <source src="gym.mp4" type="video/ogg" >
          </video>
        </div>
        <div class="fi col-sm-4">
          <video controls autoplay loop height="330px"  style="pointer-events: none;">
            <source src="gym2.mp4" type="video/ogg" >
          </video>
        </div>
      
        <div class="fi col-sm-4">
          <img src="fit2.jpg" height="330px">
        </div>
        </div>
  
</body>

</html>
<?php
echo"<div class='fi row>'";

include 'footer.php';
echo"</div>";
?>