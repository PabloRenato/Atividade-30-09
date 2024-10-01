<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questao 2 PHP</title>
</head>
<body>
    <?php
    $nome=$_POST["nome"];
    $nota1=$_POST["nota1"];
    $nota2=$_POST["nota2"];
    $nota3=$_POST["nota3"];
    $soma=$nota1+$nota2+$nota3;
    $media=$soma/3;
    echo("Nome do Aluno: $nome<br>Total de Notas: $soma<br>Média:$media<br>")
    ?>
    <a href="index.html">Voltar a Pagina Inicial</a>
    
</body>
</html>