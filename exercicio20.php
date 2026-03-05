<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <title>Exercicio20</title>
</head>
<body>
    <?php include('funcoes.php');?>
    <h1>Exercicio20</h1>
    <form method="POST">
        <label>Escolhe um Dia da Semana:</label>
        <input type="number" name="infonum" id="infonum">
        <button type="submit">Calcular
            <?php 
                $num = $_POST['infonum'];
                $resultado = diaSemana($num);
            ?>
        </button>
    </form>
    <?php echo $resultado;?>
</body>
</html>