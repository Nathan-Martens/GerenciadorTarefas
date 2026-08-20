<?php

include_once "../dao/DaoResponsavel.php";
include_once "../models/Responsavel.php";

class controllerResponsavel
{
    private DaoResponsavel $daoResponsavel;

    public function __construct()
    {
        $this->daoResponsavel = new DaoResponsavel();
    }

    public function cadastrar(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $nome = $_POST['nome'];

            if (!empty($nome)) {

                $responsavel = new Responsavel(null, $nome);

                if ($this->daoResponsavel->inserir($responsavel)) {
                    header("Location: listarResponsaveis.php?sucesso=1");
                    exit;
                } else {
                    header("Location: cadastrarResponsavel.php?erro=1");
                    exit;
                }
            }
        }
    }

    public function editar(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $id = $_POST['id'];
            $nome = $_POST['nome'];

            if (!empty($id) && !empty($nome)) {

                $responsavel = new Responsavel($id, $nome);

                if ($this->daoResponsavel->editar($responsavel)) {
                    header("Location: listarResponsaveis.php?sucesso=1");
                    exit;
                } else {
                    header("Location: cadastrarResponsavel.php?erro=1");
                    exit;
                }
            }
        }
    }

    public function excluir($id): bool
    {
        return $this->daoResponsavel->excluir($id);
    }

    public function listar(): array
    {
        return $this->daoResponsavel->listarTodos();
    }

    public function buscarResponsavel($id): Responsavel
    {
        return $this->daoResponsavel->buscarResponsavel($id);
    }
}