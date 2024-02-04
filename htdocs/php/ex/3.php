<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */

 if(3 <= 2){
	echo "what";
 }elseif(3 <! 4){
	echo "what";
 }else{
	echo "php <br>";
 }



 for($i = 0; $i < 10; $i++){
	echo $i;
 }
 echo  "<br>";
 $a = 0;
 while($a != 10){
	echo $a;
	$a++;
 }


 $condition = 20;
 switch($condition){
	case 12:
		echo "its 12";
		break;
	case 15:
		echo "its 15";
		break;
	case 20:
		echo "its 20";
		break;
	case 2:
		echo "its 2";
		break;
	

 }

	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>