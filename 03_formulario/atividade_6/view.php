<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 6</title>
</head>
<body>
    <form action="processa.php" method="POST">
        <h2>Compra de ingressos</h2>
        <label for="">Nome: </label>
        <br>
        <input type="text" name="nome" placeholder="Nome:" required>
        <br><br>
        <label for="">Filme: </label>
        <br>
        <input type="text" name="filme" placeholder="Filme escolhido:" required>
        <br><br>
        <label for="">Quantidade de ingressos: </label>
        <br>
        <input type="number" name="ingressos" placeholder="Quantidade Ingressos:" required>
        <br><br>
        <label for="">Tipo de ingresso: </label>
        <br></br>
        
        <input type="radio" name="tipo" value="Inteira">
        <label for="">Inteira</label><br>
        <input type="radio" name="tipo" value="Meia">
        <label for="meia">Meia</label><br>
        <br>
        <button type="submit">Comprar ingressos</button>
        <button type="reset">Limpar</button>
    </form>
</body>
</html>