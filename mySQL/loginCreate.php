<?php 
include "db.php";
include "functions.php";
include "includes/header.php";
?>

<?php createRows();?>

<div class="container">
    <div class="col-sm-6">
    <h1 class="text-center">Create</h1>
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
                <input type="submit" name="submit" value="Create" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>

<?php include "includes/footer.php" ?>