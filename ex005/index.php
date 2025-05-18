<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
</head>
<body>
    <?php 
     $nome = "Roberto";
     const SOBRENOME = "Leite";

     echo "Meu nome é $nome ".SOBRENOME. "<br>";

     echo 'Meu nome é $nome '.SOBRENOME. "<br>";

     echo "Meu nome é $nome ".SOBRENOME. "Alves \u{1F60E}<br>";

     $curso = "PHP"; 
     $ano = date('Y');

     echo <<< TESTE

    Estou fazendo curso de $curso no ano de $ano <br>
    
    TESTE;

    echo <<< 'TESTE'

    Estou fazendo curso de $curso no ano de $ano
    
    TESTE;
    ?>
</body>
</html>