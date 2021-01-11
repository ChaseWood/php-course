<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$x = 'outside';

function convert(){
    global $x;
    $x = 'inside';
};

echo $x;

echo '<br>';

// Changed the value with the 'global' cmd inside of the function convert()
convert();

echo $x;




?>



    
</body>
</html>