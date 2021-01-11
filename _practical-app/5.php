<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 


// Step1: Use a pre-built math function here and echo it

$num = 45.3;
echo ceil($num);
echo '<br>';
echo floor($num);
echo '<br>';


// 	Step 2:  Use a pre-built string function here and echo it

$str = 'This IS MY string';
echo strtoupper($str);
echo '<br>';
echo strtolower($str);
echo '<br>';
echo strlen($str);
echo '<br>';

// 	Step 3:  Use a pre-built Array function here and echo it

 $arr = [1,2,3,45,53424,23,3,4,5,23,55,112];
 echo max($arr);
 echo '<br>';
 echo min($arr);
 echo '<br>';
 echo sort($arr);

	
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>