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
        <h1>Informe um número</h1>
        <?php $numero = $_GET["number"];
        //$ant = $numero - 1;
        //$suc = $numero + 1;
        ?>
        <div>
            <p><?php echo "O número escolhido foi: $numero" ?></p>
            <p><?php echo "O número antecessor é: ". $numero - 1 ?></p>
            <p><?php echo "O número sucessor é: ".$numero + 1 ?></p>
        </div>
        <div>
            <button type="submit" onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
        </div>
    </main>
</body>

</html>