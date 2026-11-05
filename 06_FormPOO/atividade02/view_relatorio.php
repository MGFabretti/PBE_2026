<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Boletim Escolar</title>
</head>
<body>
    <h1>Boletim Escolar</h1>
    <p><strong>Nome:</strong> <?= $aluno->getNome() ?></p>
    <p><strong>Turma:</strong> <?= $aluno->getTurma() ?></p>

    <table border="1">
        <thead>
            <tr>
                <th>Nota 1</th>
                <th>Nota 2</th>
                <th>Nota 3</th>
                <th>Média</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= number_format($aluno->getNota1(), 1, ',', '.') ?></td>
                <td><?= number_format($aluno->getNota2(), 1, ',', '.') ?></td>
                <td><?= number_format($aluno->getNota3(), 1, ',', '.') ?></td>
                <td><?= number_format($aluno->calcularMedia(), 1, ',', '.') ?></td>
            </tr>
        </tbody>
    </table>

    <p><strong>Faltas:</strong> <?= $aluno->getFaltas() ?></p>
    <p><strong>Frequência:</strong> <?= number_format($aluno->calcularFrequencia(), 1, ',', '.') ?>%</p>

    <h2>Situação: <?= $aluno->verificarSituacao() ?></h2>

    <?php if ($aluno->verificarSituacao() == "Aprovado"): ?>
        <p>Parabéns, continue assim!</p>
    <?php else: ?>
        <p>Atenção: procure o professor para saber os próximos passos.</p>
    <?php endif; ?>

    <br>
    <a href="view.php">Voltar</a>
</body>
</html>