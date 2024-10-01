<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questao 3 HTML</title>
</head>
<body>
    <?php
    $filme=$_POST["filme"];
    $ingresso=$_POST["ingresso"];
    $horario=$_POST["horario"];
    $total=$ingresso*15;

    echo "Filme: $filme<br>Quantidade de Ingressos: $ingresso<br>Horário: $horario<br>Preço Total: R$$total"
    ?>
    <br><a href="index.html">Voltar a Pagina Inicial</a><br><br>
    <a href="Questao2.html">Retornar a Pagina Anterior</a><br><br>
    <a href="Questao4.html">Proxima Questão</a><br><br>
</body>
</html>