<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "northwind";
    
    try {
        $id = $_GET['id'];
        $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      echo "Connected successfully";

      foreach ($conn->query("SELECT * from orders  where customer_id=$id") as $row) {
        echo "<br>";
        echo htmlentities($row["ship_name"]);
    } 
       $conn = null;
    } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }
?>