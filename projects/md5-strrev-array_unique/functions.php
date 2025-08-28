<?php

$integrantes = "Guilherme Henrique Yamaguchi Daveli";

// Inicializa variáveis
$array_input = $_POST['valores_array'] ?? '';
$strrev_input = $_POST['texto_inverter'] ?? '';
$md5_input = $_POST['texto_md5'] ?? '';

$array_result = null;
$array_original_pretty = null;
$strrev_result = null;
$md5_result = null;

// Função auxiliar: parseia lista separada por vírgula, remove entradas vazias e trim
function parse_list($raw) {
    $parts = array_map('trim', explode(',', $raw));
    // remove elementos vazios (string '')
    $parts = array_filter($parts, function($v) { return $v !== ''; });
    return array_values($parts);
}

if (isset($_POST['executar_array_unique'])) {
    $parsed = parse_list($array_input);
    // Guarda versão original (após limpeza) para exibir
    $array_original_pretty = implode(', ', $parsed);
    // Remove duplicados e reindexa
    $unique = array_values(array_unique($parsed));
    $array_result = $unique;
}

if (isset($_POST['executar_strrev'])) {
    // Inverte a string (preservando entrada original)
    if ($strrev_input !== '') {
        $strrev_result = strrev($strrev_input);
    } else {
        $strrev_result = null;
    }
}

if (isset($_POST['executar_md5'])) {
    if ($md5_input !== '') {
        $md5_result = md5($md5_input);
    } else {
        $md5_result = null;
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>Atividade Avaliativa - Funções PHP</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <style>
        :root {
            --accent: #0b63d1;
            --bg: #f6f8fb;
            --card: #ffffff;
            --muted: #666;
        }
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial;
            background: var(--bg);
            color: #222;
            margin: 24px;
        }
        header {
            margin-bottom: 20px;
        }
        h1 { margin: 0 0 6px 0; color: var(--accent); }
        .subtitle { color: var(--muted); margin: 0 0 16px 0; }

        .container { max-width: 900px; margin: 0 auto; }
        .card {
            background: var(--card);
            border-radius: 10px;
            box-shadow: 0 6px 18px rgba(15,30,60,0.06);
            padding: 18px;
            margin-bottom: 18px;
        }
        label { display:block; margin-bottom:6px; font-weight:600; }
        input[type="text"], textarea {
            width: 100%;
            max-width: 680px;
            padding: 8px 10px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 15px;
            margin-bottom: 8px;
        }
        .row { display:flex; gap:12px; align-items:center; flex-wrap:wrap; }
        input[type="submit"] {
            background: var(--accent);
            color: #fff;
            padding: 9px 14px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 700;
        }
        input[type="submit"]:hover { opacity: 0.95; }

        .resultado {
            margin-top: 12px;
            padding: 12px;
            background: #f0f7ff;
            border-left: 4px solid var(--accent);
            border-radius: 6px;
            font-size: 15px;
        }
        .small { color: var(--muted); font-size: 13px; margin-top: 8px; }
        pre { background:#f7f7f7; padding:10px; border-radius:6px; overflow:auto; }
        .mono { font-family: "Courier New", monospace; font-size: 14px; }
    </style>
</head>
<body>
<div class="container">
    <header>
        <h1>Atividade Avaliativa - Funções PHP</h1>
        <p class="subtitle"><strong>Integrante:</strong> <?php echo htmlspecialchars($integrantes); ?></p>
        <p class="small">Instruções: digite os valores nos campos abaixo e clique no botão correspondente para ver o resultado.</p>
    </header>

    <!-- array_unique -->
    <section class="card">
        <h2>Função: <code>array_unique()</code></h2>
        <p><strong>Descrição:</strong> Remove valores duplicados de um array. No exemplo abaixo o usuário fornece uma lista separada por vírgulas; o sistema remove duplicados e mostra os valores únicos (reindexados).</p>

        <form method="post" autocomplete="off">
            <label for="valores_array">Digite uma lista de valores separados por vírgula</label>
            <input type="text" id="valores_array" name="valores_array" placeholder="Ex: 1,2,2,3,4,4,5" value="<?php echo htmlspecialchars($array_input); ?>">
            <div class="row">
                <input type="submit" name="executar_array_unique" value="Remover duplicados">
                <div class="small">Dica: pode usar números ou palavras (ex: maçã, banana, maçã).</div>
            </div>
        </form>

        <?php if ($array_result !== null): ?>
            <div class="resultado">
                <strong>Original (limpo):</strong>
                <div class="mono"><?php echo htmlspecialchars($array_original_pretty === '' ? '(nenhum valor válido)' : $array_original_pretty); ?></div>

                <strong style="display:block; margin-top:8px;">Resultado (únicos, reindexados):</strong>
                <?php if (count($array_result) === 0): ?>
                    <div class="mono">(nenhum valor válido)</div>
                <?php else: ?>
                    <div class="mono"><?php echo htmlspecialchars(implode(', ', $array_result)); ?></div>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </section>

    <!-- strrev -->
    <section class="card">
        <h2>Função: <code>strrev()</code></h2>
        <p><strong>Descrição:</strong> Inverte os caracteres de uma string (da direita para a esquerda).</p>

        <form method="post" autocomplete="off">
            <label for="texto_inverter">Digite uma palavra ou frase</label>
            <input type="text" id="texto_inverter" name="texto_inverter" placeholder="Ex: Programar" value="<?php echo htmlspecialchars($strrev_input); ?>">
            <div class="row">
                <input type="submit" name="executar_strrev" value="Inverter texto">
                <div class="small">Útil para testes, verificação de palíndromos ou manipulação simples de texto.</div>
            </div>
        </form>

        <?php if ($strrev_result !== null): ?>
            <div class="resultado">
                <strong>Original:</strong>
                <div class="mono"><?php echo htmlspecialchars($strrev_input === '' ? '(campo vazio)' : $strrev_input); ?></div>

                <strong style="display:block; margin-top:8px;">Invertido:</strong>
                <div class="mono"><?php echo htmlspecialchars($strrev_result); ?></div>
            </div>
        <?php endif; ?>
    </section>

    <!-- md5 -->
    <section class="card">
        <h2>Função: <code>md5()</code></h2>
        <p><strong>Descrição:</strong> Gera um hash MD5 de 32 caracteres a partir de uma string. <em>Observação:</em> MD5 não é recomendado para senhas em sistemas reais — hoje usamos <code>password_hash()</code> por segurança.</p>

        <form method="post" autocomplete="off">
            <label for="texto_md5">Digite um texto para gerar o hash MD5</label>
            <input type="text" id="texto_md5" name="texto_md5" placeholder="Ex: senha123" value="<?php echo htmlspecialchars($md5_input); ?>">
            <div class="row">
                <input type="submit" name="executar_md5" value="Gerar Hash">
                <div class="small">Mostramos o hash MD5 correspondente ao texto informado.</div>
            </div>
        </form>

        <?php if ($md5_result !== null): ?>
            <div class="resultado">
                <strong>Original:</strong>
                <div class="mono"><?php echo htmlspecialchars($md5_input === '' ? '(campo vazio)' : $md5_input); ?></div>

                <strong style="display:block; margin-top:8px;">MD5 (32 chars):</strong>
                <div class="mono"><?php echo htmlspecialchars($md5_result); ?></div>

                <div class="small" style="margin-top:8px;">
                    Nota: MD5 é rápido mas vulnerável a colisões; para senhas use <code>password_hash()</code> e <code>password_verify()</code>.
                </div>
            </div>
        <?php endif; ?>
    </section>

   
</div>
</body>
</html>
