<?php
// Gerar o número aleatório apenas quando o formulário for enviado
$numero = null;
if (isset($_GET['gerar'])) {
    $numero = rand(0, 100); // Função rand() para gerar um número aleatório entre 0 e 100
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
            <br><br>

            </div>

            <?php if ($numero !== null): ?>
                <div>
                    <p>O valor gerado foi: <?php echo $numero; ?></p>
                    <!-- Botão para gerar outro número -->
                    <input type="submit" name="gerar" value="Gerar Outro">
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
