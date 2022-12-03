<?php
    $servidor="localhost";
    $usuario = "root";
    $senha = "";
    $bancodedados="dawacademicomanha";
    $vazio=false;
       if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = $_POST["nome"];
        $mat = $_POST["matricula"];
        $email= $_POST["email"];

        
        $conn = new mysqli($servidor, $usuario, $senha, $bancodedados);
        if(empty($nome) && empty($email))
        {
            $vazio = true;
        }
        else{
            if(empty($nome))
            {
                $sql = "UPDATE `alunos` SET `email` = '$email' WHERE `matricula`= $mat";
            }
            else{
                if(empty($email))
                {
                    $sql = "UPDATE `alunos` SET `nome`='$nome' WHERE `matricula`= $mat";
                }
                else
                {
                    $sql = "UPDATE `alunos` SET `nome`='$nome',`email`='$email' WHERE `matricula`= $mat";
                }
            }
            if(!$conn->query($sql)){
                echo("Error Description: ". $conn->error);
            }
            $result = $conn->query($sql);
            echo $sql;
        }

       
    } 
?>
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <title>Exemplo Alterar BD</title>
    </head>
    <body>
        <h1>Alterar Alunos</h1>
        <form action="exBancoAlterar.php" method="POST" class="formulario">
            <label for="matricula">Matricula do Aluno a ser alterado:</label><br>
            <input type="text" name="matricula"><br>
        
            <label for="nome">Nome novo:</label><br>
            <input type="text" name="nome"><br>

            <label for="email">Email novo:</label><br>
            <input type="text" name="email"><br>

            <input class="botao" type="submit" value="Enviar">
        </form>
        <?php if($vazio){echo "<p> Preencha pelo menos um dos campos! </p>";} ?> 
    </body>
</html>