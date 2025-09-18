<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ariketak 2</title>
</head>
<body>
    <h1>Ariketa 2 </h1>
    <h2> Ariketa 2.1</h2>

    <?php
    $egunZeb = date("N");
    if($segunZeb == 1){
        echo "Gaur astelehena da";
    } elseif ($egunZeb == 2){
        echo "Gaur asteartea da";
    } elseif ($egunZeb == 3){
        echo "Gaur asteazkena da";
    }elseif ($egunZeb == 4){
        echo "Gaur osteguna da";
    }elseif ($egunZeb == 5){
        echo "Gaur ostirala da";
    }
    elseif ($egunZeb == 6){
        echo "Gaur larunbata da";
    } elseif ($egunZeb == 2){
        echo "Gaur igandea da";
    }
    ?>

    <h3> Ariketa 2.2 </h3>
     <?php
    $notak = "F";

    switch($notak){
        case "F":
            echo "Oso gutxi";
            break;
        case "D":
            echo "gutxi";
            break;
        case "C":
            echo "nahiko";
            break;
        case "B":
            echo "ondo";
            break;
        case "A":
            echo "Bikaina";
            break;
        default:
            echo "Hobe da gehiago ikastea";
    }
    ?>

    <h4> Ariketa 2.3 </h4>

    <?php
    $zbk = rand(0, 30);
    echo $zbk. "<br>";
    if($zbk < 10){
        echo "0 eta 10 artean dago";
    } elseif ($zbk > 10 and $zbk < 20){
        echo "10 eta 20 artean dago";
    } else {
        echo "20 eta 30 artean dago";
    }
    ?>
</body>
</html>