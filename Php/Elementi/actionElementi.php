<?php

	$cognome = $_REQUEST["cognome"];
    $nome = $_REQUEST["nome"];
    $email = $_REQUEST["email"];
    $password = $_REQUEST["password"];

	$tipoMateriale = $_REQUEST["tipoMateriale"];
	
	$durezza = $_REQUEST["durezza"];
	
	$peso = $_REQUEST["peso"];
	
	
	echo "Il sig.".$cognome." ".$nome." ha portato ".$tipoMateriale. " di durezza ". $durezza . " con peso " . $peso;
	
	
?>