<?php
    $servidor = "localhost";
    $user = "root";
    $pass = "";
    $banco = "av2";
    if($_SERVER["REQUEST_METHOD"]=="GET")
    {    
        $nome = $_GET["nome"];
        $email= $_GET["email"];
        $senha= $_GET["senha"];
        

        $conn = new mysqli ($servidor, $user, $pass, $banco);
        $sql="INSERT INTO `cliente`(`nome`, `email`, `senha`) VALUES ('$nome', '$email', '$senha')";
        $result=$conn->query($sql);
    }
?>
