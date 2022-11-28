<?php
//criando as variáveis
$usuario = 'root';
$senha = "";
$database = "login";
$host="localhost"; //verifique o nome q esta no seu Heidi

//fazendo a conexão
$mysqli = new mysqli($host, $usuario, $senha, $database);

//verificando se vai dar erro
if ($mysqli->error) {
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);

}