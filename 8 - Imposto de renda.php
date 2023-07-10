<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function impostoRenda($pSalario){
            if($pSalario < 1903.99){
                return 0;
            }
            else if($pSalario <= 2826.65){
                return $pSalario*0.075;
            }
            else if($pSalario <= 3751.05){
                return $pSalario*0.15;
            }
            else if($pSalario <= 4664.68){
                return $pSalario*0.225;
            }
            else{
                return $pSalario*0.275;
            }
        }
        $salario = 1500;
        while($salario < 5500) { 
            echo 'Com um salario de R$'.$salario.', você deve pagar R$'.impostoRenda($salario).' de imposto de renda.<br><br>';
            $salario = $salario*1.50;
        }
    ?>
</body>
</html>