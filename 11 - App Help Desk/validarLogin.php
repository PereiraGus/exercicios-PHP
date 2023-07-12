<?php
    session_start();

    $credenciais = [
        'email' => $_POST["email"],
        'senha' => $_POST["senha"]
    ];

    $usuarios = array(
        array('id'=>1,'admin'=>true,'email'=>'gustavo.oito@hotmail.com', 'senha'=>'urubu100'),
        array('id'=>2,'admin'=>false,'email'=>'lari.sonoda@gmail.com', 'senha'=>'FETCHER'),
        array('id'=>3,'admin'=>false,'email'=>'erin2205@gmail.com', 'senha'=>'erinM4t0s')
    );

    $autenticado = false;

    foreach($usuarios as $user){
        if($user['email'] == $credenciais['email']
        && $user['senha'] == $credenciais['senha']){
            $autenticado = true;
            $_SESSION['usuario'] = ['id' => $user["id"], 'admin' => $user["admin"], $credenciais];
            header('location: home.php');
            break;
        }
    }

    if(!$autenticado){
        header('location: index.php?erro=login');
    }
?>