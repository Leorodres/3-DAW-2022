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
        $placa= $_GET["placa"];
        $periodo = $_GET["periodo"];

        $conn = new mysqli ($servidor, $user, $pass, $banco);
        $sql="INSERT INTO `carros`(`nome`, `categoria`, `cidade`, `placa`, `preco`, `periodo`, `disponivel`) VALUES ('$nome', '$categoria', '$cidade', '$placa',$preco, $periodo, 1)";
        $result=$conn->query($sql);
    }
?>
