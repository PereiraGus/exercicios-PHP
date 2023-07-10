<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        define("URL_BANCO","https://...");
        define("PORTA_BANCO",3306);

        $nome = 'Gus Pereira';
        $idade = 17;
        $altura = 1.86;
        $maior_de_idade = true;
        $instrucao = "Continuar";

        $idade = 18; //Alterando a variável
    ?>
    <p><?php echo "Conectado com sucesso à ".URL_BANCO.", usando a porta ".PORTA_BANCO ?></p>
    <h1>Pessoas fofas</h1>
    <p><?php echo 'Ê administradore do site afirma que a pessoa mais legal e fofa é '.$nome.'.' ?></p>
    <p>Nome: <?php echo $nome; ?></p>
    <p>Idade: <?php echo $idade; ?></p>
    <p>Altura: <?php echo $altura; ?></p>
    <p>Maioridade: <?php echo $maior_de_idade; ?></p>
    <button><?php echo $instrucao ?></button>
    <br>
    <?php
        echo "<p>$nome vê diferença nas aspas duplas.";
        echo '<p>$nome não vê nada...';
    ?>
</body>
</html>