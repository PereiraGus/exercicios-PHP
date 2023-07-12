<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Todo sobre o Gus</h1>
    <?php
        include("navbar.php");

        $nome = ucfirst('gustavo');
        echo '<p>Seu nome por extenso é '.$nome.', podendo ser escrito como 
        '.strtoupper($nome).' ou '.strtolower($nome).', tendo '.strlen($nome).' letras.';
    ?>
    <h4>Seus apelidos são:</h4>
        <ul>
        <?php
            echo '<li>'.str_replace('stavo','',$nome).'</li>';
            echo '<li>'.str_replace('tavo','',$nome).'</li>';
            echo '<li>'.str_replace('tavo','ho',$nome).'</li>';
            echo '<li>'.str_replace('stavo','ga',$nome).'</li>';
        ?>
        </ul>
    <?php
        for ($i=0; $i <= strlen($nome); $i++) { 
            echo substr($nome,$i,1).' ';
        }
        echo '<br>';

        $pessoas = [
            'amigos' => ['Julia','Larissa','Erin','Taveira'],
            'familia' => ['Felipe','Miguel','Sergio','Michelle']
        ];
        // ou
        // $pessoas['amigos'] = ['Julia','Larissa','Erin','Taveira'];
        // $pessoas['familia'] = ['Felipe','Miguel','Sergio','Michelle'];
        
        echo '<pre>';
        print_r(array_keys($pessoas));
        print_r($pessoas);
        echo '</pre>';

        echo array_search('Eri',$pessoas["amigos"]);

        $amigoPesquisa = 'Julia';
        if(in_array($amigoPesquisa, $pessoas['amigos'])){
            echo 'Existe ume '.$amigoPesquisa.' nos amigos! Ela é a '.(array_search($amigoPesquisa,$pessoas['amigos'])+1).'ª amiga da lista.';
        }
        else{
            echo 'Não existe um(a) '.$amigoPesquisa.' nos amigos :(';
        }
    ?>
</body>
</html>