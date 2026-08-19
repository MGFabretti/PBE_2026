<?php
// Produtos da loja
$produtos = [
    1 => ["nome" => "Camiseta", "preco" => 49.90],
    2 => ["nome" => "Tênis", "preco" => 199.90],
    3 => ["nome" => "Mochila", "preco" => 89.90],
    4 => ["nome" => "Fone de ouvido", "preco" => 79.90]
];

// Carrinho
$carrinho = [];

// Verifica se o usuário adicionou algum produto
if (isset($_POST["produto"])) {
    $id = $_POST["produto"];

    if (isset($produtos[$id])) {
        $carrinho[] = $produtos[$id];
    }
}

// Calcula o total
$total = 0;

foreach ($carrinho as $produto) {
    $total += $produto["preco"];
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Minha Loja</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
        }

        header {
            background-color: #222;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .produtos {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin: 40px;
        }

        .produto {
            background-color: white;
            padding: 20px;
            width: 180px;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 2px 8px #ccc;
        }

        .produto h2 {
            font-size: 20px;
        }

        .preco {
            font-size: 18px;
            font-weight: bold;
        }

        button {
            background-color: #008000;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        .carrinho {
            background-color: white;
            width: 500px;
            margin: 20px auto;
            padding: 20px;
            border-radius: 10px;
        }
    </style>
</head>

<body>

<header>
    <h1>🛒 Minha Loja</h1>
    <p>Produtos em promoção!</p>
</header>

<section class="produtos">

    <?php foreach ($produtos as $id => $produto): ?>

        <div class="produto">

            <h2>
                <?php echo $produto["nome"]; ?>
            </h2>

            <p class="preco">
                R$ <?php echo number_format($produto["preco"], 2, ",", "."); ?>
            </p>

            <form method="POST">
                <input type="hidden" name="produto" value="<?php echo $id; ?>">

                <button type="submit">
                    Adicionar ao carrinho
                </button>
            </form>

        </div>

    <?php endforeach; ?>

</section>

<div class="carrinho">

    <h2>🛒 Carrinho</h2>

    <?php if (count($carrinho) > 0): ?>

        <?php foreach ($carrinho as $produto): ?>

            <p>
                <?php echo $produto["nome"]; ?>
                - R$ <?php echo number_format($produto["preco"], 2, ",", "."); ?>
            </p>

        <?php endforeach; ?>

        <hr>

        <h2>
            Total:
            R$ <?php echo number_format($total, 2, ",", "."); ?>
        </h2>

        <button>
            Finalizar compra
        </button>

    <?php else: ?>

        <p>Seu carrinho está vazio.</p>

    <?php endif; ?>

</div>

</body>
</html>