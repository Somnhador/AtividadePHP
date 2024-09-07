<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>ATIVIDADE 6</title>
</head>

<body>
    <?php
    $numero = $_GET['numero'] ?? null;
    ?>
    <main>
        <h1>PAR OU ÍMPAR</h1><br>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="numero">Insira o número</label>
            <input type="number" name="numero">
            <button type="submit">Verificar</button>
        </form>
    </main>

    <?php if ($numero !== null): ?>
        <section id="resultado">
            <h2>RESULTADO</h2>
            <?php
            $numero = $_GET['numero'];

            if ($numero % 2 == 0) {
                echo "$numero é Par!";
            } else {
                echo "$numero é Ímpar!";
            }
            ?>
        </section>
    <?php endif; ?>

</body>

</html>