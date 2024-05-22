<html>  
<body>

 <div style="font-family:helvetica;">
<form action="welcome.php" method="post">
First Name: <input type="text" name="fname"><br>
Last Name: <input type="text" name="lname"><br>
Email: <input type="text" name="email"><br>
<input type="submit">
</form>
  </body>
</html>
</div>

<?php
$servername = "192.168.10.156";
$username = "root";
$password = "abcd1234";
$dbname = "myDBPDO";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>
<br>
<a href="dbinit.php">IF DB Error Click Here to Initialize the DB</a>
<br>
<a href="dropdb.php">Click here to drop DB</a>