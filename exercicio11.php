<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio11</title>
</head>
<body>
    <?php include('funcoes.php');?>
    <h1>Exercicio11</h1>
    <form method="POST">
        <label>Informe a sua Idade:</label>
        <input type="number" name="num1" id="num1">
        <button type="submit">Calcular
            <?php
                $num1      = $_POST['num1'];
                $resultado = classificarIdade($num1);
            ?>
        </button>
    </form>
    <?php echo $resultado; ?>
</body>
</html>