<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio17</title>
</head>
<body>
    <?php include('funcoes.php');?>
    <h1>Exercicio17</h1>
    <form method="POST">
        <label>Digita o Número:</label>
        <input type="number" name="infoNum" id="infoNum">
        <br><br>
        <label>Digita o Número:</label>
        <input type="number" name="infoNume" id="infoNume">
        <br><br>
        <label>Digita o Número:</label>
        <input type="number" name="infoNumer" id="infoNumer">
        <br><br>
        <label>Digita o Número:</label>
        <input type="number" name="infoNumero" id="infoNumero">
        <br><br>
        <label>Digita o Número:</label>
        <input type="number" name="infoNumeroo" id="infoNumeroo">
        <br><br>
        <button type="submit">Calcular
            <?php
                $num1 = $_POST['infoNum'];
                $num2 = $_POST['infoNume'];
                $num3 = $_POST['infoNumer'];
                $num4 = $_POST['infoNumero'];
                $num5 = $_POST['infoNumeroo'];
                $resultado = Idademedia($num1,$num2,$num3,$num4,$num5);
            ?>
        </button>
    </form>
    <?php echo $resultado; ?>
</body>
</html>