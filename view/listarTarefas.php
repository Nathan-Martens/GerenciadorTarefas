<?php
    include("../controllers/ControllerTarefa.php");

    $controllerTarefa = new controllerTarefa();
    $retornoTarefas = $controllerTarefa->listar();

    //var_dump($retornoTarefas);
        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        if(isset($_SERVER['REQUEST_METHOD']) === 'GET'){
            $sucesso = $_GET['sucesso'];
            if($sucesso === 1){
                echo "Tarefa Cadastrada com sucesso!!!";
            }
        }
    ?>
    <section>
        <header>
            <h1>Gerenciador de Tarefas</h1>
        </header>
        <?php
        foreach($retornoTarefas as $item){
        ?>

        <article>
            <h2><?= $item->getTitulo()?></h2>
            <p><?= $item->getDescricao()?></p>
            <div>
                <p><?= $item->getResponsavel()->getNome();?></p>
                <P><?= $item->getStatus();?></p>
            </div>
            
        </article>

        <?php
        }
        ?>
    </section>

</body>
</html>