<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo formulario</title>
</head>
<body>
    <form action="processa.php" method="POST">
        <h2>Calcular IMC</h2>
        <label for="">Nome: </label>
        <br>
        <input type="text" name="nome" placeholder="Nome:" required>
        <br><br>
        <label for="">Peso em Kg: </label>
        <br>
        <input type="number" name="peso" step="0.1" placeholder="Seu peso:" required>
        <br><br>
        <label for="">Altura em metros: </label>
        <br>
        <input type="number" name="altura" step="0.01" placeholder="Sua altura:" required>
        <br><br>
        <button type="submit">Calcular</button>
        <button type="reset">Limpar</button>
    </form>
</body>
</html>