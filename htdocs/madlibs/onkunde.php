<!DOCTYPE html>
<head>
<link rel="stylesheet" type="text/css" href="madlibs.css">
</head>
<body>

<?php
$kunnen = $persoon = $getal = $vakantiebij = $besteeigenschap = $slechtsteeigenschap = $ergste = "" ; // alle variabelen zijn leeg

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


<div id="bg">
    <h1> MAD LIBS </h1>
</div>

<div id="thebuttons">
    <button onclick="location.href = 'mad_libs.php';" class="dropbtn">Home</button>
    <button onclick="location.href = 'paniek.php';" class="dropbtn">Er heerst paniek</button>
    <button onclick="location.href = 'onkunde.php';" class="dropbtn">Onkunde</button>
</div>

<div id="container">
    <form method="post" action="onkunde_uitkomst.php">
    wat zou je graag willen kunnen? <input type="text" name="kunnen"><br>
    met welke persoon kun je goed opschieten?  <input type="text" name="persoon"><br>
    wat is je favoriete getal?   <input type="text" name="getal"><br>
    wat heb je altijd bij je op vakantie?  <input type="text" name="vakantiebij"><br>
    wat is je beste persoonlijke eigenschap? <input type="text" name="besteeigenschap"><br>
    wat is je slechtste persoonlijke eigenschap? <input type="text" name="slechtsteeigenschap"><br>
    wat is het ergste dat je kan overkomen? <input type="text" name="ergste"><br>
    <input type="submit">
    
    </form>


</div>

<div id="footer">
    <footer>&copy; Copyright 2023 made by Esma.</footer>
</div>


</body>
</html>

