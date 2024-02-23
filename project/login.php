<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Welcome</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
        <h2>Sign In</h2>
  </div>
         
  <form method="post" action="login.php">
        <?php include('errors.php'); ?>
        <div class="input-group">
                <label>Username</label>
                <input type="text" name="username" autocomplete="off" >
        </div>
        <div class="input-group">
                <label>Password</label>
                <input type="password" name="password" autocomplete="off">
        </div>
        <div class="input-group">
                <button type="submit" class="btn" name="login_user">Login</button>
        </div>
        <p>
                <center>
                No Account? <a href="register.php" class="link">Register here</a>
                </center>
        </p>
  </form>
</body>
</html>