<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Ler Usuários</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        a { color: #5a189a; font-weight: bold; }
    </style>
</head>
<body>
    <h2>Usuários cadastrados (Texto simples)</h2>
    <?php
        $arquivoPath = 'usuarios.txt';
        if (!file_exists($arquivoPath)) {
            echo "<p style='color:red;'>Nenhum usuário cadastrado ainda. O arquivo não existe.</p>";
        } else {
            $arquivo = fopen($arquivoPath,'r');
            while(!feof($arquivo)) {
                $linha = fgets($arquivo);
                if(trim($linha) !== "") {
                    echo htmlspecialchars($linha)."<br>";
                }
            }
            fclose($arquivo);
        }
    ?>
    <p><a href="index.php">Voltar</a></p>
</body>
</html>
