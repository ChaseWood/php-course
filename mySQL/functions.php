<?php include "db.php"; ?>

<?php 


function showAllData(){
    global $connection;
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);

    if(!$result){
        die('Query FAILED' . mysqli_error());
    }

    while($row = mysqli_fetch_assoc($result)){

        $id = $row['id'];
        echo "<option value='$id'>$id</option>"; 
    }
}


function updateTable(){
    if(isset($_POST['submit'])){
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "UPDATE users SET ";
    $query .= "username = '$username', ";
    $query .= "password = '$password' ";
    $query .= "WHERE id = $id ";

    $result = mysqli_query($connection, $query);

    if(!$result){
        die("QUERY FAILED" . mysqli_error($connection));
    } else {
        echo "Record Updated";
    }
    
}}

function deleteRows(){

    if(isset($_POST['submit'])){

    global $connection;

    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "DELETE FROM users ";
    $query .= "WHERE id = $id ";

    $result = mysqli_query($connection, $query);

    if(!$result){
        die("QUERY FAILED" . mysqli_error($connection));
    }else{
        echo "Record removed";
    }
    
}}

function createRows() {
    if(isset($_POST["submit"])){

        global $connection;

        $username = $_POST["username"];
        $password = $_POST["password"];

        $query = "INSERT INTO users(username,password) ";
        $query .= "VALUES ('$username', '$password')";
        
        $result = mysqli_query($connection, $query);

        if(!$result){
            die('Query FAILED' . mysqli_error());
        } else {
            echo "Record Created";
        }
    }
}

function readRows() {

    global $connection;

    if($connection) {
        echo 'we are connected to the database '."<br>";
    } else {
        die("database connection failed");
    }

    $query = "SELECT * FROM users";
    
    $result = mysqli_query($connection, $query);

    if(!$result){
        die('Query FAILED' . mysqli_error());
    }

    while($row = mysqli_fetch_assoc($result)){
        print_r($row);
    }

}
