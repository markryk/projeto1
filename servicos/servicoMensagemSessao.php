<?php
	//session_start();
	function setMensagemErro(string $message): void {
		$_SESSION['error_message'] = $message;
	}
	function getMensagemErro(): ?string {
		if (isset($_SESSION['error_message'])) {
			return $_SESSION['error_message'];
		}
		return null;
	}
	function removeMensagemErro(): void {
		if (isset($_SESSION['error_message'])) {
			unset($_SESSION['error_message']);
		}
	}

	function setMensagemSucesso(string $message): void {
		$_SESSION['success_message'] = $message;
	}
	function getMensagemSucesso(): ?string {
		if (isset($_SESSION['success_message'])) {
			return $_SESSION['success_message'];
		}
		return null;
	}
	function removeMensagemSucesso(): void {
		if (isset($_SESSION['success_message'])) {
			unset($_SESSION['success_message']);
		}
	}
?>