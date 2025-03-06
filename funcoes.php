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

    function exercicio10(){

    }

    function exercicio11($anos, $meses, $dias){
        $totalDias = ($anos * 365) + ($meses * 30) + $dias;
        return "a pessoa tem $totalDias de idade em dias!";
    }

    function exercicio12($qtdMaca){
        if($qtdMaca < 12){
            $qtdMaca = 1.30 * $qtdMaca;
            return "Você pagará R$ $qtdMaca !";
        }else if($qtdMaca > 12){
            $qtdMaca = 1 * $qtdMaca;
            return "Você pagará R$ $qtdMaca !";
        }
    }

    function exercicio13(){

    }

    function exercicio14($salario, $vendas){
        if($vendas <= 1500){
            $comissao = $vendas * 0.03;
            return $salario + $comissao;
        }else if($vendas > 1500){
            $comissao = $vendas * 0.05;
        }
        return "O vendedor receberá R$ $salario + $comissao por suas vendas !";
    }

    function exercicio15(){

    }

    function exercicio16($num){
        $r = $num * 1;
        $e = $num * 2;
        $s = $num * 3;
        $u = $num * 4;
        $l = $num * 5;
        $t = $num * 6;
        $a = $num * 7;
        $d = $num * 8;
        $o = $num * 9;
        $S = $num * 10;

        return "a tabuada do $num é: $r /n
                                        $e /n 
                                        $s /n
                                        $u /n
                                        $l /n
                                        $t /n
                                        $a /n
                                        $d /n
                                        $o /n
                                        $S /n";
        
    }

    function exercicio17(){

    }

    function exercicio18(){

    }

    function exercicio19($num1, $num2, $num3, $num4, $num5, $num6, $num7, $num8, $num9, $num10){
        $resultado = $num1 + $num2 + $num3 + $num4 + $num5 + $num6 + $num7 + $num8 + $num9 + $num10;
        return "A soma dos 10 números é $resultado .";
    }
     function exercicio20($soma, $quantidade){
        for ($i = 15; $i <= 100; $i++) {
            $soma += $i;
            $quantidade++;
        }
        
        $media = $soma / $quantidade;
        
        return "A média aritmética dos números entre 15 e 100 é: $media\n";
     }

     function exercicio21($num1, $num2, $num3, $num4, $num5, $num6, $num7, $num8, $num9, $num10){
        if($num1 > $num2 && $num1 > $num3 && $num1 > $num4 && $num1 > $num5 && $num1 > $num6 && $num1 > $num7 && $num1 > $num8 && $num1 > $num9 && $num1 > $num10){
            return "O maior número é :$num1";
        }else if($num2 > $num1 && $num2 > $num3 && $num2 > $num4 && $num2 > $num5 && $num2 > $num6 && $num2 > $num7 && $num2 > $num8 && $num2 > $num9 && $num2 > $num10){
            return "O maior número é :$num2";
        }else if($num3 > $num2 && $num3 > $num1 && $num3 > $num4 && $num3 > $num5 && $num3 > $num6 && $num3 > $num7 && $num3 > $num8 && $num3 > $num9 && $num3 > $num10){
            return "O maior número é :$num3";
        }else if($num4 > $num2 && $num4 > $num3 && $num4 > $num1 && $num4 > $num5 && $num4 > $num6 && $num4 > $num7 && $num4 > $num8 && $num4 > $num9 && $num4 > $num10){
            return "O maior número é :$num4";
        }else if($num5 > $num2 && $num5 > $num3 && $num5 > $num4 && $num5 > $num1 && $num5 > $num6 && $num5 > $num7 && $num5 > $num8 && $num5 > $num9 && $num5 > $num10){
            return "O maior número é :$num5";
        }else if($num6 > $num2 && $num6 > $num3 && $num6 > $num4 && $num6 > $num5 && $num6 > $num1 && $num6 > $num7 && $num6 > $num8 && $num6 > $num9 && $num6 > $num10){
            return "O maior número é :$num6";
        }else if($num7 > $num2 && $num7 > $num3 && $num7 > $num4 && $num7 > $num5 && $num7 > $num6 && $num7 > $num1 && $num7 > $num8 && $num7 > $num9 && $num7 > $num10){
            return "O maior número é :$num7";
        }else if($num8 > $num2 && $num8 > $num3 && $num8 > $num4 && $num8 > $num5 && $num8 > $num6 && $num8 > $num7 && $num8 > $num1 && $num8 > $num9 && $num8 > $num10){
            return "O maior número é :$num8";
        }else if($num9 > $num2 && $num9 > $num3 && $num9 > $num4 && $num9 > $num5 && $num9 > $num6 && $num9 > $num7 && $num9 > $num8 && $num9 > $num9 && $num9 > $num10){
            return "O maior número é :$num9";
        }else{
            return "O maior número é :$num10, ";
        }
        
     }
     function exercicio21_1($num1, $num2, $num3, $num4, $num5, $num6, $num7, $num8, $num9, $num10){
        $media = ($num1 + $num2 + $num3 + $num4 + $num5 + $num6 + $num7 + $num8 + $num9 + $num10) / 10;
        return "A média dos valores é: $media";
     }

     function exercicio22($num1, $num2, $num3, $num4, $num5, $num6, $num7, $num8, $num9, $num10, $num11, $num12, $num13, $num14, $num15, $num16, $num17, $num18, $num19, $num20){
        $media = ($num1 + $num2 + $num3 + $num4 + $num5 + $num6 + $num7 + $num8 + $num9 + $num10 + $num11 + $num12 + $num13 + $num14 + $num15 + $num16 + $num17 + $num18 + $num19 + $num20) /20;
        return "A média da Turma é: $media";
     }

     function exercicio25($raio){
        $area = 3.14 * ($raio * $raio);
        return "A área da circunferência é: $area";
     }

     function exercicio27($celsius){
        $fahrenheit = (9 * $celsius + 160) / 5;
        return "A temperatura em Fahrenheit é: $fahrenheit";
     }

     function exercicio18_2($raio, $altura){
        $volume = 3.14 * ($raio * $raio) * $altura;
        return "O volume da lata de óleo é: $volume";
     }
     function exercicio28($raio, $altura){
        $volume = 3.14 * ($raio * $raio) * $altura;
        return "O volume da lata de óleo é: $volume";
     }

?>