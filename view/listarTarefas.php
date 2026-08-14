<?php
include("../controllers/ControllerTarefa.php");

$controllerTarefa = new controllerTarefa();
$retornoTarefas = $controllerTarefa->listar();

//var_dump($retornoTarefas);

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Tarefas</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <main class="main-container">
        <section>
            <?php
            if (isset($_GET['sucesso'])) {
                $sucesso = (int) $_GET['sucesso'];
                if ($sucesso === 1) {
                    echo "<div class='mensagem-sucesso'> Tarefa realizada com sucesso !</div>";
                }
            }
            ?>
        </section>

    <?php
    if (isset($_SERVER['REQUEST_METHOD']) === 'GET') {
        $sucesso = $_GET['sucesso'];
        if ($sucesso === 1) {
            echo "Tarefa Cadastrada com sucesso!!!";
        }
    }
    ?>
    <section>
        <header>
            <h1>Gerenciador de Tarefas</h1>
        </header>
        <div>
            <a href="cadastrarTarefa.php" class="btn-cadastrar-tarefas">+ Tarefa</a>
        </div>
        <?php
        foreach ($retornoTarefas as $item) {
        ?>

            <article>
                <h2><?= $item->getTitulo() ?></h2>
                <p><?= $item->getDescricao() ?></p>
                <div>
                    <p><?= $item->getResponsavel()->getNome(); ?></p>
                    <P><?= $item->getStatus(); ?></p>
                </div>
                <div class="acoes-article">
                    <a href="editarTarefa.php?id=<?=  $item->getId();?>" class="btn-editar">Editar</a>
                    <a href="excluirTarefa.php?id=<?=  $item->getId();?>" class="btn-excluir" onclick="return confirm('Deseja realmente excluir esta tarefa?')">Excluir</a>
                </div>

            </article>

        <?php
        }
        ?>
    </section>
    </main>
</body>

</html>