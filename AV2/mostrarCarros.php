<?php
    $servidor = "localhost";
    $user = "root";
    $pass = "";
    $banco = "av2";
    $retorno = "";
    
    if($_SERVER["REQUEST_METHOD"]=="GET")
    {    
        $conn = new mysqli ($servidor, $user, $pass, $banco);
        $sql="SELECT * FROM `carros`";
        
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
