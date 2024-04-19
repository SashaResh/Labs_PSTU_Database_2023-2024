<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "kyrs";
    $conn = new mysqli($servername, $username, $password, $database);

    $first = $_POST['name'];
    $second = $_POST['types_plantss'];
    $third = $_POST['free_building'];
    $fourth = $_POST['sq'];
    $fifth = $_POST['date'];


    $sqlinsert = "INSERT INTO plant (name_plant, id_type_plant, id_built, square, date_plant) VALUES ('$first', '$second', '$third', '$fourth', '$fifth')";
    $conn->query($sqlinsert);
?>