<?php
   error_reporting(E_ALL);
    ini_set("display_errors", 1);

	function obterDadosMontarArray($post) {

		// Monta o array
		$dados = array(
			$post['cpf'] => array(
				"nome" => $post['nome'],
				"telefone" => $post['telefone']
			)
		);

		print_r($dados);
	}
?>
