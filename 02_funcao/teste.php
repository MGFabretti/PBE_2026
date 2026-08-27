<?php

$jogador1 = "Player 1";
$jogador2 = "Player 2";

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Stick Sword Fight - 2 Players</title>

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: #111;
            color: white;
            font-family: Arial, sans-serif;
            text-align: center;
        }

        h1 {
            margin: 15px 0;
        }

        #placar {
            display: flex;
            justify-content: center;
            gap: 100px;
            margin-bottom: 10px;
        }

        .player {
            width: 250px;
        }

        .nome {
            font-size: 22px;
            font-weight: bold;
        }

        .barra {
            width: 250px;
            height: 25px;
            background: #444;
            border: 2px solid white;
            margin-top: 5px;
        }

        .vida {
            height: 100%;
            width: 100%;
        }

        #vida1 {
            background: #2196f3;
        }

        #vida2 {
            background: #f44336;
        }

        canvas {
            display: block;
            margin: auto;
            background: linear-gradient(#87ceeb, #dff6ff);
            border: 4px solid white;
            max-width: 95%;
        }

        #mensagem {
            font-size: 28px;
            font-weight: bold;
            margin: 15px;
        }

        button {
            padding: 12px 25px;
            border: none;
            border-radius: 8px;
            background: #fff;
            font-size: 18px;
            cursor: pointer;
        }

        .controles {
            margin-top: 15px;
            line-height: 1.7;
        }

        .azul {
            color: #2196f3;
        }

        .vermelho {
            color: #f44336;
        }

    </style>

</head>

<body>

    <h1>⚔️ STICK SWORD FIGHT ⚔️</h1>

    <div id="placar">

        <div class="player">

            <div class="nome azul">
                <?= $jogador1 ?>
            </div>

            <div class="barra">

                <div
                    id="vida1"
                    class="vida">
                </div>

            </div>

        </div>


        <div class="player">

            <div class="nome vermelho">
                <?= $jogador2 ?>
            </div>

            <div class="barra">

                <div
                    id="vida2"
                    class="vida">
                </div>

            </div>

        </div>

    </div>


    <canvas
        id="jogo"
        width="1000"
        height="550">
    </canvas>


    <div id="mensagem"></div>


    <button onclick="reiniciar()">
        🔄 Reiniciar
    </button>


    <div class="controles">

        <p class="azul">
            🔵 <b>Player 1:</b>
            A/D = andar |
            W = pular |
            F = atacar
        </p>

        <p class="vermelho">
            🔴 <b>Player 2:</b>
            ←/→ = andar |
            ↑ = pular |
            L = atacar
        </p>

    </div>


<script>

// ==========================================
// CANVAS
// ==========================================

const canvas = document.getElementById("jogo");

const ctx = canvas.getContext("2d");


// ==========================================
// TECLAS
// ==========================================

const teclas = {};

document.addEventListener("keydown", function(event) {

    teclas[event.key.toLowerCase()] = true;

    // Player 1 ataca
    if (event.key.toLowerCase() === "f") {
        atacar(player1, player2);
    }

    // Player 2 ataca
    if (event.key.toLowerCase() === "l") {
        atacar(player2, player1);
    }

});


document.addEventListener("keyup", function(event) {

    teclas[event.key.toLowerCase()] = false;

});


// ==========================================
// PLAYER 1
// ==========================================

let player1 = {

    x: 180,

    y: 400,

    velocidade: 15,

    velocidadeY: 0,

    vida: 1000,

    cor: "#870a9aff",

    esquerda: "a",

    direita: "d",

    pular: "w",

    atacando: false,

    direcao: 1

};


// ==========================================
// PLAYER 2
// ==========================================

let player2 = {

    x: 820,

    y: 400,

    velocidade: 20,

    velocidadeY: 0,

    vida: 1000,

    cor: "#000000ff",

    esquerda: "arrowleft",

    direita: "arrowright",

    pular: "arrowup",

    atacando: false,

    direcao: -1

};


const gravidade = 0.4;

const chao = 400;

let jogoTerminou = false;


// ==========================================
// MOVIMENTAÇÃO
// ==========================================

function movimentar(player) {

    if (jogoTerminou) {
        return;
    }


    // Esquerda

    if (teclas[player.esquerda]) {

        player.x -= player.velocidade;

        player.direcao = -1;

    }


    // Direita

    if (teclas[player.direita]) {

        player.x += player.velocidade;

        player.direcao = 1;

    }


    // Pulo

    if (
        teclas[player.pular] &&
        player.y >= chao
    ) {

        player.velocidadeY = -14;

    }


    // Gravidade

    player.velocidadeY += gravidade;

    player.y += player.velocidadeY;


    // Chão

    if (player.y >= chao) {

        player.y = chao;

        player.velocidadeY = 0;

    }


    // Limites da arena

    if (player.x < 50) {
        player.x = 50;
    }

    if (player.x > 950) {
        player.x = 950;
    }

}


// ==========================================
// DESENHAR BONECO
// ==========================================

