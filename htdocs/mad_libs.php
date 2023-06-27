<html>
<body>
<style>
    .error {color: #FF0000;}

</style>
<?php
$kunnen = $persoon = $getal = $vakantiebij = $besteeigenschap = $slechtsteeigenschap = $ergste = "" ; // alle variabelen zijn leeg

// if($_SERVER["REQUEST_METHOD"] == "POST") { // als de methode post is dan krijgen de variabelen de waardes die worden ingevuld
//     $naam = test_input($_POST["naam"]);
//     $email = test_input($_POST["email"]);

// }

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kunnen = test_input($_POST["kunnen"]);
    $persoon = test_input($_POST["persoon"]);
    $getal = test_input($_POST["getal"]);
    $vakantiebij = test_input($_POST["vakantiebij"]);
    $besteeigenschap = test_input($_POST["besteeigenschap"]);
    $slechtsteeigenschap = test_input($_POST["slechtsteeigenschap"]);
    $ergste = test_input($_POST["ergste"]);

}

  
?>
<form method="post" action="madlibs.php">
wat zou je graag willen kunnen? <input type="text" name="kunnen"><br>
met welke persoon kun je goed opschieten?  <input type="text" name="persoon"><br>
wat is je favoriete getal?   <input type="text" name="getal"><br>
wat heb je altijd bij je op vakantie?  <input type="text" name="vakantiebij"><br>
wat is je beste persoonlijke eigenschap? <input type="text" name="besteeigenschap"><br>
wat is je slechtste persoonlijke eigenschap? <input type="text" name="slechtsteeigenschap"><br>
wat is het ergste dat je kan overkomen? <input type="text" name="ergste"><br>
<input type="submit">
</form>

</body>
</html>

