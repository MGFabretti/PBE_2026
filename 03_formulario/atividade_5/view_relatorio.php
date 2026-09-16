<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 5</title>
</head>
<body>
    <h1>Resultado IMC</h1>

    <p>Seu nome <?= $nome ?></p>

    <p>Seu peso: <?= $peso ?></p>

    <p>Sua altura: <?= $altura ?></p>

    <p>Seu resultado IMC: <?= $calcular_IMC ?></p>

    <?php if($calcular_IMC < 18.5): ?>
        <p>Abaixo do peso !!</p>
    <?php elseif($calcular_IMC >= 18.5 && $calcular_IMC <= 24.9): ?>
        <p>Peso normal !!</p>
    <?php elseif($calcular_IMC >= 25 && $calcular_IMC <= 29.9): ?>
        <p>Sobrepeso !!</p>
    <?php else: ?>
        <p>Obeso</p>
    <?php endif; ?>
</body>
</html>