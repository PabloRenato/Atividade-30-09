<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $acai=$_POST["Açai"];
    $quantidade=$_POST["Quantidade"];

    switch($acai){
        case "300 ML - R$10,00":
            $preco=10*$quantidade;
            break;
        case "500 ML - R$15,00":
            $preco=15*$quantidade;
            break;
        case "1 Litro - R$20,00":
            $preco=20*$quantidade;
            break;
    }
    echo "<h3>Açaí Escolhido: $acai<br>Quantidade: $quantidade<br>Preço Total: R$$preco</h3>"
    ?>
        <br><a href="index.html">Voltar a Pagina Inicial</a>
        <a href="Questao4.html">Retornar a Pagina Anterior</a><br><br>

    
</body>
</html>