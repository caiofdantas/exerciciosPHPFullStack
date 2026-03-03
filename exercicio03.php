<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio03</title>
</head>
<body>
    <?php include('funcoes.php'); ?>
    <form method="POST">
        <label> Primeiro Número</label>
        <input type="number" name="primeiroNumero" id="primeiroNumero">
        <br><br>
        <label>Segundo Número</label>
        <input type="number" name="segundoNumero" id="segundoNumero">
        <label>Terceiro Número</label>
        <input type="number" name="terceiroNumero" id="terceiroNumero">
        <br><br>
        <button type="submit">Calcular
            <?php 
                $primeiroNumero = $_POST['primeiroNumero'];
                $segundoNumero  = $_POST['segundoNumero'];
                $numero         = $_POST['terceiroNumero'];
                $resultado     = verificarNumero($primeiroNumero, $segundoNumero, $numero);
            ?>
        </button>
        <?php
            if($resultado == true){
                echo"o $numero está no intervalo entre $primeiroNumero e $segundoNumero";
            }else{
                echo"O $numero não está no intervalo entre $primeiroNumero e $segundoNumero";
            }
        ?>
    </form>
    
</body>
</html>