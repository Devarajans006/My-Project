<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
  <title>Registration</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script type="text/javascript" href="validation.js"></script>
</head>

<body>
  <div class="header">
    <h2>Register</h2>
  </div>

  <form name="form" method="post" action="register.php">
    <div class="input-group">
      <label>Username</label>
      <input type="text" name="username">
      <div class="errormessage"></div>
    </div>
    <div class="input-group">
      <label>Email</label>
      <input type="email" name="email">
      <div class="errormessage"></div>
    </div>
    <div class="input-group" id="prof">
      <tr>
        <td rowspan="2">Currently</td>
        <td><input type="radio" name="prof" value="Student" />Student</td>
      <tr>
        <td><input type="radio" name="prof" value="Employee" />Employee</td>
      </tr>
      </tr>
      <div class="errormessage"></div>
    </div>
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="pw">
      <div class="errormessage"></div>
    </div>
    <div class="input-group">
      <label>Confirm password</label>
      <input type="password" name="cpw">
      <div class="errormessage"></div>
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="reguser">Register</button>
    </div>
    <p>
      Click here to login <a href="login.php">here</a>
    </p>
  </form>
</body>

</html>