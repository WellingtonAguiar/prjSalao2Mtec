<?php
    require_once("../model/Cliente.php");

    header("Location: form-cliente.php?msg=1");
    
    $cliente = new Cliente();

    $cliente->setNomeCliente($_POST['nomecliente']);
    $cliente->setCpfCliente($_POST['cpfcliente']);
    $cliente->setCelularCliente($_POST['celularcliente']);

    $cliente->cadastrar2($cliente);
?>