<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <h1>
        EXEMPLO DE PHP
    </h1>
    <?php
    //Comando utilizado para configurar a hora padrão
    date_default_timezone_set("America/Sao_paulo");
    //Função date puxa, da forma que está descrito abaixo,dia da semana, dia do mês/mês/ano
    echo "Hoje é dia ". date("D ") . date("d/M/Y");
    //Nesta linha está puxando hora, minuto e segundo
    echo " e a hora atual é " . date("G:i:s T")
    //T indica o fuso em que o horário está
    //Ambos puxam do servidor
    ?>
     <?
     /*
    //Comando utilizado para configurar a hora padrão
    date_default_timezone_set("America/Sao_paulo");
    //Função date puxa, da forma que está descrito abaixo,dia da semana, dia do mês/mês/ano
    echo "Hoje é dia ". date("D ") . date("d/M/Y");
    //Nesta linha está puxando hora, minuto e segundo
    echo " e a hora atual é " . date("G:i:s T")
    //T indica o fuso em que o horário está
    //Ambos puxam do servidor*/
    ?>
</body>

</html>