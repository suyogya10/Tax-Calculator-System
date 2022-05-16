<?php
$dbname = "tax_news";
    $hostname = "localhost";
    $username = "root";
    $dbpassword = "";

    $con = new mysqli("$hostname", "$username", "$dbpassword", "$dbname");
    // Check connection
    if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
  }
    ?>