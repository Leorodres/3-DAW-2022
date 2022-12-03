<?php
    $servidor="localhost";
    $usuario = "root";
    $senha = "";
    $bancodedados="dawacademicomanha";
    $bool= false;
       if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        $conn = new mysqli($servidor, $usuario, $senha, $bancodedados);
        
        if(isset($_POST["botaoUm"]))
        {
            $mat = $_POST["matricula"];
            if(empty($mat))
            {
                $bol = false;
            }
            else
            {
                $sql = "SELECT  `nome`, `matricula`, `email` FROM `alunos` WHERE `matricula`= $mat";
                $bool = true;
            }
        }
        else
        {
            $sql = "SELECT  `nome`, `matricula`, `email` FROM `alunos` ";
            $bool =  true;
        }
        
    
    } 
?>
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <title>Exemplo Listar BD</title>
    </head>
    <body>
        <h1>Listar Alunos</h1>
        <form action="exBancoListar.php" method="POST" class="formulario">

            <label for="matricula">Listar um aluno:</label><br>
            <input type="text" name="matricula" placeholder="Digite a matricula"><br>
            <input class="botaoUm" name="botaoUm" type="submit" value="Enviar">
            
            <label>Ou Listar todos:</label>
            <input class="botaoTodos" name="botaoTodos" type="submit" value="Enviar">
        </form>
        
        <?php
            if($bool)
            {
                echo "<table class = \"tabela\">";
                echo "<tr><th>Nome</th>";
                echo "<th>Matricula</th>";
                echo "<th>Email</th></tr>";
                if ($result=mysqli_query($conn,$sql))
                {        
                    while ($row = mysqli_fetch_row($result))
                    {
                        echo "<tr> <td>$row[0]</td>";
                        echo "<td> $row[1]</td>";
                        echo "<td> $row[2]</td> </tr>";
                    }   
                }
                echo"</table>";
                if(!$conn->query($sql)){
                    echo("Error Description: ". $conn->error);
                }
            }
        ?> 
    </body>
</html>