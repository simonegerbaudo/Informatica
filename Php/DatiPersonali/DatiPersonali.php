<html>
<head>
    <title>Visualizzazione dati personali</title>
</head>
<body>
    <?php
    /**
    * Created by PhpStorm.
    * User: inf.gerbaudos1102
    * Date: 04/11/2019
    * Time: 12:56
    */
        $cognome = $_POST["cognome"];
        $nome = $_POST["nome"];
        $sesso = $_POST["sesso"];
        $cibo = $_POST["cibo"];
        $citazione = $_POST["citazione"];
        $istruzione = $_POST["istruzione"];
        $partegiorno = $_POST["partegiorno"];

        echo "Ciao, $cognome $nome<br>";
        echo "Sei $sesso e ti piace mangiare:<br><br>";
        foreach($cibo as $c){
            echo "$c<br>";
        }
        echo "<br>La tua citazione preferita &egrave;:<br>";
        echo "<em>$citazione</em><br><br>";
        echo "Ti senti pi&ugrave; a tuo aagio di: $partegiorno e il tuo livello di istruzione &egrave;: $istruzione<br>";

    ?>
</body>
</html>
