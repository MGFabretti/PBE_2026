<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 4</title>
</head>
<body>
    <form action="processa.php" method="POST">
        <label for="">Nome do aluno: </label>
        <br>
        <input type="text" name="nome" placeholder="Nome:" required>
        <br><br>
        <label for="">Nota: </label>
        <br>
        <input type="step" name="nota1" placeholder="Nota1:" required>
        <br><br>
        <label for="">Nota: </label>
        <br>
        <input type="step" name="nota2" placeholder="Nota2:" required>
        <br><br>
        <label for="">Nota: </label>
        <br>
        <input type="step" name="nota3" placeholder="Nota3:" required>
        <br><br>
        <button type="submit">Calcular Média</button>
        <button type="reset">Limpar</button>
    </form>
</body>
</html>