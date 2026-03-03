<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php include('funcoes.php');?>
    <form method="POST">
        <label>Informe o Primeiro Número:</label>
        <input type="number" name="primeiroNumero" id="primeiroNumero">
        <label>Informe o Segundo Número:</label>
        <input type="number" name="segundoNumero" id="segundoNumero">
        <label>Informe o Terceiro Número:</label>
        <input type="number" name="terceiroNumero" id="terceiroNumero">
        <label>Informe o Quarto Número:</label>
        <input type="number" name="quartoNumero" id="quartoNumero">
        <label>Informe o Quinto Número:</label>
        <input type="number" name="quintoNumero" id="quintoNumero">
        <button type="submit">Calcular
            <?php 
                $num1      = $_POST['primeiroNumero'];
                $num2      = $_POST['segundoNumero'];
                $num3      = $_POST['terceiroNumero'];
                $num4      = $_POST['quartoNumero'];
                $num5      = $_POST['quintoNumero'];
                $resultado = mediaNumeros($num1,$num2,$num3,$num4,$num5);
            ?>
        </button>
    </form>
    <?php echo $resultado; ?>
</body>
</html>