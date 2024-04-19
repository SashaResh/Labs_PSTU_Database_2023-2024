<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "kyrs";
    $conn = new mysqli($servername, $username, $password, $database);

    $first = $_POST['name_TO'];
    $second = $_POST['cost_TO'];

    $sqlinsert = "INSERT INTO types_TO (name_TO, cost_TO) VALUES ('$first', '$second')";
    $conn->query($sqlinsert);
?>