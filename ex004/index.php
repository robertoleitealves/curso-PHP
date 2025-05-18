<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>

<body>
    <h1>Teste de tipos primitivos</h1>
    <?php
    $num = 0x1A;
    echo "<p>O valor da variável é: $num</p>";
    //Ao colocar o tipo entre parenteses, eu forço o PHP a ler a variável no tipo que eu coloquei
    $valor = (int)"01011001";
    //Identifica o conteúdo e o tipo da variável
    var_dump($valor);
    $vetor = ["Roberto", 33, true,];
    var_dump($vetor);
    ?>
</body>

</html>