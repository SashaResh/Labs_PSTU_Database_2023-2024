<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "kyrs";
    $conn = new mysqli($servername, $username, $password, $database);

    $first = $_POST['name_fertilizer'];
    $second = $_POST['fertilizer_cost'];
    $third = $_POST['properties'];

    $sqlinsert = "INSERT INTO fertilizer (name_fertilizer, fertilizer_cost, properties) VALUES ('$first', '$second', '$third')";
    $conn->query($sqlinsert);
?>