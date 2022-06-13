<?php

require_once('Conexao.php');

class Servico{

    private $idServico;
    private $descServico;
    private $textoServico;
    private $fotoServico;
    

    public function getIdServico(){
        return $this->idServico;
    }
    public function getDescServico(){
        return $this->descServico;
    }
    public function getTextoServico(){
        return $this->textoServico;
    }
    public function getFotoServico(){
        return $this->fotoServico;
    }
    
    public function setIdServico($idservico){
        $this->idServico = $idservico;
    }
    public function setDescServico($descservico){
        $this->descServico = $descservico;
    }
    public function setTextoServico($textoservico){
        $this->textoServico = $textoservico;
    }
    public function setFotoServico($fotoservico){
        $this->fotoServico = $fotoservico;
    }

    public function cadastrar($servico){
        $con = Conexao::conectar();
        $stmt = $con->prepare("INSERT INTO tbservico(descservico, textoservico, fotoservico) 
                    VALUES (?, ?, ?)");
        $stmt->bindValue(1, $servico->getDescServico());
        $stmt->bindValue(2, $servico->getTextoServico());
        $stmt->bindValue(3, $servico->getFotoServico());
        $stmt->execute();
    }

    public function listar(){
        $conexao = Conexao::conectar();
        $querySelect = "SELECT idservico, descservico, textoservico, fotoservico FROM tbservico";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();
        return $lista;   
    }

}