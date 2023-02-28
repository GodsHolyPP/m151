<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "northwind";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
  
  foreach ($conn->query('SELECT * from customers') as $row) {
    echo"<br>";  
    print_r(array_values($row)); 
   }
   $conn = null;
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

?>