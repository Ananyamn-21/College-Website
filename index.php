<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

?>

<!DOCTYPE html>
<html>
   <head>
      <title>Home</title>
      <link rel="stylesheet" href="./css/index.css">

      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   </head>
   <body>

   <?php include 'navbar.php'; ?>

<div class="slider">
<img src="./images/12.jpg">
</div>
<div class="container">
<div class="main-section">
   <div class="course">
      <h2 class="heading">Science</h2>
      <div>
         <marquee direction="up" scrollamount="4" style="height:100px;">
            <ul>
               <li>PMCS</li>
               <li>PMC</li>
               </marquee>
      </div>
   </div>
  <div class="course">
      <h2 class="heading">Commerce</h2>
      <div>
        <marquee direction="up" scrollamount="4" style="height:100px;">
            <ul>
               <li>EBACS</li>
               <li>EBAM</li>
               <li>EBAS</li>
               <li>EBAH</li>
              </ul>
         </marquee>
      </div>
   </div>
  <div class="course">
      <h2 class="heading">Arts</h2>
      <div>
         <marquee direction="up" scrollamount="4" style="height:100px;">
            <ul>
               <li>HISTORY</li>
               <li>SOCIALOGY </li>
               <li>POLITICAL SCIENCE</li>
               </ul>
         </marquee>
      </div>
   </div>
<div class="main-section placement">
   <img src="./images/place.png"> 
</div>
</div>
<div class="footer">
   <div class="container">
      <div class="footer-sect">
         <h2>Best Institute For Education</h2>
         <p>Education is the one thing no one can take away from you</p>
         <img src="./images/Library.png"> 
         <img src="./images/Campus.jpg"> 
         <img src="./images/CSlab.png"> 
         <img src="./images/Chemlab.jpg"> 
      </div>
      <div class="footer-sect">
         <h2>Quick Links</h2>
         <ul class="footer-menu">
            <li><a href="website.php"> > Home</a></li>
            <li><a href="aboutus.php"> > About us</a></li>
            <li><a href="gallery.php"> > Gallery</a></li>
            <li><a href="contactus.php"> > Contact Us</a></li>
         </ul>
      </div>
      <div class="footer-sect">
         <h2>Contact Info</h2>
         <ul class="footer-contact">
            <li><b>Email :</b> reply@gfgcdbpureducation.com </li>
            <li><b>Call :</b> +91 -123 456 7890 </li>
            <li><b>Website :</b> https://www.gfgcdbpur.com </li>
         </ul>
      </div>
   </div>
</div>
</body>
</html>


<?php 
}else{
     header("Location: login.php");
     exit();
}
 ?>
