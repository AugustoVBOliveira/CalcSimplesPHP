<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <?php 
        // Inserir através de comandos dois valores para a calculadora resolver
        // As operações da calc serão (soma, subtração, multiplicação e divisão*)
        // * = ficar esperto com divisão por 0! possíveis erros que podem ser previstos
        // As operações da calc deverão ser funções(func soma, func subt, func mult, func divi, func modu)
        // As funções deverão receber dois argumentos por dois parâmetros e retornar o valor
        // Para escolher a função pode ser utilizado estruturas de decisão (if/else ou switch case)
        // Deverá imprimir o valor retornado e os dois números que você inseriu nas variáveis para o cálculo
        // E também deverá retornar o tipo de cálculo escolhido
        function soma($num1,$num2) {
            $resultado = $num1 + $num2;
            return $resultado;
        }
        function subt($num1,$num2) {
            $resultado = $num1 - $num2;
            return $resultado;
        }
        function mult($num1,$num2) {
            $resultado = $num1 * $num2;
            return $resultado;
        }
        function divi($num1,$num2) {
            if ($num2 == 0) {
                $aviso = "<br /> Erro de cálculo! É impossível dividir qualquer número por 0";
                return $aviso;
            } else {
                $resultado = $num1 / $num2;
                return $resultado;
            }            
        }
        function modu($num1,$num2) {
            if ($num2 == 0) {
                $aviso = "<br /> Erro de cálculo! É impossível dividir qualquer número por 0";
                return $aviso;
            } else {
                $resultado = $num1 % $num2;
                return $resultado;
            }
        }

        //echo "<br /> Escolha uma opção: <br />1- SOMA<br />2- SUBTRAÇÃO<br />3- MULTIPLICAÇÃO<br />4- DIVISÃO<br />5- MÓDULO" ;
        // código que recebe valores do usuário aqui
        $opcao = 1;
        $valor1 = 10;
        $valor2 = 2;

        switch ($opcao) {
            case 1:
                echo "<br /> A opção escolhida é: ".$opcao." (SOMA)";                
                $res = soma($valor1,$valor2);
                
                echo "<br /><br /> valor1 = ".$valor1."<br /> valor2 = ".$valor2;
                echo "<br /> ".$valor1." + ".$valor2." = ".$res;
                break;
            case 2:
                echo "<br /> A opção escolhida é: ".$opcao." (SUBTRAÇÃO)";
                $res = subt($valor1,$valor2);
                
                echo "<br /><br /> valor1 = ".$valor1."<br /> valor2 = ".$valor2;
                echo "<br /> ".$valor1." - ".$valor2." = ".$res;
                break;
            case 3:
                echo "<br /> A opção escolhida é: ".$opcao." (MULTIPLICAÇÃO)";
                $res = mult($valor1,$valor2);
                
                echo "<br /><br /> valor1 = ".$valor1."<br /> valor2 = ".$valor2;
                echo "<br /> ".$valor1." * ".$valor2." = ".$res;
                break;
            case 4:
                echo "<br /> A opção escolhida é: ".$opcao." (DIVISÃO)";
                divi($valor1,$valor2);            
                if ($valor2 == 0) {
                    $valores = "<br /><br /> FALHA! DIVISOR ZERO: (".$valor1." / ".$valor2.")";
                    echo $valores;
                    $aviso = divi($valor1,$valor2);
                    echo $aviso;
                } else {
                    $res = divi($valor1,$valor2);
                    echo "<br /><br /> valor1 = ".$valor1."<br /> valor2 = ".$valor2;
                    echo "<br /> ".$valor1." / ".$valor2." = ".$res;
                }
                break;
            case 5:
                echo "<br /> A opção escolhida é: ".$opcao." (MÓDULO)";
                modu($valor1,$valor2);            
                if ($valor2 == 0) {
                    $valores = "<br /><br /> FALHA! DIVISOR ZERO: (".$valor1." / ".$valor2.")";
                    echo $valores;
                    $aviso = modu($valor1,$valor2);
                    echo $aviso;
                } else {
                    $res = modu($valor1,$valor2);
                    echo "<br /><br /> valor1 = ".$valor1."<br /> valor2 = ".$valor2;
                    echo "<br /> ".$valor1." % ".$valor2." = ".$res;
                }
                break;
            default:
                echo "<br /> Opção inválida ou inexistente.";
                break;
        }
    ?>
</body>
</html>