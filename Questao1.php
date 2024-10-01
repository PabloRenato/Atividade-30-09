<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 1 PHP</title>
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
    $num1=$_POST["num1"];
    $num2=$_POST["num2"];
    $soma=$num1+$num2;
    if($soma>20){
        $soma+=8;
        echo "<div id=box>O Valor é maior que 20, então foi somado mais 8<br>Resultado: $soma<br>";
    }else{
        $soma-=5;
        echo "O valor é menor ou igual a 20, então foi subtraido por 5<br>Resultado: $soma<br>";
    }
    ?>
    <br><button><a href="index.html">Voltar a Pagina Inicial</a></button><br><br>
    <button><a href="index.html">Retornar a Pagina Anterior</a></button><br><br>
    <button><a href="Questao2.html">Proxima Questão</a></button><br><br>
    </div>
</body>
</html>