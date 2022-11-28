<?php

//conectar com o banco. fazer por último
include ("conexao3.php");

//garante que o usuario enviou algum arquivo. um arquivo por vez.
if(isset($_FILES['arquivo'])){
    //colocando o arquivo em uma variável
    $arquivo = $_FILES['arquivo'];
  

    //se der erro no envio
    //se o servidor estiver sem espaço ou falha na conexao    
    if($arquivo['error'])
        die("Falha ao enviar arquivo");

    //limitar o tamanho do arquivo enviado
    if($arquivo['size'] > 2097152) //2MB
        die("Arquivo muito grande! Max: 2MB");
    
        //definir para qual pasta vai o arquivo
        $pasta = "arquivos/";
                        
        //vamos usar a função UNIQID que gera nºs aleatrios 
        //e não corre o risco de arquivos repetidos e de sobrescreve-los
        $nomeDoArquivo = $arquivo['name'];
        $novoNomeDoArquivo = uniqid();

        //configura a extensão do arquivo. o caminho do arquivo
        //strlower deixa minúsculo
        $extensao = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION));

        //só vai aceitar arquivo de imagem jpg e png
        if($extensao != "jpg" && $extensao !="png")
            die("Tipo de arquivo não aceito");

        //move_upload_file = funcao que vai armazenar o arquivo no local e nome desejado
        $path = $pasta . $nomeDoArquivo . "." . $extensao;
        $deu_certo = move_uploaded_file($arquivo["tmp_name"], $path);
            //vai retornar true se deu certo e false se deu errado
            if($deu_certo) {
                //echo "<p>Arquivo enviado com sucesso! Para acessá-lo, 
                //<a target=\"blank\" href=\"arquivos/$nomeDoArquivo.$extensao\">clique aqui</a></p>";
                $mysqli->query("INSERT INTO arquivos (nome, path) VALUES('$nomeDoArquivo', '$path')") 
                or die($mysqli->error);
                echo "<p>Arquivo enviado com sucesso</p>";
            }else
                echo "<p>Falha ao enviar arquivo</p>";
            



}

//fazer depois passo 1 //
//criando uma consulta//
$sql_query = $mysqli->query("SELECT * FROM arquivos") or die($mysqli->error);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de Arquivo</title>
</head>
<body>
    <!--enctype - atributo extra que indica o tipo de arquivo q está sendo enviado-->
    <!--action fica em branco, pois o arquivo será enviado para a mesma página-->
   <form method="POST" enctype="multipart/form-data" action="">
        <p><label for="">Selecione o arquivo</label>
        <input name="arquivo" type="file"></p>
        <button name="upload" type="submit">Enviar arquivo</button>
   </form>
   
   <!--fazer depois passo 2-->
   <h2>Lista de Arquivos</h2>
    <table border="1" cellpadding="10">
        <thead>
            <th>Preview</th>
            <th>Arquivo</th>
            <th>Data de Envio</th>
           
        </thead>
        <tbody>
        <?php
        //fecth_assoc - Obtem uma linha do conjunto de resultados//
        while($arquivo = $sql_query->fetch_assoc()){
        ?>
            <tr>
                <td><img height="50 " src="<?php echo $arquivo['path']; ?>" alt=""></td>
                <!--criando um link para os arquivos e o usuário poder acessar-->
                <td><a target="_blank" href="<?php echo $arquivo['path']; ?>"><?php echo $arquivo['nome']; ?></a></td>
                <!--mostra a data no formato de data--> 
                <td><?php echo date ("d/m/Y H:i", strtotime($arquivo ['data_upload'])); ?></td>
               
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
  
</body>
</html>
<!--criar um banco de dados chamado arquivos -->