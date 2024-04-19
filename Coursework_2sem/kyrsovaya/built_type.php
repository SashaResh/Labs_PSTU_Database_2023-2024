<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "kyrs";
    $conn = new mysqli($servername, $username, $password, $database);

    $first = $_POST['name_type_built'];
    $second = $_POST['average_temperature_here'];
    $third = $_POST['average_humidity_here'];
    $fourth = $_POST['maintenance_frequency'];
    $fifth = $_POST['square_building'];


    $sqlinsert = "INSERT INTO types_buildings (name_buildings, average_temperature_here, average_humidity_here, maintenance_frequency, square_building) VALUES ('$first', '$second', '$third', '$fourth', '$fifth')";
    $conn->query($sqlinsert);
?>