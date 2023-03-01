<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "northwind";
    
    try {
        $id = $_GET['id'];
        $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        $sql = $conn->prepare('DELETE from orders  where customer_id=:id');
        $sql->execute([ 'id' => $id ]);

      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $conn->query($sql);
       $conn = null;
    } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }
?>