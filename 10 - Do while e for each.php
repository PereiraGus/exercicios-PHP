<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $x = 1;
        do{
            if($x == 8){
                $x++; //Importante incrementar usando um FOR ou manualmente, se não looping infinito
                continue; //Pula se o $x for 8
            }
            echo $x.'. Entrou no do-while!<br>';
            $x++;
        } while($x < 10);
        //Roda uma vez, mesmo se for false

        $x = 10;
        while($x < 10){
            echo $x.'. Entrou no while!<br>';
            $x++;
        }
        //Não roda se for false
    ?>

    <h4>Toda boa casa deve ter</h4>
    <?php
        $moveis = ["Fogão","Geladeira","Cama","Guarda-roupas","Mesa","Cadeira"];

        foreach($moveis as $item){
            echo $item.' | ';
        }
    ?>

    <h4>Nossos funcionarios</h4>
    <?php
        $funcs = array(
            array('nome' => 'João', 'salario' => 3400),
            array('nome' => 'Anaís', 'salario' => 5700),
            array('nome' => 'Álex', 'salario' => 1000)
        );

        foreach($funcs as $id => $func){
            foreach($func as $id2 => $valor){
                echo "$id2: $valor<br>";
            }
            echo "<br>";
        }
    ?>
</body>
</html>