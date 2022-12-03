<?php

    $servidor="localhost";
    $usuario = "root";
    $senha = "";
    $bancodedados="dawacademicomanha";
       if($_SERVER["REQUEST_METHOD"] == "GET"){
        $nome = $_GET["nome"];
        $mat = $_GET["matricula"];
        $email= $_GET["email"];

        $conn = new mysqli($servidor, $usuario, $senha, $bancodedados);
        if($conn ->connect_error){
            die("Conexao com banco de dados falhou.");
        }

        $sql = "INSERT INTO `alunos`(`nome`, `matricula`, `email`) VALUES ('$nome', '$mat', '$email')";
        $result = $conn->query($sql);
        echo $sql;
    } 
?>
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <title>Ex SGBD</title>
    </head>
    <body>
        <h1>Formulários Alunos</h1>
        <form action="exArquivoAdd.php" method="GET" class="container">
            <label for="nome">Nome do Aluno</label><br>
            <input type="text" name="nome"><br>

            <label for="matricula">Matricula do Aluno</label><br>
            <input type="text" name="matricula"><br>

            <label for="email">Email do Aluno</label><br>
            <input type="text" name="email"><br>
             
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>
