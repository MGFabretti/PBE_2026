<?php 
require_once 'config.php';
include 'header.php'; 
?>

<!-- Hero Section -->
<section class="relative bg-slate-900 border-b border-slate-800 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 lg:py-32 flex flex-col lg:flex-row items-center justify-between">
        <div class="lg:w-1/2 z-10 text-center lg:text-left mb-12 lg:mb-0">
            <span class="inline-block uppercase tracking-widest text-xs font-bold bg-yellow-400/10 text-yellow-400 px-3 py-1 rounded-full mb-4 border border-yellow-400/20">
                Superação & Resultados
            </span>
            <h1 class="text-4xl sm:text-6xl font-black uppercase text-white tracking-tight leading-none mb-6">
                Supere Seus <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-amber-500">Limites</span>
            </h1>
            <p class="text-lg text-slate-300 mb-8 max-w-xl mx-auto lg:mx-0">
                Equipamentos de última geração, ambiente climatizado e acompanhamento profissional para você atingir seu potencial máximo.
            </p>
            <div class="flex flex-col sm:flex-row justify-center lg:justify-start gap-4">
                <a href="#planos" class="bg-yellow-400 hover:bg-yellow-500 text-slate-950 font-extrabold px-8 py-4 rounded-xl shadow-lg shadow-yellow-400/20 transition-all text-center">
                    Matricule-se Agora
                </a>
                <a href="login.php" class="bg-slate-800 hover:bg-slate-700 text-white font-bold px-8 py-4 rounded-xl border border-slate-700 transition-all text-center">
                    Já sou Aluno
                </a>
            </div>
        </div>

        <!-- Hero Decorator Card -->
        <div class="lg:w-5/12 w-full flex justify-center">
            <div class="relative w-full max-w-md bg-gradient-to-tr from-slate-900 to-slate-800 p-8 rounded-2xl border border-slate-700 shadow-2xl">
                <div class="flex items-center justify-between mb-6">
                    <span class="text-sm font-bold text-yellow-400 uppercase">Métricas Hoje</span>
                    <i class="fa-solid fa-fire text-yellow-400 text-xl"></i>
                </div>
                <div class="space-y-4">
                    <div class="bg-slate-950 p-4 rounded-xl border border-slate-800">
                        <p class="text-xs text-slate-400">Alunos Ativos</p>
                        <p class="text-2xl font-bold text-white">+1.200</p>
                    </div>
                    <div class="bg-slate-950 p-4 rounded-xl border border-slate-800">
                        <p class="text-xs text-slate-400">Aulas Semanais</p>
                        <p class="text-2xl font-bold text-white">45+ Modalidades</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Planos Section -->
<section id="planos" class="py-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center max-w-3xl mx-auto mb-16">
        <h2 class="text-3xl font-black uppercase text-white tracking-wide">Escolha o seu <span class="text-yellow-400">Plano</span></h2>
        <p class="text-slate-400 mt-2">Sem taxas escondidas. Escolha a opção ideal para os seus objetivos.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <?php foreach ($planos as $chave => $plano): ?>
            <div class="relative flex flex-col bg-slate-900 rounded-2xl p-8 border <?php echo $plano['destaque'] ? 'border-yellow-400 shadow-xl shadow-yellow-400/10 scale-105' : 'border-slate-800'; ?>">
                
                <?php if ($plano['destaque']): ?>
                    <span class="absolute -top-4 left-1/2 -translate-x-1/2 bg-yellow-400 text-slate-950 font-black text-xs uppercase px-4 py-1 rounded-full shadow">
                        Mais Popular
                    </span>
                <?php endif; ?>

                <div class="mb-6">
                    <h3 class="text-xl font-bold text-white mb-2"><?php echo $plano['nome']; ?></h3>
                    <div class="flex items-baseline space-x-1">
                        <span class="text-sm font-semibold text-slate-400">R$</span>
                        <span class="text-4xl font-black text-white"><?php echo $plano['preco']; ?></span>
                        <span class="text-xs text-slate-400">/mês</span>
                    </div>
                </div>

                <ul class="space-y-4 mb-8 flex-grow">
                    <?php foreach ($plano['recursos'] as $recurso): ?>
                        <li class="flex items-center text-sm text-slate-300">
                            <i class="fa-solid fa-check text-yellow-400 mr-3"></i>
                            <?php echo $recurso; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>

                <a href="login.php?plano=<?php echo $chave; ?>" 
                   class="w-full block text-center font-bold py-3 px-6 rounded-xl transition-all <?php echo $plano['destaque'] ? 'bg-yellow-400 hover:bg-yellow-500 text-slate-950' : 'bg-slate-800 hover:bg-slate-700 text-white border border-slate-700'; ?>">
                    Adquirir Plano
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<?php include 'footer.php'; ?>