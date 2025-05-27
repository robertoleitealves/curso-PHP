<?php
// Gerar o número aleatório apenas quando o formulário for enviado
$numero = null;
if (isset($_GET['gerar'])) {
    $numero = rand(0, 100); // Função rand() para gerar um número aleatório entre 0 e 100
    $numero2 = random_int(0,100); //Função random_int, utilizada para gerar numeros aleatórios criptografados
    $numero3 = mt_rand(0,100); //Função mt_rand, função mais rápida para gerar
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Trabalhando com números aleatórios</h1>
    </header>
    
    <section>
        <!-- Formulário para gerar o número aleatório -->
        <form action="" method="get">
            <label for="number">Gerando um número aleatório de 0 à 100:</label>
            <div>
            <br>
            
            <br>

            </div>

            <?php if ($numero !== null): ?>
                <div>
                    <p>O valor gerado foi: <?php echo $numero; ?></p>
                    <p>O valor gerado com random_int foi: <?php echo $numero2; ?></p>
                    <p>O valor gerado com mt_rand foi: <?php echo $numero3; ?></p>
                    <!-- Botão para gerar outro número -->
                    <button type="submit" name="gerar" value="Gerar Outro">&#x1F504; Gerar Outro</button>
                </div>
            <?php else: ?>
                <div>
                    <!-- Botão para gerar o número pela primeira vez -->
                    <input type="submit" name="gerar" value="Gerar">
                </div>
            <?php endif; ?>

        </form>
    </section>
</body>
</html>
