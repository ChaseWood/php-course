<?php include "functions.php" ?>
<?php 
	$connection = mysqli_connect('localhost', 'root', '', 'myList', 8080 );
	if(!$connection){
		die("Database Connection Failed") . mysqli_error($connection);
	} else {
		echo "You are connected";
	}

	$query = "SELECT * FROM reports ";
	$result = mysqli_query($connection, $query);

	if(!$result){
		die("QUERY FAILED");
	}
?>

<?php include "includes/header.php" ?>
    

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">
	
	<?php 
	
	while($record = mysqli_fetch_assoc($result)){
		// print_r($records);
		echo $record['days_of_the_week']."<br>";

	}
	
	
	?>
	
	<?php  

	/*  Step 1 - Create a database in PHPmyadmin

		Step 2 - Create a table like the one from the lecture

		Step 3 - Insert some Data

		Step 4 - Connect to Database and read data

*/
	
	?>





</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>
