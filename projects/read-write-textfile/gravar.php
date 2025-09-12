<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = trim($_POST["login"]);
    $senha = trim($_POST["senha"]);

    if ($login === "" || $senha === "") {
        echo "
        <div style='max-width:420px; margin:50px auto; padding:30px; border-radius:8px; background:#fff; 
                    box-shadow:0 4px 8px rgba(0,0,0,0.1); font-family:Arial; text-align:center;'>
            <h2 style='color:#d90429;'> Login ou senha inválidos</h2>
            <p style='font-size:16px; color:#333;'>O login e a senha não podem ficar em branco ou conter apenas espaços.</p>
            <a href='index.php' 
               style='display:inline-block; margin-top:15px; padding:10px 15px; 
                      background:#5a189a; color:#fff; text-decoration:none; 
                      border-radius:6px; font-weight:bold;'>⬅ Voltar</a>
        </div>";
        exit;
    }

    // Arquivo onde os cadastros serão salvos
    $arquivo = "usuarios.txt";

    // Garante que o arquivo exista
    if (!file_exists($arquivo)) {
        file_put_contents($arquivo, "");
    }

    // Lê todos os cadastros já existentes
    $usuarios = file($arquivo, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    // Verifica se o login já está cadastrado
    foreach ($usuarios as $usuario) {
        list($loginExistente) = explode(";", $usuario);
        if ($loginExistente === $login) {
            echo "
            <div style='max-width:420px; margin:50px auto; padding:30px; border-radius:8px; background:#fff; 
                        box-shadow:0 4px 8px rgba(0,0,0,0.1); font-family:Arial; text-align:center;'>
                <h2 style='color:#d90429;'> Usuário já cadastrado</h2>
                <p style='font-size:16px; color:#333;'>O login <b>{$login}</b> já existe. Por favor, escolha outro.</p>
                <a href='index.php' 
                   style='display:inline-block; margin-top:15px; padding:10px 15px; 
                          background:#5a189a; color:#fff; text-decoration:none; 
                          border-radius:6px; font-weight:bold;'>⬅ Voltar</a>
            </div>";
            exit;
        }
    }

    // Se não existir, cadastra
    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
    $data = date("d/m/Y");
    $hora = date("H:i:s");

    $linha = $login . ";" . $senhaHash . ";" . $data . ";" . $hora . PHP_EOL;
    file_put_contents($arquivo, $linha, FILE_APPEND);

    echo "
    <div style='max-width:420px; margin:50px auto; padding:30px; border-radius:8px; background:#fff; 
                box-shadow:0 4px 8px rgba(0,0,0,0.1); font-family:Arial; text-align:center;'>
        <h2 style='color:#2d6a4f;'> Cadastro realizado com sucesso!</h2>
        <p style='font-size:16px; color:#333;'>O usuário <b>{$login}</b> foi cadastrado no sistema.</p>
        <a href='index.php' 
           style='display:inline-block; margin-top:15px; padding:10px 15px; 
                  background:#5a189a; color:#fff; text-decoration:none; 
                  border-radius:6px; font-weight:bold;'>⬅ Voltar</a>
    </div>";
}
?>
