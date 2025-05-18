<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <!--Coalecência nula-->
       <?php $nome = $_GET["nome"] ?? "sem nome";
            $snome = $_GET["snome"] ?? "desconhecido";
            echo "É um prazer conhecê-lo $nome $snome. Este é o meu site";
       ?> 
       <p><a rel="stylesheet" href="javascript:history.go(-1)"> Voltar para a página anterior</a></p>
    </main>
    
</body>
</html>