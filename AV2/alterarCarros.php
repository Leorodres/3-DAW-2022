<?php
    $servidor = "localhost";
    $user = "root";
    $pass = "";
    $banco = "av2";
    $retorno = "";

    if($_SERVER["REQUEST_METHOD"]=="GET")
    {   
        $nome = $_GET["nome"];
        $categoria= $_GET["categoria"];
        $cidade= $_GET["cidade"];
        $preco = $_GET["preco"];
        $placa= $_GET["placa"];
        $periodo = $_GET["periodo"];
        $disponivel = $_GET["disponivel"];
        
        $conn = new mysqli ($servidor, $user, $pass, $banco);
        
        $sql="UPDATE `carros` SET `nome`= '$nome', `categoria`= '$categoria', `cidade`='$cidade', `placa`='$placa',  `preco`=$preco ,
        `periodo`= $periodo, `disponivel`= $disponivel WHERE `placa` = '$placa'";
        echo $sql;
        
        $result=$conn->query($sql);
        
    }
?>