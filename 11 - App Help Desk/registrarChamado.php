<?php
    session_start();

    $titulo = str_replace("|","/",$_POST["titulo"]);
    $categoria = str_replace("|","/",$_POST["categoria"]);
    $desc = str_replace("|","/",$_POST["descricao"]);

    $arquivo = fopen("chamado.hd", "a");

    $texto = $_SESSION['usuario']['id']."|$titulo|$categoria|$desc".PHP_EOL;
    
    fwrite($arquivo, $texto);

    fclose($arquivo);
    header("location:home.php?alert=success");
?>