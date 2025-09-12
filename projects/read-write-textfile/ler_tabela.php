<?php
$arquivoPath = 'usuarios.txt';
if (!file_exists($arquivoPath)) {
    echo "<p style='color:red; font-family: Arial;'>Nenhum usuário cadastrado ainda. O arquivo não existe.</p>";
    echo "<p><a href='index.php'>Voltar</a></p>";
    exit;
}

$arquivo = fopen($arquivoPath, 'r');
if ($arquivo === false) {
    echo "Erro ao abrir o arquivo.";
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Ler Usuários em Tabela</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        table { border-collapse: collapse; width: 100%; max-width: 800px; margin: auto; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: center; }
        th { background-color: #5a189a; color: white; }
        tr:nth-child(even) { background-color: #f9f9f9; }
        a { color: #5a189a; font-weight: bold; }
    </style>
</head>
<body>
    <h2 style="text-align:center;">Usuários cadastrados (Tabela)</h2>
    <table>
        <tr>
            <th>Login</th>
            <th>Senha (Hash)</th>
            <th>Data</th>
            <th>Hora</th>
        </tr>
    <?php
    while (($linha = fgets($arquivo)) !== false) {
        $linha = trim($linha);
        if ($linha === '') continue;

        $campos = array_map('trim', explode(';', $linha));
        $num = count($campos);

        $login = $senha = $data = $hora = '';

        if ($num >= 4) {
            $hora = $campos[$num - 1];
            $data = $campos[$num - 2];
            $login = $campos[0];
            $senha = ($num > 4) ? implode(';', array_slice($campos, 1, $num - 3)) : ($campos[1] ?? '');
        }
        echo "<tr>
                <td>" . htmlspecialchars($login) . "</td>
                <td>" . htmlspecialchars($senha) . "</td>
                <td>" . htmlspecialchars($data) . "</td>
                <td>" . htmlspecialchars($hora) . "</td>
              </tr>";
    }
    fclose($arquivo);
    ?>
    </table>
    <p style="text-align:center;"><a href="index.php">Voltar</a></p>
</body>
</html>
