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
       
        $real = numfmt_create('pt_BR', NumberFormatter::CURRENCY);
        $dolar = numfmt_create('en_US', NumberFormatter::CURRENCY);
        $valordolar = floatval(5.69);
        $conversao = floatval($valor / $valordolar);
       
        ?>
        <div>
            <p><?php echo "Seus ". numfmt_format_currency($real, $valor, "BRL" ). " equivalem a <strong> ". numfmt_format_currency($dolar, $conversao, "USD" ) ." </strong>" ?></p>
            <p><?php echo "<strong>Cotação fixa de: ".numfmt_format_currency($dolar, $valordolar, "USD" )." </strong> informada direto no código" ?></p>
            
        </div>
        <div>
            <button type="submit" onclick="javascript:history.go(-1)">Voltar</button>
        </div>
    </main>
</body>

</html>