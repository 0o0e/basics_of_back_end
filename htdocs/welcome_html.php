<html>
<body>
<style>
    .error {color: #FF0000;}

</style>
<?php
$naam = $email = "" ; // alle variabelen zijn leeg
$naamErr = $emailErr = "";


function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["naam"])){
        $naamErr = "name is required";
    }else{
        $naam = test_input($_POST["naam"]);
    }

    if (empty($_POST["email"])){
        $emailErr = "email is required";
    }else{
        $email = test_input($_POST["email"]);
    }

}

  
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
naam: <input type="text" name="naam"><br>
<span class="error">* <?php echo $naamErr;?></span> <br>
email: <input type="text" name="email"><br>
<span class="error">* <?php echo $emailErr;?></span> <br>
<input type="submit">
</form>

<h1>De ingevulde gegevens zijn:</h1>
naam: <?php echo $naam;?> <br>
email: <?php echo $email; ?>

</body>
</html>

