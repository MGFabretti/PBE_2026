<?php
// Inicia a sessão se ela ainda não tiver sido iniciada
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Configuração global de planos da academia
$planos = [
    'bronze' => [
        'nome' => 'Plano Bronze',
        'preco' => '89,90',
        'recursos' => [
            'Acesso à musculação em horário livre',
            'Avaliação física trimestral',
            'Sem taxa de fidelidade'
        ],
        'destaque' => false
    ],
    'prata' => [
        'nome' => 'Plano Prata',
        'preco' => '129,90',
        'recursos' => [
            'Acesso total à musculação e aeróbico',
            'Aulas coletivas (Spinning, FitDance)',
            'Avaliação física bimestral',
            'Acesso a 2 filiais'
        ],
        'destaque' => true // Plano destacado na Home
    ],
    'ouro' => [
        'nome' => 'Plano Ouro VIP',
        'preco' => '179,90',
        'recursos' => [
            'Acesso ilimitado a todas as unidades',
            'Todas as aulas coletivas inclusas',
            'Direito a levar 1 acompanhante 5x/mês',
            'Armário exclusivo + Cadeira de massagem',
            'Avaliação física mensal'
        ],
        'destaque' => false
    ]
];