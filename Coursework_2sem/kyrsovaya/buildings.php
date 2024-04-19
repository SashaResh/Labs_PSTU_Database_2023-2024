<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "kyrs";
    $conn = new mysqli($servername, $username, $password, $database);

    $first = $_POST['id_type_building'];
    $second = $_POST['name_building'];
    $third = $_POST['date_built'];

    $sqlinsert = "INSERT INTO building (id_type_building, name_building, date_built) VALUES ('$first', '$second', '$third')";
    $conn->query($sqlinsert);
?>