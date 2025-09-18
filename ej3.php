<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ariketak 3</title>
</head>
<body>
    <h1>Ariketa 3 </h1>
    <h2> Ariketa 3.1</h2>
    <?php
    $zbk = rand(1, 10);
    $contador = 0;
    $contadorZbk = 0;
    while ($contador < 10) {
        $contador += 1;
        $contadorZbk = $zbk + $contadorZbk;
    }
    echo $contadorZbk;
    ?>

    <h3> Ariketa 3.2 </h3>

    <?php
    $contador = 1;
    for($i = 1; $i <=5; $i++){
        $contador *= $i;
    }
    echo $contador;
    ?>

    <h4> Ariketa 3.3 </h4>

    <?php
    $zbk = 0;
    do {
        $zbk += 3;
        echo $zbk ."\n";
    } while ($zbk < 30);
    ?>

    <h5> Ariketa 3.4 </h5>

    <?php
    $herrialdeak = array("EH", "Frantzia", "Alemania", "Italia");
    foreach($herrialdeak as $herrialde){
        echo $herrialde ."<br>";
    }
    ?>

    <h6> Ariketa 3.5 </h5>

    <?php
    $contador = 0;
    for($i = 2; $i <= 100; $i ++){
        $primo = true;
        for($j = 2; $j <= sqrt($i); $j++){
            if($i % $j == 0){
                $primo = false;
                break;
        }
        } if($primo) {
            echo $i ."\n";
            $contador += 1;
        }
    }
    echo "<br>";
    echo "Kopurua: $contador";
    ?>
</body>
</html>