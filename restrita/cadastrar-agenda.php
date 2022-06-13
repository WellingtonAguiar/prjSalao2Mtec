<?php
    require_once("../model/Agenda.php");
    require_once("../model/Cliente.php");
    require_once("../model/Servico.php");

    header("Location: form-agendamento.php?msg=1");
    
    $agenda = new Agenda();
    $cliente = new Cliente();
    $servico = new Servico();

    $data = $_POST['dataagenda'];


    $agenda->setDataAgenda($data);
    $agenda->setHoraAgenda($_POST['horaagenda']);
    
    
    $cliente->setIdcliente($_POST['idcliente']);
    $agenda->setCliente($cliente);

    $servico->setIdservico($_POST['idservico']);
    $agenda->setServico($servico);

    $agenda->cadastrar($agenda);

    
?>