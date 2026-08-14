<?php
$id = $_GET["id"];

include "../controllers/ControllerTarefa.php";



$controller = new controllerTarefa();
if ($tarefa = $controller->buscarTarefa($id)) {
    if ($controller->excluir($id)) {
        header("Location: listarTarefas.php?sucesso=1");
        exit;
    } else
        header("Location: listarTarefas.php?erro=1");
    exit;
}
//var_dump($tarefa);
//$controller->editar();
