<?php
$connect = mysqli_connect('localhost', 'root', '', 'contact_db') or die('Connection Failed!');

if (isset($_POST['send'])) {
   $name = mysqli_real_escape_string($connect, $_POST['name']);
   $email = mysqli_real_escape_string($connect, $_POST['email']);
   $number = mysqli_real_escape_string($connect, $_POST['number']);
   $msg = mysqli_real_escape_string($connect, $_POST['message']);

   $select_message = mysqli_query($connect, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('Query Failed!');

   if (mysqli_num_rows($select_message) > 0) {
      $message[] = 'Message Sent Already!';
   } else {
      mysqli_query($connect, "INSERT INTO `contact_form`(name, email, number, message) VALUES('$name', '$email', '$number', '$msg')") or die('Query Failed!');
      $message[] = 'Message Sent Successfully!';
   }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Terrell Vergith's Portfolio</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <!-- aos css link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
</head>

<body>

   <div id="particles-js" data-aos="zoom-out"></div>

   <script src="js/particles-js/particles.js"></script>
   <script src="js/particles-js/app.js"></script>

   <?php
   if (isset($message)) {
      foreach ($message as $message) {
         echo '
         <div class="message" data-aos="zoom-out">
            <span>' . $message . '</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
         </div>
         ';
      }
   }
   ?>

   <!-- header section starts  -->
   <header class="header">
      <div id="menu-btn" class="fas fa-bars"></div>
      <a href="#home" class="logo">Portfolio</a>
      <nav class="navbar">
         <a href="#home" class="active">home</a>
         <a href="#about">about</a>
         <a href="#portfolio">portfolio</a>
         <a href="#contact">contact</a>
      </nav>
      <div class="follow">
         <a href="https://www.linkedin.com/in/terrell-vergith-aab15b238" class="fab fa-linkedin"></a>
         <a href="https://www.github.com/tdverg" class="fab fa-github"></a>
      </div>
   </header>
   <!-- header section ends -->

   <!-- home section starts -->
   <section class="home" id="home">
      <div class="content">
         <h3 data-aos="fade-up">Hi! I am Terrell Vergith</h3>
         <span data-aos="fade-up">Software Developer</span><br>
         <a data-aos="fade-up" href="#about" class="btn">About Me</a>
      </div>
   </section>
   <hr/>
   <!-- home section ends -->

   <!-- about section starts -->
   <section class="about" id="about">
      <h1 class="heading" data-aos="fade-up"> <span>Biography</span> </h1>
      <div class="biography">
     
         <div class="bio">
            <h3 data-aos="zoom-in"> <span>Name : </span> Terrell Vergith</h3>
            <h3 data-aos="zoom-in"> <span>Email : </span> tdverg@outlook.com</h3>
            <h3 data-aos="zoom-in"> <span>Location : </span> Sioux Falls, SD</h3>
            <h3 data-aos="zoom-in"> <span>Phone : </span> 712-240-2993</h3>
            <h3 data-aos="zoom-in"> <span>Age : </span> 24 Years Old</h3>
            <h3 data-aos="zoom-in"> <span>Experience : </span> Entry Level</h3>
         </div>
         <a data-aos="fade-up" href="documents/TerrellVergithResume.pdf" class="btn">View Resume</a>
      </div>

      <div class="edu-exp">
         <h1 class="heading" data-aos="fade-up"> <span>Education & Experience</span> </h1>
         <div class="row">
            <div class="box-container">
               <div class="title" data-aos="fade-right">Education</div>
               <div class="box" data-aos="fade-right">
                  <span>(2020-2022)</span>
                  <h3>Computer Programming, AAS</h3>
				  <h2>Southeast Technical College<br></h2>
                  <p>Explored and reinforced fundamental concepts of Computer Programming and Software Development.</p>
               </div>
            </div>
            <div class="box-container">
               <div class="title" data-aos="fade-left">Experience</div>
               <div class="box" data-aos="fade-left">
                  <span>(2018-2020)</span>
                  <h3>Assistant Manager</h3>
				  <h2>Kruger Rentals, LLC<br></h2>
                  <p>Worked within a small team and implemented Office 365 in a family rental business to improve documentation.</p>
               </div>
            </div>
         </div>
      </div>

      <div class="skills" data-aos="fade-up">
         <h1 class="heading"> <span>Skills</span> </h1>
         <div class="progress">
            <div class="box" data-aos="fade-left"> <span>C#</span> </div>
            <div class="box" data-aos="fade-left"> <span>Java</span> </div>
            <div class="box" data-aos="fade-left"> <span>PHP</span> </div>
            <div class="box" data-aos="fade-left"> <span>SQL</span> </div>
            <div class="box" data-aos="fade-left"> <span>HTML</span> </div>
            <div class="box" data-aos="fade-left"> <span>CSS</span> </div>
            <div class="box" data-aos="fade-left"> <span>JavaScript</span> </div>
            <div class="box" data-aos="fade-left"> <span>ASP.NET Core</span> </div>

            <div class="box" data-aos="fade-right"> <span>Visual Studio</span> </div>
            <div class="box" data-aos="fade-right"> <span>Eclipse</span> </div>
            <div class="box" data-aos="fade-right"> <span>SQL Server</span> </div>
            <div class="box" data-aos="fade-right"> <span>MySQL</span> </div>
            <div class="box" data-aos="fade-right"> <span>Apache</span> </div>
            <div class="box" data-aos="fade-right"> <span>Unity</span> </div>
            <div class="box" data-aos="fade-right"> <span>Git Bash</span> </div>
            <div class="box" data-aos="fade-right"> <span>Office 365</span> </div>
         </div>
      </div>
   </section>
   <!-- about section ends -->

   <!-- portfolio section begins -->
   <section class="portfolio" id="portfolio">
      <h1 class="heading" data-aos="fade-up"> <span>Portfolio</span> </h1>
      <div class="box-container">

         <div class="box" data-aos="zoom-in">
            <a href="https://www.github.com/tdverg/ePortfolio">
				<img src="images/img-1.jpg" alt="">
			</a>
            <h3>Web Portfolio</h3>
            <span>Website using HTML/CSS/JS & PHP/MySQL</span>
         </div>

         <div class="box" data-aos="zoom-in">
			<a href="https://www.github.com/tdverg/GamePouch">
				<img src="images/img-2.png" alt="">
			</a>
            <h3>Game Pouch</h3>
            <span>iOS app written in Swift to track collections</span>
         </div>

         <div class="box" data-aos="zoom-in">
			<a href="https://www.github.com/tdverg/VRBlacksmithingGame">
				<img src="images/img-3.png" alt="">
			</a>
            <h3>VR Blacksmithing Game</h3>
            <span>Virtual reality game written in C# using Unity</span>
         </div>
      </div>
   </section>
   <!-- portfolio section ends -->

   <!-- contact section starts  -->

   <section class="contact" id="contact">
      <h1 class="heading" data-aos="fade-up"> <span>Contact Me</span> </h1>
      <form action="" method="post">
         <div class="flex">
            <input data-aos="fade-right" type="text" name="name" placeholder="Enter Your Name" class="box" required>
            <input data-aos="fade-left" type="email" name="email" placeholder="Enter Your Email" class="box" required>
         </div>
         <input data-aos="fade-up" type="number" min="0" name="number" placeholder="Enter Your Number" class="box" required>
         <textarea data-aos="fade-up" name="message" class="box" required placeholder="Enter Your Message" cols="30" rows="10"></textarea>
         <input data-aos="zoom-in" type="submit" value="send message" name="send" class="btn">
      </form>

      <div class="box-container">
         <div class="box" data-aos="zoom-in">
            <i class="fas fa-phone"></i>
            <h3>Phone</h3>
            <p>712-240-2993</p>
         </div>
         <div class="box" data-aos="zoom-in">
            <i class="fas fa-envelope"></i>
            <h3>Email</h3>
            <p>tdverg@outlook.com</p>
         </div>
         <div class="box" data-aos="zoom-in">
            <i class="fas fa-map-marker-alt"></i>
            <h3>Location</h3>
            <p>Sioux Falls, SD</p>
         </div>
      </div>
   </section>
   <!-- custom js file link  -->
   <script src="js/script.js"></script>
   
   <!-- aos js link  -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
   <script>
      AOS.init({
         duration: 800,
         delay: 300
      });
   </script>
</body>
</html>