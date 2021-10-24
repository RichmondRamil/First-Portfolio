<?php
  include 'database.php';

  require 'PHPMailer/PHPMailerAutoload.php';

  $mail = new PHPMailer;
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
	<script src="sweetalert2@11.js"></script>
  <title>Forgot password</title>
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
    if(isset($_POST['forgot'])){
      $user_email=$_POST['user_email'];
  
      function generateRandomString($length = 50){
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++){
          $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
      }
  
      $user_verificationCode = generateRandomString(5);
  
      $sql="SELECT * FROM tbl_user WHERE user_email=?";
      $stmt=$con->prepare($sql);
      $stmt->bind_param("s", $user_email);
      $stmt->execute();
      $result=$stmt->get_result();
      $row=$result->fetch_assoc();
      $count=$result->num_rows;
      if($count > 0){
        $sql="UPDATE tbl_user SET user_verificationCode=? WHERE user_email=?";
        $stmt=$con->prepare($sql);
        $stmt->bind_param("ss", $user_verificationCode, $user_email);
        if($stmt->execute()){
          $mail->isSMTP();
          $mail->Host = 'smtp.gmail.com';  
          $mail->SMTPAuth = true;                              
          $mail->Username = 'richyramil24@gmail.com';                 
          $mail->Password = 'daxldhnhzxsxvekv';                           
          $mail->SMTPSecure = 'tls';                           
          $mail->Port = 587;                                    
  
          $mail->setFrom('richyramil24@gmail.com', 'Richmond Vicente Ramil');
          $mail->addAddress($user_email, $row['user_fullname']);     
  
          $mail->Subject = 'Forgot Password Verification Link';
          $mail->Body    = 'http://localhost/Portfolio/verificationForgot.php?code='.$user_verificationCode;
          $mail->AltBody = 'http://localhost/Portfolio/verificationForgot.php?code='.$user_verificationCode;
  
                if(!$mail->send()) {
                    echo 'Message could not be sent.';
                    echo 'Mailer Error: ' . $mail->ErrorInfo;
                } else { ?>
                <script> 
                  Swal.fire(
                              'Good job!',
                              'A Password verification link has been sent to your email. Please verify your account.',
                              'success'
                            )
                </script>
              <?php  }
        }else{
          echo 'wrong query';
        }
      }else{ ?>
      <script>
        Swal.fire({
						icon: 'error',
						title: 'Oops...',
						text: 'We cannot find your Email in our Database'
					})	
      </script>
    <?php  }
    }
  ?>

  <div class="container">
      <div class="box form-container">
      <div class="container-content">
      <h3>Forgot Password</h3>
      <p>Please Input your Email Address</p>
      <form action="forgot.php" method="POST">
        <input type="email" name="user_email"><br><br>
        <button class="btn btn-success" type="submit" name="forgot">Password Forgot</button>
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
  <script src="script.js"></script>
</body>
</html>