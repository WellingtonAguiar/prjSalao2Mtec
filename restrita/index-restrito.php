<?php
require_once("valida-login.php")
?>
<html lang="pt-br">
<head>
            <!-- Tags obrigatórias -->
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            

            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="css/style-restrito.css" type="text/css">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <title>Administrador</title>

        </head>
    <body>

    <div class="container-fluid">
        <div class="row no-gutter">
            <!-- The image half -->
            <div class="col-md-5 d-none d-md-flex bg-image"></div>


            <!-- The content half -->
            <div class="col-md-7 bg-light">
                <div class="login d-flex align-items-center py-5">

                    <!-- Demo content-->
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 col-xl-7 mx-auto">
                                <h3 class="display-4">Bem vindo, Administrador! <br> O que deseja fazer?</h3><br><br>
                                <a href="form-servico.php"><input type="button" value="Inserir um serviço"></a>
                                <a href="form-cliente.php"><input type="button" value="Inserir um cliente"></a>
                                <a href="form-produto.php"><input type="button" value="Inserir um produto"></a>
                                <a href="form-agendamento.php"><input type="button" value="Fazer um agendamento"></a>
                                <a href="form-usuario.php"><input type="button" value="Usuário"></a>
                                <a href="../logout.php"><input type="submit" value="Sair"></a>
                                
                            </div>
                        </div>
                    </div><!-- End -->

                </div>
            </div><!-- End -->

        </div>
    </div>



        <!-- Scripts Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>