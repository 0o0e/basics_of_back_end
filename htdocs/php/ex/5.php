<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 
	$string = "bibi bibi";
	$list = [2,4,6,8,9,20];
	echo pow(5, 2). "<br>";   /* macht */
	echo rand(1,20). "<br>";  /* random getal tussen 2 getallen */
	echo sqrt(100). "<br>"; /* wortell */
	echo ceil(5.8). "<br>"; /* verhogen */
	echo floor(5.8). "<br>"; /* verlagen */
	echo strlen($string). "<br>"; /* lengte van str */
	echo max($list). "<br>"; /* hoogste cijfer in list */
	echo min($list). "<br>"; /* laagste cijfer in list */

	sort($list). "<br>"; /* sorteert de lijst */

	print_r($list). "<br>"; /* lijst met key value  (eerste is 0 tweede is 1 enzv) */







/*  Step1: Use a pre-built math function here and echo it
	


	Step 2:  Use a pre-built string function here and echo it


	Step 3:  Use a pre-built Array function here and echo it

 */

echo pow(5,2);

echo strtoupper("hihihi hallo babibobeda");

echo min([2,3,5,7,2,4,444]);


	
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>