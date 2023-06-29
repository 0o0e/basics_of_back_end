

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
    <h3>onkunde</h3>

    <p>Er zijn veel mensen die niet kunnen <?php echo  $_POST['kunnen']; ?>. Neem nou <?php echo  $_POST['persoon']; ?>. Zelfs met de hulp van een <?php echo  $_POST['vakantiebij']; ?> of zelfs <?php echo  $_POST['getal']; ?> kan <?php echo  $_POST['persoon']; ?> niet <?php echo  $_POST['kunnen']; ?>. Dat heeft niet te maken met een gebrek aan <?php echo  $_POST['besteeigenschap']; ?>, maar met een te veel aan <?php echo  $_POST['slechtsteeigenschap']; ?>. Te veel <?php echo  $_POST['slechtsteeigenschap']; ?> leidt tot <?php echo  $_POST['ergste']; ?> en dat is niet goed als je wilt <?php echo  $_POST['kunnen']; ?>. Helaas voor <?php echo  $_POST['persoon']; ?>.

</p>



</div>

<div id="footer">
    <footer>&copy; Copyright 2023 made by Esma.</footer>
</div>


</body>
</html>

