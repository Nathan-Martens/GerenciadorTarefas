<?php
include "../dao/DaoTarefa.php";
include "../models/Responsavel.php";

class controllerTarefa
{
    private DaoTarefa $daoTarefa;

    public function __construct()
    {
        $this->daoTarefa = new DaoTarefa();
    }

    public function cadastrar(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $titulo = $_POST['titulo'];
            $descricao = $_POST['descricao'];
            $responsavel = $_POST['id_responsavel'];
            $status = $_POST['status'];

            if (!empty($titulo) && !empty($descricao) && !empty($responsavel) && !empty($status)) {
                //$responsavel = $this->daoResponsavel->buscaReponsavel($id)
                $responsavel = new Responsavel($responsavel, "Nathan");

                //$tarefa = new Tarefas(null, $titulo, $descricao, $responsavel);
                $tarefa = new Tarefas($titulo, $descricao, $responsavel, $status);

                if ($this->daoTarefa->inserir($tarefa)) {
                    header("Location: listarTarefas.php?sucesso=1");
                    exit;
                } else {
                    header("Location: cadastrarTarefa.php?erro=1");
                    exit;
                }
            }
        }
    }
    
    public function listar(): array{
        return $this->daoTarefa->listarTodas();
    }
    
    public function buscarTarefa($id): Tarefas{
        return $this->daoTarefa->buscarTarefa($id);
    }

}
