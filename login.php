<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
        <h2>Login</h2>
  </div>
         
  <form method="post" action="server.php">
        <div class="input-group">
                <label>Username</label>
                <input type="text" name="un" >
        </div>
        <div class="input-group">
                <label>Password</label>
                <input type="password" name="pw">
        </div>
        <div class="input-group">
                <button type="submit" class="btn" name="loginuser">Login</button>
        </div>
        <p>
                Click here to Signup <a href="register.php">here</a>
        </p>
  </form>
</body>
</html>