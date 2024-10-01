<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 1 PHP</title>
</head>
<body>
    <?php
    $num1=$_POST["num1"];
    $num2=$_POST["num2"];
    $soma=$num1+$num2;
    if($soma>20){
        $soma+=8;
        echo "O Valor é maior que 20, então foi somado mais 8<br>Resultado: $soma<br>";
    }else{
        $soma-=5;
        echo "O valor é menor ou igual a 20, então foi subtraido por 5<br>Resultado: $soma<br>";
    }
    ?>
    <a href="index.html">Voltar a Pagina Inicial</a>
    
</body>
</html>