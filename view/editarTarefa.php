<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Tarefas</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <?php
    $id = $_GET["id"];

    include "../controllers/ControllerTarefa.php";

    

    $controller = new controllerTarefa();
    if ($tarefa = $controller->buscarTarefa($id)){
        echo "não exite tarefa";
    }
    
    $controller->editar();
    //var_dump($tarefa);
    //$controller->editar();

    ?>
    <main class="main-container">
        <section>
            <?php
            if (isset($_GET['Erro'])) {
                $erro = (int) $_GET['erro'];
                if ($erro === 1) {
                    echo "<div class='masagem-erro'>Tarefa realizada com erro!</div>";
                }
            }
            ?>
        </section>
        <h1>Atualizar Tarefa</h1>
        <p>informe os campos abaixo</p>
        <form action="#" method="POST">
            <div>
                <label for="titulo">Titulo: </label>
                <input type="text" id="text" name="titulo" value= "<?= $tarefa->getTitulo(); ?>">
            </div>

            <div>
                <label for="descricao">Descrição: </label>
                <textarea id="descricao" name="descricao"><?= $tarefa->getDescricao(); ?></textarea>
            </div>

            <!-- <div>
                <label for="id_responsavel">Registro Responsavel</label>
                <input type="number" id="id_responsavel" name="id_responsavel">
            </div>
        -->
            <div>
                <?= $tarefa->getResponsavel()->getId(); ?>
                <?= $tarefa->getResponsavel()->getNome(); ?>
                <label for="id_responsavel">Registro Responsavel</label>
                <select id = "id_responsavel" name= "id_responsavel">
                    <option value="" disabled selected>Selecione um responsável</option>
                    <option value="1">Nome do responsável 1</option>
                    <option value="2">Nome do responsável 2</option>
                </select>
            </div>
            <div>
                <?= $tarefa->getStatus(); ?>
                <label for="status">Status: </label>
                <select id="status" name="status">
                    <option value="PENDENTE"
                    <?php if ($tarefa->getStatus()==="PENDENTE"){
                        echo "selected";
                    }?>
                    >PENDENTE</option>
                    <option value="EM_ANDAMENTO"
                    <?php if ($tarefa->getStatus()==="EM ANDAMENTO"){
                        echo "selected";
                    }?>
                    >EM ANDAMENTO</option>
                    <option value="CONCLUIDA"
                    <?php if ($tarefa->getStatus()==="CONCLUIDA"){
                        echo "selected";
                    }?>
                    >CONCLUIDA</option>
                    <option value="CANCELADA"
                    <?php if ($tarefa->getStatus()==="CANCELADA"){
                        echo "selected";
                    }?>
                    >CANCELADA</option>
                </select>
            </div>
            <div>
                <input type="hidden" name="id" value="<?= $id; ?>">
                <input type="subimit" value="ATUALIZAR">
                <input type="reset" value="LIMPAR">
            </div>
            <div>
                <button type="submit">Enviar</button>
                <button type="reset">Limpar</button>
            </div>
        </form>
    </main>
</body>

</html>