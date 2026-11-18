<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>atividade 3</title>
</head>
<body>

    <h1>Folha de Pagamento - TechNova</h1>

    <form action="logica.php" method="POST">

        <label>Nome do funcionário:</label><br>
        <input type="text" name="nome" required>
        <br><br>

        <label>Cargo: </label><br>
        <select name="cargo" required>
            <option value="">Selecione</option>
            <option value="Auxiliar">Auxiliar - R$ 2.200,00</option>
            <option value="Técnico">Técnico - R$ 3.520,00</option>
            <option value="Analista">Analista - R$ 5.500,00</option>
        </select>
        <br><br>

        <label>Horas extras no mês:</label><br>
        <input type="number" name="horasExtras" min="0" required>
        <br><br>

        <label>Utiliza vale-transporte?</label>
        <br>

        <input type="radio" name="valeTransporte" value="Sim" required> Sim

        <input type="radio" name="valeTransporte" value="Não" required> Não
        <br><br>

        <button type="submit">Gerar Holerite</button>

    </form>

</body>
</html>