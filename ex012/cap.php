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

        <?php
        //Se Não estiver vazio
        if (isset($_GET['numbertxt'])) {
            $valorReais = (float)$_GET['numbertxt'];

            //Obtem a taxa de câmbio
            function obterTaxaCambio()
            {
                //Endereço da API
                $url = "https://economia.awesomeapi.com.br/json/last/USD-BRL";
                //Inicia a busca na API
                $ch = curl_init($url);
                //Retorna resultado da busca convertendo em String
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $resposta = curl_exec($ch);
                curl_close($ch);

                $dados = json_decode($resposta, true);
                return isset($dados['USDBRL']['bid']) ? floatval($dados['USDBRL']['bid']) : null;
            }

            function converterRealParaDolar($valor)
            {
                $taxa = obterTaxaCambio();
                return $taxa ? number_format($valor / $taxa, 2, '.', '') : null;
            }

            $valordolar = converterRealParaDolar($valorReais);
            $taxa = obterTaxaCambio();

            if ($valordolar !== null) {?>
                <p><?php echo "Seus R$ $valorReais equivalem a <strong> US$ $valordolar </strong>" ?></p><?php 
            } else {
                echo "Erro ao converter.";
            }
        }
        ?>
        <div>
            
            <p><?php echo "<strong>Cotação gerada pela API de: $taxa </strong> informada direto no código" ?></p>

        </div>
        <div>
            <button type="submit" onclick="javascript:history.go(-1)">Voltar</button>
        </div>
    </main>
</body>

</html>