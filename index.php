<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    

    <title>Blue Ridge - Salão de Cabeleireiro</title>

    <script>
      function mostrarAlerta() {
        alert ("Este setor do nosso site não está disponível no momento.");
      }
  </script>
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
    
    <header class="site-navbar" role="banner" id="header">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-11 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="index.php" class="text-white mb-0"><img src="images/logo.png" alt="" class="logo"></a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="index.php" class="link-da-navbar"><span>Home</span></a></li>
                <li class="has-children">
                <li><a href="#servicos" class="link-da-navbar"><span>Serviços</span></a></li>
                <li><a href="#produtos" class="link-da-navbar"><span>Produtos</span></a></li>
                <li><a href="#contato" class="link-da-navbar"><span>Contato</span></a></li>
                <li><a href="login.php" class="link-da-navbar"><button class="login-button">Entrar</button></a></li>
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
      <div class="conteudo-de-cima">
        <div class="conteudo-de-cima-esq">
          <h2 class="active">Venha ser Blue Ridge!</h2>
          <br><br>
          <p class="textos1"> 
            Uma experiência única em um ambiente descontraído e inspirador, sem seguir regras e padrões de beleza para você ser o que quiser, como quiser e quando quiser!
            A união do estilo retrô e urbano ressalta a personalidade do Salão em ser cheio de tendências, ideias e criatividade para superar as suas expectativas com muito talento.
          </p>
        </div>
      </div>
    </div>

    <br><br><br><br>
    <div class="container">
      <div class="conteudo-index">
        <div class="metade-esquerda">
          <h2 class="active2">Sobre Nós</h2>
          <br><br>
          <p>
            O Salão Blue Ridge foi inaugurado em novembro de 2015, com a ideia de criar um conceito em salão de beleza que une o estilo retrô e urbano, exaltando a personalidade do salão, em ser um ambiente descontraído e inspirador, construindo com os clientes e a equipe uma experiência divertida e única.
          </p>
          <p>
            Composto por profissionais incríveis, dispostos a surpreender com tendências e conhecimento, superando as expectativas com criatividade e talento.
            Sem seguir regras e padrões, o Blue Ridge foi feito para a geração que quer ser o que quiser, como quiser e quando quiser.
          </p>
        </div>
        <div class="metade-direita">
          <img src="images/salao.jpg" alt="" class="img-do-conteudo">
        </div>
      </div>
    </div>
    
    <div class="conteudo-index3">
    
      <div class="container">
      <div class="linhazinha"><h1 class="h1Line"><img src="https://i.postimg.cc/Y9qCy5gH/Scissor-PNG-Clipart.png" class="imgLine"></h1></div>
      <h2 class="active3">Confira alguns de nossos trabalhos!</h2>
        <div class="container-galeria">
          <div class="box">
            <img src="images/galeria1.jpeg">
          
          </div>
          <div class="box">
            <img src="images/galeria2.jpeg">
          
          </div>
          <div class="box">
            <img src="images/galeria3.jpeg">
          
          </div>
          <div class="box">
            <img src="images/galeria4.jpeg">
        
          </div>
        </div>
      </div>
    </div>
    <br><br><br><br>


    <?php
            require_once("model/Servico.php");
            try {
                $servico = new Servico();
                $listaservico = $servico->listar();
                
            } catch(Exception $e) {
                // echo '<pre>';
                //     print_r($e);
                // echo '</pre>';
                echo $e->getMessage();
            }
        ?>

    <div class="conteudo-index3">
    <div class="container">
    <div class="linhazinha"><h1 class="h1Line"><img src="https://i.postimg.cc/Y9qCy5gH/Scissor-PNG-Clipart.png" class="imgLine"></h1></div>
    </div>
    <section id="servicos">
    <h2 class="active2">Serviços Disponíveis</h2>
    </section>
    <br><br>
      
        <?php foreach ($listaservico as $linha){ ?>      
          <a href="" class="card">
          <img src="restrita/<?php echo $linha['fotoservico'] ?> " class="cropped1" alt="" />
          <div class="card__overlay">
            <div class="card__header">
              <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
              <div class="card__header-text">
                <h3 class="card__title"><?php echo $linha['textoservico'] ?></h3>            
              </div>
            </div>
            <p class="card__description"><?php echo $linha['descservico'] ?></p>
          </div>
          </a> 
        <?php } ?>
      
    </div>

    <?php
      require_once("model/Produto.php");
      try {
          $produto = new Produto();
          $listaProduto = $produto->listar();
          
      } catch(Exception $e) {
          // echo '<pre>';
          //     print_r($e);
          // echo '</pre>';
          echo $e->getMessage();
      }
    ?>  
    <div class="conteudo-index3">
      <div class="container">
      <div class="linhazinha"><h1 class="h1Line"><img src="https://i.postimg.cc/Y9qCy5gH/Scissor-PNG-Clipart.png" class="imgLine"></h1></div>
      <section id="produtos">
      <h2 class="active2"> Confira alguns dos produtos que temos a venda!</h2>
      </section>
      <br>
        <?php foreach ($listaProduto as $linha){ ?>
  
                <div class="card" style="width: 18rem;">
                  <img class="cropped2" src="restrita/<?php echo $linha['fotoproduto'] ?> " alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $linha['textoproduto'] ?></h5>
                    <p class="card-text"><?php echo $linha['descproduto'] ?></p>
                    <a href="#" class="btn btn-primary" onclick="mostrarAlerta()" >Comprar</a>
                  </div>
              </div>

    
          <?php } ?>
      </div>
    </div>

    <div class="container">
    <div class="form-contato">
      <div class="wrapper fadeInDown">
        <div id="formContent">
        <!-- Tabs Titles -->
        <section id="contato">
        <h1 class="h1Line"><img src="https://i.postimg.cc/Y9qCy5gH/Scissor-PNG-Clipart.png" class="imgLine"></h1>
        <h2 class="active2"> entre em contato conosco! </h2><br><br>
        <h4> Possui alguma reclamação, sugestão ou elogio? Preencha os campos abaixo e teremos o maior prazer em lhe responder!</h4>
        </section>
        <br><br>
        <!-- Contato Form -->
        <form name="Login">
          <input type="text" id="nome" class="fadeIn second" name="nome" placeholder="Nome Completo">
          <input type="text" id="email" class="fadeIn third" name="email" placeholder="Email">
          <input type="text" id="assunto" class="fadeIn second" name="assunto" placeholder="Assunto"><br><br>
          <textarea name="" id="" cols="30" rows="10" placeholder="Comentário"></textarea>
          <input type="submit" class="fadeIn fourth" value="Enviar">
        </form>
      </div>
    </div>
  </div>
  </div>


    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/main.js"></script>
    <script src="js/javascript.js"></script>
  </body>
</html>