<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- links externos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=AR+One+Sans:wght@400;500;600;700&family=Roboto+Serif:ital,opsz,wght@1,8..144,500&display=swap" rel="stylesheet">
    <!-- link da foto -->
    <link rel="shortcut icon" href="view/icon/marca_Shopping_China 3.svg" type="image/x-icon">
    <!-- links de css e script -->
    <link rel="stylesheet" href="shopping_china2.css">
    <link rel="stylesheet" href="view/css/carousel.css">
    <script src="controller/carousel.js"></script>
    <title>Shopping China</title>
</head>
<body>
    <h1>Shopping China</h1>
    <figure class="marca_shopping_china">
        <img src="view/img/marca_Shopping_China.jpg" alt="logo marca shopping china">
      </figure>

      <div class="search-container">
        <input type="text" class="search-input" placeholder="Digite sua busca">
        <img src="view/icon/busca.svg" alt="" class="icone-busca">
      </div>

      <div class="user-carro">
        <figure>
          <a href="model/cadastro_login.php" target="_blank">
            <img src="view/icon/usuario.svg" alt="" class="usuario">
          </a>
            <h2 class="loca1">Login</h2>
            <a href="model/addcar.php" target="_blank">
            <img src="view/icon/carrinho.svg" alt="" class="carro"></a>
            <h2 class="loca2">Carrinho</h2>
            <img src="view/img/me_faz_uma_logomarca_com_o_nome_Shopping_China_com_as_cores_Roxo_avermelhado_e_amarelo (2).png" alt="" class="garota-compra">
        </figure>
        <p class="texto-shopping-china">Venha aproveitar as ofertas exclusivas da Shopping China e desfrutar de produtos de alta qualidade e bom preço.
          <br> Cadastre-se e ganhe 15 % em qualquer compra.</p>

      </div>

      <!-- carrossel -->

      <div class="ism-slider" data-transition_type="zoom" data-image_fx="zoomrotate" id="my-slider">
        <ol>
          <li>
            <img src="view/img/Group 10.jpg"> <div class="ism-caption ism-caption-0">Shopping China</div>
          </li>
          <li>
            <img src="view/img/Group 12.jpg">
            <div class="ism-caption ism-caption-0">Shopping China</div>
          </li>
          <li>
            <img src="view/img/Group 14.jpg">
            <div class="ism-caption ism-caption-0">Shopping China</div>
          </li>
        </ol>
      </div>

      <!-- retangulo com produtos -->

      <div class="retangulo">
        <header>
          <div id="parte-menu">
            <div class="coluna">
              <h2><span class="produtos">Eletrônicos</span></h2>
              <nav id="menu">
                <div class="produto1">
                  <h3>Fritadeira Eletrônica Britânia S <br>Óleo Bfr46Pi - Britania
                    <br> R$ 1.062,10</h3>
                  <img src="view/img/fritadeira eletronica.jpg" alt="Produto 1"> 
                </div>
                <div class="produto2">
                  <h3>Ar Condicionado Janela Consul 7500 BTU/<br> Frio Eletrônico CCN07FBANA 127 Volts <br> R$ 3.148,20</h3>
                  <img src="view/img/arcondicionado eletronico.jpg" alt="Produto 2">
                </div>
              </nav>
            </div>
            <div class="coluna">
              <h2><span class="produtos centralizado">Eletrodomésticos</span></h2>
              <nav id="menu">
                <div class="produto3">
                  <h3>Micro-ondas Inox 36L 127V Electrolux <br> R$ 849,90</h3>
                  <img src="view/img/microondas.jpg" alt="Produto 3">
                </div>
                <div class="produto4">
                  <h3>Forno de Embutir Elétrico 80L <br>Experience com Foodsensor 220V Electrolux<br>R$ 2.349,90</h3>
                  <img src="view/img/eletromestico forno.jpg" alt="Produto 4"> 
                </div>
              </nav>
            </div>
            <div class="coluna">
              <h2><span class="produtos direita">Smartphones</span></h2>
              <nav id="menu">
                <div class="produto5">
                  <h3>Smartphone Samsung Galaxy A04e 64GB <br>Azul 4G Octa-Core 3GB RAM 6,5” Câm. <br>Dupla + Selfie 5MP<br> R$ 566,10</h3>
                  <img src="view/img/Samsung Galaxy.jpg" alt="Produto 5">
                </div>
                <div class="produto6">
                  <h3>Smartphone Motorola Moto G14 128GB <br>Grafite 4G Octa-Core 4 GB RAM 6,5" Câm. <br>Dupla + Selfie 8MP Dual Nano SIM <br> R$ 764,10</h3>
                  <img src="view/img/Motorola Moto.jpg" alt="Produto 6"> 
                </div>
              </nav>
            </div>
          </div>
        </header>
      </div>

      <!-- rodapé -->

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
            <img src="view/img/desenv.jpg" alt="Logo do Desenvolvedor"></a>
        </div>
    </footer>
    
</body>
</html>