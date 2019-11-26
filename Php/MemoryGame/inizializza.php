<?php
	session_start();

    //array che tiene conto di quale spazio è gia stato usato
    $tempArray = array(
        array("empty", "empty"),
        array("empty", "empty"),
        array("empty", "empty"),
        array("empty", "empty")
    );
    
    //nickname del giocatore
    $_SESSION["nickname"]=$_REQUEST["username"];


    //array delle immagini
    $_SESSION["images"]=array(
        array("img", "img"),
        array("img", "img"),
        array("img", "img"),
        array("img", "img")
    );
    
    //generazione random delle immagini
    for($i = 0; $i < 4; $i++)
    {
        for($j=0; $j<2; $j++)
        {
            $empty = false;
            while($empty == false)
            {
                $x2 = rand(0, 1);
                $x = rand(0, 3);
                if($tempArray[$x][$x2] == "empty")
                {
                   $empty = true;
                   $tempArray[$x][$x2] = "full";
                   $_SESSION["images"][$x][$x2] = "img".($i+1).".png";
                }
            }
        }
    }

    //debug
    $debug = 2;
    if($debug == 1)
    {
        echo json_encode($_SESSION["images"]);
        session_unset();
        session_destroy();
    }
	else if($debug == 2)
	{
        require("giocaMemory.php");		
	}
    else
    {
        require("gioca.php");
    }
?>