<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "northwind";
    
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      echo "Connected successfully";
      
      $conn->query("INSERT INTO `customers` (`company`, `last_name`, `first_name`, `email_address`, `job_title`, `business_phone`, `home_phone`, `mobile_phone`, `fax_number`, `address`, `city`, `state_province`, `zip_postal_code`, `country_region`, `web_page`, `notes`, `attachments`) 
      VALUES ('$company', '$last_name', '$first_name', '$email_address', '$job_title', '$business_phone', '$home_phone', '$mobile_phone', '$fax_number', '$address', '$city', '$state_province', '$zip_postal_code', '$country_region', '$web_page', '$notes', '$attachments')");
       $conn = null;
    } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }
?>