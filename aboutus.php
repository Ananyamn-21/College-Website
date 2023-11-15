<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="./css/style4.css">
<link rel="stylesheet" href="./css/style3.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<title> CSS Login Screen Tutorial </title>
</head>
<body>
<?php include 'navbar.php'; ?>
  <body>
<div class="main-section about-us">
   <img src="./images/1.jpg">
   <div>
      <h1><u>College Summary</u></h1>
      <p>Government First Grade College Doddaballapura is located in Madagondanahalli,Doddaballapur taluk,Bangalore rural district,Bangalore, India.<br> 
      The college has a strong focus on research activities with various departments conducting seminars,
       workshops and conferences to promote knowledge sharing among students.<br></p>
<p>The college has an excellent infrastructure.The college has gym, playground, auditorium,laboratories,
class rooms are well furnished and ventilated.The students have all the facilities for games and sports.
Adequate infrastructure is provided for indoor, outdoor and extra-curricular activities.<br></p>
<h1><u> Correspondance Details: </u></h1>
<p><b>Institute Id:</b>	AISHE Code -C-20895<br>
      <p><b>Name of Institute:</b>	GOVT. FIRST GRADE COLLEGE, DODDABALLAPURA<br>
<b>College Type:</b>	Affiliated College<br>
<b>College Code:</b> 7002<br>
<b>university Name:</b>	Bangalore North University, Kolar<br>
<b>University Type:</b>	State Public University<br>
<b>Year of Establishment:</b>	1984<br>
<b>Statutory_Body:</b>	University Grants Commission<br>
<b>Management Name:</b>	State Government<br>
      </div>
</div>


<?php 
}else{
     header("Location: login.php");
     exit();
}
 ?>