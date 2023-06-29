

<!-- Er zijn veel mensen die niet kunnen <?php echo  $_POST['kunnen']; ?>. Neem nou <?php echo  $_POST['persoon']; ?>. Zelfs met de hulp van een <?php echo  $_POST['vakantiebij']; ?> of zelfs <?php echo  $_POST['getal']; ?> kan <?php echo  $_POST['persoon']; ?> niet <?php echo  $_POST['kunnen']; ?>. Dat heeft niet te maken met een gebrek aan <?php echo  $_POST['besteeigenschap']; ?>, maar met een te veel aan <?php echo  $_POST['slechtsteeigenschap']; ?>. Te veel <?php echo  $_POST['slechtsteeigenschap']; ?> leidt tot <?php echo  $_POST['ergste']; ?> en dat is niet goed als je wilt <?php echo  $_POST['kunnen']; ?>. Helaas voor <?php echo  $_POST['persoon']; ?>. -->


<?php
// $stringg = "Er zijn veel mensen die niet kunnen $kunnen;. Neem nou  $persoon;. Zelfs met de hulp van een   $vakantiebij of zelfs $getal']; kan  $persoon'];  niet  $kunnen'];. Dat heeft niet te maken met een gebrek aan   $besteeigenschap'];, maar met een te veel aan  $slechtsteeigenschap'];. Te veel   $slechtsteeigenschap']; leidt tot  $ergste']; en dat is niet goed als je wilt  $kunnen'];. Helaas voor  $persoon'];.";
// echo $stringg;
?>




<!DOCTYPE html>
<head>
<link rel="stylesheet" type="text/css" href="madlibs.css">
</head>
<body>


<div id="bg">
    <h1> MAD LIBS </h1>
</div>

<div id="thebuttons">
    <button onclick="location.href = 'mad_libs.php';" class="dropbtn">Home</button>
    <button onclick="location.href = 'paniek.php';" class="dropbtn">Er heerst paniek</button>
    <button onclick="location.href = 'onkunde.php';" class="dropbtn">Onkunde</button>
</div>

<div id="container">
    <h3>Er heerst paniek</h3>

    <p>
        Er heerst paniek in het koningkrijk <?php echo  $_POST['land']; ?>. Koning <?php echo  $_POST['docent']; ?> is ten einde raad en als koning <?php echo  $_POST['docent']; ?> ten einde raad is, dan roept hij zijn ten-einde-raadsheer <?php echo  $_POST['persoon']; ?>. 
        <br>
        "<?php echo  $_POST['persoon']; ?>! Het is een ramp! Het is een schandel!"
        <br>
        "Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"
        <br>
        "Mijn <?php echo  $_POST['huisdier']; ?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?php echo  $_POST['speelgoed']; ?> voor hem gekocht!"
        <br>
        "Majesteit, uw <?php echo  $_POST['huisdier']; ?> komt vast vanzelf weer terug?"
        <br>
        "Ja da's leuk en aardig, maar hoe moet ik in die tussentijd <?php echo  $_POST['bezigheid']; ?> leren?"
        <br>
        "Maar Sire, daar kunt u toch uw <?php echo  $_POST['kopen']; ?> voor gebruiken."
        <br>
        "<?php echo  $_POST['persoon']; ?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."
        <br>
        "<?php echo  $_POST['verveelt']; ?>, Sire"
    </p>



</p>



</div>

<div id="footer">
    <footer>&copy; Copyright 2023 made by Esma.</footer>
</div>


</body>
</html>

