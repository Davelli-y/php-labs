<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Cadastro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #edf2f7;
            color: #333;
            text-align: center;
            margin: 0;
            padding: 0;
        }
        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            max-width: 420px;
            margin: 60px auto;
        }
        h1 {
            color: #4a4e69;
            margin-bottom: 15px;
        }
        .explicacao {
            display: none; 
            margin: 20px 0;
            text-align: justify;
            font-size: 14px;
            background: #f8f9fa;
            padding: 15px;
            border-left: 4px solid #5a189a;
            border-radius: 6px;
            line-height: 1.5;
        }
        input[type="text"],
        input[type="password"] {
            width: 95%;
            padding: 10px;
            margin: 8px 0 15px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
        }
        .btn, .btn-explicacao {
            background-color: #5a189a;
            color: #fff;
            padding: 8px 10px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 15px;
            font-weight: bold;
            transition: 0.3s;
            margin-top: 05px;
            margin-bottom: 10px;
        }
        .btn:hover, .btn-explicacao:hover {
            background-color: #7b2cbf;
        }
        a {
            display: inline-block;
            margin-top: 10px;
            color: #5a189a;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
        }
        a:hover {
            text-decoration: underline;
        }
        .show-pass {
            margin-bottom: 20px;
            font-size: 14px;
        }
        footer {
            margin-top: 25px;
            font-size: 14px;
            color: #222;
            background: #f8f9fa;
            padding: 12px;
            border-radius: 6px;
            border-top: 2px solid #5a189a;
        }
        footer strong {
            color: #5a189a;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Registro de Usuários</h1>
        
        <button class="btn-explicacao" onclick="toggleExplicacao()"> Ver Explicação</button>

       
        <div class="explicacao" id="explicacao">
            Este sistema permite registrar informações de usuários de forma simples.<br>
            Ao preencher o formulário, os dados <b>login, senha (armazenada em hash), data e hora de registro</b> 
             são salvos em um arquivo de texto.<br><br> 
             <strong>Observações importantes:</strong>
            <ul>
                <li>Não há autenticação real: o sistema <b>não permite login no site</b>, apenas registra os dados.</li>
                <li>O sistema verifica se o login já existe para evitar duplicidades.</li>
                <li>Logins e senhas não podem ficar em branco ou conter apenas espaços.</li>
                <li>Os dados podem ser visualizados em <b>texto simples</b> ou em <b>tabela</b> diretamente no site.</li>
         </ul>
        </div>

        <form action="gravar.php" method="post">
            <label for="login"><strong>Login:</strong></label><br>
            <input type="text" id="login" name="login" required><br>

            <label for="senha"><strong>Senha:</strong></label><br>
            <input type="password" id="senha" name="senha" required><br>
            <div class="show-pass">
                <input type="checkbox" onclick="mostrarSenha()"> Mostrar senha
            </div>

            <input type="submit" class="btn" value="Cadastrar">
        </form>

        <p><a href="ler.php"> Ver usuários cadastrados (texto simples)</a></p>
        <p><a href="ler_tabela.php"> Ver usuários cadastrados (tabela)</a></p>

        <footer>
            <strong>Integrantes:</strong><br>
            Guilherme Henrique Yamaguchi Davelli<br>
            Livia De Lima Evers Rocha
        </footer>
    </div>

    <script>
        function mostrarSenha() {
            var campo = document.getElementById("senha");
            campo.type = (campo.type === "password") ? "text" : "password";
        }

        function toggleExplicacao() {
            var exp = document.getElementById("explicacao");
            exp.style.display = (exp.style.display === "none" || exp.style.display === "") ? "block" : "none";
        }
    </script>
</body>
</html>
