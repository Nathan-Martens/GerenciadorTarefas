<?php

include "Conexao.php";
include "./models/Tarefa.php";

class DaoTarefa
{
    private PDO $conn;

    public function __construct()
    {
        $this->conn = Conexao::getConexao();
    }

    public function inserir(Tarefas $tarefas){
        $sql = "INSERT INTO tarefas (titulo, descricao, id_responsavel) VALUES (:titulo, :descricao, : id_responsavel)";

        $stmt = $this->conn->prepare($sql);
        $id_responsavel = $tarefas->getResponsavel()->getId();

        return $stmt->execute([
            ':titulo'=> $tarefas->getTitulo(),
            ':descricao'=> $tarefas->getDescricao(),
            ':id_responsavel'=> $id_responsavel
        ]);
    }
    public function listarTodas(){
        return null;
    }

}
