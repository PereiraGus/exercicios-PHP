<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include("navbar.php");
        
        $idade = 18;
        $peso = 54;

        if($idade > 15 && $idade < 70 && $peso >= 50){
            echo 'Atende aos requisitos';
        }
        else{
            echo 'Não atende aos requisitos';
        }
    ?>
    <br>
    <?php
        echo ($idade >= 18) ? 'Maior de idade' : 'Menor de idade';
    ?>
</body>
</html>