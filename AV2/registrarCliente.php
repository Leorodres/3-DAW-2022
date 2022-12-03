<?php
    $servidor = "localhost";
    $user = "root";
    $pass = "";
    $banco = "av2";
    if($_SERVER["REQUEST_METHOD"]=="GET")
    {    
        $nome = $_GET["nome"];
        $senha= $_GET["senha"];
        

        $conn = new mysqli ($servidor, $user, $pass, $banco);
        $sql="INSERT INTO `cliente`(`nome`, `senha`) VALUES ('$nome', '$senha')";
        $result=$conn->query($sql);
    }
?>
