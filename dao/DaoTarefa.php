<?php
//include_once "Conexao.php";
//include "Conexao.php";
require_once "Conexao.php";
include "../models/Tarefa.php";

class DaoTarefa
{
    private PDO $conn;

    public function __construct()
    {
        $this->conn = Conexao::getConexao();
    }

    public function inserir(Tarefas $tarefas){
        $sql = "INSERT INTO tarefa (titulo, descricao, id_responsavel, status)
        VALUES (:titulo, :descricao, :id_responsavel, :status)";

        $stmt = $this->conn->prepare($sql);
        $id_responsavel = $tarefas->getResponsavel()->getId();

        return $stmt->execute([
            ':titulo'=> $tarefas->getTitulo(),
            ':descricao'=> $tarefas->getDescricao(),
            ':id_responsavel'=> $id_responsavel,
            ':status'=> $tarefas->getStatus()
        ]);
    }
    public function listarTodas():array{
        $sql = "SELECT t.id, t.titulo, t.descricao, t.id_responsavel, t.status,
        r.id as 'id_resp', r.nome
        FROM tarefa as t, responsavel as r WHERE t.id_responsavel = r.id";
        $stmt = $this->conn->prepare($sql);

        $stmt->execute();
        $resultado = $stmt->fetchALL(PDO::FETCH_ASSOC);

        $lista = [];
        foreach($resultado as $linha){

            $responsavel = new Responsavel($linha['id_resp'], $linha['nome']);

            $tarefa = new Tarefas ($linha['titulo'],$linha['descricao'], $responsavel, $linha['status']);
            $tarefa->setId($linha['id']);

            $lista[] = $tarefa;
        }

        return $lista;
    }
    
    public function buscarTarefa($id) : Tarefas{
        $sql = "SELECT t.id, t.titulo, t.descricao, t.id_responsavel, t.status,
        r.id as 'id_resp', r.nome
        FROM tarefa as t, responsavel as r WHERE t.id = :id and t.id_responsavel = r.id";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute([':id'=>$id]);

        $resultado = $stmt->fetchALL(PDO::FETCH_ASSOC);
        foreach($resultado as $linha){

            $responsavel = new Responsavel($linha['id_resp'], $linha['nome']);

            $tarefa = new Tarefas ($linha['titulo'],$linha['descricao'], $responsavel, $linha['status']);
            $tarefa->setId($linha['id']);
            $tarefa;
        }

        return $tarefa;
    }
}
