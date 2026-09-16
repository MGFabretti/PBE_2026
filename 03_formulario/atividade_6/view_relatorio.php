<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 5</title>
</head>
<body>
    <h1>Compra de Ingressos</h1>

    <p>Seu nome <?= $nome ?></p>

    <p>Nome do Filme: <?= $filme ?></p>

    <p>Qunatidade de ingressos: <?= $qtd_ingressos ?></p>

    <p>Tipo de ingresso: <?= $tipo_ingresso ?></p>

    <p>Valor Total : <?= $total ?></p>

    <?php if($total > 100): ?>
        <p>Você recebeu 10% de desconto !!</p>
    <?php endif; ?>
</body>
</html>