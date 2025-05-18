<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operações aritméticas</title>
    <style>
        body{
            font: bold 14 Times;
        }
    </style>
</head>
<body>
    <?php 
        $num = 5;
        $num2 = 2;
        $str = "2";
        $soma1 = $num2 + $num2;
        $soma2 = $str + $str;
        $soma3 = $num + $str;
        $subt1 = $num2 - $num2;
        $subt2 = $str - $str;
        $subt3 = $num - $str;
        $multip1 = $num2 * $num2;
        $multip2 = $str * $str;
        $multip3 = $num * $str;
        $divisao1 = $num2 / $num2;
        $divisao2 = $str / $str;
        $divisao3 = $num / $str;
        echo "<p>A soma sem as aspas é <strong>$soma1</strong></p>";
        echo "<p>A soma da string $str com o inteiro $num é <strong>$soma3</strong></p>";
        echo "<p>A soma com as aspas é <strong>$soma2</strong></p>";
        echo "<p>A subtração sem as aspas é <strong>$subt1</strong></p>";
        echo "<p>A subtração da string $str com o inteiro $num é <strong>$subt3</strong></p>";
        echo "<p>A subtração com as aspas é <strong>$subt2</strong></p>";
        echo "<p>A multiplicação sem as aspas é <strong>$multip1</strong></p>";
        echo "<p>A multiplicação da string $str com o inteiro $num é <strong>$multip3</strong></p>";
        echo "<p>A multiplicação com as aspas é <strong>$multip2</strong></p>";
        echo "<p>A divisão sem as aspas é <strong>$divisao1</strong></p>";
        echo "<p>A divisão da string $str com o inteiro $num é <strong>$divisao3</strong></p>";
        echo "<p>A divisão com as aspas é <strong>$divisao2</strong></p>";
        
    ?>
</body>
</html>