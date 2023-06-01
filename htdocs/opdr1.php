<?php
$tijd = date("H:i");
$images = ['images/morning.png','images/afternoon.png','images/evening.png','images/night.png'];

$greetings = ['morgen','middag','avond','nacht'];

// function images(){
//     if ($GLOBALS['tijd'] >= '06:00' && $GLOBALS['tijd'] < '12:00'){
//         return 'images/morning.png';
//     }
//     if($GLOBALS['tijd'] >= '12:00' && $GLOBALS['tijd'] < '18:00'){
//         return 'images/afternoon.png';
//     }
//     if($GLOBALS['tijd'] >= '18:00' && $GLOBALS['tijd'] < '00:00'){
//         return 'images/evening.png';
//     }
//     if($GLOBALS['tijd'] >= '00:00' && $GLOBALS['tijd'] < '06:00'){
//         return 'images/night.png';
//     }
// }


// function greeting(){
//     if ($GLOBALS['tijd'] >= '06:00' && $GLOBALS['tijd'] < '12:00'){
//         return 'Goede morgen!<br> Het is nu '.$GLOBALS['tijd'];
//     }
//     if($GLOBALS['tijd'] >= '12:00' && $GLOBALS['tijd'] < '18:00'){
//         return 'Goede middag!<br> Het is nu '.$GLOBALS['tijd'];
//     }
//     if($GLOBALS['tijd'] >= '18:00' && $GLOBALS['tijd'] < '00:00'){
//         return 'Goede avond!<br> Het is nu '.$GLOBALS['tijd'];
//     }
//     if($GLOBALS['tijd'] >= '00:00' && $GLOBALS['tijd'] < '06:00'){
//         return 'Goede nacht!<br> Het is nu '.$GLOBALS['tijd'];
//     }
// }

function dayparts(){
    if ($GLOBALS['tijd'] >= '06:00' && $GLOBALS['tijd'] < '12:00'){
        return 0;
    }
    if($GLOBALS['tijd'] >= '12:00' && $GLOBALS['tijd'] < '18:00'){
        return 1;
    }
    if($GLOBALS['tijd'] >= '18:00' && $GLOBALS['tijd'] < '00:00'){
        return 2;
    }
    if($GLOBALS['tijd'] >= '00:00' && $GLOBALS['tijd'] < '06:00'){
        return 3;
    }

}

$nummer = dayparts();
$image = $images[$nummer];
$greet = "Goede $greetings[$nummer]!<br> Het is nu ".$GLOBALS['tijd'];
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">

        <style>
            body{
                background-image: url('<?php echo $image; ?>');
                background-size: 100%;
            }
            .greetings{
                margin-top: 250px;
                color: white;
                text-align: center;
                size:200%
            }
        </style>
    

    </head>
    <body>
        <h1 class = "greetings"> <?php echo $greet; ?></h1>
    
        
    </body>
