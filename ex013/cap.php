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
        $numero = '';
        $inteira = '';
        $fracionaria = '';
        //Se Não estiver vazio
        if (isset($_GET['numbertxt'])) {
            if (is_numeric($numero)) {
                echo number_format((float)$numero, 3, ',', '');
                $inteira = (int)$numero;
                $fracionaria = abs($numero - $inteira);
                $fracionaria = number_format($fracionaria, 3, ',', '');

        ?>
                <div>
                    <?php echo "O número digitado foi: <strong> $numero </strong>" ?></p>
                    <p><?php echo "Sua parte inteira é: <strong>$inteira</strong> " ?></p>
                    <p><?php echo "Sua parte fracionária é: <strong>$fracionaria</strong> " ?></p>
                </div>
                <div>
                    <button type="submit" onclick="javascript:history.go(-1)">Voltar</button>
                </div>
            <?php
            } else {
                
            ?>
                <div>
                    <?php echo 'Valor inválido. Digite um valor real'; ?></p>
                </div>
                <div>
                    <button type="submit" onclick="javascript:history.go(-1)">Voltar</button>
                </div>

        <?php
            }
            //$num = ;
            //$numero = number_format($_GET['numbertxt'], 3, ',', '');
            //Troca vírgula por ponto para garantir a conversão
            //$numero = str_replace(',', '.', $numero);
        }
        ?>
    </main>
</body>

</html>