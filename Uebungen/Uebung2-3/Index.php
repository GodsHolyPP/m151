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
        echo "<br>";
        $s=strval($row["id"]);
        ?><a href="Bestellungen.php?id=<?php print_r($s)?>"><?php print_r($row["last_name"]);
                    ?> </a>
                    <a href="delete.php?id=<?php print_r($s)?>"> <br>Löschen:   <?php print_r($row["last_name"]);
                    ?> </a>
                     <?php
        }
        $conn = null;


        
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

            ?>