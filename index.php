<html>  
<body>

<form action="welcome.php" method="post">
Firstname: <input type="text" name="fname"><br>
Lastname: <input type="text" name="lname"><br>
Email: <input type="text" name="email"><br>
<input type="submit">
</form>

</body>
</html>

<?php
$servername = "192.168.10.156";
$username = "root";
$password = "abcd1234";
$dbname = "myDBPDO";

try {
  $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>