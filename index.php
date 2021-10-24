<?php

  include 'database.php';

  require 'PHPMailer/PHPMailerAutoload.php';

  $mail = new PHPMailer;

?>
<!DOCTYPE html>
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
  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
  <title>Sign up Portfolio</title>
</head>
<body>

<?php
		if(isset($_POST['signup'])){
			$user_fullname=$_POST['user_fullname'];
			$user_email=$_POST['user_email'];
			$user_password=$_POST['user_password'];
			$user_isVerified='No';
	
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
			$count=$result->num_rows;
	
			if($count > 0){ ?>
				<script>
					Swal.fire({
						icon: 'error',
						title: 'Oops...',
						text: 'Email already Exist!',
					})	
				</script>
		<?php	}else{
				$sql="INSERT INTO tbl_user (user_fullname, user_email, user_password,user_isVerified, user_verificationCode) VALUES (?,?,?,?,?)";
				$stmt=$con->prepare($sql);
				$stmt->bind_param("sssss", $user_fullname, $user_email, $user_password, $user_isVerified, $user_verificationCode);
				if($stmt->execute()){
					$mail->isSMTP();
					$mail->Host = 'smtp.gmail.com';  
					$mail->SMTPAuth = true;                              
					$mail->Username = 'richyramil24@gmail.com';                 
					$mail->Password = 'daxldhnhzxsxvekv';                           
					$mail->SMTPSecure = 'tls';                           
					$mail->Port = 587;                                    
	
					$mail->setFrom('richyramil24@gmail.com', 'Richmond Vicente Ramil');
					$mail->addAddress($user_email, $user_fullname);     
	
					$mail->Subject = 'Verification Link';
					$mail->Body    = 'http://localhost/Portfolio/verification.php?code='.$user_verificationCode;
					$mail->AltBody = 'http://localhost/Portfolio/verification.php?code='.$user_verificationCode;
	
								if(!$mail->send()) {
										echo 'Message could not be sent.';
										echo 'Mailer Error: ' . $mail->ErrorInfo;
								} else { ?>
								<script>
									Swal.fire(
										'Good job!',
										'A verification link has been sent to your email. Please verify your account.',
										'success'
									)	
								</script>
							<?php	}
				}
				else{
					echo 'wrong query';
				}
			}
		}
?>

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
	<div class="container">

	<div class="box img-container">
		<img width="750px" height="440px" src="./Img/authentication.png" alt="">
	</div>
		
	<div class="box form-container">
		<div class="container-content">

		<img width="50px" height="50px" src="./Img/user.png" alt="">
		<br>
		<br>
	<h3>USER SIGN UP</h3><br>
  <form action="index.php" method="POST">
		<div class="container-input">
		<i class="fas fa-user"></i>
			<input type="text" name="user_fullname" placeholder="Enter Fullname">
		</div>
		<br>
		<div class="container-input">
		<i class="fas fa-envelope-open-text"></i>
			<input type="text" name="user_email" placeholder="Enter Email">
		</div>
		<br>
		<div class="container-input">
		<i class="fas fa-lock"></i>
			<input type="password" name="user_password" placeholder="Enter Password">
		</div>
		<br>
    <button class="btn btn-success" type="submit" name="signup">Sign Up now</button>
    <br><br>
    <a class="btn btn-info btn-sm" href="signin.php">GO TO SIGN IN</a>
		</div>
  </form>
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
  <script src="landingscript.js"></script>
	<script src="sweetalert2@11.js"></script>
</body>
</html>