<html>
<body>

Welcome <?php echo $_POST["fname"]; ?><sp>
<?php echo $_POST["lname"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>

</body>
</html>

<?php
$servername = "192.168.10.156";
$username = "root";
$password = "abcd1234";
$dbname = "myDBPDO";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "INSERT INTO MyGuests (firstname, lastname, email)
  VALUES ('$_POST[fname]', '$_POST[lname]', '$_POST[email]')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "<br>New record created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
