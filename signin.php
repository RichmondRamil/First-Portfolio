<?php

  include 'database.php';
?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="landing.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<script src="sweetalert2@11.js"></script>
  <title>Login Portfolio</title>
</head>
<body>
<nav>
    <div class="logo">
      <img src="./Img/logo.png" style="width: 35px; height: 35px; margin-right: 5px;" alt="RVR logo">
      <h4>|Richmond</h4>
    </div>
    <div class="burger">
      <div class="line1"></div>
      <div class="line2"></div>
      <div class="line3"></div>
    </div>
  </nav>
  <?php
     session_start();

     if(isset($_POST['signin'])){
       $user_email=$_POST['user_email'];
       $user_password=$_POST['user_password'];
       $user_isVerified='Yes';
   
       $sql="SELECT * FROM tbl_user WHERE user_email=?";
       $stmt=$con->prepare($sql);
       $stmt->bind_param("s", $user_email);
       $stmt->execute();
       $result=$stmt->get_result();
       $row=$result->fetch_assoc();
       $count=$result->num_rows;
       if($count>0){
         if($row['user_isVerified'] == $user_isVerified){
           if($row['user_email'] == $user_email && $row['user_password'] == $user_password){
             session_regenerate_id();
             $_SESSION['user_email'] = $row['user_email'];
             header('location: Portfolio.php');
           }else{ ?>
           <script>
         Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'You entered a wrong password'
                  })
       </script>
          <?php }
         }else{ ?>
        <script>
         Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Please verify your email first'
                  })
       </script>
        <?php }
       }else{ ?>
       <script>
         Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'No such email in the database'
                  })
       </script>
      <?php }
     }
  ?>

  <div class="container">
    <div class="box form-container">
      <div class="container-content">
      <img width="50px" height="50px" src="./Img/user.png" alt="">
      <h3>User Login</h3>
  <form action="signin.php" method="POST">
  <input type="email" name="user_email" placeholder="Enter Email"><br><br>
  <input type="password" name="user_password" placeholder="Enter password"><br><br>
  <a class="btn btn-info btn-sm" href="index.php">Signup now</a><br><br>
  <a class="btn btn-info btn-sm" href="forgot.php">Forgot Password</a><br><br>
  <button class="btn btn-success" type="submit" name="signin">Sign in</button>
  </form>
      </div>
    </div>
  </div>
  <footer>
    <div class="footer-container">
      <div class="footer-content">
        <h3>This a Web Portfolio for a preparation of my future work that may help the company to view what am I capable of.</h3>
        <h4>Join Richmond's Channels</h4>
        <div class="icons">
          <a href=""><i class="fab fa-discord fa-lg"></i></a>
          <a href=""><i class="fab fa-facebook fa-lg"></i></a>
          <a href=""><i class="fab fa-twitter fa-lg"></i></a>
          <a href=""><i class="fab fa-instagram fa-lg"></i></a>
          <a href=""><i class="fab fa-linkedin fa-lg"></i></a>
        </div>
        <em>copyright &copy;2021 Richmond. Designed by Richmmond.</em>
      </div>
  </div>
  </footer>
</body>
</html>