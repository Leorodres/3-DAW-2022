<?php
    $servidor="localhost";
    $usuario = "root";
    $senha = "";
    $bancodedados="3dawacademico";
       if($_SERVER["REQUEST_METHOD"] == "POST"){
        $mat = $_POST["matricula"];

        $conn = new mysqli($servidor, $usuario, $senha, $bancodedados);
        if($conn ->connect_error){
            die("Conexao com banco de dados falhou.");
        }

        $sql = "DELETE FROM `alunos` WHERE `matricula` = $mat";
        $result = $conn->query($sql);
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
    <title>Exemplo Deletar BDD</title>
</head>
<body>
    <h1>Deletar Alunos</h1>
        <form action="exBancoDeletar.php" method="POST" class="container">
            <label for="matricula">Matricula do Aluno</label><br>
            <input type="text" name="matricula"><br>
            
            <input type="submit" value="Enviar">
        </form>
    </body>
</body>
</html>