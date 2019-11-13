<?php
    /**
     * Created by PhpStorm.
     * User: inf.gerbaudos1102
     * Date: 11/11/2019
     * Time: 12:54
     */
    $cognome = $_REQUEST["cognome"];
    $nome = $_REQUEST["nome"];
    $email = $_REQUEST["email"];
    $password = $_REQUEST["password"];

    $marca = $_REQUEST["marca"];
    $modello = $_REQUEST["modello"];

    $optional = $_REQUEST["optional"];

    $debug = 1;
    if($debug)
    {
        echo "nome: " . $nome . "</br>";
        echo "cognome: " . $cognome . "</br>";
        echo "email: " . $email . "</br>";
        echo "password: " . $password . "</br>";
        echo "marca: " . $marca . "</br>";
        echo "modello: " . $modello . "</br>";

        echo "optional: ";
		echo "<br>";
		
        foreach($optional as $opt)
        {
            echo $opt;
        }
    }
?>