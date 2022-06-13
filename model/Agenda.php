<?php
    require_once("Conexao.php");
    require_once("Cliente.php");
    require_once("Servico.php");

    class Agenda{
        private $idagenda;
        private $dataagenda;
        private $horaagenda;
        //private $idcliente; // classe cliente
        private $cliente;
        private $idservico; // classe serviço

        

        public function setIdAgenda($idagenda){
            $this->idagenda = $idagenda;
        }
        public function setDataAgenda($dataagenda){
            $this->dataagenda = $dataagenda;
        }
        public function setHoraAgenda($horaagenda){
            $this->horaagenda = $horaagenda;
        }

        public function getIdAgenda(){
            return $this->idagenda ;
        }
        public function getDataAgenda(){
            return $this->dataagenda ;
        }
        public function getHoraAgenda(){
            return $this->horaagenda;
        }
        public function setCliente($cliente){
            $this->cliente = $cliente;
        }
        public function getCliente(){
            return $this->cliente;
        }
        public function setServico($servico){
            return $this->servico = $servico;
        }
        public function getServico(){
            return $this->servico;
        }

        //falta fazer set e get do serviço!!!!!!!!!!!!!!!!!
        // $agenda->cliente->getIdcliente();
      public function cadastrar($agenda){
        $con = Conexao::conectar();

        $stmt = $con->prepare("INSERT INTO tbagenda(dataagenda, horaagenda, idcliente, idservico)
        VALUES(?,?,?,?)");
$stmt->bindValue(1, $agenda->getdataAgenda());
$stmt->bindValue(2, $agenda->gethoraAgenda());
$stmt->bindValue(3, $agenda->getCliente()->getIdcliente());
$stmt->bindValue(4, $agenda->getServico()->getIdServico());

$stmt->execute();
    }

public function listar(){
    $con = Conexao::conectar();
    $query = "SELECT idagenda, dataagenda, horaagenda, idcliente, idservico FROM tbagenda";
    $resultado = $con->query($query);
    $lista = $resultado->fetchAll();

    return $lista;
}
}
?>