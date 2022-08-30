<?php
    $i;
    $nome =  array("Leandro", "Márcio", "Camila", "Igor", "Pedro");
    $nota =  array(8.5, 9.8, 10, 6.5, 7.5);
    $tam = sizeof($nome);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Aula 2 Lista com array</title>
    <style type="text/css">
      table{border-spacing:10px;}
      th{padding-right:5px;}
    </style>
</head>
<body>
    <table>
    <tr>
    <th>Nomes</th> <th>Notas</th>
    </tr>
        <?php 
        for ($i=0; $i < $tam; $i++) 
        { 
            echo "<tr>
            <td>$nome[$i]</td> <td>$nota[$i]</td>
            </tr>";
        }
        ?>
    </table>
</body>
</html>
