<?php
    $num1 = 0; //Instanciar uma variável
    $num2 = 0;
    
    function somar($num1,$num2){
        return $num1 + $num2;
    }//fim do método

    function subtrair($num1, $num2){
        return $num1 - $num2;
    }//fim do método
    
    function dividir($num1, $num2){
        if($num2 <= 0){
            return "Impossível dividir por zero!";
        }else{
            return $num1/$num2;
        }
    }//fim do método

    function multiplicar($num1, $num2){
        return $num1 * $num2;
    }//fim do método
 
    function exercicio02($num1, $num2){
        if(($num1 >= 0 && $num1 <= 10) && ($num2 >= 0 && $num2 <= 10))
        {
            return "A média é: ".($num1+$num2)/2;
        }else{
            return "Informe notas entre 0 e 10!";
        }
    }//fim do método



    function mediaT($num1, $num2, $num3){
        if(($num1 >= 0 && $num1 <= 10) && ($num2 >= 0 && $num2 <= 10) && ($num3 >= 0 && $num3 <= 10)){
            $media = ($num1+$num2+$num3)/3;
            if($media <= 4){
                return "Recuperação !, Falta:".(10 - $media + 2);
            }if($media > 4 && $media < 7){
                return "Aluno em Prova Final !, Falta:".(10 - $media);
            }else{
                return "Passado por Média !";
            }
        }else{
            return "informe suas notas!";
        }
    }//fim do método


    function exercicio02_1($num1, $num2){
        if($num1 > $num2){
            return $num1;
        }else if($num1 == $num2){
            return "iguais";
        }else{
            return $num2;
        }
    }

    function exercicio04($cor){
        if($cor == "verde"){
            return "R$10,00";
        }else if($cor == "azul"){
            return "R$20,00";
        }else if($cor == "amarelo"){
            return "R$30,00";
        }else if($cor == "vermelho"){
            return "R$40,00";
        }else{
            return "Coloque uma Cor !";
        }
    }

    function exercicio05($num1){
        return ($num1 -1);
    }

    function exercicio06($num1, $num2){
        return "A área é: ".($num1 * $num2);
    }

    function votosBrancos($numE, $numB){
        return $numB = ($numB * 100) / $numE;
    }
    function votosNulos($numE, $numN){
        return $numN = ($numN * 100) / $numE;
    }
    function votosValidos($numE, $numV){
        return $numV = ($numV * 100) / $numE;
    }

    function exercicio07($numE, $numB, $numN, $numV){
        if(($numB + $numN + $numV) == $numE){
            $pBrancos = porcentagem($numB, $numE);
            $pNulos = porcentagem($numN, $numE);
            $pValidos = porcentagem($numV, $numE);
            return "o percentual de votos brancos foi: $pBrancos% \n
                    o percentual de votos nulos foi: $pNulos% \n
                    o percentual de votos validos foi: $pValidos%";
        }else{
            return "total de eleitores é diferente";
        }
        
    }
    function porcentagem($total, $eleitores){
        return ($total * 100) / $eleitores;
    }


    function exercicio08($salario, $porcentagem){
        $salarioFinal = $salario * ($porcentagem/100) + $salario;
        return "o salario atual do funcionário será: $salarioFinal";
    }

    function exercicio09($fabrica, $distribuidora, $impostos){
        $carro = ($fabrica * ($distribuidora/100) + $fabrica) + ($fabrica * ($impostos/100) + $fabrica);
        return "O valor final do carro do carro é: $carro";
    }

?>