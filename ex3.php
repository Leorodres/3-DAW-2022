<?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $matricula = $_POST["matricula"];
        $nome = $_POST["nome"];
        echo  var_dump($matricula);
    }
    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex2</title>
</head>
<body>
    <form action="ex3.php" method="post">
        Matricula:
        <input type="text" name="matricula" placeholder="Digite a matricula">
        Nome:
        <input type="text" name="nome" placeholder="Digite o nome">
        <input type="submit" value="enviar">
    </form>
    <table> 
    <tr>
    <td> 
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    { echo $matricula;
        
    }
    else
    {
        $matricula = "";
    }
    ?>
    </td>
    </tr>
    <tr>
    <td> 
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    { 
        echo $nome;
    }
    else
    {
        $nome = "";
    }
    ?>
    </td>
    </tr> 
    </table>
</body>
</html>