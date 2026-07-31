<?php
include "./dao/DaoResponsavel.php";

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

            if (!empty($titulo) && !empty($descricao) && !empty($responsavel)) {
                //$responsavel = $this->daoResponsavel->buscaReponsavel($id)
                $responsavel = new Responsavel(1, "Nathan");

                $tarefa = new Tarefas(null, $titulo, $descricao, $responsavel);

                if ($this->daoTarefa->inserir($tarefa)) {
                    header("Location: listarTarefas.php?sucesso=1");
                    exit;
                } else {
                    header("Location: cadastrarTarefa.php?erro=1");
                    exit;
                }
            }
        } else {
            header("Location: cadastrarTarefa.php?erro=1");
            exit;
        }
    }
    /*
    public function listar(): array{
        return $this->daoTarefa->listarTodas();
    }
    */

}
