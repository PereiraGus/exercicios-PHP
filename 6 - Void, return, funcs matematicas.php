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

        function boasVindas(){
            echo '<h1>Seja bem-vinde à calculadora de PHPtágoras</h1>';

            date_default_timezone_set('America/Sao_Paulo');
            $diaSemana = date('D');
            switch ($diaSemana) {
                case 'Sun':
                    $diaSemana = "domingo";
                    break;
                case 'Mon':
                    $diaSemana = "segunda-feira";
                    break;
                case 'Tue':
                    $diaSemana = "terça-feira";
                    break;
                case 'Wed':
                    $diaSemana = "quarta-feira";
                    break;
                case 'Thu':
                    $diaSemana = "quinta-feira";
                    break;
                case 'Fri':
                    $diaSemana = "sexta-feira";
                    break;
                case 'Sat':
                    $diaSemana = "sábado";
                    break;
            }
            echo 'Hoje é '.$diaSemana.', dia '.date('d').' do '.date('m').'.';
            echo '<br>';

            $manhaOuTarde;
            switch (date('a')) {
                case 'am':
                    $manhaOuTarde = "manhã";
                    break;
                case 'pm':
                    $manhaOuTarde = "tarde";
                    break;
            }
            echo 'São '.date('g:i').' da '.$manhaOuTarde;

            echo '<br>';
            $fluxo = str_replace('America','América',date_default_timezone_get());
            $fluxo = str_replace('Sao','São',$fluxo);
            $fluxo = str_replace('_',' ',$fluxo);
            echo "(Você está no fuso-horário $fluxo)";

            $nascimento = '2005-06-13';
            $hoje = date('Y-m-d');
            
            $diferenca = (strtotime($hoje) - strtotime($nascimento));
            $anos = round($diferenca/31540000);
            $meses = round($diferenca/2629800 - $anos*12);
            $dias = round($diferenca/86400 - $anos*365);

            echo '<h5>Fazem aproximadamente '.$anos.' ano(s), '.$meses.' mês(meses) e '.$dias.' dia(s) desde que o Gus nasceu</h5>';

            $aleatorio = rand(0,1000)/10;
            echo '<h4>O número da sorte de hoje é '.$aleatorio.'</h4>';
            echo '<h4>Arredondado pra cima fica '.ceil($aleatorio).'</h4>';
            echo '<h4>Arredondado pra baixo fica '.floor($aleatorio).'</h4>';
            echo '<h4>Arredondado com base em frações fica '.round($aleatorio).'</h4>';
            }

        function pitagoras($c1,$c2,$h){
            if($c1 == null){
                return "O cateto faltante mede ".round(sqrt(pow($h,2) - pow($c2,2)));
            }
            else if($c2 == null){
                return "O cateto faltante mede ".round(sqrt(pow($h,2) - pow($c1,2)));
            }
            else if($h == null){
                return "A hipotenusa mede ".round(sqrt(pow($c1,2) + pow($c2,2)));
            }
            else{
                return "O seu triângulo já está completo...";
            }
        }
    ?>

    <?php boasVindas() ?>
    <img src="https://s3.static.brasilescola.uol.com.br/exercicios/2021/02/2-resolucaoq2.jpg">
    <?php echo pitagoras(null,5,13) ?>
    <hr>
    <img src="https://static.mundoeducacao.uol.com.br/exercicios/2022/06/ilustracao-triangulo-incognita.jpg">
    <?php echo pitagoras(21,null,29) ?>
    <hr>
    <img src="https://calculemais.com.br/exercicios_matematica/img/pitagoras-exercicio-1.png">
    <?php echo pitagoras(6,8,null) ?>
</body>
</html>