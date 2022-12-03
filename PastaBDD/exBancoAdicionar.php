<?php
    $servidor="localhost";
    $usuario = "root";
    $senha = "";
    $bancodedados="dawacademicomanha";
       if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = $_POST["nome"];
        $mat = $_POST["matricula"];
        $email= $_POST["email"];

        $conn = new mysqli($servidor, $usuario, $senha, $bancodedados);
        

        $sql = "INSERT INTO `alunos`(`nome`, `matricula`, `email`) VALUES ('$nome', '$mat', '$email')";
        if(!$conn->query($sql)){
            echo("Error Description: ". $conn->error);
        }
        $result = $conn->query($sql);
        echo $sql;
    } 
?>
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <title>Exemplo Adicionar BD</title>
    </head>
    <body>
        <h1>Adicionar Alunos</h1>
        <form action="exBancoAdicionar.php" method="POST" class="formulario">
            <label for="nome">Nome do Aluno:</label><br>
            <input type="text" name="nome"><br>

            <label for="matricula">Matricula do Aluno:</label><br>
            <input type="text" name="matricula"><br>

            <label for="email">Email do Aluno:</label><br>
            <input type="text" name="email"><br>
             
            <input class="botao" type="submit" value="Enviar">
        </form>
    </body>
</html>