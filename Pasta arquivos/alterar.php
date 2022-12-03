<?php
    $matricula= strval($_POST["matricula"]);
    $encontrei = false;
    $nome = "";

    if($matricula == ""  || $matricula== NULL)
    {
        echo "Nao foi  <br>";
    }
    else {
        $arquivo = "Alunos.txt";
        $arq = fopen($arquivo,'r+');

        // string to put nome and passwords
        $alunos = '';

    while(!feof($arq)) {

    $aluno = explode(';',fgets($arq));

    // take-off old "\r\n"
    $nome = trim($aluno[0]);
    $matricula = trim($aluno[1]);

    // check for empty indexes
    if (!empty($nome) AND !empty($matricula)) {

        $alunos .= $nome . ',' . $matricula;
        $alunos .= "\r\n";
     }
}

// using file_put_contents() instead of fwrite()
file_put_contents('./Alunos.txt', $aluno);
fclose($arq); 
        
    }
    
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Alterar Matrícula</title>
</head>
<body>

    <form action="alterar.php" method="POST">
    <fieldset>
    <label>Nome:</label> 
            <input type="text" name="nome" value=<?php echo "\"" . $nome . "\""; ?>>
            <label>Matricula:</label> 
            <input type="text" name="matricula" value = <?php echo "\"" . $matricula . "\""; ?>> <br>
            <input type="submit" value="incalterarluir">
    </fieldset>
    </form>

</body>
</html>