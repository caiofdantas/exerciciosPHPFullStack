<?php

    function exercicio01($num1, $num2){
        return " A soma é : ".((int)$num1 + (int)$num2);
    }// fim do exercício01

    function subtrair($num1, $num2){
        return "A subtração é: ".((int)$num1 - (int)$num2);
    }// fim do métedo

    function multiplicacao($num1, $num2){
        return"A multiplicação é: ".((int)$num1 * (int)$num2);
    }//fim da multiplicação 
    
    function divisao($num1, $num2){
        if($num2 <= 0){
            return "Impossível dividir!";    
        }else if ($num1 < 0 || $num2 < 0){
            return "Impossível dividr por número negativo!";
        }else{
            return "A divisão é: ".((int)$num1 / (int)$num2);
        }//fim do if
    }// fim do método
    
    function potencia($num1,$num2){
        if($num2 < 0){
        return "Impossível calcular a potência!";
        }else{
        return "A raiz é:".pow($num1, $num2);
        }//fim do if 
    }//fim do potencia
    
    function raiz($num1){
        if($num1 < 0){
            return "Impossível calcular raiz de número negativo!";
        }else{
            return "A raiz é:".sqrt((int)$num1);
        }//fim do if
    }//fim do método

    //2. Verifique se um ano é bissexto.
    function bissexto($num1){
        if($num1 % 4==0 && $num1 % 100 != 0){
            return "O ano é bissexto!";
        }else{
            return "O ano não é bissexto!";
        }
    }//fim do bissexto
    
    //3. Verificar se um número está entre 100 e 200 
    function verificarNumero($inicio, $fim, $num){
        for($i=$inicio;$i <= $fim;$i++){
            if ($i == (int)$num){
                return true;
            }
        }//fim do for
        return false;
    }// fim do método

    //4.Leia a idade e verifique se pode votar: >=16 e <18 facultativo; >= 18 obrigatório;
    function podeVotar($idade){
        if($idade >= 16 && $idade <= 18){
            return "Você pode votar (Voto Facultativo)";
        }else if ($idade >= 18){
            return "Você pode votar!";
        }else{
            return "Você NÂO PRECISA votar";
        }
    }//fim do método

    //5. Leia um número de 1 a 7 e mostre o dia da semana 
    function diaDaSemana($num){
        switch($num){
            case 1;
                return "Domingo";
                break;//encerra o switch
            case 2;
                return "Segunda-Feira";
                break;
            case 3; 
                return "Terça-Feira";
                break;
            case 4;
                return "Quarta-Feira";
                break;
            case 5;
                return "Quinta-Feira";
                break;
            case 6;
                return "Sexta-Feira";
                break;
            case 7;
                return "Sabado";
                break;
            default;
                return"O número informado é inválido!";
                break;
             }//fim do switch
    }//fim do método 
    //6. Verifique se uma senha 
    function validarSenha($senha){
    $senhabd = 1234;
    if($senhabd == $senha){
        return "Senha Correta";
    }else{
        return "Senha Incorreta";
    }//fim if

    }//fim método

    //7. Leia 2 horários e determine qual é mais tarde.
    function compararHorario($num1,$num2){
        if($num1 > $num2){
            return "Esse $num2 vem primeiro que esse $num1";
        }else{
            return "Esse $num1 vem primeiro que esse $num2";
        }
    } 

    //8.Leia 5 números e calcule a média.
    function mediaNumeros($num1,$num2,$num3,$num4,$num5){
        $media = ($num1 + $num2 + $num3 + $num4 + $num5)/5;
        return "A Média é $media";
    }



?>