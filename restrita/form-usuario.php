<?php
require_once("valida-login.php")
?>

<html lang="pt-br">
<head>
<ul>
            <li><a href="index-restrito.php">Home</a></li>
            <li><a href="form-agendamento.php">Agendamento</a></li>
            <li><a href="form-cliente.php">Cliente</a></li>
            <li><a href="form-servico.php">Serviço</a></li>
            <li><a href="form-usuario.php"> Usuário</a></li>
            <li><a href="form-produto.php">Produto</a></li>
        </ul>
            <!-- Tags obrigatórias -->
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            

            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="css/style.css" type="text/css">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <title>Cliente</title>
    </head>
    <body>
    <?php
        include_once("valida-login.php");
        ?>




        <!-- Scripts Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </body>
</html>