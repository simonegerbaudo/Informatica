<?php 
	$elementi = array(1 => 'rame', 2 => 'oro', 3 => 'diamanti', 4 => 'ferro', 5 => 'ambra');
	for($i=0;$i<10;$i++)
	{
		echo elementi[i];
	}
?>

<?php 
	$elementi = array('Cu' => 'rame', 'Or' => 'oro', 'Dia' => 'diamanti', 'Fe' => 'ferro', 'Amb' => 'ambra');
	echo elementi[Cu];
	echo elementi[Or];
	echo elementi[Dia];
	echo elementi[Fe];
	echo elementi[Amb];
?>

<?php 
	$elementi = array(1 => 'rame', 'oro', 'diamanti', 'ferro', 'ambra');
	for($i=0;$i<10;$i++)
	{
		echo elementi[i];
	}
?>