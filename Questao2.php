<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questao 2 PHP</title>
    <style>
        body{
            background: linear-gradient(to right,rgb(20, 146, 219), rgb(17, 54, 71));
        }
        #box{
            position:absolute;
            border: 2px solid blue;
            background-color: rgb(0, 195, 255);
            top: 50%;
            left:50%;
            transform: translate(-50%,-50%);
            padding: 20px;
        }
        #box a{
            color: black;
        }
    </style>
</head>
<body>
    <?php
    $nome=$_POST["nome"];
    $nota1=$_POST["nota1"];
    $nota2=$_POST["nota2"];
    $nota3=$_POST["nota3"];
    $soma=$nota1+$nota2+$nota3;
    $media=$soma/3;
    echo("<div id=box>Nome do Aluno: $nome<br>Total de Notas: $soma<br>Média:$media<br>")
    ?>
    <br><button><a href="index.html">Voltar a Pagina Inicial</a></button><br><br>
    <button><a href="Questao1.html">Retornar a Pagina Anterior</a></button><br><br>
    <button><a href="Questao3.html">Proxima Questão</a></button><br><br>
    </div>
    
</body>
</html>