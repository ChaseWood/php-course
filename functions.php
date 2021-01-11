<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

function init(){

    echo 'Hello Hello this is a function';

    echo '<br>';

    saySomething();

    echo '<br>';
    
    calculate();
};


function calculate (){
    echo 43543 + 3432;
};

function saySomething (){
    echo 'this is somehting else';
    
};

init();



?>




    
</body>
</html>