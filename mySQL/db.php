<?php 

    $connection = mysqli_connect('localhost', 'root', '', 'loginApp', 8080);

    if(!$connection) {
        die("Database connection failed");
    }

    ?>