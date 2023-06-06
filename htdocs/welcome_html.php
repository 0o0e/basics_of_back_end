<html>
<body>
<?php
$naam = $email = "" ; // alle variabelen zijn leeg
if ($_SERVER["REQUEST_METHOD"] == "POST") { // als de methode post is dan krijgen de variabelen de waardes die worden ingevuld
    $naam = test_input($_POST["naam"]);
    $email = test_input($_POST["email"]);

}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
  
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
naam: <input type="text" name="naam"><br>
email: <input type="text" name="email"><br>
<input type="submit">
</form>

<h1>De ingevulde gegevens zijn:</h1>
naam: <?php echo $naam;?> <br>
email: <?php echo $email; ?>

</body>
</html>

