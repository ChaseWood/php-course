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
