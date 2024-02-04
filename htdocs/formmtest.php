<DOCTYPE html>

<html lang="en">
<head>
    <meta charset= "UTF-8">
    <title>Document</title>

</head>

<body>
    
<!-- 
<form action="formmtest.php" method="post" >
    <label>username:</label>
    <input type="text" name="username">
    <label>password:</label>
    <input type="password" name="password">
    <input type="submit" name="log in">

</form> -->


<form action="formmtest.php" method="post">
    <input type="radio" name="paymethod" value="visa">
    Visa <br>
    <input type="radio" name="paymethod" value="paypal">
    Paypal <br>
    <input type="radio" name="paymethod" value="ideal">
    Ideal <br>
    <input type="submit" name="confirm" value="submitt">


</form>

</body>

<?php 

if(isset($_POST["confirm"])){

    $paymethod = null;


    if(isset($_POST["paymethod"])){
        $paymethod = $_POST["paymethod"];
    }    




    switch($paymethod){
        case "visa":
            echo "you chose visa";
            break;
        case "paypal":
            echo "you chose paypal";
            break;
        case "ideal":
            echo "you chose ideal";
            break;
        default:
            echo "please choose one";

    }

    
    // if($paymethod == "visa"){
    //     echo "you chose visa";
    // }elseif($paymethod == "paypal"){
    //     echo "you chose paypal";
    // }elseif($paymethod == "ideal"){
    //     echo "you chose ideal";
    // }
    // elseif(empty($paymethod)){
    //     echo "please choose one";
    // }

}


?>

</html>

