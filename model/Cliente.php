<?php
    require_once("Conexao.php");

    class Cliente{
        private $idcliente;
        private $nomeCliente;
        private $cpfCliente;
        private $celularCliente;

        public function getIdcliente(){
            return $this->idcliente;
        }
        public function getNomecliente(){
            return $this->nomecliente;
        }
        public function getCpfcliente(){
            return $this->cpfcliente;
        }
        public function getCelularcliente(){
            return $this->celularcliente;
        }
        public function setIdcliente($idcliente){
            $this->idcliente = $idcliente;
        }
        public function setNomecliente($nomecliente){
            $this->nomecliente = $nomecliente;
        }
        public function setCpfcliente($cpfcliente){
            $this->cpfcliente = $cpfcliente;
        }
        public function setCelularcliente($celularcliente){
            $this->celularcliente = $celularcliente;
        }

        // public function cadastrar($cliente){
        //     $con = Conexao::conectar();
        //     $query = "INSERT INTO tbCliente(nomecliente, cpfcliente, celularcliente)
        //                 VALUES ('".$cliente->getNomeCliente()."',
        //                         '".$cliente->getCpfCliente()."',
        //                         '".$cliente->getCelularCliente()."')";
        //     $con->exec($query);
        // }

        public function cadastrar2($cliente){
            //prepare statement
            $con = Conexao::conectar();
            $stmt = $con->prepare("INSERT INTO tbcliente(nomecliente, cpfcliente, celularcliente)
                                    VALUES(?,?,?)");
            $stmt->bindValue(1, $cliente->getNomeCliente());
            $stmt->bindValue(2, $cliente->getCpfCliente());
            $stmt->bindValue(3, $cliente->getCelularCliente());
            $stmt->execute();
        }

        public function listar(){
            $conexao = Conexao::conectar();
            $querySelect = "SELECT idcliente, nomecliente, celularcliente, cpfcliente from tbcliente";
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista;   
        }
    }