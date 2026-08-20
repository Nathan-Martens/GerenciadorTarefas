<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Responsáveis</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>

    <?php
    include_once "../controllers/controllerResponsavel.php";

    $controllerResponsavel = new controllerResponsavel();

    $controllerResponsavel->cadastrar();
    ?>

    <main class="main-container">

        <section>
            <?php
            if (isset($_GET['erro'])) {
                $erro = (int) $_GET['erro'];

                if ($erro === 1) {
                    echo "<div class='mensagem-erro'>Cadastro realizado com erro!</div>";
                }
            }

            if (isset($_GET['sucesso'])) {
                $sucesso = (int) $_GET['sucesso'];

                if ($sucesso === 1) {
                    echo "<div class='mensagem-sucesso'>Responsável cadastrado com sucesso!</div>";
                }
            }
            ?>
        </section>

        <h1>Cadastro de responsáveis</h1>

        <p>Informe o nome do responsável abaixo</p>

        <form action="#" method="POST">

            <div>
                <label for="nome">Nome:</label>
                <input
                    type="text"
                    id="nome"
                    name="nome"
                    placeholder="Digite o nome do responsável"
                    required
                >
            </div>

            <div>
                <button type="submit">Cadastrar</button>
                <button type="reset">Limpar</button>
            </div>

        </form>

    </main>

</body>

</html>
