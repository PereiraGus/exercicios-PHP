<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $valor = 10;
        echo 'O tipo de variável é '.gettype($valor);

        echo '<br>';

        $valor = (float) $valor;
        echo 'Mas, foi convertida para '.gettype($valor);

        echo '<br><br>';

        $cpf = '5789';
        echo 'A '.gettype($cpf).' "'.$cpf.'"';
        
        echo '<br>';

        $cpf = (int) $cpf;
        echo 'Foi convertida para '.gettype($cpf);

        echo '<br><br>';

        $preco = 9.99;
        echo 'O '.gettype($preco).' '.$preco.' perde a casa decimal, ';
        $preco = (int) $preco;
        echo 'e se torna um '.gettype($preco).' valendo '.$preco;
    ?>
</body>
</html>