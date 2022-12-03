<?php
    $servidor = "localhost";
    $user = "root";
    $pass = "";
    $banco = "dawacademicomanha";
    $mensagem = "";
    if($_SERVER["REQUEST_METHOD"]=="GET")
    {    
        $matricula= $_GET["matricula"];
       
        $conn = new mysqli ($servidor, $user, $pass, $banco);
        $sql="DELETE FROM `alunos` WHERE `matricula` = '$matricula' ";
        $result=$conn->query($sql);
        
    }
?>