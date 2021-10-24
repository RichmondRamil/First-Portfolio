<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <script src="script.js" defer></script>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <title>Portfolio</title>
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
      <li><a href="index.php">LogOut</a></li>
    </ul>
    <div class="burger">
      <div class="line1"></div>
      <div class="line2"></div>
      <div class="line3"></div>
    </div>
  </nav>

  <div class="container">
    <div class="headline">
      <div class="headline-text">
        <h2>Welcome to my Portfolio</h2>
        <div>
          <h4>Im an aspiring Front-End Web Developer</h4>
          <p>Just a reminder, you don't have to be extreme. Be consistent, small Progress is a Progress.</p>
        </div>
      </div>
    </div>
    <div class="profile">
      <div class="profile-box">
        <img src="./Img/find-leeg.png" alt="" srcset="">
      </div>
      <div class="profile-box">
        <h2>Hi, I'm Richmond Vicente Ramil</h2>
        <h3>BSIT Major in Web and Mobile Application</h3>
        <div class="tsu-logo-text">
          <img style="width:30px;
                      height:30px;
                      margin-right: 5px;" src="./Img/tsu logo.png" alt="" srcset="">
          <h4>Tarlac State University</h4>
        </div>
      </div>
    </div>
    <div class="box-title">
      <h1>Specialties</h1>
    </div>
    <div data-aos="fade-up" id="specialties" class="row row1">
      <div class="card-01">
        <div class="title-combine">
          <h2 class="title">HTML</h2>
          <img width="40px" height="35px" src="./Img/html.png" alt="">
        </div>
        <div class="card-01-description-container">
          <p class="description-card">Language for describing the structure of Web pages.</p>
          <br>
          <a style="text-decoration: none" href="https://www.w3schools.com/html/" target="_blank">
            <p style="color: #27a0f7; font-weight: bolder;" >Learn HTML
              <i style="margin-left: 10px; color: #27a0f7;"class="fa fa-arrow-right"></i>
            </p>
          </a>
        </div>
      </div>
      <div class="card-01">
        <div class="title-combine">
          <h2 class="title">CSS</h2>
          <img width="40px" height="35px" src="./Img/css.png" alt="">
        </div>
        <div class="card-01-description-container">
          <p class="description-card">Responsible for the text style, size, positioning, color, and more on a website.</p>
          <br>
          <a style="text-decoration: none" href="https://www.w3schools.com/css/" target="_blank">
            <p style="color: #27a0f7; font-weight: bolder;" >Learn CSS
              <i style="margin-left: 10px; color: #27a0f7;"class="fa fa-arrow-right"></i>
            </p>
          </a>
        </div>
      </div>
      <div class="card-01">
        <div style="margin-top: 5px;" class="title-combine">
          <h2 class="title">JAVASCRIPT</h2>
          <img width="40px" height="35px" src="./Img/javascript.png" alt="">
        </div>
        <div class="card-01-description-container">
          <p class="description-card">Text-based programming language used both on the client-side and server-side.</p>
          <br>
          <a style="text-decoration: none" href="https://www.w3schools.com/js/" target="_blank">
            <p style="color: #27a0f7; font-weight: bolder;" >Learn JavaScript
              <i style="margin-left: 10px; color: #27a0f7;"class="fa fa-arrow-right"></i>
            </p>
          </a>
        </div>
      </div>
      <div class="card-01">
        <div style="margin-top: 5px;"  class="title-combine">
          <h2 style="margin-right: 5px;" class="title">PHP</h2>
          <img width="35px" height="30px" src="./Img/php.png" alt="">
        </div>
        <div class="card-01-description-container">
          <p class="description-card">Scripting language that can be used to develop dynamic and interactive websites.</p>
          <br>
          <a style="text-decoration: none" href="https://www.w3schools.com/php/" target="_blank">
            <p style="color: #27a0f7; font-weight: bolder;" >Learn PHP
              <i style="margin-left: 10px; color: #27a0f7;"class="fa fa-arrow-right"></i>
            </p>
          </a>
        </div>
      </div>
      <div class="card-01">
        <div class="title-combine">
          <h2 class="title" style="margin-right: 5px;">MYSQL</h2>
          <img width="40px" height="35px" src="./Img/phpmysql.png" alt="">
        </div>
        <div class="card-01-description-container">
          <p class="description-card">Used for a wide range of purposes, including data warehousing, e-commerce, and logging applications.</p>
          <br>
          <a style="text-decoration: none" href="https://www.w3schools.com/MySQL/default.asp" target="_blank">
            <p style="color: #27a0f7; font-weight: bolder;" >Learn MySql
              <i style="margin-left: 10px; color: #27a0f7;"class="fa fa-arrow-right"></i>
            </p>
          </a>
        </div>
      </div>
    </div>
    <div class="box-title">
      <h1>Recent Projects</h1>
    </div>
    <div data-aos="fade-up" id="projects" class="row row2">
      <div class="feature-container">
        <div class="card">
          <div class="imgBx" data-text="Calcu">
            <img src="./Img/calculator.png" alt="">
          </div>
          <div class="content">
            <div>
              <h3>Calculator</h3>
              <p>Calculator that have a Mathematical Operation of Addtion, Subtraction, Multiplication, Division</p>
              <a href="calculator.html">Visit Project</a>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="imgBx" data-text="Quiz">
            <img src="./Img/quiz.png" alt="" srcset="">
          </div>
          <div class="content">
            <div>
              <h3>Quiz</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam quibusdam fugit odio molestiae, consequatur itaque.</p>
              <a href="quiz.html">Read more</a>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="imgBx" data-text="Sched">
            <img src="./Img/calendar.png" alt="">
          </div>
          <div class="content">
            <div>
              <h3>Schedule</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam quibusdam fugit odio molestiae, consequatur itaque.</p>
              <a href="Schedule.html">Read more</a>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="imgBx" data-text="Clone">
            <img src="./Img/webpage.png" alt="">
          </div>
          <div class="content">
            <div>
              <h3>Web Page Clone</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam quibusdam fugit odio molestiae, consequatur itaque.</p>
              <a href="webclone.html">Read more</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="box-title">
      <h1>Certificates</h1>
    </div>
    <div data-aos="fade-up" id="certificates" class="row row3">
      <div class="card-03">
        <div class="description-certificate">
          <img src="./Img/patent.PNG">
          <h3>Intellectual Property Rights</h3>
        </div>
      </div>
      <div class="card-03">
        <div class="description-certificate">
          <img src="./Img/strongethics.PNG">
          <h3>Work Ethics</h3>
        </div>
      </div>
      <div class="card-03">
        <div class="description-certificate">
          <img src="./Img/2000IT.PNG" alt="">
          <h3>ISO/IEC 20000</h3>
        </div>
      </div>
      <div class="card-03">
        <div class="description-certificate">
          <img src="./Img/9001.PNG" alt="">
          <h3>ISO 9001</h3>
        </div>
      </div>
      <div class="card-03">
        <div class="description-certificate">
          <img src="./Img/introductiontonetwork.PNG" alt="">
          <h3>Introduction to Networks</h3>
        </div>
      </div>
      <div class="card-03">
        <div class="description-certificate">
          <img src="./Img/routingandswitching.PNG" alt="">
          <h3>Routing and Switching Essentials</h3>
        </div>
      </div>
    </div>
    <div class="box-title">
      <h1>School Attended</h1>
    </div>
    <div id="shools" class="row row4">
      <div data-aos="fade-right"class="card-04">
        <div class="school-img">
          <img src="./Img/maeling logo.png" alt="" srcset="">
          <h3>Maeling Elementary School</h3>
        </div>
      </div>
      <div data-aos="zoom-in" class="card-04">
        <div class="school-img">
          <img src="./Img/Citc logo.png" alt="">
          <h3>College Institute of Technology</h3>
        </div>
      </div>
      <div data-aos="fade-left" class="card-04">
        <div class="school-img">
          <img src="./Img/tsu logo.png" alt="">
          <h3>Tarlac State University</h3>
        </div>
      </div>
    </div>
    <div class="box-title">
      <h1>Contact</h1>
    </div>
    <div data-aos="fade-up" id="contact" class="row row5">
      <div class="card-05">
        <div class="contact-description">
          <h2>Need some help?</h2>
        <h4>I will try all my best to be able to help you. </h4>
        <h5>Contact Richmond Vicente</h5>
        <br>
        <a class="send-message" id="button" href="#">Send a message</a>
        </div>
      </div>
      <div class="card-05 contact-img">
        <div class="contact-img-holder">
          <img src="./Img/envelope.png" alt="">
        </div>
      </div>
    </div>
    <div class="bg-modal">
      <div class="modal-content">
        <div class="close">+</div>
        <img src="./Img/man.png" width="100px"
        height="100px" alt="">

        <form action="">
          <input type="text" placeholder="Name" required>
          <input type="text" placeholder="Email Address" required>
          <textarea placeholder="Type your message..." required></textarea>
          <button class="send-message-btn">Send Message</button>
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
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        duration: 1200,
        once: true,
      });
    </script>
</body>
</html>