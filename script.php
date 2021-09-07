<?php
	session_start();

	include 'servicos/servicoCategoriaCompetidor.php';
	include 'servicos/servicoValidacao.php';
	include 'servicos/servicoMensagemSessao.php';

	$n = $_POST['nome'];
	$i = $_POST['idade'];

	defineCategoriaCompetidor($n, $i);
	//echo "<br>";
	header('location: index.php');
?>