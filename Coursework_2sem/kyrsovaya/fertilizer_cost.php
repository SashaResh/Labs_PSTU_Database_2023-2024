<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "kyrs";
    $conn = new mysqli($servername, $username, $password, $database);

    $first = $_POST['id_plant_f'];
    $second = $_POST['id_buildings_f'];
    $third = $_POST['id_fertilizer_f'];
    $fourth = $_POST['year_fertilizers_costs'];
    $fifth = $_POST['fertilizers_kg'];


    $sqlinsert = "INSERT INTO fertilizers_costs (id_plant, id_building, id_fertilizer, year_fertilizers_costs, fertilizers_kg) VALUES ('$first', '$second', '$third', '$fourth', '$fifth')";
    $conn->query($sqlinsert);
?>