<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1</title>
</head>
<body>
    <form action="processa.php" method="POST">
        <h2>Cadastre-se</h2>
        <label for="">Nome: </label>
        <input type="text" name="nome" placeholder="Seu Nome:" required>
        <br><br>
         <label for="">Email: </label>
        <input type="email" name="email" placeholder="Seu email:" required>
        <br><br>
         <label for="">Senha: </label>
        <input type="passworld" name="senha" placeholder="Sua senha:" required>
        <br><br>
        <button type="submit">Cadastrar</button>
        <button type="reset">Limpar</button>
    </form>
</body>
</html>