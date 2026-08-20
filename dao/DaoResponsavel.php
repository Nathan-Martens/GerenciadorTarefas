<?php

require_once "Conexao.php";
include_once "../models/Responsavel.php";

class DaoResponsavel
{
    private PDO $conn;

    public function __construct()
    {
        $this->conn = Conexao::getConexao();
    }

    public function inserir(Responsavel $responsavel): bool
    {
        $sql = "INSERT INTO responsavel (nome)
                VALUES (:nome)";

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([
            ':nome' => $responsavel->getNome()
        ]);
    }

    public function editar(Responsavel $responsavel): bool
    {
        $sql = "UPDATE responsavel
                SET nome = :nome
                WHERE id = :id";

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([
            ':id' => $responsavel->getId(),
            ':nome' => $responsavel->getNome()
        ]);
    }

    public function excluir($id): bool
    {
        $sql = "DELETE FROM responsavel
                WHERE id = :id";

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([
            ':id' => $id
        ]);
    }

    public function listarTodos(): array
    {
        $sql = "SELECT id, nome
                FROM responsavel
                ORDER BY nome";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute();

        $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $lista = [];

        foreach ($resultado as $linha) {

            $responsavel = new Responsavel(
                $linha['id'],
                $linha['nome']
            );

            $lista[] = $responsavel;
        }

        return $lista;
    }

    public function buscarResponsavel($id): Responsavel
    {
        $sql = "SELECT id, nome
                FROM responsavel
                WHERE id = :id";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute([
            ':id' => $id
        ]);

        $linha = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($linha) {
            return new Responsavel(
                $linha['id'],
                $linha['nome']
            );
        }

        return new Responsavel(null, "");
    }
}