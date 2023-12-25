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
   <title>about</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="styly.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">Home</a> / About </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>Why choose us?</h3>
         <p>We're Bookify, your online book friends! We love stories and picked cool books for you. It's easy to find and read them here. Join us and make book-loving pals. Welcome to Bookify</p>
         <a href="contact.php" class="btn">Contact us</a>
      </div>   
   </div>

   <br>
</br>
<br>
</br>
<br>
</br>
<br>
</br>
<br>
</br>

</section>

<section class="reviews">

   <h1 class="title">Project Partners</h1>
   <br></br>

   <div class="box-container">

      <div class="box">
         <h3>Danish</h3>
         <br></br>
         <img src="images/dana.jpg" alt="dani">
         <br></br>
         <br></br>
         <p><b>Hey, it's Danish! I'm the one who made this website look so cool, especially the front part you see. Yep, I specialize in making websites, and I recently jazzed up the frontend for a fantastic online book store. If you're into books and good design, you're in the right place!</b></p>    
      </div>

      <div class="box">  
         <h3><b>Asjad</b></h3>
         <br></br>
         <img src="images/ajuuu.jpg" alt="">
         <br></br>
         <br></br>
         <p><b>Hey, I'm Asjad! The tech guy who made all the behind-the-scenes magic happen here. I used PHP to build the backbone of this website. If everything works smoothly, that's thanks to my handy work. Explore the site, and if you have any tech questions, I'm your go-to person!</b>        </p>
      </div>
   </div>
</section>

<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>