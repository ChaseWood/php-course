<?php

if(isSet($_POST["submit"])){

$names = ['Edwin', 'Student', 'Chase', 'Hannah', 'James', 'Tom'];
$minimum = 5;
$maximum = 10;
$username = $_POST["username"];
$password = $_POST["password"];


if(strlen($username) < $minimum){
    echo 'Username has to be longer than five';
};

if(strlen($username) > $maximum){
    echo 'Username cannot be longer than 10';
};

if(!in_array($username, $names)){
    echo 'Sorry you are not allowed';
}else{
    echo 'Welcome';
}

};

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="form.php" method="post">

    <input type="text" name="username" placeholder="Enter Username">
    <br>
    <input type="password" name="password" placeholder="Enter Password">
    <br>
    <input type="submit" name="submit">

</form>

    


<?php




?>



    
</body>
</html>