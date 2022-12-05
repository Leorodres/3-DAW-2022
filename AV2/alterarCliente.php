<?php
    $servidor = "localhost";
    $user = "root";
    $pass = "";
    $banco = "av2";
    $retorno = "";

    if($_SERVER["REQUEST_METHOD"]=="GET")
    {   
        $nome = $_GET["nome"];
        $email= $_GET["email"];
        $emailAlt= $_GET["emailAlt"];
        $senha= $_GET["senha"];
       
        
        $conn = new mysqli ($servidor, $user, $pass, $banco);
        $sql="UPDATE `cliente` SET `nome`= '$nome', `email`= '$emailAlt', `senha`='$senha' WHERE `email` = '$email'";
        echo $sql;
        
        $result=$conn->query($sql);
        
    }
?>