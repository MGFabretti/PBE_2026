<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Prova</title>
</head>
<body>
    <form action="processa.php" method="POST">
        <h1>Locadoura de Veiculos</h1>
        <h2>Dados do Cliente</h2>
        <label for="">Nome: </label>
        <br>
        <input type="text" name="nome" placeholder="Nome:" required>
        <br><br>
        <label for="">E-mail: </label>
        <br>
        <input type="text" name="email" placeholder="E-mail:" required>
        <br><br>
        <h2>Dados da Locação</h2>
        <label for="">Data de Retirada: </label>
        <br>
        <input type="date" name="data" placeholder="Nome:" required>
        <br><br>
        <label for="">Quantidade de Dias: </label>
        <br>
        <input type="number" name="qtddias" placeholder="Quantidade de Dias:" required>
        <br><br>
        <select name="Categoria" required>
            <option value="">Economico - R$100,00</option>
            <option value="">Intermediário - R$150,00</option>
            <option value="">SUV - R$250,00</option>
            <option value="">Seguro Total - R$40,00</option>
            <option value="">GPS - R$15,00</option>
            <option value="">Cadeirinha Infantil - R$20,00</option>
        </select>
        <h2>Adicionais</h2>
        <p>Seguro Total(R$40,00/dia):</p>
        <input type="radio" name="seguroTotal" value="sim">
        <label for="">Sim</label>
        <input type="radio" name="seguroTotal" value="nao">
        <label for="">Não</label><br>

        <p>GPS(R$15,00/dia):</p>
        <input type="radio" name="GPS" value="sim">
        <label for="">Sim</label>
        <input type="radio" name="GPS" value="nao">
        <label for="">Não</label><br>

        <p>Cadeirinha Infantil(R$20,00/dia):</p>
        <input type="radio" name="caderinhaInfantil" value="sim">
        <label for="">Sim</label>
        <input type="radio" name="caderinhaInfantil" value="nao">
        <label for="meia">Não</label><br>
        <br><br>

        <button type="submit">Gerar Contrato</button>
    </form>
</body>
</html>