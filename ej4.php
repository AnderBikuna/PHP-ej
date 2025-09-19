<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ariketak 4</title>
</head>
<body>
    <h1>Ariketak 4</h1>
    <h2>Ariketa 4.1</h2>

    <?php
        $arrayNum = [];
        $contador = 0;
        $cantidad = 5;

        echo "<table border='1' cellpadding='10' style='border-collapse: collapse; text-align:center;'>";

        echo "<tr>";
        for ($i = 1; $i <= $cantidad; $i++) {
            echo "<th>{$i}. zenbakia</th>";
        }
        echo "</tr>";

        echo "<tr>";
        for ($i = 1; $i <= $cantidad; $i++) {
            $zbk = rand(1, 100);      
            $arrayNum[] = $zbk;
            $contador += $zbk; 
            echo "<td>$zbk</td>";        
        }
        echo "</tr>";

        echo "<tr><td colspan='$cantidad' style='text-align:left;'><strong>Batura: $contador</strong></td></tr>";

        echo "</table>";
    ?>

    <h3>Ariketa 4.2</h3>
    <?php
       $cantidad = 4;
       $herrialdeArray = array("EH", "Frantzia", "Alemania" , "Italia");
       sort ($herrialdeArray); 
       echo "<table border = '1' cellpadding = '10' style = 'border-collapse: collapse; text-align:center;'>";
        echo "<tr>";
        for($i = 1; $i <= $cantidad; $i ++){
                echo "<th>{$i}. herrialdea</th>";
        }
        echo "</tr>";

        echo "<tr>";
        for($i = 0; $i < count($herrialdeArray); $i++){
            echo "<td>{$herrialdeArray[$i]}</td>";
        }
        echo "</tr>";

        echo "</table>";
    ?>
    <h4>Ariketa 4.3</h4>
   <?php
    $arrayZbk = [];
    $cantidad = 6;

    echo "<table border='2' cellpadding='10' style='border-collapse: collapse; text-align:center;'>";
    echo "<tr><th>Zenbakia</th><th>Bikoitia</th></tr>";

    for($i = 0; $i < $cantidad; $i++){
        $arrayZbk[] = rand(0, 100);
    }

    foreach($arrayZbk as $zbk){
        echo "<tr>";          
        echo "<td>$zbk</td>"; 
        if($zbk % 2 == 0){
            echo "<td>BAI</td>"; 
        } else {
            echo "<td>EZ</td>";
        }
        echo "</tr>";         
    }

    echo "</table>";
    ?>
</body>
</html>

