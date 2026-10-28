<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Prova</title>
</head>
<body>
    <h1>Contrato de Locação</h1>
    <p>Cliente: <?= $nome ?></p>
    <p>E-mail: <?= $email ?></p>
    <p>Retirada: <?= $data ?></p>

    <h3>Adicionais</h3>
    <p>Seguro Total: <?= $SeguroTotal ?></p>
    <p>GPS: <?= $GPS ?></p>
    <p>Caderinha Infatil: <?= $caderinhaInfantil ?></p>

    <table border="1">
        <tr>
            <td>Item</td>
            <td>Diaria</td>
            <td>Dias</td>
            <td>Subtotal</td>
        </tr>
        <tr>
            <td><?="Veiculo Intermediario" ?></td> 
            <td><?=$diaria?></td>
            <td><?=$dias?></td>
            <td><?=$totalPagar ?></td>
        </tr>
        <tr>
            <td><?="Adicionais" ?></td> 
            <td><?=$diaria?></td>
            <td><?=$dias?></td>
            <td><?=$totalPagar ?></td>
        </tr>
     </table>

     <p>Total: <?= $total ?></p>
     <p>Desconto: <?= $desconto ?></p>
    <p>🎉🎉🥳 Parabéns você possui: <?= $dias ?>% de descontos</p>
     <p>Total a Pagar: <?= $totalPagar ?></p>
</body>
</html>