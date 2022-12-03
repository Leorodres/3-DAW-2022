<?php
    $servidor = "localhost";
    $user = "root";
    $pass = "";
    $banco = "av2";
    
    $retorno = "";

    if($_SERVER["REQUEST_METHOD"]=="GET")
    {    
        $escolha = $_GET["escolha"];
        $dado = $_GET["dado"];
        $conn = new mysqli ($servidor, $user, $pass, $banco);
        if(strcmp($escolha, "1")== 0){
            $sql="SELECT * FROM `carros` WHERE `cidade` = '$dado' AND `disponivel` = 1";
        }
        elseif(strcmp($escolha, "2")==0){
            $sql="SELECT * FROM `carros` WHERE `categoria` = '$dado' AND `disponivel` = 1";
        }
        else{
            $sql="SELECT * FROM `carros` WHERE `periodo` = '$dado' AND `disponivel` = 1";
        }
        
        $result=$conn->query($sql);
        $vetCarros[] = array();
        
        $i = 0;
        
        While ($linha = $result->fetch_assoc()){
            $vetCarros[$i] = $linha;
            $i++;
        }

        if ($result=true){
            $retorno=json_encode($vetCarros);

        } else {
            $retorno=json_encode("DEU RUIM!😭😭");
        }
    }
echo $retorno;
?>
