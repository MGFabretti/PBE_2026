<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Relatório de Usinagem</title>
</head>
<body>
    <!-- O div serve para manipular blocos -->
    <div class="container">
        <div class="cabecalho">
            <h1>Relatório de Peças</h1>
            <p>Resumo do cálculo de usinagem</p>
        </div>
        <!-- Number format é para FORMATAR A SAIDA DO CODIGO -->
        <div class="relatorio">
            <p><strong>Cliente:</strong> <?php echo htmlspecialchars($cliente); ?></p>
            <p><strong>Material:</strong> <?php echo htmlspecialchars($material); ?></p>
            <p><strong>Peso da peça (kg):</strong> <?php echo number_format($peso, 2, ',', '.'); ?></p>
            <p><strong>Quantidade de peças:</strong> <?php echo $quantidade; ?></p>
            <p><strong>Máquina:</strong> <?php echo htmlspecialchars($maquina); ?></p>
            <p><strong>Minutos por peça:</strong> <?php echo $minutos; ?></p>
            <p><strong>Acabamento:</strong> <?php echo htmlspecialchars($acabamento); ?></p>
            <p><strong>Pedido urgente:</strong> <?php echo htmlspecialchars($urgente); ?></p>

            <hr>

            <h3>Detalhamento de Custos</h3>
            <p><strong>Custo de Material:</strong> R$ <?php echo number_format($custoMaterial, 2, ',', '.'); ?></p>
            <p><strong>Custo de Usinagem (Máquina):</strong> R$ <?php echo number_format($custoMaquina, 2, ',', '.'); ?></p>
            <p><strong>Custo de Acabamento:</strong> R$ <?php echo number_format($custoAcabamento, 2, ',', '.'); ?></p>
            <p><strong>Custo Total:</strong> R$ <?php echo number_format($custoTotal, 2, ',', '.'); ?></p>

            <?php if ($acrescimo > 0): ?>
                <p><strong>Acréscimo (Urgência +15%):</strong> R$ <?php echo number_format($acrescimo, 2, ',', '.'); ?></p>
            <?php endif; ?>

            <?php if ($desconto > 0): ?>
                <p><strong>Desconto (Quantidade > 50 -5%):</strong> - R$ <?php echo number_format($desconto, 2, ',', '.'); ?></p>
            <?php endif; ?>

            <h2>Valor Final: R$ <?php echo number_format($valorFinal, 2, ',', '.'); ?></h2>
        </div>

        <br>
        <a href="index.html" class="botao">Novo Cadastro</a>
        <br><br>
        <div class="rodape"> Sistema de Cadastro de Peças </div>
    </div>
</body>
</html>
