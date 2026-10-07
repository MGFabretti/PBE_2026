<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="pt-BR" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IRON FIT - Academia & Performance</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            yellow: '#facc15', // Amarelo Neon
                            dark: '#0f172a',
                            card: '#1e293b'
                        }
                    }
                }
            }
        }
    </script>
    <!-- FontAwesome para Ícones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-slate-950 text-slate-100 flex flex-col min-h-screen font-sans antialiased">

    <!-- Header / Navbar -->
    <header class="bg-slate-900 border-b border-slate-800 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="index.php" class="flex items-center space-x-2">
                        <i class="fa-solid fa-dumbbell text-yellow-400 text-3xl"></i>
                        <span class="text-2xl font-black tracking-wider uppercase text-white">IRON<span class="text-yellow-400">FIT</span></span>
                    </a>
                </div>

                <!-- Navigation Links (Desktop) -->
                <nav class="hidden md:flex space-x-8 text-sm font-semibold tracking-wide">
                    <a href="index.php" class="text-slate-300 hover:text-yellow-400 transition-colors py-2">Home</a>
                    <a href="index.php#planos" class="text-slate-300 hover:text-yellow-400 transition-colors py-2">Planos</a>
                    <a href="area-aluno.php" class="text-slate-300 hover:text-yellow-400 transition-colors py-2">Área do Aluno</a>
                </nav>

                <!-- Auth Buttons -->
                <div class="hidden md:flex items-center space-x-4">
                    <?php if (isset($_SESSION['aluno_logado']) && $_SESSION['aluno_logado'] === true): ?>
                        <div class="flex items-center space-x-3 bg-slate-800 px-4 py-2 rounded-lg border border-slate-700">
                            <i class="fa-solid fa-user-circle text-yellow-400 text-lg"></i>
                            <span class="text-sm font-medium text-slate-200"><?php echo htmlspecialchars($_SESSION['aluno_nome']); ?></span>
                        </div>
                        <a href="logout.php" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg font-medium text-sm transition-colors flex items-center space-x-1">
                            <i class="fa-solid fa-right-from-bracket"></i>
                            <span>Sair</span>
                        </a>
                    <?php else: ?>
                        <a href="login.php" class="bg-yellow-400 hover:bg-yellow-500 text-slate-950 px-5 py-2.5 rounded-lg font-bold text-sm transition-all transform hover:scale-105 shadow-lg shadow-yellow-400/20">
                            Área do Aluno / Entrar
                        </a>
                    <?php endif; ?>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button id="btn-mobile-menu" type="button" class="text-slate-400 hover:text-white focus:outline-none p-2">
                        <i class="fa-solid fa-bars text-2xl"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-slate-900 border-b border-slate-800 px-4 pt-2 pb-6 space-y-3">
            <a href="index.php" class="block text-slate-300 hover:text-yellow-400 py-2 text-base font-medium">Home</a>
            <a href="index.php#planos" class="block text-slate-300 hover:text-yellow-400 py-2 text-base font-medium">Planos</a>
            <a href="area-aluno.php" class="block text-slate-300 hover:text-yellow-400 py-2 text-base font-medium">Área do Aluno</a>
            <div class="pt-2 border-t border-slate-800">
                <?php if (isset($_SESSION['aluno_logado']) && $_SESSION['aluno_logado'] === true): ?>
                    <p class="text-sm text-slate-400 mb-2">Logado como: <strong class="text-yellow-400"><?php echo htmlspecialchars($_SESSION['aluno_nome']); ?></strong></p>
                    <a href="logout.php" class="w-full text-center bg-red-600 text-white block px-4 py-2 rounded-lg font-medium">Sair</a>
                <?php else: ?>
                    <a href="login.php" class="w-full text-center bg-yellow-400 text-slate-950 block px-4 py-2 rounded-lg font-bold">Entrar / Cadastrar</a>
                <?php endif; ?>
            </div>
        </div>
    </header>

    <script>
        // Toggle Menu Mobile
        document.getElementById('btn-mobile-menu').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>

    <main class="flex-grow">