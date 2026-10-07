<?php
require_once 'config.php';

// Se já estiver logado, redireciona direto para a área do aluno
if (isset($_SESSION['aluno_logado']) && $_SESSION['aluno_logado'] === true) {
    header('Location: area-aluno.php');
    exit;
}

$erro = '';
$plano_selecionado = $_GET['plano'] ?? 'prata'; // Padrão: prata

// Processa o formulário ao enviar
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    $plano = filter_input(INPUT_POST, 'plano', FILTER_SANITIZE_SPECIAL_CHARS);

    if (!empty($_POST['email']) && !empty($_POST['senha'])) {
        // Simulação de login bem-sucedido
        $_SESSION['aluno_logado'] = true;
        $_SESSION['aluno_nome'] = !empty($nome) ? $nome : 'Carlos Silva';
        $_SESSION['aluno_email'] = $_POST['email'];
        $_SESSION['aluno_plano'] = isset($planos[$plano]) ? $plano : 'prata';
        $_SESSION['aluno_desde'] = date('m/Y');

        header('Location: area-aluno.php');
        exit;
    } else {
        $erro = 'Por favor, preencha todos os campos corretamente.';
    }
}

include 'header.php';
?>

<section class="py-16 max-w-md mx-auto px-4">
    <div class="bg-slate-900 border border-slate-800 rounded-2xl p-8 shadow-2xl">
        <div class="text-center mb-8">
            <h1 class="text-2xl font-black uppercase text-white">Acessar <span class="text-yellow-400">Área do Aluno</span></h1>
            <p class="text-xs text-slate-400 mt-1">Simulação: Digite qualquer e-mail e senha para acessar.</p>
        </div>

        <?php if (!empty($erro)): ?>
            <div class="bg-red-500/10 border border-red-500/50 text-red-400 text-sm p-3 rounded-lg mb-6">
                <?php echo $erro; ?>
            </div>
        <?php endif; ?>

        <form action="login.php" method="POST" class="space-y-5">
            <div>
                <label for="nome" class="block text-xs font-bold text-slate-300 uppercase mb-2">Seu Nome</label>
                <input type="text" id="nome" name="nome" value="Carlos Silva" required 
                       class="w-full bg-slate-950 border border-slate-800 rounded-lg px-4 py-3 text-slate-100 focus:outline-none focus:border-yellow-400 transition-colors">
            </div>

            <div>
                <label for="email" class="block text-xs font-bold text-slate-300 uppercase mb-2">E-mail</label>
                <input type="email" id="email" name="email" placeholder="aluno@email.com" required 
                       class="w-full bg-slate-950 border border-slate-800 rounded-lg px-4 py-3 text-slate-100 focus:outline-none focus:border-yellow-400 transition-colors">
            </div>

            <div>
                <label for="senha" class="block text-xs font-bold text-slate-300 uppercase mb-2">Senha</label>
                <input type="password" id="senha" name="senha" value="123456" required 
                       class="w-full bg-slate-950 border border-slate-800 rounded-lg px-4 py-3 text-slate-100 focus:outline-none focus:border-yellow-400 transition-colors">
            </div>

            <div>
                <label for="plano" class="block text-xs font-bold text-slate-300 uppercase mb-2">Selecione seu Plano</label>
                <select id="plano" name="plano" class="w-full bg-slate-950 border border-slate-800 rounded-lg px-4 py-3 text-slate-100 focus:outline-none focus:border-yellow-400 transition-colors">
                    <?php foreach ($planos as $key => $p): ?>
                        <option value="<?php echo $key; ?>" <?php echo ($key === $plano_selecionado) ? 'selected' : ''; ?>>
                            <?php echo $p['nome']; ?> (R$ <?php echo $p['preco']; ?>/mês)
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <button type="submit" class="w-full bg-yellow-400 hover:bg-yellow-500 text-slate-950 font-bold py-3.5 rounded-lg transition-all shadow-lg shadow-yellow-400/20 mt-4">
                Entrar na Minha Conta
            </button>
        </form>
    </div>
</section>

<?php include 'footer.php'; ?>