<?php


include "db.php";


//select db
mysqli_select_db($con,'college_website');


$fullname = $_POST['fullname'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];


$query = "insert into user_info(name, username, email, password) values ('$fullname','$username','$email','$password')";


mysqli_query($con,$query);
 

    Header('location:login.php');





?>