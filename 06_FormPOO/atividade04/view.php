<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Academia PowerFit - Nova Matrícula</title>
</head>
<body>

    <h2>Matrícula - Academia PowerFit</h2>

    <form action="logica.php" method="POST">
        
        <h3> Dados do Aluno</h3>
        <label>Nome completo:</label>
        <input type="text" name="nome" required>

        <label>Peso (kg):</label>
        <input type="number" name="peso" step="0.1" required>

        <label>Altura (m):</label>
        <input type="number" name="altura" step="0.01" required><br><br>

        <h3> Dados da Matrícula</h3>
        <label>Escolha o Plano:</label><br>
        <select name="plano" required>
            <option value="Basico">Básico - R$ 80,00/mês</option>
            <option value="Plus">Plus - R$ 120,00/mês</option>
            <option value="Premium">Premium - R$ 180,00/mês</option>
        </select><br><br>

        <label for="" >Duração do contrato (1 a 12 meses): </label>
        <input type="number" name="meses" min="1" max="12" value="1" required><br><br>

        <label>Modalidades Extras (opcional):</label><br>
        <input type="checkbox" name="modalidades[]" value="Natacao"> Natação (+ R$ 60,00)<br>
        <input type="checkbox" name="modalidades[]" value="Funcional"> Funcional (+ R$ 40,00)<br>
        <input type="checkbox" name="modalidades[]" value="Lutas"> Lutas (+ R$ 50,00)<br><br>

        <button type="submit">Gerar Matrícula</button>

    </form>

</body>
</html>
