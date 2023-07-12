<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-consultar-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
    <?php
      require 'validarSessao.php';

      $arquivo = fopen("chamado.hd","r");
      $chamados = [];

      while(!feof($arquivo)){
        array_push($chamados,fgets($arquivo));
      }
    ?>
  </head>

  <body>

    <?php
      require("navbar.php");
    ?>

    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de chamado
            </div>
            
            <div class="card-body">
              
            <?php
              foreach($chamados as $chamado){
                $items = array();
                $items = explode('|',$chamado);
                if($_SESSION["usuario"]["admin"] == false){
                  if($_SESSION["usuario"]["id"] != $items[0]){
                    continue;
                  }
                }
                if(count($items) <3){
                  continue;
                }
            ?>
              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title"><?=$items[1]?></h5>
                  <h6 class="card-subtitle mb-2 text-muted"><?=$items[2]?></h6>
                  <p class="card-text"><?=$items[3]?></p>
                </div>
              </div>
            <?php
            }
            ?>

              <div class="row mt-5">
                <div class="col-6">
                  <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>