<?php



    $connection = mysqli_connect('localhost', 'root', '', 'loginApp', 8080);

    if($connection) {
        echo 'we are connected to the database';
    } else {
        die("database connection failed");
    }

    $query = "SELECT * FROM users";
    
    $result = mysqli_query($connection, $query);

    if(!$result){

        die('Query FAILED' . mysqli_error());
    }

    





?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    
</head>
<body>

    <div class="col-sm-6">

    <?php

    // while($row = mysqli_fetch_row($result)){

    //     print_r($row);


    // }

    while($row = mysqli_fetch_assoc($result)){

        ?>

        <pre>

        <?php
        print_r($row);
        ?>
        </pre>
        <?php

    }

    ?>

    </div>




    
</body>
</html>