<?php
    
    require_once('../model/Produto.php');

    header("Location: form-produto.php?msg=1");

    $produto = new Produto();

    $produto->setDescProduto($_POST['descProduto']);
    $produto->setTextoProduto($_POST['textoProduto']);
    
    $nome = $_FILES['fotoProduto']['name'];
    
    $arquivo = $_FILES['fotoProduto']['tmp_name'];

    $caminhoimagem = "imagens/produto/" . $nome;
      
    move_uploaded_file($arquivo, $caminhoimagem);
    //mova o $arquivo para a pasta indicada com o nome indicado
        
    $produto->setFotoProduto($caminhoimagem);

    $produto->cadastrar($produto);