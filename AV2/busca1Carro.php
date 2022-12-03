<?php
    $servidor = "localhost";
    $user = "root";
    $pass = "";
    $banco = "av2";
    $retorno = "";

    if($_SERVER["REQUEST_METHOD"]=="GET")
    {   
        $placa = $_GET["placa"]; 
        $conn = new mysqli ($servidor, $user, $pass, $banco);
        $sql="SELECT * FROM `carros` WHERE `placa` = '$placa'";
        $result=$conn->query($sql);
        
        if ($result==true){
            $carro = $result->fetch_assoc();
            $retorno=json_encode($carro);

        } else {
            $retorno=json_encode("DEU RUIM!😭😭");
        }
    }
echo $retorno;
?>
