<?php
	//declare(strict_types=1);
	function validaNome(string $nome): bool{
		if (empty($_POST['nome'])) {
			setMensagemErro("Campo nome não pode ser vazio");
			//header("location: index.php");
			return false;
		} else if (strlen($_POST['nome']) <= 3){
			setMensagemErro("Nome não pode ter menos de 3 caracteres");
			//header("location: index.php");
			return false;
		}
		return true;
	}

	function validaIdade(string $idade) : bool{
		if (empty($_POST['idade'])) {
			setMensagemErro("Campo idade não pode ser vazio");
			//header("location: index.php");
			return false;
		}  else if (!is_numeric($_POST['idade'])){
			setMensagemErro("Idade deve ser um número inteiro");
			//header("location: index.php");
			return false;
		}
		return true;
	}
?>