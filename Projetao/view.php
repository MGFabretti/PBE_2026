
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro de Peças</title>
</head>
<body>
<!-- O div serve para manipular blocos -->
    <div class="container">

        <div class="cabecalho">
            <h1>Cadastro de Peças</h1>
            <p>Sistema de registro de peças para usinagem</p>
        </div>

        <form action="logica.php" method="POST">

            <div class="campo">
                <label for="cliente">Cliente</label>
                <br>
                <input type="text" id="cliente" name="cliente"
                       placeholder="Digite o nome do cliente" required>
            </div>

            <div class="campo">
                <label for="material">Material</label>
                <br>
                <select id="material" name="material" required>
                    <option value="Aço 1045">Aço 1045</option>
                    <option value="Alumínio 6351">Alumínio 6351</option>
                    <option value="Latão">Latão</option>
                </select>
            </div>

            <div class="campo">
                <label for="peso">Peso da peça (kg)</label>
                <br>
                <input type="number" id="peso" name="peso"
                       step="0.01" min="0.01"
                       placeholder="Ex.: 2.50" required>
            </div>

            <div class="campo">
                <label for="quantidade">Quantidade de peças</label>
                <br>
                <input type="number" id="quantidade" name="quantidade"
                       min="1" placeholder="Ex.: 10" required>
            </div>

            <div class="campo">
                <label for="maquina">Máquina</label>
                <br>
                <select id="maquina" name="maquina" required>
                    <option value="Torno convencional">Torno convencional</option>
                    <option value="Torno CNC">Torno CNC</option>
                    <option value="Centro de usinagem">Centro de usinagem</option>
                </select>
            </div>

            <div class="campo">
                <label for="minutos">Minutos por peça</label>
                <br>
                <input type="number" id="minutos" name="minutos"
                       min="1" placeholder="Tempo em minutos" required>
            </div>
            <br>
            <div class="campo">
                <label><b>Acabamento</b></label>
                <div class="opcoes">
                    <label class="opcao">
                        <input type="radio" name="acabamento"
                               value="Sem acabamento" required>
                        Sem acabamento
                    </label>

                    <label class="opcao">
                        <input type="radio" name="acabamento"
                               value="Zincagem">
                        Zincagem
                    </label>

                    <label class="opcao">
                        <input type="radio" name="acabamento"
                               value="Anodização">
                        Anodização
                    </label>
                </div>
            </div>
            <br>
            <div class="campo">
                <label><b>Pedido urgente?</b></label>
                <div class="opcoes">
                    <label class="opcao">
                        <input type="radio" name="urgente"
                               value="Sim" required>
                        Sim
                    </label>

                    <label class="opcao">
                        <input type="radio" name="urgente"
                               value="Não">
                        Não
                    </label>
                </div>
            </div>
            <br>
            <button type="submit" class="botao">
                Enviar Cadastro
            </button>

        </form>
        <br>
        <div class="rodape">
            Sistema de Cadastro de Peças
        </div>

    </div>

</body>
</html>