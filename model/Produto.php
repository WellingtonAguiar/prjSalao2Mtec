<?php
require_once("Conexao.php");

class Produto{ 
    private $idProduto;
    private $descProduto;
    private $textoProduto;
    private $fotoProduto;


    public function getIdProduto(){
        return $this->idProduto;
    }
    public function getDescProduto(){
        return $this->descProduto;
    }
    public function getTextoProduto(){
        return $this->textoProduto;
    }
    public function getFotoProduto(){
        return $this->fotoProduto;
    }
    
    public function setIdProduto($idProduto){
        return $this->idProduto = $idProduto;
    }
    public function setDescProduto($descProduto){
        return $this->descProduto = $descProduto;
    }
    public function setTextoProduto($textoProduto){
        return $this->textoProduto = $textoProduto;
    }
    public function setFotoProduto($fotoProduto){
        return $this->fotoProduto = $fotoProduto;
    }

    public function cadastrar($produto){
        $con = Conexao::conectar();
        $stmt = $con->prepare("INSERT INTO tbproduto(descproduto, textoproduto, fotoproduto) 
                    VALUES (?, ?, ?)");
        $stmt->bindValue(1, $produto->getDescProduto());
        $stmt->bindValue(2, $produto->getTextoProduto());
        $stmt->bindValue(3, $produto->getFotoProduto());
        $stmt->execute();
        // try {
        //     $stmt->execute();
        //     }catch(Exception $e){
        //     print_r($e);
        //     }
        
    }

    public function listar(){
        $conexao = Conexao::conectar();
        $querySelect = "SELECT idproduto,descproduto, textoproduto, fotoproduto FROM tbproduto";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();
        return $lista;   
    }

}