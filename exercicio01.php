<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio01</title>
</head>
<body>
    <?php include('funcoes.php'); ?>
    <h1>Exercício01</h1>
    <br>
    <h2>Receba dois números e retorne a soma deles</h2>
    <br><br>
    <form method="POST">
        <label> Primeiro Número: </label>
        <input type="number" name="primeiroNumero" id="primeiroNumero"/>
        <br><br>
        <label>Segundo Número: </label> 
        <input type="number" name="segundoNumero" id="segundoNumero"/>
        <br><br>
        <button type="submit">Calcular
        <?php    
            $num1 = $_POST["primeiroNumero"];
            $num2 = $_POST["segundoNumero"];
            //fazer a operação
            $resultado = exercicio01($num1,$num2);
            $subtracao = subtrair($num1,$num2);
            $mult      = multiplicacao($num1,$num2);
            $divi      = divisao($num1,$num2);
            $potencia  = potencia($num1,$num2);
            $raiz1     = raiz($num1);
            $raiz2     = raiz($num2);
        ?>
        </button>
        <br>
        <h3>
            <?php
                echo $resultado;
            ?>
        </h3>
        <br>
        <h3>
            <?php
                echo $subtracao;
            ?>
        </h3>
        <br>
        <h3>
            <?php
                echo $mult;
            ?>
        </h3>
        <br>
        <h3>
            <?php
                echo $divi;
            ?>
        </h3>
        <br>
        <h3>
            <?php
                echo $potencia;
            ?>
        </h3><br>
        <h3>
            <?php
                echo $raiz1;
            ?>
        </h3><br>
        <h3>
            <?php
                echo $raiz2;
            ?>
        </h3>
    </form>
    <br><br>
    <button><a href="index.php">Voltar</a></button>    
</body>
</html>