<!DOCTYPE html>
<html>
<head>
<!-- <link rel="stylesheet" href="./css/style2.css"> -->
<link rel="stylesheet" href="./css/login.css" class="css">
<title>login</title>
</head>
<body>
  <body>
    <div class="login-page">
      <div class="form">
        <div class="login">
          <div class="login-header">
            <h1>Sign In</h1>
        </div>
        </div>
        <form action="auth.php" class="login-form" method="post">
        <?php if (isset($_GET['error'])) { ?>
     		<p class="er"><?php echo $_GET['error']; ?></p>
             <?php } ?>
        <input type="text" name = "username" placeholder="username" />
          <input type="password" name = "password" placeholder="password" />
          <button>login</button>
          <p>Don't have an account...?<a href = "registration.php" text-decoration="null">sign up here</a></p>
        </form>
      </div>
    </div>
</body>
</body>
</html>