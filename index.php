<?php
	session_start();
	include 'servicos/servicoMensagemSessao.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulário de inscrição</title>
</head>
<body>
	<p> Formulário para inscrição de competidores </p>
	<form action="script.php" method="POST">
		<?php
			$success_message = getMensagemSucesso();
			if (!empty($success_message)) echo $success_message;

			$error_message = getMensagemErro();
			if (!empty($error_message)) echo $error_message;
		?>
		<br><br>
		<label for="user_name">Nome</label>
		<input type="text" name="nome" id="user_name">
		<br><br>
		<label for="user_age">Idade</label>
		<input type="text" name="idade" id="user_age">
		<br><br>
		<input type="submit" name="" value="Cadastrar">
	</form>
</body>
</html>