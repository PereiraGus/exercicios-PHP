<?php
    session_start();

    $credenciais = [
        'email' => $_POST["email"],
        'senha' => $_POST["senha"]
    ];

    $usuarios = array(
        array('email'=>'gustavo.oito@hotmail.com', 'senha'=>'urubu100'),
        array('email'=>'lari.sonoda@gmail.com', 'senha'=>'FETCHER'),
        array('email'=>'erin2205@gmail.com', 'senha'=>'erinM4t0s')
    );

    $autenticado = false;

    foreach($usuarios as $user){
        if($user['email'] == $credenciais['email']
        && $user['senha'] == $credenciais['senha']){
            $autenticado = true;
            $_SESSION['usuario'] = $credenciais;
            header('location: home.php');
            break;
        }
    }

    if(!$autenticado){
        header('location: index.php?login=erro');
    }
?>