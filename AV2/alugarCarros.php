<?php
    $servidor = "localhost";
    $user = "root";
    $pass = "";
    $banco = "av2";
    if($_SERVER["REQUEST_METHOD"]=="GET")
    {    
        $idCliente = $_GET["idCliente"];
        $idCarro= $_GET["idCarro"];
        $periodo= $_GET["periodo"];
        $preco= $_GET["preco"];
        
        $conn = new mysqli ($servidor, $user, $pass, $banco);
        $sql="INSERT INTO `reserva`(`idCliente`, `idCarro`, `periodo`, `preco`) VALUES ($idCliente, $idCarro, $periodo, $preco)";
        $result=$conn->query($sql);
        $sql2 = "UPDATE `carros` SET `disponivel`= 0 WHERE `id` = $idCarro";
        $result2=$conn->query($sql2);
?>
