<?php
    $servidor = "localhost";
    $user = "root";
    $pass = "";
    $banco = "av2";
    if($_SERVER["REQUEST_METHOD"]=="GET")
    {    
        $email= $_GET["email"];
       
        $conn = new mysqli ($servidor, $user, $pass, $banco);
        
        $sql="DELETE FROM `cliente` WHERE `email` = '$email' ";
        
        $result=$conn->query($sql);
        
    }
?>