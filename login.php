<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $pass = md5($_POST['pass']);
   $pass = filter_var($pass, FILTER_SANITIZE_STRING);

   $sql = "SELECT * FROM `users` WHERE email = ? AND password = ?";
   $stmt = $conn->prepare($sql);
   $stmt->execute([$email, $pass]);
   $rowCount = $stmt->rowCount();  

   $row = $stmt->fetch(PDO::FETCH_ASSOC);

   if($rowCount > 0){

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_id'] = $row['id'];
         header('location:admin_page.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_id'] = $row['id'];
         header('location:home.php');

      }else{
         $message[] = '¡Usuario no encontrado!';
      }

   }else{
      $message[] = '¡Contraseña o Email incorrecto!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Inicio de sesión</title>

      <!-- font awesome cdn link  -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

      <!-- custom css file link  -->
      <link rel="stylesheet" href="css/components.css"> 

   </head>
   <body style="background-image:url(images/burguer.jpg);background-repeat: no-repeat;background-size: cover;background-position: center;height: 100vh;margin: 0;">

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
         
      <section style="min-height:100vh;" class="form-container">

         <form action="" method="POST">
            <h3>únete Ahora</h3>
            <input type="email" name="email" class="box" placeholder="Email" required>
            <input type="password" name="pass" class="box" placeholder="Contraseña" required>
            <input type="submit" value="Ingresar" class="btn" name="submit">
            <p style="font-size:1.5rem;margin-top:1rem">Si no tienes una cuenta<span><a href="register.php">¡Clip aquí!</a></span></p>
         </form>

      </section>


   </body>
</html>