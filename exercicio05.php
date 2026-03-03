<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício05</title>
</head>
<body>
    <?php include('funcoes.php'); ?>
    <form method="POST">
        <label>Informe o número:</label>
        <input type="number" name="num" id="num">
    
        <button type="submit">Calcular
            <?php 
                $num       = $_POST['num'];
                $resultado = diaDaSemana($num);
            ?>
        </button>
    </form>
    <?php echo  $resultado; ?>
</body>
</html>