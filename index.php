<html>
  <head>
    <link rel="stylesheet" href="style.css" >
  </head>
<body>
<?php 
$username = "root"; 
$password = ""; 
$database = "registerdb";
// $db = mysqli_connect('localhost', 'root', '', 'registerdb'); 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM users";

?>
<p id="wel">Welcome<p>
<h1 id="mem">The Registered Members are<h1>
<div class="tbl">
<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">ID</font> </td> 
          <td> <font face="Arial">Username</font> </td> 
          <td> <font face="Arial">Email</font> </td> 
          <td> <font face="Arial">Profession</font> </td>  
  </tr>
  </div>
<?php
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["id"];
        $field2name = $row["username"];
        $field3name = $row["email"];
        $field4name = $row["profession"];

        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td>  
              </tr>';
    }
    $result->free();
} 
?>
</body>
</html>
