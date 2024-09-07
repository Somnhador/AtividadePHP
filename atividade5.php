<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>ATIVIDADE 5</title>
</head>

<body>
    <?php
    session_start();

    if (!isset($_SESSION['saldo'])) {
        $_SESSION['saldo'] = 0;
    }

    $banco1 = $_GET['banco1'] ?? null;
    $saldo = $_SESSION['saldo'];

    if (isset($_GET['deposito'])) {
        $deposito = (float) $_GET['deposito'];
        $_SESSION['saldo'] += $deposito;
        $saldo = $_SESSION['saldo'];
    }

    if (isset($_GET['saque'])) {
        $saque = (float) $_GET['saque'];

        if ($saque <= $_SESSION['saldo']) {
            $_SESSION['saldo'] -= $saque;
            $saldo = $_SESSION['saldo'];
        } else {
            echo "Saldo Insuficiente!";
        }
    }
    ?>
    <main>
        <h1>MENU DE OPÇÕES</h1><br>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label>Menu</label>
            <select name="banco1">
                <option name="banco1" value="1">Ver Saldo</option>
                <option name="banco1" value="2">Depositar</option>
                <option name="banco1" value="3">Sacar</option>
                <option name="banco1" value="4">Sair</option>
            </select>
            <button type="submit">Confirmar</button><br><br><br>

            <?php if ($banco1 !== null): ?>

                <section>
                    <?php
                    if ($banco1 == 1) {
                        echo "Você tem R$ $saldo";
                    } elseif ($banco1 == 2) {
                        echo "<label>Deposite um valor </label>";
                        echo "<input type='number' name='deposito' value='deposito'>";
                        echo " <button type='submit'>Depositar</button>";
                    } elseif ($banco1 == 3) {
                        echo "<label>Deposite um valor </label>";
                        echo "<input type='number' name='saque' value='saque'>";
                        echo " <button type='submit'>Sacar</button>";
                    } elseif ($banco1 == 4) {
                        echo "Sistema finalizado!";
                        session_destroy();
                    }
                    ?>
                </section>

            <?php endif; ?>
        </form>
    </main>
</body>

</html>