<?php
//variaveis que irão receber os dados
$mensagem = "Preencha o formulário";
$nome = "";
$email = "";
$msg = "";

//verificar se os dados estão chegando no BD
//os nomes devem estar iguais ao do banco criado 
 
if (isset($_POST["nome"], $_POST["email"], $_POST['msg'])){
    //iniciando a conexao 
    $conexao = new PDO("mysql:host=localhost;dbname=site1", "root", "");

    //atribuindo os valores dos inputs para as variáveis   
    //o filter_input, limpa os dados depois de inseridos 
	$nome = filter_input(INPUT_POST, "nome", FILTER_UNSAFE_RAW);
	$email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
	$msg = filter_input(INPUT_POST, "msg", FILTER_UNSAFE_RAW);

	//verificar se o usuário digitou dados invalidos  
    if(!$nome || !$email || !$msg){
		$mensagem = "Dados Inválidos";
		
	}else{
        //vai inserir os dados na tabela lá do BD
		$stm = $conexao->prepare('INSERT INTO contato (nome, email, msg) VALUES (:nome, :email, :msg)');
        //bindParam = informar valores dinamicamente para uma requisição 
		//SQL usando PHP, através de uma variável ou constante.
		$stm->bindParam('nome', $nome);
		$stm->bindParam('email', $email);
		$stm->bindParam('msg', $msg);
		$stm->execute();

		$mensagem = "Mensagem Enviada com Sucesso";
	
		//limpar campos qndo a msg for enviada
		$nome = "";
		$email = "";
		$msg = "";

	}

}