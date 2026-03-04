<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício15</title>
</head>
<body>
    <?php include('funcoes.php'); ?>
    <h1>Exercício15</h1>
    <form method="POST">
        <label>Digita um número</label>
        <input type="number" name="infoNum" id="infoNum">
        <button type="submit">Calcular
            <?php 
                $num1 = $_POST['infoNum'];
                $resultado = veriNum ($num1);
            ?>
        </button>
        <?php echo $resultado; ?>
    </form>    
</body>
</html>