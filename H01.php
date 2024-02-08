<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP harjutused</title>
</head>
<body>
    <h1>Harjutused 06</h1>
    <?php
        $p = 8;
        switch ($p) {
            case ($p > 10):
                echo "Super!";
                break;
            case ($p>=5 && $p<=9);
                echo "Tehtud!";
                break;
            case ($p<5):
                echo "Käsin!";
                break;
            default:
                echo "Punkte pole lisatud";
                break;
        }

?>

<h1>Harjutused 05</h1>

<form action="#" method="GET">
 Lisa sünniaasta: <input type="number" name="synd"
 min="1900" max="2100" placeholder="200">
 
 <input type="submit" value="Leia juubel"><br>
</form>
<?php
    if (!empty($_GET['synd'])) {
        $aasta = ($_GET['synd']);
        $seeAasta = date('Y');
        $vanus = $seeAasta - $aasta;
        if ($vanus % 5 == 0) {          //jääk, et leida, kas on juubel.
            echo "Sul juubel";
        } else {
            echo "Ei ole juubel";
        }
    }

?>

<h1>Harjutused 04</h1>
    <?php
        $nr1 = 12;
        $nr2 = -23;

        // < > >= <= ==(võrdne) !=(ei tohi võrduda) True False
        //OR - VÕI(||) - üks õige
        //AND - NING(&&) - mõlemad õiged
        if ($nr2 != 0 && $nr1 !=0) {
        $tehe = $nr1 / $nr2;
        echo $tehe;
        } else {
            echo "Nulliga ei saa jagada!";
        }


    ?>


    <h1>Harjutused 03</h1>
    <!-- action -> fail kuhu saadetakse. Kui action tühi, siis ei saada kuhugi -->
    <!-- method -> kuidas saadetakse, GET on valik, POST on peidetud -->
    <form action="#" method="GET">
        Toode 1: <input type="number" name="toode1"><br>
        Toode 2: <input type="number" name="toode2"><br>
        Toode 3: <input type="number" name="toode3"><br>

        <input type="submit" value="Arvuta">
    </form>
    <?php
        if (!empty($_GET['toode1']) &&
            !empty($_GET['toode2']) &&
            !empty($_GET['toode3'])) {
           
       
        //GET-iga saatsin GET-iga võtan (aadressribalt) 
        $t1 = $_GET['toode1'];
        $t2 = $_GET['toode2'];
        $t3 = $_GET['toode3'];
        $kokku = $t1+$t2+$t3;

        echo "Toode 1: $t1 tk<br>";
        echo "Toode 2: $t2 tk<br>";
        echo "Toode 3: $t3 tk<br>";
        echo "kõik kokku: $kokku tk";
         }

    ?>


    <h1>Harjutused 02</h1>
    <?php
        $arv1 = 5;              //int
        $arv2 = 3.14;           //float
        $tehe = $arv1/$arv2;    //string
        $jaak = $arv1 % $arv2;   //jääk (protsendi märk leiab)

        echo "Vastus: $tehe <br>";
        printf("Vastus: %d / %0.2f = %0.2f <br>", $arv1, $arv2, $tehe);     //%d on täisarv, %0.2f on 2 kohta peale koma. %arv1, $arv2, $tehe on järjekord
        echo $jaak;
    ?>



    <h1>Harjutused 01</h1>

    <?php
    
    /* 
        Harjutus 01
        08.02.2025
        Lihtsalt harjutan    
    
    */
        $enimi = "Kaspar";
        $pnimi = "Nurme";
        $v = 19;
        $pikkus = 1.74;
        // $enimi = "Maarja";
        $hyydnimi = "Kassu";
        $lugu ='Dr. Alban - "It\'s My Life "';


        echo "<p>Tere $enimi \"$hyydnimi\" $pnimi!<br>";
        echo "Vanus: $v<br>Pikkus: $pikkus</p>";
        echo '<p>Lemmik lugu on: '.$lugu.'</p>'; //punkt on elementide kokkuliitmiseks 


    ?>
</body>
</html>