<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho</title>
</head>
<body>
    <header style="background-color: #bababed2">
    <h1>Resumo da Compra<h1>
    <p>Cliente: <?= $nome ?></p>

    <table border="1">
        <tr>
            <td>Produto</td>
            <td>Preço</td>
            <td>Quantidade</td>
            <td>Subtotal</td>
        </tr>
         <?php foreach($produtos as $produto): ?>
            <tr>
                <td><?=$produto['nome'] ?></td> 
                <td><?=$produto['preco'] ?></td>
                <td><?=$produto['quantidade'] ?></td>
                <td><?=$produto['subtotal'] ?></td>
            </tr>
        <?php endforeach ?>
     </table>
     <p>Total da compra: <?= $total ?></p>
     <p>Desconto: <?= $desconto ?></p>
     <p>Obrigado pela sua compra</p>
     <p>Total Final: <?= $valor_final ?></p>
     </header>
</body>
</html>