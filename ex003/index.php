<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $nome = "Roberto";
        $sobrenome = "Leite";
        //Constante é imutável e não possui $ no seu início
        const PAIS = "Brasil";
        echo "Muito prazer, $nome $sobrenome!!! ";
        $nome = "Eduardo";
        echo "<p>Muito prazer, $nome $sobrenome! Você mora no " . PAIS ."</p>";
        //CamelCase
        $nomeCompletoCliente = "Roberto Leite";
        //Snake case
        $telefone_contato_cliente = "(16) 9 8238-4219";
    ?>
</body>
</html>