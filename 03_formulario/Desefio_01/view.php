<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo formulario</title>
</head>
<body>
    <form action="processa.php" method="POST">
        <label for="">Nome: </label>
        <br>
        <input type="text" name="nome" placeholder="Nome:" required>
        <br><br>
        <label for="">Salario bruto: </label>
        <br>
        <input type="number" name="Salario_bruto" placeholder="Salario bruto:" required>
        <br><br>
        <label for="">Quantidade de horas extras: </label>
        <br>
        <input type="number" name="Quantidade_de_horas_extras" placeholder="Horas extras:" required>
        <br><br>
        <label for="">Valor total de benefícios: </label>
        <br>
        <input type="number" name="Valor_total_de_beneficios" placeholder="Beneficios:" required>
        <br><br>
        <label for="">Valor total de descontos: </label>
        <br>
        <input type="number" name="Valor_total_de_descontos" placeholder="Valor total de descontos:" required>
        <br><br>
        <button type="submit">Enviar</button>
        <button type="reset">Limpar</button>
    </form>
</body>
</html>