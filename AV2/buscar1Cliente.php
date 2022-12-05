<?php
    $servidor = "localhost";
    $user = "root";
    $pass = "";
    $banco = "av2";
    $retorno = "";

    if($_SERVER["REQUEST_METHOD"]=="GET")
    {   
        $email = $_GET["email"]; 
        $conn = new mysqli ($servidor, $user, $pass, $banco);
        $sql="SELECT * FROM `cliente` WHERE `email` = '$email'";
        $result=$conn->query($sql);
        
        if ($result==true){
            $cliente = $result->fetch_assoc();
            $retorno=json_encode($cliente);

        } else {
            $retorno=json_encode("DEU RUIM!😭😭");
        }
    }
echo $retorno;
?>
