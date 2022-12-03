<?php
    $bol=false;
    $servidor="localhost";
    $usuario = "root";
    $senha = "";
    $bancodedados="dawacademicomanha";
       if($_SERVER["REQUEST_METHOD"] == "POST"){
        $mat = $_POST["matricula"];
        $nome= "";
        $conn = new mysqli($servidor, $usuario, $senha, $bancodedados);
       
        $sqlNome = ("SELECT `nome` FROM `alunos` WHERE `matricula` = $mat");
        $sql = ("DELETE FROM `alunos` WHERE `matricula` = $mat");

        if ($result=mysqli_query($conn,$sqlNome))
        {        
            while ($row = mysqli_fetch_row($result))
            {
                $nome = $row[0];
            }   
        }
        if(mysqli_num_rows($result) != 0) {$bol = true;}

        if(!$conn->query($sql)){ echo("Error Description: ". $conn->error); }   
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
        <form action="exBancoDeletar.php" method="POST" class="formulario">
            <label for="matricula">Matricula do Aluno</label><br>
            <input type="text" name="matricula"><br>
            
            <input type="submit" value="Enviar">
        </form>
        <?php if($bol){echo "<p align=\"center\"> aluno $nome excluido</p>"; }?>
    </body>
</body>
</html>