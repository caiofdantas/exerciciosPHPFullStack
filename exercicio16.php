<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício16</title>
</head>
<body>
    <h1>Exercício16</h1>
    <?php include('funcoes.php'); ?>
    <form method="POST">
        <label>Digita o Número</label>
        <input type="number" name="infoNum" id="infoNum">
        <label>Digita o Número</label>
        <input type="number" name="infoNume" id="infoNume">
        <label>Digita o Número</label>
        <input type="number" name="infoNumer" id="infoNumer">
        <button type="submit">Calcular
            <?php
                $num1 = $_POST['infoNum'];
                $num2 = $_POST['infoNume'];
                $num3 = $_POST['infoNumer'];
                $resultado = triangulo($num1,$num2,$num3);
            
            ?>

        </button>
    </form>
    <?php echo $resultado?>
    
</body>
</html>