<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio13</title>
</head>
<body>
    <?php include('funcoes.php'); ?>
    <h1>Exercicio13</h1>
    <form method="POST">
        <label>Digita o número:</label>
        <input type="number" name="infoNum" id="infoNum">
        <br><br>
        <label>Digita o número:</label>
        <input type="number" name="infoNume" id="infoNume">
        <br><br>
        <button type ="submit">Calcular
            <?php
                $num1 = $_POST['infoNum'];
                $num2 = $_POST['infoNume'];
                $resultado = compararMaior($num1,$num2);
            ?>
        </button>
    </form>
    <?php echo $resultado; ?>
</body>
</html>