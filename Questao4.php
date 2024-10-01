<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 4 PHP</title>
</head>
<body>
    <?php
    $material_esportivo=$_POST["material_esportivo"];
    sort($material_esportivo);
    foreach($material_esportivo as $lista){
        echo "$lista<br>";
    }
    ?>
    <br><a href="index.html">Voltar a Pagina Inicial</a><br><br>
    <a href="Questao3.html">Retornar a Pagina Anterior</a><br><br>
    <a href="Questao5.html">Proxima Questão</a><br><br>
    
</body>
</html>