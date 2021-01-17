<?php
    include "db.php";
    include "functions.php";
    include "includes/header.php";
?>


<?php include "includes/header.php"; ?>

    <div class="col-sm-6">
        <pre>
            <?php readRows(); ?>
        </pre>
    </div>
    
<?php include "includes/footer.php"; ?>