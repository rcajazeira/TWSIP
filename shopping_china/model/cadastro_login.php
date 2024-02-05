<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/view/css/cadastro_login.css">
   
    <title>Cadastro e Login</title>
</head>
<body>
    <h1>Cadastro</h1>
    <form id="cadastroForm">
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
    <form id="loginForm">
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
            <img src="/view/img/desenv.jpg" alt="Logo do Desenvolvedor"></a>
        </div>
    </footer>

    
    <script src="/controller/cadastroForm.js"></script>
</body>
</html>