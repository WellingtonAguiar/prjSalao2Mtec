<!DOCTYPE html>
<html lang="pt-br">
    <head>
            <!-- Tags obrigatórias -->
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            

            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="css/style.css" type="text/css">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <title>Produtos</title>
    </head>
    <body>
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

        <h1>Lista de Produtos Cadastrados</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Foto</th>
                    <th>Descrição</th>
                    <th>Texto</th>
                    <th class="acao">Editar</th>
                    <th class="acao">Excluir</th>
                </tr>
            </thead>
            <tbody id='resultado'>
                <?php foreach ($listaProduto as $linha){ ?>
                    <tr>
                        <td><?php echo $linha['idProduto'] ?></td>
                        <td><img src=" <?php echo $linha['fotoProduto'] ?> "></td>
                        <td><?php echo $linha['descProduto'] ?></td>
                        <td><?php echo $linha['textoProduto'] ?></td>
                        <td><a href="#">Editar</a></td>
                        <td><a href="#">Excluir</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
            </div>

        <!-- Scripts Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
            
        <!-- textos retirados do site: http://lellysonline.com.br/servicos/ -->
    </body>
</html>