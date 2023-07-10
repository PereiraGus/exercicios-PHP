<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $frutas = ["Banana", "Uva", "Pera","Acerola",'Morango','Pitanga','Fruta do conde','Laranja','Limão','Mamão','Manga']
    ?>
    <h1>Seja bem-vindo ao mercado das frutas, vendemos <?php echo count($frutas) ?> tipos de frutas deliciosos aqui</h1>
    <h4>Nossos produtos:</h4>
    <ul>
        <?php
            for ($i=0; $i < count($frutas); $i++) { 
                echo '<li>'.$frutas[$i].'</li>';
            }
        ?>
    </ul>

    <h4>Ordenados alfabeticamente</h4>
    <ul>
        <?php
            sort($frutas);
            for ($i=0; $i < count($frutas); $i++) { 
                echo '<li>'.$frutas[$i].'</li>';
            }
        ?>
    </ul>

    <h5>Pessoas associadas com nosso negócio</h5>
    <ul>
    <?php
        $clientes = ["Ana Souza","Charlie Castro Xandra Caieiras","Igona Azaleia"];
        $funcionarios = ["Rodolfo Silva","Renata Saginawa","Rebecca Clara"];

        $todos = array_merge($clientes,$funcionarios);
        for ($i=0; $i < count($todos); $i++) { 
            echo '<li>'.$todos[$i].'</li>';
        }
    ?>
    </ul>

    <?php
        $dia = "13/06/2023";
        $arrayDia = explode("/",$dia);
        $nomenclaturas = ["Hoje é dia","do",","];

        for ($i=0; $i < count($arrayDia); $i++) { 
            echo $nomenclaturas[$i].' '.$arrayDia[$i];
            if($i != count($nomenclaturas)-2){
                echo ' ';
            }
        }
    ?>
</body>
</html>