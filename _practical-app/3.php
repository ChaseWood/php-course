<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

// Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP
$number = 0;
if($number > 5){
	echo 'PHP is great';
}else if($number>10){
	echo ' PHP is awesome';
}else{
	echo 'I love PHP';
};

echo '<br>';

// 	Step 2: Make a forloop  that displays 10 numbers

for($i = 1; $i<=10; $i++){
	echo $i . '<br>';
}

echo '<br>';


// 	Step 3 : Make a switch Statement that test against one condition with 5 cases
$number = 34;
switch($number){
		case 30:
		echo 'this number is 30';
		break;
		case 31:
		echo 'this number is 31';
		break;
		case 32:
		echo 'this number is 32';
		break;
		case 33:
		echo 'this number is 33';
		break;
		case 34:
		echo 'this number is 34';
		break;
	}
 

	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php" ?>