<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 6</title>
</head>
<body>
    <form action="processa.php" method="POST">
        <h2>Carrinho de compras</h2>
        <label for="">Dados do cliente: </label>
        <br>
        <input type="text" name="nome" placeholder="Nome:" required>
        <br>
        <h2>Produto 1</h2>
        <label for="">Nome do produto: </label>
        <br>
        <input type="text" name="produto1" placeholder="Nome do produto:" required>
        <br><br>
        <label for="">Preço: </label>
        <br>
        <input type="number" name="preco1" placeholder="Preco:" required>
        <br><br>
        <label for="">Quantidade: </label>
        <br>
        <input type="number" name="quantidade1" placeholder="Quantidade:" required>
        <br>
        <h2>Produto 2</h2>
        <label for="">Nome do produto: </label>
        <br>
        <input type="text" name="produto2" placeholder="Nome do produto:" required>
        <br><br>
        <label for="">Preço: </label>
        <br>
        <input type="number" name="preco2" placeholder="Preco:" required>
        <br><br>
        <label for="">Quantidade: </label>
        <br>
        <input type="number" name="quantidade2" placeholder="Quantidade:" required>
        <br>
        <h2>Produto 3</h2>
        <label for="">Nome do produto: </label>
        <br>
        <input type="text" name="produto3" placeholder="Nome do produto:" required>
        <br><br>
        <label for="">Preço: </label>
        <br>
        <input type="number" name="preco3" placeholder="Preco:" required>
        <br><br>
        <label for="">Quantidade: </label>
        <br>
        <input type="number" name="quantidade3" placeholder="Quantidade:" required>
        <br><br>
        
        <button type="submit">Finalizar compra</button>
        <button type="reset">Limpar</button>
    </form>
</body>
</html>