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
        <?php $numero = $_GET["number"];
        $ant = $numero - 1;
        $suc = $numero + 1;
        ?>
        <div>
            <p><?php echo "O número escolhido foi: $numero" ?></p>
            <p><?php echo "O número antecessor é: $ant" ?></p>
            <p><?php echo "O número sucessor é: $suc" ?></p>
        </div>
        <div>
            <button type="submit" onclick="javascript:history.go(-1)">Voltar</button>
        </div>
    </main>
</body>

</html>