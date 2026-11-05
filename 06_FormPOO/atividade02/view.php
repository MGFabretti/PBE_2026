<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 02</title>
</head>
<body>
    <form action="logica.php" method="POST">
        <Label for="">Nome: </label>
        <input type="text" name="nome">
        <br>
        <label for="turma">Turma</label>
            <br>
            <select id="turma" name="turma" required>
                <option value="1° IDS">1° IDS</option>
                <option value="2° IDS">2° IDS</option>
                <option value="3° IDS">3° IDS</option>
            </select>
        <br>
        <Label for="">Nota1: </label>
        <input type="number" name="nota1" step="0.1" min="0" max="10">
        <br>
        <Label for="">Nota2: </label>
        <input type="number" name="nota2" step="0.1" min="0" max="10">
        <br>
        <Label for="">Nota3: </label>
        <input type="number" name="nota3" step="0.1" min="0" max="10">
        <br>
        <Label for="">Faltas: </label>
        <input type="number" name="faltas" min="0" max="80">
        <br><br>
        <button type="submit">Gerar Boletin</button>
    </form>
</body>
</html>