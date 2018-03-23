<?php
	if($_POST)
	{	
		$m = $_POST
		['m'];
		
		$fuer = $m * 9.8;
		echo "El peso es de:" .$fuer." N, clic atras para nueva cantidad"; 
	}
?>