<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>ATIVIDADE 1</title>
</head>

<body>
    <?php
    $idadeV = $_GET['idade'] ?? null;
    ?>
    <main>
        <h1>VERIFICAR IDADE</h1><br>

        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">

            <label for="idade">Insira a sua idade</label>
            <input type="number" name="idade" value="<?= $idadeV ?>"><br><br>
            <button type="submit">CONFIRMAR</button>

        </form><br>

    </main>

    <?php if ($idadeV !== null): ?>

        <section>
            <h2>IDADE VERIFICADA</h2>
            <?php
            echo "<p>Sua idade é de $idadeV anos</p>";
            if ($idadeV < 18) {
                echo "<p>Seu cadastro foi <strong>NEGADO</strong></p>";
            } elseif ($idadeV >= 18) {
                echo "<p>Seu cadastro foi <strong>APROVADO</strong></p>";
            }
            ?>
        </section>

    <?php endif; ?>

</body>

</html>