<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscrição evento</title>
</head>
<body>
    <form action="processa.php" method="POST" style="background-color:#f3e5f5; padding: 15px; border-radius:8px; width:350px;">
        <label for="">Nome Completo: </label><br>
        <input type="text" name="nome">
        <br><br>
        <label for="">Tipo de Ingresso: </label><br>
        <select name="tipo" required>
            <option value="Estudante">Estudante</option>
            <option value="Adulto">Adulto</option>
            <option value="Criança">Criança</option>
        </select>
        <br><br>
        <label for="">Data de Evento: </label><br>
        <input type="date" name="data">
        <br><br>
        <label for="">Hora de Chegada: </label><br>
        <input type="time" name="hora">
        <br><br>
        <button type="submit" style="background-color: #a1339fd2">Inscrever-se</button>
    </form>
</body>
</html>