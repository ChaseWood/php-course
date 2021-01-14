<?php


if(isset($_POST["submit"])){

    $username = $_POST["username"];
    $password = $_POST["password"];

    $connection = mysqli_connect('localhost', 'root', '', 'loginApp', 8080);

    if($connection) {
        echo 'we are connected to the database';
    } else {
        die("database connection failed");
    }

    $query = "INSERT INTO users(username,password) ";
    $query .= "VALUES ('$username', '$password')";
    
    $result = mysqli_query($connection, $query);

    if(!$result){

        die('Query FAILED' . mysqli_error());
    }

    

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

<div class="container">
    <div class="col-sm-6">
        <form action="loginCreate.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div>
                <input type="submit" name="submit" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>





    
</body>
</html>