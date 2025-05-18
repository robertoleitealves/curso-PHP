<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Resultado Final</h1>
        <?php $valor = (float)$_GET["numbertxt"];
        $valordolar = floatval(5.69);
        $conversao = floatval($valor / $valordolar);
        ?>
        <div>
            <p><?php echo "Valor em real: $valor" ?></p>
            <p><?php echo "Valor do dólar: $valordolar" ?></p>
            <p><?php echo "Valor total da conversão para dólar: $conversao" ?></p>
        </div>
        <div>
            <button type="submit" onclick="javascript:history.go(-1)">Voltar</button>
        </div>
    </main>
</body>

</html>