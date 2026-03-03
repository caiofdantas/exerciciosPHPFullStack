<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício06</title>
</head>
<body>
    <?php include('funcoes.php'); ?>
    <h1>Exercício06</h1>
    <form method="POST">
        <label>Digita a Senha:</label>
        <input type="number" name="digitaSenha" id="digitaSenha">
        <button type="submit">Calcular
            <?php 
                $senha     = $_POST['digitaSenha'];
                $resultado = ValidarSenha($senha);
            ?>
        </button>
    </form>
        <?php echo $resultado; ?>
</body>
</html>