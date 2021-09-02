<?php
	$categorias = [];
	$categorias[] = 'Infantil';
	$categorias[] = 'Adolescente';
	$categorias[] = 'Adulto';

	//print_r($categorias);

	$nome = 'Marcos';
	$idade = 30;

	/*var_dump($nome);
	var_dump($idade);*/

	if ($idade >= 6 && $idade <= 12) echo "Categoria infantil";
	else if ($idade <= 18) echo "Categoria adolescente";
	else echo "Categoria adulto";

	phpinfo();


?>