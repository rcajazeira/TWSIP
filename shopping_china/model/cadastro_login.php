<?php
// Inclui o arquivo de configuração do banco de dados
require_once 'config.php';

// Verifica se o formulário de cadastro foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nome']) && isset($_POST['cpf'])) {
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];

    // Verifica se o usuário já está cadastrado
    $consulta = "SELECT * FROM cliente WHERE cpf = '$cpf'";
    $resultado = $conn->query($consulta);

    if ($resultado && $resultado->num_rows > 0) { // Adiciona verificação se a consulta foi bem sucedida
        echo "Já existe um cadastro com esse CPF!";
    } else {
        // Insere os dados no banco de dados
        $sql = "INSERT INTO cliente (nome, cpf) VALUES ('$nome', '$cpf')";

        if ($conn->query($sql) === TRUE) {
            echo "Cadastro realizado com sucesso!";
        } else {
            echo "Erro ao cadastrar: " . $conn->error;
        }
    }
}

// Verifica se o formulário de login foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nomeLogin']) && isset($_POST['cpfLogin'])) {
    $nomeLogin = $_POST['nomeLogin'];
    $cpfLogin = $_POST['cpfLogin'];

    // Verifica se as credenciais de login são válidas
    $consultaLogin = "SELECT * FROM cliente WHERE nome = '$nomeLogin' AND cpf = '$cpfLogin'";
    $resultadoLogin = $conn->query($consultaLogin);

    if ($resultadoLogin && $resultadoLogin->num_rows > 0) { // Adiciona verificação se a consulta foi bem sucedida
        // Login bem-sucedido, redireciona para a página de sucesso
        header("Location: ../model/shopping_china_login.php");
        exit;
    } else {
        // Login inválido, exibe uma mensagem de erro
        echo "Login inválido.";
    }
}
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../view/css/cadastro_login.css">
   
    <title>Cadastro e Login</title>
   
</head>
<body>
    <h1>Cadastro</h1>
    <form id="cadastroForm" method="POST" action="cadastro_login.php" onsubmit="return cadastrar()">
        <!-- Campos do formulário de cadastro -->
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        <br>
        <label for="cpf">CPF:</label>
        <input type="text" id="cpf" name="cpf" required>
        <br>
        <input type="submit" value="Cadastrar">
    </form>

    <h1>Login</h1>
    
    <form id="loginForm" method="POST" action="cadastro_login.php" onsubmit="return fazerLogin()">

    <!-- Campos do formulário de login -->
    <label for="nomeLogin">Nome:</label>
    <input type="text" id="nomeLogin" name="nomeLogin" required>
    <br>
    <label for="cpfLogin">CPF:</label>
    <input type="text" id="cpfLogin" name="cpfLogin" required>
    <br>
    <input type="submit" value="Login">
</form>

    <footer class="site-footer">
        <div class="footer-container">
            <div class="footer-section">
                <h3>Contato</h3>
                <br>
                <p>Endereço: Av. Eletrônica, 123</p>
                <p>Email: contato@shoppingchina.com</p>
                <p>Telefone: (123) 456-7890</p>
            </div>
            <div class="footer-section">
                <h3>Redes Sociais</h3>
                <br>
                <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
                <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="#" target="_blank"><i class="fab fa-linkedin"></i></a>
            </div>
            <div class="footer-section">
                <h3>Sobre</h3>
                <br>
                <a href="#">Termos de Serviço</a>
                <a href="#">Política de Privacidade</a>
                <a href="#">FAQ</a>
                <a href="#">AJUDA</a>
                <a href="#">TRABALHE CONOSCO</a>
            </div>
        </div>
    
        <div class="developer-info">
            <p>Desenvolvido por <span class="developer-name">Rafael Cajazeira</span></p>
            <a href="https://rcajazeira.github.io/" target="_blank">
            <img src="../view/img/desenv.jpg" alt="Logo do Desenvolvedor"></a>
        </div>
    </footer>

    
    <script src="../controller/cadastroForm.js"></script>
    <script>
       function fazerLogin() {
    const nomeLogin = document.getElementById("nomeLogin").value;
    const cpfLogin = document.getElementById("cpfLogin").value;

    // Envia os dados para o servidor
    fetch("../model/shopping_china_login.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: "nomeLogin=" + encodeURIComponent(nomeLogin) + "&cpfLogin=" + encodeURIComponent(cpfLogin)
    })
    .then(response => response.text())
    .then(data => {
        console.log(data); // Exibe a resposta do servidor

        // Verifica se as credenciais são válidas
        if (data === "Credenciais válidas") {
            window.location.href = "../model/shopping_china_login.php"; // Redireciona para a página "shopping_china_login.php"
        } else {
            console.log("Credenciais inválidas!");
        }
    })
    .catch(error => {
        console.error("Erro: " + error);
    });
}

    </script>
    
</body>
</html>