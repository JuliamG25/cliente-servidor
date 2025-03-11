<?php

@include 'config.php';

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
   <title>Sobre nosotros</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="about">

   <div class="row">

      <div class="box">
         <img src="images/about-img-1.png" alt="">
         <h3>¿Por que nosotros?</h3>
         <p>Quien te hizo daño</p>
         <a href="contact.php" class="btn">Contactanos</a>
      </div>

      <div class="box">
         <img src="images/about-img-2.png" alt="">
         <h3>¿Que Ofrecemos?</h3>
         <p>Nada</p>
         <a href="shop.php" class="btn">Nuestra Tienda</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">Opiniones de Clientes</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/00d1a54d-f14d-4bad-90ac-f5e47aed1562.jpg" alt="">
         <p> Me gusto mucho </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Oscar Arciniegas</h3>
      </div>

      <div class="box">
         <img src="images/R.jpg" alt="">
         <p>SIU.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Cristiano Ronaldo</h3>
      </div>

      <div class="box">
         <img src="images/OIP.jpg" alt="">
         <p>Que miras bobo.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Messi</h3>
      </div>

      
   </div>

</section>









<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>