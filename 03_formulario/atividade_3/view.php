<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3</title>
</head>
<body>
    <form action="processa.php" method="POST">
        <h2>Calculadora</h2>
        <label for="">Primeiro Numero: </label>
        <input type="number" name="numero1" placeholder="Numero:" required>
        <br><br>
        <label for="">Segundo Numero: </label>
        <input type="number" name="numero2" placeholder="Numero:" required>
        <br>
        <h2>Operação</h2>
        <select name="Operacao" required>
            <option value="+">Adição</option>
            <option value="-">Subtração</option>
            <option value="/">Divisão</option>
            <option value="*">Multiplicação</option>
        </select>
        <br><br>
        <button type="submit">Calcular</button>
    </form>
</body>
</html>