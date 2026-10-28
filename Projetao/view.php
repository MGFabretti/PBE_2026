
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Peças</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #1a1a1a;
            color: #f5f5f5;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 30px 15px;
        }

        .container {
            width: 100%;
            max-width: 650px;
            background: #292929;
            padding: 35px;
            border-radius: 15px;
            border: 1px solid #444;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4);
        }

        .cabecalho {
            text-align: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 1px solid #484848;
        }

        .cabecalho h1 {
            font-size: 28px;
            margin-bottom: 10px;
            color: #ffffff;
        }

        .cabecalho p {
            color: #b0b0b0;
            font-size: 14px;
        }

        .campo {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-size: 14px;
            font-weight: bold;
            color: #e0e0e0;
        }

        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 13px;
            background: #1e1e1e;
            color: #ffffff;
            border: 1px solid #505050;
            border-radius: 8px;
            font-size: 14px;
            outline: none;
            transition: 0.3s;
        }

        input:focus,
        select:focus {
            border-color: #bdbdbd;
            box-shadow: 0 0 0 3px rgba(200, 200, 200, 0.1);
        }

        select {
            cursor: pointer;
        }

        .opcoes {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
        }

        .opcao {
            display: flex;
            align-items: center;
            gap: 8px;
            background: #202020;
            border: 1px solid #484848;
            border-radius: 8px;
            padding: 12px;
            flex: 1;
            min-width: 140px;
            cursor: pointer;
            font-size: 13px;
            color: #e0e0e0;
        }

        .opcao input {
            accent-color: #bdbdbd;
            cursor: pointer;
        }

        .botao {
            width: 100%;
            padding: 15px;
            margin-top: 10px;
            background: #e0e0e0;
            color: #171717;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        .botao:hover {
            background: #ffffff;
            transform: translateY(-2px);
        }

        .rodape {
            text-align: center;
            margin-top: 20px;
            font-size: 12px;
            color: #888;
        }

        @media (max-width: 500px) {
            .container {
                padding: 22px;
            }

            .cabecalho h1 {
                font-size: 23px;
            }

            .opcao {
                min-width: 100%;
            }
        }
    </style>
</head>

<body>

    <div class="container">

        <div class="cabecalho">
            <h1>Cadastro de Peças</h1>
            <p>Sistema de registro de peças para usinagem</p>
        </div>

        <form action="logica.php" method="POST">

            <div class="campo">
                <label for="cliente">Cliente</label>
                <input type="text" id="cliente" name="cliente"
                       placeholder="Digite o nome do cliente" required>
            </div>

            <div class="campo">
                <label for="material">Material</label>
                <select id="material" name="material" required>
                    <option value="Aço 1045">Aço 1045</option>
                    <option value="Alumínio 6351">Alumínio 6351</option>
                    <option value="Latão">Latão</option>
                </select>
            </div>

            <div class="campo">
                <label for="peso">Peso da peça (kg)</label>
                <input type="number" id="peso" name="peso"
                       step="0.01" min="0.01"
                       placeholder="Ex.: 2.50" required>
            </div>

            <div class="campo">
                <label for="quantidade">Quantidade de peças</label>
                <input type="number" id="quantidade" name="quantidade"
                       min="1" placeholder="Ex.: 10" required>
            </div>

            <div class="campo">
                <label for="maquina">Máquina</label>
                <select id="maquina" name="maquina" required>
                    <option value="Torno convencional">Torno convencional</option>
                    <option value="Torno CNC">Torno CNC</option>
                    <option value="Centro de usinagem">Centro de usinagem</option>
                </select>
            </div>

            <div class="campo">
                <label for="minutos">Minutos por peça</label>
                <input type="number" id="minutos" name="minutos"
                       min="1" placeholder="Tempo em minutos" required>
            </div>

            <div class="campo">
                <label>Acabamento</label>
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

            <div class="campo">
                <label>Pedido urgente?</label>
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

            <button type="submit" class="botao">
                Enviar Cadastro
            </button>

        </form>

        <div class="rodape">
            Sistema de Cadastro de Peças
        </div>

    </div>

</body>
</html>