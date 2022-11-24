<?php
    $servidor = "localhost";
    $user = "root";
    $pass = "";
    $banco = "av1js";
    if($_SERVER["REQUEST_METHOD"]=="GET")
    {    
        $id= $_GET["id"];
       
        $conn = new mysqli ($servidor, $user, $pass, $banco);
        $sql="DELETE FROM `disciplina` WHERE `id` = '$id' ";
        $result=$conn->query($sql);
        
    }
?>