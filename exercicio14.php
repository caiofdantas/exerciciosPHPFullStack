<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio14</title>
</head>
<body>
    <?php include('funcoes.php');?>
    <h1>Exercicio14</h1>
    <form method="POST">
        <label>Digita um número de partida:</label>
        <input type="number" name="infoNum" id="infoNum">
        <label>Digita um número de termino:</label>
        <input type="number" name="infoNume" id="infoNume">
        <button type="submit">Calcular
            <?php
                $infoNum  = $_POST['infoNum'];
                $infoNume = $_POST['infoNume'];
            ?>
        </button>
    </form>
    <?php imprimaNum($infoNum,$infoNume); ?>
</body>
</html>