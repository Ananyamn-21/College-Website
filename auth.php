<?php

session_start();

include "db.php";

mysqli_select_db($con, "college_website");
if (isset($_POST['username']) && isset($_POST['password'])) {


	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	   
	}


    $uname = validate($_POST['username']);
	$pass = validate($_POST['password']);


    if (empty($uname)) {
		header("Location: login.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: login.php?error=Password is required");
	    exit();
	}
    else{
		
        $sql = "select * from user_info where username='$uname' and password='$pass'";

		$result = mysqli_query($con, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);

			if ($row['username'] === $uname && $row['password'] === $pass) {
            	
				$_SESSION['username'] = $row['username'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: index.php");
		        exit();
			}
			else{
				header("Location: login.php?error=incorrect username or password");
				exit();
			}
			
		}
		else{
			header("Location: login.php?error=incorrect username or password");
	    	exit();
		}
		

    }



}
else{
    header("Location : login.php");
    exit();

}




?>