<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

?>



<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="./css/style5.css">
<link rel="stylesheet" href="./css/style3.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<title>Gallery</title>
</head>
<body>
<?php include 'navbar.php'; ?>
  <body>
  
<div class="main-section gallery">
   <h1 class="heading"><center>Gallery</center></h1>
   <img src="./images/2.jpg"> 
<h2><center>LIBRARY</center></h2>
   <img src="./images/3.jpg"> 
<h2><center>GYM</center></h2>
   <img src="./images/4.jpg"> 
<h2><center>CLASS ROOM</center></h2>
   <img src="./images/5.jpg"> 
<h2><center>PHYSICS LAB</center></h2>
   <img src="./images/6.jpg"> 
<h2><center>COMPUTER LAB</center></h2>
   <img src="./images/7.jpg"> 
<h2><center>CHEMISTRY LAB</center></h2>
   <img src="./images/8.jpg">
<h2><center>ENTRANCE GATE</center></h2>
   <img src="./images/9.jpg">  
<h2><center>LIBRARY</center></h2>
   <img src="./images/10.jpg">
<h2><center>AUDITORIUM</center></h2>
   <img src="./images/11.jpg"> 
<h2><center>PRINCIPLE OFFICE</center></h2>
   <img src="./images/12.jpg"> 
<h2><center>ENTRANCE</center></h2>
   <img src="./images/13.jpg"> 
<h2><center>STAFF ROOM </center></h2>
   <img src="./images/14.jpg"> 
<h2><center>PLAY GROUND</center></h2>
   <img src="./images/15.jpg"> 
<h2><center>PARKING</center></h2>
   <img src="./images/16.jpg"> 
<h2><center>OFFICE ROOM</center></h2>
   <img src="./images/17.jpg"> 
<h2><center>2023 BSC FINAL YEAR BATCH</center></h2>
</div>

<?php 
}else{
     header("Location: login.php");
     exit();
}
 ?>
