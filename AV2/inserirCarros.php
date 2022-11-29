<?php
    $servidor = "localhost";
    $user = "root";
    $pass = "";
    $banco = "av2";
    if($_SERVER["REQUEST_METHOD"]=="GET")
    {    
        $nome = $_GET["nome"];
        $categoria= $_GET["categoria"];
        $cidade= $_GET["cidade"];
        $preco = $_GET["preco"];

        $conn = new mysqli ($servidor, $user, $pass, $banco);
        $sql="INSERT INTO `carros`(`nome`, `categoria`, `cidade`, `preco`) VALUES ('$nome', '$categoria', '$cidade', $preco)";
        $result=$conn->query($sql);
    }
?>
