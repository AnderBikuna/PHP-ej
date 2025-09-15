<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ariketak 1</title>
</head>
<body>
    <h1>Ariketak 1</h1>
    <h2>Ariketa 1.1</h2>

    <?php
        $zenbaki = 9; // Iruzkina: $zenbaki aldagaia 9 balioa gordetzeko erabiltzen da
        echo "<p>Zenbakia: $zenbaki</p>";
    ?>

    <h3>Ariketa 1.2</h3>
    <?php
        $balioa = 6;
        if ($balioa < 10){
            echo "zenbakia txia da";
        } else {
            echo "zenbakia handia da";
        }
    ?>
    <h4>Ariketa 1.3</h4>
    <?php
        $erosketa = 11;
        if($erosketa > 10){
            echo "Erosketa handia";
        }
    ?>

    <h5> Ariketa 1.4 </h5>
    <form method="post">
    <input type="number" name="pinO" placeholder="Sartu PIN-a">
    <input type="submit" value="Bidali">
</form>

    <?php
        $pin = 1234;
        if (isset($_POST['pinO'])){
            $pinO = $_POST['pinO'];
            if($pinO == $pin){
                echo "zenbaki zuzena da";
            }else {
            echo "zenbaki okerra da";
         }
        }
    ?>
</body>
</html>

