<?php
//iniciar a sessao
if(!isset($_SESSION)){
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>painel</title>
</head>
<body>
    <!--mostrar o nome no usuário -->
    Bem vindo ao painel, <?php echo $_SESSION['nome']; ?>

</body>
</html>