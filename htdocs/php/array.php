<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <title>variables</title>

</head>

<body>

<?php


$array1 = array(2,3,4,'yo','<h1>yoo</h1>');

print_r($array1);
echo $array1[4];


$array2 = ['name'=>'sara', 'lastname' => 'de boer'];
echo $array2['name'] . " " . $array2['lastname']. "<br>";

print_r($array2);
?>

</body>


</html>
