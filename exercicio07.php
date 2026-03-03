<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício07</title>
</head>
<body>
    <?php include('funcoes.php'); ?>
    <form method="POST">
        <label>Digita o primeiro Horário</label>
        <input type="number" name="primeiroHorario" id="primeiroHorario">
        <label>Digita o segundo Horário</label>
        <input type="number" name="segundoHorario" id="segundoHorario">
        <button type="submit">Calcular
            <?php
                $num1 = $_POST['primeiroHorario'];
                $num2 = $_POST['segundoHorario'];
                $resultado = compararHorario($num1,$num2);
            ?>
        </button>

    </form>
    <?php echo $resultado;?>
    
</body>
</html>