<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio09</title>
</head>
<body>
    <?php include('funcoes.php'); ?>
    <h1>Exercicio09</h1>
    <form method="POST">
        <label>Digita até da 100</label>
        <input type="number" name="somaNum" id="somaNum">
        <br><br>
        <label>Digita até da 100</label>
        <input type="number" name="somaNume" id="somaNume">
        <br><br>
        <label>Digita até da 100</label>
        <input type="number" name="somaNumer" id="somaNumer">
        <br><br>
        <label>Digita até da 100</label>
        <input type="number" name="somaNumero" id="somaNumero">
        <br><br>
        <label>Digita até da 100</label>
        <input type="number" name="somaNumeros" id="somaNumeros">
        <br><br>
        <button type="submit">Calcular
            <?php 
                $num1      = $_POST['somaNum'];
                $num2      = $_POST['somaNume'];
                $num3      = $_POST['somaNumer'];
                $num4      = $_POST['somaNumero'];
                $num5      = $_POST['somaNumeros'];
                $resultado = ultraPasse($num1,$num2,$num3,$num4,$num5);
            ?>
        </button>
    </form>
    <?php echo  $resultado; ?>
</body>
</html>