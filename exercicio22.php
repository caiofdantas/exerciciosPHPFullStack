<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio22</title>
</head>
<body>
    <?php include('funcoes.php'); ?>
    <h1>Exercicio22</h1>
    <label>Digita no espaço</label>
    <input type="number" name="matriz[0][0]" id="numero">
    <br><br>
    <label>Digita no espaço</label>
    <input type="number" name="matriz[0][1]" id="numero">
    <br><br>
    <label>Digita no espaço</label>
    <input type="number" name="matriz[0][2]" id="numero">
    <br><br>
    <label>Digita no espaço</label>
    <input type="number" name="matriz[0][3]" id="numero">
    <br><br>
    <label>Digita no espaço</label>
    <input type="number" name="matriz[1][0]" id="numero">
    <br><br>
    <label>Digita no espaço</label>
    <input type="number" name="matriz[1][1]" id="numero">
    <br><br>
    <label>Digita no espaço</label>
    <input type="number" name="matriz[1][2]" id="numero">
    <br><br>
    <label>Digita no espaço</label>
    <input type="number" name="matriz[1][3]" id="numero">
    <br><br>
    <label>Digita no espaço</label>
    <input type="number" name="matriz[2][0]" id="numero">
    <br><br>
    <label>Digita no espaço</label>
    <input type="number" name="matriz[2][1]" id="numero">
    <br><br>
    <label>Digita no espaço</label>
    <input type="number" name="matriz[2][2]" id="numero">
    <br><br>
    <label>Digita no espaço</label>
    <input type="number" name="matriz[2][3]" id="numero">
    <br><br>
    <label>Digita no espaço</label>
    <input type="number" name="matriz[3][0]" id="numero">
    <br><br>
    <label>Digita no espaço</label>
    <input type="number" name="matriz[3][1]" id="numero">
    <br><br>
    <label>Digita no espaço</label>
    <input type="number" name="matriz[3][2]" id="numero">
    <br><br>
    <label>Digita no espaço</label>
    <input type="number" name="matriz[3][3]" id="numero">
    <br><br>
    <button type="submit">Calcular
        <?php 
            $matriz = $_POST['matriz'];
            $resultado = mostrarMatriz($matriz);
        ?>
    </button>
    <?php echo $resultado ?>
</body>
</html>