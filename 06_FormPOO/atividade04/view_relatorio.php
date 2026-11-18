<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contrato de Matrícula</title>
</head>
<body>

    <h1>Contrato de Matrícula</h1>

    <h2>Dados do Aluno</h2>

    <p>Nome: <?= $matricula->getAluno()->getNome() ?></p>

    <p>
        IMC:
        <?= number_format($matricula->getAluno()->calcularIMC(), 1, ',', '.') ?>
    </p>

    <p>
        Classificação:
        <?= $matricula->getAluno()->classificarIMC() ?>
    </p>

    <h2>Mensalidade</h2>

    <table border="1">

        <tr>
            <th>Descrição</th>
            <th>Valor</th>
        </tr>

        <tr>
            <td>Plano <?= $matricula->getPlano() ?></td>
            <td>
                R$ <?= number_format($matricula->calcularValorPlano(), 2, ',', '.') ?>
            </td>
        </tr>

        <?php foreach ($matricula->getModalidades() as $modalidade): ?>

            <tr>
                <td><?= $modalidade ?></td>
                <td>
                    R$ <?= number_format($matricula->calcularValorModalidade($modalidade), 2, ',', '.') ?>
                </td>
            </tr>

        <?php endforeach; ?>
        

        <tr>
            <th>Mensalidade</th>
            <th>
                R$ <?= number_format($matricula->calcularMensalidade(), 2, ',', '.') ?>
            </th>
        </tr>

    </table>

    <h2>Resumo do Contrato</h2>

    <p>Meses: <?= $matricula->getMeses() ?></p>

    <p>
        Subtotal:
        R$ <?= number_format($matricula->calcularSubtotal(), 2, ',', '.') ?>
    </p>

    <p>
        Desconto (<?= $matricula->calcularPercentualDesconto() ?>%):
        R$ <?= number_format($matricula->calcularDesconto(), 2, ',', '.') ?>
    </p>

    <h2>
        Total do contrato:
        R$ <?= number_format($matricula->calcularTotal(), 2, ',', '.') ?>
    </h2>

    <?php if ($matricula->calcularPercentualDesconto() > 0): ?>

        <p> Parabéns! Você ganhou
            <?= $matricula->calcularPercentualDesconto() ?>% de desconto.
        </p>

    <?php else: ?>
        <p>Dica: fechando 6 meses ou mais você ganha desconto.</p>
    <?php endif ?>
    <br>

    <a href="view.php">Cadastrar outra matrícula</a>

</body>
</html>