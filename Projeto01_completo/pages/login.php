<?php
include('conexao2.php');


//se existir email ou se existir senha, faz o login
if(isset($_POST['email']) || isset($_POST['senha'])) {
    //verificar se o campo email esta em branco
    if(strlen($_POST['email'])== 0) { //strlen = qntd de caracteres
        echo "Preencha seu e-mail";
    
    //verificar se o campo senha está em branco 
    }else if(strlen($_POST['senha'])== 0) {
        echo "Preencha sua senha";
    }else{
        //real-escape-string = limpa a string q está no campo email
        //evita invasões indesejadas
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        //sql query
        $sql_code = "SELECT * FROM usuarios WHERE 
                    email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or 
            die ("Falha na execução do código SQL: " . $mysqli->error);

        //verificar se a qntdade de registros q a consulta retornou é 1. 
        $quantidade = $sql_query->num_rows;

        if($quantidade == 1){
            //vai pegar os dados do BD e atribuir para a variavel
            $usuario = $sql_query->fetch_assoc();

            //criar uma nova sessão
            //se nao existir sessao, inicia uma 
            if(!isset($_SESSION)){
                session_start();
            }
            //variavel que continua válida, por um determinado período 
            //de tempo mesmo qndo a pessoa troca de página. 
            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome']; 

            //redirecionar o usuário para outra página
            header("Location: painel.php");             

        }else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }
    }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Acesse sua conta para utilizar nossos serviços</h1>
    <form action="" method="POST">
        <p>
        <label>E-mail</label>
        <input type="text" name="email">
        </p>    

        <p>
        <label>Senha</label>
        <input type="password" name="senha">
        </p>    
        <p>
            <button type="submit">Entrar</button>
        </p>
    </form>
    
</body>
</html>