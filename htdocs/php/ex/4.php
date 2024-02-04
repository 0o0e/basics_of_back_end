<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
		
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php  
	define("NAME","Esma");

/*  Step1: Define a function and make it return a calculation of 2 numbers

	Step 2: Make a function that passes parameters and call it using parameter values


 */

 function something(){
	$numbr = 230 + 100;

	return $numbr;
 }

 echo something();

 $number1 = 230;
 $number2 = 100;
 function something2($one, $two){
	$sum = $one +$two;

	return $sum;
 }

 echo something2($number1, $number2) .  "<br>";

 echo NAME;

	
?>





</article><!--MAIN CONTENT-->


<?php include "includes/footer.php"; ?>