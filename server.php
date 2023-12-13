<?php
session_start();

$username = "";
$email = "";
$errors = array();

$db = mysqli_connect('localhost', 'root', '', 'registerdb');

if (isset($_POST['reguser'])) {

  $username =$_POST['username'];
  $email = $_POST['email'];
  $password =$_POST['pw'];
  $profession = $_POST['prof'];


  $query = "INSERT INTO users (username, email, password, profession) 
                          VALUES('$username', '$email', '$password','$profession')";
  mysqli_query($db, $query);
  $_SESSION['username'] = $username;
  $_SESSION['success'] = "You are now logged in";
}

if (isset($_POST['loginuser'])) {
  $username =$_POST['un'];
  $password =$_POST['pw'];

  $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  $results = mysqli_query($db, $query);
  if (mysqli_num_rows($results) == 1) {
    $_SESSION['username'] = $username;
    ?>
    <script>
      window.alert("You are logged in")
      window.location.replace("index.php")
    </script>
    <?php
  } else { ?>
    <script>
      window.alert("Wrong Username and Password")
    </script>
    <?php
  }

}

?>