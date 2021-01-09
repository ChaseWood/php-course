<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

// NORMAL ARRAY
// $number = [1,2,3,4,'chase', 'hannah', 20, 34];
// echo $number[3] . "<br>";

//ASSOCIATIVE ARRAY - use when you want to be able to find them by label
$names = ["firstName" => 'Chase', 'lastName'=> 'Wood'];

// print_r shows the structure of the array
print_r($names);

echo '<br>';

echo $names['firstName'] . ' ' . $names['lastName'];

?>



    
</body>
</html>