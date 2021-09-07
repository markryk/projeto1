<?php
	function defineCategoriaCompetidor(string $n, string $i): ?string {
		//A interrogação acima permite q a função retorne null, portanto poderá retornar string ou null
		/*$categorias = [];
		$categorias[] = "Infantil";
		$categorias[] = "Adolescente";
		$categorias[] = "Adulto";*/
		if (validaNome($n) && validaIdade($i)) {
			removeMensagemErro();
			if ($i >= 6 && $i <= 12) {
				//echo "Sua categoria é infantil";
				setMensagemSucesso("Seja bem vindo ".$n.", sua categoria é infantil.");
				//header("location: index.php");
				return null;
			}
			else if ($i > 12 && $i <= 18) {
				//echo "Sua categoria é adolescente";
				setMensagemSucesso("Seja bem vindo ".$n.", sua categoria é adolescente.");
				//header("location: index.php");
				return NULL;
			}
			else if ($i > 18){
				//echo "Sua categoria é adulto";
				setMensagemSucesso("Seja bem vindo ".$n.", sua categoria é adulto.");
				//header("location: index.php");
				return NULL;
			}
		} else {
			removeMensagemSucesso();
			return getMensagemErro();
		}
	}
?>