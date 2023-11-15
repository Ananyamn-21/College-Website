<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="./css/style6.css">
<link rel="stylesheet" href="./css/style3.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<title>Contact Us</title>
</head>
<body>
<?php include 'navbar.php'; ?>
 <div class="main-section contact-us"> 
<div>
<p>reply@gfgcdbpureducation.com</p>
<p>Call : +91 -123 456 7890</p>
<p>Website :https://www.gfgcdbpur.com</p>
</div>
</div>
</body>

<?php 
}else{
     header("Location: login.php");
     exit();
}
 ?>