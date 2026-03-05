<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio19</title>
</head>
<body>
    <?php include('funcoes.php'); ?>
    <h1>Exercicio19</h1>
    <form method="POST">
        <label>digita um numero </label>
        <input type="number" name="infoNum" id="infoNum">
        <button type="submit">Calcular
            <?php
                $num = $_POST['infoNum'];
                $resultado = fatorial($num);
            ?>
        </button>
    </form>
    <?php echo $resultado;?>
</body>
</html>