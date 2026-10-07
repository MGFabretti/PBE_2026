<?php
require_once 'config.php';

// Proteção da Página: Redireciona para o login se a sessão não existir
if (!isset($_SESSION['aluno_logado']) || $_SESSION['aluno_logado'] !== true) {
    header('Location: login.php');
    exit;
}

// Dados do Aluno Logado
$nome_aluno = $_SESSION['aluno_nome'];
$email_aluno = $_SESSION['aluno_email'];
$chave_plano = $_SESSION['aluno_plano'] ?? 'prata';
$plano_atual = $planos[$chave_plano];

include 'header.php';
?>

<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    
    <!-- Boas-vindas & Card de Perfil -->
    <div class="bg-slate-900 border border-slate-800 rounded-2xl p-6 lg:p-8 mb-10 flex flex-col md:flex-row items-start md:items-center justify-between gap-6">
        <div>
            <span class="text-xs font-bold text-yellow-400 uppercase tracking-widest">Painel do Aluno</span>
            <h1 class="text-3xl font-black text-white mt-1">Bem-vindo, <?php echo htmlspecialchars($nome_aluno); ?>!</h1>
            <p class="text-sm text-slate-400 mt-1"><i class="fa-solid fa-envelope mr-1"></i> <?php echo htmlspecialchars($email_aluno); ?></p>
        </div>

        <div class="bg-slate-950 border border-slate-800 p-4 rounded-xl flex items-center space-x-4 min-w-[240px]">
            <div class="p-3 bg-yellow-400/10 text-yellow-400 rounded-lg">
                <i class="fa-solid fa-id-card text-2xl"></i>
            </div>
            <div>
                <p class="text-xs text-slate-400">Plano Contratado</p>
                <p class="text-base font-bold text-white"><?php echo $plano_atual['nome']; ?></p>
                <span class="text-xs text-green-400 font-medium">● Matrícula Ativa</span>
            </div>
        </div>
    </div>

    <!-- Abas de Treino -->
    <div class="mb-8">
        <h2 class="text-2xl font-black uppercase text-white mb-6 flex items-center">
            <i class="fa-solid fa-dumbbell text-yellow-400 mr-3"></i> Ficha de Treinos
        </h2>

        <!-- Container Treinos A, B, C -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            
            <!-- TREINO A -->
            <div class="bg-slate-900 border border-slate-800 rounded-2xl overflow-hidden flex flex-col">
                <div class="bg-yellow-400 p-4 text-slate-950 font-black flex items-center justify-between">
                    <span class="uppercase">Treino A</span>
                    <span class="text-xs font-bold uppercase bg-slate-950/10 px-2 py-1 rounded">Peito & Tríceps</span>
                </div>
                <div class="p-6 flex-grow">
                    <ul class="space-y-4">
                        <li class="border-b border-slate-800 pb-3">
                            <p class="font-bold text-white text-sm">Supino Reto com Barra</p>
                            <p class="text-xs text-slate-400">4 Séries x 10 a 12 Repetições</p>
                        </li>
                        <li class="border-b border-slate-800 pb-3">
                            <p class="font-bold text-white text-sm">Supino Inclinado com Halteres</p>
                            <p class="text-xs text-slate-400">3 Séries x 12 Repetições</p>
                        </li>
                        <li class="border-b border-slate-800 pb-3">
                            <p class="font-bold text-white text-sm">Crossover na Polia High-to-Low</p>
                            <p class="text-xs text-slate-400">3 Séries x 15 Repetições</p>
                        </li>
                        <li class="border-b border-slate-800 pb-3">
                            <p class="font-bold text-white text-sm">Tríceps Testa com Barra W</p>
                            <p class="text-xs text-slate-400">4 Séries x 10 Repetições</p>
                        </li>
                        <li>
                            <p class="font-bold text-white text-sm">Tríceps Pulley na Corda</p>
                            <p class="text-xs text-slate-400">3 Séries x 12 Repetições</p>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- TREINO B -->
            <div class="bg-slate-900 border border-slate-800 rounded-2xl overflow-hidden flex flex-col">
                <div class="bg-yellow-400 p-4 text-slate-950 font-black flex items-center justify-between">
                    <span class="uppercase">Treino B</span>
                    <span class="text-xs font-bold uppercase bg-slate-950/10 px-2 py-1 rounded">Costas & Bíceps</span>
                </div>
                <div class="p-6 flex-grow">
                    <ul class="space-y-4">
                        <li class="border-b border-slate-800 pb-3">
                            <p class="font-bold text-white text-sm">Puxada Frontal Pulley</p>
                            <p class="text-xs text-slate-400">4 Séries x 10 Repetições</p>
                        </li>
                        <li class="border-b border-slate-800 pb-3">
                            <p class="font-bold text-white text-sm">Remada Curvada com Barra</p>
                            <p class="text-xs text-slate-400">3 Séries x 12 Repetições</p>
                        </li>
                        <li class="border-b border-slate-800 pb-3">
                            <p class="font-bold text-white text-sm">Remada Baixa Triângulo</p>
                            <p class="text-xs text-slate-400">3 Séries x 12 Repetições</p>
                        </li>
                        <li class="border-b border-slate-800 pb-3">
                            <p class="font-bold text-white text-sm">Rosca Direta no Banco W</p>
                            <p class="text-xs text-slate-400">4 Séries x 10 Repetições</p>
                        </li>
                        <li>
                            <p class="font-bold text-white text-sm">Rosca Martelo com Halteres</p>
                            <p class="text-xs text-slate-400">3 Séries x 12 Repetições</p>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- TREINO C -->
            <div class="bg-slate-900 border border-slate-800 rounded-2xl overflow-hidden flex flex-col">
                <div class="bg-yellow-400 p-4 text-slate-950 font-black flex items-center justify-between">
                    <span class="uppercase">Treino C</span>
                    <span class="text-xs font-bold uppercase bg-slate-950/10 px-2 py-1 rounded">Pernas & Ombros</span>
                </div>
                <div class="p-6 flex-grow">
                    <ul class="space-y-4">
                        <li class="border-b border-slate-800 pb-3">
                            <p class="font-bold text-white text-sm">Agachamento Livre com Barra</p>
                            <p class="text-xs text-slate-400">4 Séries x 8 a 10 Repetições</p>
                        </li>
                        <li class="border-b border-slate-800 pb-3">
                            <p class="font-bold text-white text-sm">Leg Press 45º</p>
                            <p class="text-xs text-slate-400">3 Séries x 12 Repetições</p>
                        </li>
                        <li class="border-b border-slate-800 pb-3">
                            <p class="font-bold text-white text-sm">Cadeira Extensora</p>
                            <p class="text-xs text-slate-400">3 Séries x 15 Repetições</p>
                        </li>
                        <li class="border-b border-slate-800 pb-3">
                            <p class="font-bold text-white text-sm">Desenvolvimento com Halteres</p>
                            <p class="text-xs text-slate-400">4 Séries x 10 Repetições</p>
                        </li>
                        <li>
                            <p class="font-bold text-white text-sm">Elevação Lateral</p>
                            <p class="text-xs text-slate-400">4 Séries x 12 Repetições</p>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include 'footer.php'; ?>