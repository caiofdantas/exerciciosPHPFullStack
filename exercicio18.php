<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio18</title>
</head>
<body>
    <?php include('funcoes.php');?>
    <h1>Exercicio18</h1>
    <form method="POST">
        <label>Digita o Número:</label>
        <input type="number" name="num1" id="num1">
        <br><br>
        <label>Digita o Número:</label>
        <input type="number" name="num2" id="num2">
        <br><br>
        <label>Digita o Número:</label>
        <input type="number" name="num3" id="num3">
        <br><br>
        <label>Digita o Número:</label>
        <input type="number" name="num4" id="num4">
        <br><br>
        <label>Digita o Número:</label>
        <input type="number" name="num5" id="num5">
        <br><br>
        <label>Digita o Número:</label>
        <input type="number" name="num6" id="num6">
        <br><br>
        <label>Digita o Número:</label>
        <input type="number" name="num7" id="num7">
        <br><br>
        <label>Digita o Número:</label>
        <input type="number" name="num8" id="num8">
        <br><br>
        <label>Digita o Número:</label>
        <input type="number" name="num9" id="num9">
        <br><br>
        <label>Digita o Número:</label>
        <input type="number" name="num10" id="num10">
        <br><br>
        <button type="submit">Calcular
            <?php
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $num3 = $_POST['num3'];
                $num4 = $_POST['num4'];
                $num5 = $_POST['num5'];
                $num6 = $_POST['num6'];
                $num7 = $_POST['num7'];
                $num8 = $_POST['num8'];
                $num9 = $_POST['num9'];
                $num10 = $_POST['num10'];
                $resultado = Idademedia($num1,$num2,$num3,$num4,$num5,$num6,$num7,$num8,$num9,$num10);
            ?>
        </button>
    </form>
    <?php echo $resultado; ?>
</body>
</html>