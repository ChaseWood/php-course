<?php

if(isSet($_POST["submit"])){

    echo "Yes it works";

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

    <input type="text" placeholder="Enter Username">
    <br>
    <input type="password" placeholder="Enter Password">
    <br>
    <input type="submit" name="submit">

</form>

    


<?php




?>



    
</body>
</html>