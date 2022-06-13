<?php
    require_once("valida-login.php");
    require_once("../model/Agenda.php");
    require_once("../model/Cliente.php");
    require_once("../model/Servico.php");

?>

<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href=../"fonts/icomoon/style.css">

    <link rel="stylesheet" href="../css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="css/style-forms.css">

    <title>Administrador - Inserir Serviço</title>

  </head>
  <body>


    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <header class="site-navbar" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-11 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="index-restrito.php" class="text-white mb-0"><img src="../images/logo.png" alt="" class="logo" width="150px"></a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active"><a href="index-restrito.php"><span>Home</span></a></li>
                <li class="has-children">
                <li><a href="form-servico.php"><span>Serviços</span></a></li>
                <li><a href="form-produto.php"><span>Produtos</span></a></li>
                <li><a href="form-agendamento.php"><span>Agendamento</span></a></li>
                <li><a href="form-cliente.php"><span>Cliente</span></a></li>
              </ul>
            </nav>
          </div>

           
  </div>
</div>
          </div>

        </div>
      </div>
      
    </header>

    <div class="hero" style="background-image: url('https://i.postimg.cc/yNTwCLdF/image1.jpg');">
      <div class="container">
        <div class="formulario-servico">
          <h2 class="active">FAZER AGENDAMENTO</h2>
          <br><br>
          <form method="post" action="cadastrar-agenda.php">
            <input type="date" name="dataagenda" id="data">
            <br>
            <input type="time" name="horaagenda" id="hora">
            <br>
 
            <select name="idcliente">
                <?php
                    foreach($listacliente as $linha){
                        echo"<option value='".$linha['idcliente']."'>
                            ".$linha['nomecliente']."</option>";
                    }
                ?>
            </select>
            <br>

            <select name="idservico">
                <?php foreach($listaservico as $linhaServ){ ?>
                    <option value="<?php echo($linhaServ['idservico']); ?>">
                        <?php echo($linhaServ['idservico']); ?>
                    </option>
                <?php }
                ?>
            </select>
            <br><br>
            <input type="submit" value="agendar" a>
        </form>

        <?php
            try {
                $cliente = new Cliente();
                $listacliente = $cliente->listar();

                $servico = new Servico();
                $listaservico = $servico->listar();
                $agenda = new Agenda();
                $listaagenda = $agenda -> listar();
                
            } catch(Exception $e) {
                 echo '<pre>';
                    print_r($e);
                 echo '</pre>';
                echo $e->getMessage();
            }
        ?>
        </div>
      </div>
    </div>
    <div class="container">

    <h2 class="active2">Lista de Agendamentos</h2><br>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Data</th>
                    <th>Hora</th>
                </tr>
            </thead>
            <tbody id='resultado'>
            <?php foreach ($listaagenda as $linha){ ?>
                    <tr>
                        <td><?php echo $linha['idagenda'] ?></td>
                        <td><?php echo $linha['dataagenda'] ?></td>
                        <td><?php echo $linha['horaagenda'] ?></td>
                        <td><a href="#">Editar</a></td>
                        <td><a href="#">Excluir</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        </div>
  
        <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/main.js"></script>
    <script src="js/javascript.js"></script>
  </body>
</html>