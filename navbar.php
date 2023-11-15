<?php 


if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

 ?>

<div class="container">
<img src="./images/logo.jpg" class="logo">
<h6 style="color: black">Hello, <?php echo $_SESSION['name']; ?></h6>
</div>
<nav>
   <div class="container"> 
   
      <a href="index.php">Home</a> 
      <a href="aboutus.php">About us</a> 
      <a href="gallery.php">Gallery</a> 
      <a href="contactus.php">Contact us</a> 
      <!-- <a href="registration.php">register</a>  -->
      
      <div style ="float:right;">
      
      <a href = "logout.php"><button type="button" class="btn btn-danger" >logout</button></a>

      </div>

      


     
   </div>
</nav>


<?php 
}else{
     header("Location: login.php");
     exit();
}
 ?>