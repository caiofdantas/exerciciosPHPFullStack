<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio21</title>
</head>
<body>
    <?php include('funcoes.php');?>
    <h1>Exercicio21</h1>
    <form method="POST">
        <label>Codigo do Produto</label>
        <input type="number" name="infonum" id="infonum">
        <button type="submit">Calcular
            <?php 
                $num1 = $_POST['infonum'];
                $resultado = Compra($num1);
            ?>
        </button>
    </form>
    <?php echo $resultado; ?>
</body>
</html>