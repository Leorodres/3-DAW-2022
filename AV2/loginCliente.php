<?php
    $servidor = "localhost";
    $user = "root";
    $pass = "";
    $banco = "av2";
    if($_SERVER["REQUEST_METHOD"]=="GET")
    {    
        $nome = $_GET["nome"];
        $email = $_GET["email"];
        $senha= $_GET["senha"];
        

        $conn = new mysqli ($servidor, $user, $pass, $banco);
        $sql="SELECT * FROM `cliente` WHERE `nome` = '$nome' AND `email` = '$email' AND `senha` = '$senha'";
        $result=$conn->query($sql);
        
        if ($result->num_rows != 0){
            $linha = mysqli_fetch_row($result);
            $retorno= $linha[0];

        } else {
            $retorno= "false";
        }
    }
    echo $retorno;
?>