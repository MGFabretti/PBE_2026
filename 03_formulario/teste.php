<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Academia</title>
</head>
<body style= "background-color:black; color: #FFF; text-align: center;">
        <img src="logo.png" width="15%">
        <h1>BEM VINDO!!!</h1>

    <form action="logica.php" method="POST">

        
        <input type="text" name="nome" placeholder="Nome:" required>
        <br><br>
        
        <input type="number" name="idade" placeholder="Idade:" required>
        <br>
        <label>Escolha seu plano:</label>
        <br>
        <select name="plano">

            <option value="basico">Plano Básico - R$ 80</option>
            <option value="premium">Plano Premium - R$ 120</option>
            <option value="vip">Plano VIP - R$ 180</option>

        </select>

        <br><br>

        <input type="number" name="meses" min="1" placeholder="Quantidade meses:" required>

        <br>

        <label>Personal Trainer:</label>
        <br>
        <select name="personal">
            <option value="selecione">Selecione</option>
            <option value="nao">Não</option>
            <option value="sim">Sim - R$ 50 por mês</option>
        </select>

        <br><br>

        <button type="submit" style="background-color:red; color: #FFF" ><b>CONFIRMA MATRÍCULA</b></button>

    </form>
</body>
</html>