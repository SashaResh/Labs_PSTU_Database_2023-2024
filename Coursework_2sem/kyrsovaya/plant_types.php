<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "kyrs";
    $conn = new mysqli($servername, $username, $password, $database);

    $first = $_POST['name_type_plant'];
    $second = $_POST['time_germination'];
    $third = $_POST['frequency_of_care'];
    $fourth = $_POST['the_necessary_temperature'];
    $fifth = $_POST['required_humidity'];
    $sixth = $_POST['plant_cost'];
    $seventh = $_POST['plant_sell'];


    $sqlinsert = "INSERT INTO types_plants (name_plant, time_germination, frequency_of_care, the_necessary_temperature, required_humidity, plant_cost, plant_sell) VALUES ('$first', '$second', '$third', '$fourth', '$fifth', '$sixth', '$seventh')";
    $conn->query($sqlinsert);
?>