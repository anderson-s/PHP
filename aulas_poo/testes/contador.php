<?php
	$arquivo = "contador.txt";
	
	$handle = fopen($arquivo, 'r+');
	$data = fread($handle, 512)
	$cont = $data + 1;
	// $cont = fread($id, filesize($cont));
	print "Voce é o visitante numero".$cont;

	fseek($handle, $cont);
	fclose($handle);

?>