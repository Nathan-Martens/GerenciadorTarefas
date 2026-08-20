<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Tarefas</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <?php
    include_once "../controllers/ControllerTarefa.php";
    include_once "../controllers/controllerResponsavel";

    $controllerTarefa = new controllerTarefa();
    $controllerResponsavel = new controllerResponsavel();

    $controllerTarefa->cadastrar();
    $listaResponsaveis = $controllerResponsavel->listar();
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
        <h1>Cadastro de tarefas</h1>
        <p>informe os campos abaixo</p>
        <form action="#" method="POST">
            <div>
                <label for="titulo">Titulo: </label>
                <input type="text" id="text" name="titulo">
            </div>

            <div>
                <label for="descricao">Descrição: </label>
                <textarea id="descricao" name="descricao"></textarea>
            </div>

            <!-- <div>
                <label for="id_responsavel">Registro Responsavel</label>
                <input type="number" id="id_responsavel" name="id_responsavel">
            </div>
        -->
            <div>
                <label for="id_responsavel">Registro Responsavel</label>
                <select id = "id_responsavel" name= "id_responsavel">
                    <option value="" disabled selected>Selecione um responsável</option>
                    <option value="1">Nome do responsável 1</option>
                    <option value="2">Nome do responsável 2</option>
                </select>
            </div>
            <div>
                <label for="id_responsavel">Responsável</label>
                <select name="id_responsavel" id="id_responsavel">
                    <option value="" disabled selected>Selecione um responsavel</option>
                    <?php 
                    foreach ($listaResponsaveis as $responsavel){
                    ?>
                        <option value= <?=  $responsavel->getId(); ?>>
                            <?=  $responsavel->getNome(); ?>
                        </option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div>
                <label for="status">Status: </label>
                <select id="status" name="status">
                    <option value="PENDENTE">PENDENTE</option>
                    <option value="EM_ANDAMENTO">EM ANDAMENTO</option>
                    <option value="CONCLUIDA">CONCLUIDA</option>
                    <option value="CANCELADA"></option>
                </select>
            </div>
            <div>
                <button type="submit">Enviar</button>
                <button type="reset">Limpar</button>
            </div>
        </form>
    </main>
</body>

</html>