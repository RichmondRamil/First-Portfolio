<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="verifiedstyle.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="sweetalert2@11.js"></script>
  <title>Verification</title>
</head>
<body>
<nav>
    <div class="logo">
      <img src="./Img/logo.png" style="width: 35px; height: 35px; margin-right: 5px;" alt="RVR logo">
      <h4>|Richmond</h4>
    </div>
    <ul class="nav-links">
      <li><a href="#">Home</a></li>
      <li><a href="#specialties">Service</a></li>
      <li><a href="#projects">Projects</a></li>
      <li><a href="#certificates">Certificates</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
    <div class="burger">
      <div class="line1"></div>
      <div class="line2"></div>
      <div class="line3"></div>
    </div>
  </nav>

<?php
  include 'database.php';
 
  $code = $_GET['code'];

  $sql="SELECT * FROM tbl_user WHERE user_verificationCode=?";
        $stmt=$con->prepare($sql);
        $stmt->bind_param("s", $code);
        $stmt->execute();
        $result=$stmt->get_result();
        $row=$result->fetch_assoc();
        $count=$result->num_rows;

        if($count > 0){
          $user_isVerified='Yes';
          $user_verificationCode="";
          $sql="UPDATE tbl_user SET user_isVerified=?, user_verificationCode=? WHERE user_verificationCode=?";
          $stmt=$con->prepare($sql);
          $stmt->bind_param("sss", $user_isVerified, $user_verificationCode, $code);
          if($stmt->execute()){ ?>
          <div class="container">
            <div class="content">
              <div class="box-content-form">
              <h3>YOU HAVE SUCCESSFULY VERIFIED YOUR EMAIL ADDRESS</h3>
              <br>
              <a class="btn btn-info btn-sm" href="signin.php">Click this link to login</a>
              </div>
            </div>
          </div>
         <?php }
        }else{
          echo 'Invalid Verification Code';
        }
?>  
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
  <script src="script.js"></script>
</body>
</html>