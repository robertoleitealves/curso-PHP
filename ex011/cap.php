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
       //Cria uma formatação para moedas
        $padrao = numfmt_create('pt_BR', NumberFormatter::CURRENCY);
       
        $valordolar = floatval(5.69);
        $conversao = floatval($valor / $valordolar);
       
        ?>
        <div>
            <p><?php echo "Seus ". numfmt_format_currency($padrao, $valor, "BRL" ). " equivalem a <strong> ". numfmt_format_currency($padrao, $conversao, "USD" ) ." </strong>" ?></p>
            <p><?php echo "<strong>Cotação fixa de: ".numfmt_format_currency($padrao, $valordolar, "USD" )." </strong> informada direto no código" ?></p>
            
        </div>
        <div>
            <button type="submit" onclick="javascript:history.go(-1)">Voltar</button>
        </div>
    </main>
</body>

</html>