function desenharBoneco(player) {

    ctx.strokeStyle = player.cor;

    ctx.lineWidth = 7;

    ctx.lineCap = "round";


    // Cabeça

    ctx.beginPath();

    ctx.arc(
        player.x,
        player.y - 100,
        25,
        0,
        Math.PI * 2
    );

    ctx.stroke();


    // Corpo

    ctx.beginPath();

    ctx.moveTo(
        player.x,
        player.y - 78
    );

    ctx.lineTo(
        player.x,
        player.y
    );

    ctx.stroke();


    // Braços

    ctx.beginPath();

    ctx.moveTo(
        player.x,
        player.y - 60
    );

    ctx.lineTo(
        player.x - 55,
        player.y - 50
    );

    ctx.stroke();


    ctx.beginPath();

    ctx.moveTo(
        player.x,
        player.y - 55
    );

    ctx.lineTo(
        player.x + 35,
        player.y - 20
    );

    ctx.stroke();


    // Perna esquerda

    ctx.beginPath();

    ctx.moveTo(
        player.x,
        player.y
    );

    ctx.lineTo(
        player.x - 35,
        player.y + 55
    );

    ctx.stroke();


    // Perna direita

    ctx.beginPath();

    ctx.moveTo(
        player.x,
        player.y
    );

    ctx.lineTo(
        player.x + 35,
        player.y + 55
    );

    ctx.stroke();


    // ======================================
    // ESPADA
    // ======================================

    ctx.strokeStyle = "#c3c000ff";

    ctx.lineWidth = 15;


    let inicioX;

    let fimX;


    if (player.direcao === 1) {

        inicioX = player.x + 30;

        fimX = player.x + 100;

    } else {

        inicioX = player.x - 30;

        fimX = player.x - 100;

    }


    ctx.beginPath();

    ctx.moveTo(
        inicioX,
        player.y - 20
    );

    ctx.lineTo(
        fimX,
        player.y - 80
    );

    ctx.stroke();


    // Guarda da espada

    ctx.strokeStyle = "#0feb0bff";

    ctx.lineWidth = 8;

    ctx.beginPath();

    ctx.moveTo(
        inicioX - 10 * player.direcao,
        player.y - 10
    );

    ctx.lineTo(
        inicioX + 10 * player.direcao,
        player.y - 30
    );

    ctx.stroke();


    // ======================================
    // ATAQUE
    // ======================================

    if (player.atacando) {

        ctx.strokeStyle = "yellow";

        ctx.lineWidth = 10;

        ctx.beginPath();

        ctx.arc(
            player.x,
            player.y - 120,
            100,
            player.direcao === 1 ? -1.2 : 1.9,
            player.direcao === 1 ? 0.3 : 3.5
        );

        ctx.stroke();

    }

}


// ==========================================
// ATAQUE
// ==========================================

function atacar(atacante, defensor) {

    if (
        jogoTerminou ||
        atacante.atacando
    ) {
        return;
    }


    atacante.atacando = true;


    setTimeout(function() {

        let distancia =
            Math.abs(
                atacante.x - defensor.x
            );


        // Alcance da espada

        if (distancia < 150) {

            defensor.vida -= 15;

            if (defensor.vida < 0) {
                defensor.vida = 0;
            }

        }


        atacante.atacando = false;

        atualizarVida();

        verificarVencedor();

    }, 150);


    // Tempo da animação

    setTimeout(function() {

        atacante.atacando = false;

    }, 600);

}


// ==========================================
// VIDA
// ==========================================

function atualizarVida() {

    document.getElementById("vida1")
        .style.width =
        player1.vida + "%";


    document.getElementById("vida2")
        .style.width =
        player2.vida + "%";

}


// ==========================================
// VERIFICAR VENCEDOR
// ==========================================

function verificarVencedor() {

    if (player1.vida <= 0) {

        jogoTerminou = true;

        document.getElementById("mensagem")
            .innerText =
            "🔴 PLAYER 2 VENCEU!";

    }


    if (player2.vida <= 0) {

        jogoTerminou = true;

        document.getElementById("mensagem")
            .innerText =
            "🔵 PLAYER 1 VENCEU!";

    }

}


// ==========================================
// CENÁRIO
// ==========================================

function desenharCenario() {

    // Céu

    ctx.fillStyle = "#87ceeb";

    ctx.fillRect(
        0,
        0,
        canvas.width,
        canvas.height
    );


    // Sol

    ctx.fillStyle = "#ffd700";

    ctx.beginPath();

    ctx.arc(
        800,
        80,
        45,
        0,
        Math.PI * 2
    );

    ctx.fill();


    // Chão

    ctx.fillStyle = "#b50909ff";

    ctx.fillRect(
        0,
        450,
        canvas.width,
        100
    );


    // Linha do chão

    ctx.fillStyle = "#cb5807ff";

    ctx.fillRect(
        0,
        450,
        canvas.width,
        10
    );


    // Plataforma

    ctx.fillStyle = "#654321";

    ctx.fillRect(
        300,
        330,
        400,
        20
    );

}


// ==========================================
// DESENHAR
// ==========================================

function desenhar() {

    desenharCenario();

    desenharBoneco(player1);

    desenharBoneco(player2);


    // Nome Player 1

    ctx.fillStyle = "#0911a9ff";

    ctx.font = "20px Arial";

    ctx.fillText(
        "PLAYER 1",
        player1.x - 45,
        player1.y - 125
    );


    // Nome Player 2

    ctx.fillStyle = "#f44336";

    ctx.fillText(
        "PLAYER 2",
        player2.x - 45,
        player2.y - 125
    );

}


// ==========================================
// REINICIAR
// ==========================================

function reiniciar() {

    player1.x = 180;

    player1.y = 400;

    player1.vida = 100;

    player1.velocidadeY = 0;

    player2.x = 820;

    player2.y = 400;

    player2.vida = 100;

    player2.velocidadeY = 0;

    jogoTerminou = false;

    document.getElementById("mensagem")
        .innerText = "";

    atualizarVida();

}


// ==========================================
// LOOP PRINCIPAL
// ==========================================

function loop() {

    movimentar(player1);

    movimentar(player2);

    desenhar();

    requestAnimationFrame(loop);

}


atualizarVida();

loop();

</script>

</body>

</html>