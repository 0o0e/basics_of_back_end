<!DOCTYPE html>
<head>
<link rel="stylesheet" type="text/css" href="madlibs.css">
</head>
<body>

<?php
$huisdier = $docent = $persoon = $land = $verveelt = $speelgoed = $kopen = $bezigheid = "" ; // alle variabelen zijn leeg

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $huidier = test_input($_POST["huisdier"]);
    $persoon = test_input($_POST["persoon"]);
    $land = test_input($_POST["land"]);
    $verveelt = test_input($_POST["verveelt"]);
    $speelgoed = test_input($_POST["speelgoed"]);
    $kopen = test_input($_POST["kopen"]);
    $bezigheid = test_input($_POST["bezigheid"]);
    $docent = test_input($_POST["docent"]);

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
    <form method="post" action="paniek_uitkomst.php">
    welk dier zou je nooit als huisdier willen hebben? <input type="text" name="huisdier"><br>
    wie is de belangrijkste persoon in je leven?  <input type="text" name="persoon"><br>
    in welk land zou je graag willen wonen?   <input type="text" name="land"><br>
    wat doe je als je je verveelt?  <input type="text" name="verveelt"><br>
    met welk speelgoed speelde je het meest als kind? <input type="text" name="speelgoed"><br>
    bij welke docent spijbel je het liefst? <input type="text" name="docent"><br>
    als je 100000 euro had, wat zou je dan kopen? <input type="text" name="kopen"><br>
    wat is je favoriete bezigheid? <input type="text" name="bezigheid"><br>
    <input type="submit">
    
    </form>


</div>

<div id="footer">
    <footer>&copy; Copyright 2023 made by Esma.</footer>
</div>


</body>
</html>

