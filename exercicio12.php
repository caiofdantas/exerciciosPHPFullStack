<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio12</title>
</head>
<body>
    <?php include('funcoes.php'); ?>
    <h1>Exercicio12</h1>
    <form method="POST">
        <label>Informe o Número:</label>
        <input type="numb" name="infoNumero" id="infoNumero">
        <button type="submit">Calcular
            <?php 
                $num1 = $_POST['infoNumero'];
                $resultado = verificarPar($num1);
            ?>
        </button>
    </form>
    <?php echo $resultado;?>
</body>
</html>