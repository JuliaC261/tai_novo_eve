<?php
//criando as variáveis
$host="localhost"; //verifique o nome q esta no seu Heidi
$usuario = 'root';
$senha = "";
$database = "upload";


//fazendo a conexão
$mysqli = new mysqli($host, $usuario, $senha, $database);

//verificando se vai dar erro
if ($mysqli->connect_errno) {
    echo "Falha ao conectar ao banco de dados: " . $mysqli->connect_error;
    exit();
}
?>