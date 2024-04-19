<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "kyrs";
    $conn = new mysqli($servername, $username, $password, $database);

    $first = $_POST['id_TO_b'];
    $second = $_POST['id_TO'];
    $third = $_POST['year_TO'];

    $sqlinsert = "INSERT INTO TO_building (id_building, id_TO, year_TO) VALUES ('$first', '$second', '$third')";
    $conn->query($sqlinsert);
?>