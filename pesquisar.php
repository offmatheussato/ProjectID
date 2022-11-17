<?php

	$u = $_POST['pessoa'];
	$p = $_POST['senha'];
	$p = md5($p);
	//print $p;
	
	$pont = fopen("ferias.txt","r");
	
	while (true)
	{
		
		$linha = fgets($pont);
		
		if ($linha == null)
		{
			break;
		} else{
			$linha = trim($linha);
			$cad = explode(",", $linha);
			//print_r ($cad);
			
			if ($cad[0]== $u && $p == $cad[1])
			{
				$achou = 1;
			}
			else
			{
				$achou = 0;
			}
		}
	}
	fclose($pont);
	
	if ($achou == 1)
		print "Bem-vindo (a)!";
	else
		print "senha ou usuário errado";

?>