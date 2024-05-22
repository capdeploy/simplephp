<?php
$servername = "192.168.10.156";
$username = "root";
$password = "abcd1234";
$dbname = "myDBPDO";

try {
    $conn = new PDO("mysql:host=$servername", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "DROP DATABASE myDBPDO";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Database Dropped successfully<br>";
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
?>
<a href="index.php">Click here to return HOME</a>