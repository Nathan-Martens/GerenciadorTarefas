<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Tarefas</title>
</head>
<body>
    <?php 
        include "../controllers/ControllerTarefa.php";

        $controller = new controllerTarefa();
        $controller->cadastrar();


    ?>
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

        <div>
            <label for="id_responsavel">Registro Responsavel</label>
            <input type="number" id="id_responsavel" name="id_responsavel">
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
    
</body>
</html>