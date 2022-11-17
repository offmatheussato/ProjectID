<?php
	$nome = $_POST ['pessoa'];
	$senha = $_POST ['senha'];
	$senha = md5($senha);
	$registro = $_POST ['ferias'];
	$registro = $registro . "\n";
	
	$ab = fopen ("ferias.txt", "a+");
	fwrite ($ab, $nome, strlen($nome));
	fwrite ($ab, ",",1);
	fwrite ($ab, $senha, strlen($senha));
	fwrite ($ab, ",",1);
	fwrite ($ab, $registro, strlen($registro));
	fclose ($ab);
	
	header("location: index.php");
?>