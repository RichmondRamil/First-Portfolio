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
	<script src="sweetalert2@11.js"></script>
  <title>Verification Forgot Password</title>
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
      $code=$_GET['code'];
  
      if(isset($_POST['changepassword'])){
        $user_password=$_POST['user_password'];
        $user_verificationCode=$_POST['user_verificationCode'];
        $blank="";
    
        $sql="UPDATE tbl_user SET user_password=? WHERE user_verificationCode=?";
        $stmt=$con->prepare($sql);
        $stmt->bind_param("ss", $user_password, $user_verificationCode);
        if($stmt->execute()){
          $sql="UPDATE tbl_user SET user_verificationCode=? WHERE user_verificationCode=?";
          $stmt=$con->prepare($sql);
          $stmt->bind_param("ss", $blank, $user_verificationCode);
          if($stmt->execute()){ ?>
          <script>
            Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: 'Password has been Change',
                    footer: '<a href="signin.php">CLICK THIS LINK TO LOGIN</a>'
                  })
          </script>
        <?php }
        }
      } 
  ?>
  <?php
  $sql="SELECT * FROM tbl_user WHERE user_verificationCode=?";
  $stmt=$con->prepare($sql);
  $stmt->bind_param("s", $code);
  $stmt->execute();
  $result=$stmt->get_result();
  $row=$result->fetch_assoc();
  $count=$result->num_rows;
  if($count > 0){ ?>
    <div class="container">
      <div class="box form-container">
        <div class="container-content">
        <h3>INPUT YOUR NEW PASSWORD</h3>
        <br>
    <form action="verificationForgot.php?code=<?php echo $code; ?>" method="POST">
    <input type="password" name="user_password"><br><br>
    <input type="hidden" name="user_verificationCode" value="<?php echo $code; ?>">
    <button class="btn btn-success" type="submit" name="changepassword">Change Password</button>
  </form>
        </div>
      </div>
    </div>
  <?php }
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