{{ Auth::user()->name }}

{{ Auth::user()->attributes }}
    <!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja Virtual</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;400;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</head>

<body>
    <!-- Barra superior com informação de parcelamento -->
    <div class="top-bar">
        PARCELAMENTO EM 6X SEM JUROS
    </div>
    
    <!-- Cabeçalho -->
    <div class="header">
        
            <div class="logo">
                <img src="img/logo.png" alt="Logo da empresa">
            </div>
        
        <div class="search-bar">
            <input type="text" placeholder="O que está buscando?">
            <button>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
            </button>
        </div>
        
        <div class="user-actions">
            <a href="#" title="Login">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                </svg>
                Login
            </a>
            <a href="#" title="Favoritos">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                </svg>
            </a>
            <a href="#" title="Carrinho">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </svg>
            </a>
        </div>
    </div>
    
    <!-- Menu de navegação -->
    <div class="menu-container">
        <div class="menu-item">MENU</div>
        <div class="menu-item">MENU</div>
        <div class="menu-item">MENU</div>
        <div class="menu-item">MENU</div>
        <div class="menu-item">MENU</div>
        <div class="menu-item">MENU</div>
    </div>
    
 
    <div class="carousel">
        <h2>Carrossel </h2>
    </div>
    
    <!-- Seção de benefícios -->
    <div class="benefits">
        <div class="benefit-item">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
            </svg>
            FRETE GRÁTIS EM TODO PAÍS
        </div>
        <div class="benefit-item">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
            </svg>
            GARANTIA DE ORIGINALIDADE
        </div>
        <div class="benefit-item">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                <path d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499L12.136.326zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484L5.562 3zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z"/>
            </svg>
            PIX E BOLETO COM 5% OFF
        </div>
        <div class="benefit-item">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z"/>
                <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z"/>
            </svg>
            1X NO CARTÃO COM 5% OFF
        </div>
    </div>
    
    <!-- Seção de produtos mais vendidos -->
    <h2 class="section-title">Produtos mais vendidos</h2>
    <div class="products-grid">
        <!-- Produto 1 -->
        <div class="product-card">
            <div class="product-image">
                <img src="/api/placeholder/200/200" alt="Whey 4 Protein">
                <button class="favorite-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                    </svg>
                </button>
            </div>
            <div class="product-info">
                <div class="product-name">Whey 4 Protein</div>
                <div class="product-rating">★★★★☆</div>
                <div class="product-price">R$ 266,00</div>
                <div class="product-installment">Até 6x de R$44,33</div>
            </div>
        </div>
        
        <!-- Produto 2 -->
        <div class="product-card">
            <div class="product-image">
                <img src="/api/placeholder/200/200" alt="Whey 4 Protein">
                <button class="favorite-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                    </svg>
                </button>
            </div>
            <div class="product-info">
                <div class="product-name">Whey 4 Protein</div>
                <div class="product-rating">★★★★☆</div>
                <div class="product-price">R$ 266,00</div>
                <div class="product-installment">Até 6x de R$44,33</div>
            </div>
        </div>
        
        <!-- Produto 3 -->
        <div class="product-card">
            <div class="product-image">
                <img src="/api/placeholder/200/200" alt="Whey 4 Protein">
                <button class="favorite-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                    </svg>
                </button>
            </div>
            <div class="product-info">
                <div class="product-name">Whey 4 Protein</div>
                <div class="product-rating">★★★★☆</div>
                <div class="product-price">R$ 266,00</div>
                <div class="product-installment">Até 6x de R$44,33</div>
                <form action="/cart/{{1}}" method="post">
                    @csrf
                <button type="submit">Adicionar ao carrinho</button>
                </form>
                
            </div>
        </div>
    </div>
    
    <!-- Carrossel -->
@include('partials.destaques', ['destaques' => $destaques])

    
    <!-- Seção de depoimentos -->
    <div class="testimonials">
        <!-- Depoimento 1 -->
        <div class="testimonial-card">
            <div class="testimonial-text">Melhor loja, alta produtos de alta qualidade e preços acessíveis.</div>
            <div class="testimonial-author">Ana Santos</div>
        </div>
        
        <!-- Depoimento 2 -->
        <div class="testimonial-card">
            <div class="testimonial-text">Melhor loja, alta produtos de alta qualidade e preços acessíveis.</div>
            <div class="testimonial-author">Ana Santos</div>
        </div>
        
        <!-- Depoimento 3 -->
        <div class="testimonial-card">
            <div class="testimonial-text">Melhor loja, alta produtos de alta qualidade e preços acessíveis.</div>
            <div class="testimonial-author">Ana Santos</div>
        </div>
    </div>
    <!--  footer --> 
    <div class="newsletter-bar">
        <span>NEWSLETTER</span>
        <div class="newsletter-input">
            <input type="email" placeholder="">
        </div>
        <div class="newsletter-button">
            <button></button>
        </div>
    </div>

    <div class="footer-content">
        <div class="logo-section">
            <div class="logo">
                <img src="img/logo.png" alt="SUPLEMAX - Suplementos de Academia">
            </div>
        </div>

        <div class="footer-section">
            <div class="footer-title">Fale Conosco</div>
            <div class="footer-info">0800 1010</div>
            <div class="contact-info">
                <span>✉️</span>
                <span>teste@gmail.com</span>
            </div>
            <div class="contact-info">
                <span>📱</span>
                <span>(11) 2345-6789</span>
            </div>
        </div>

        <div class="footer-section">
            <div class="footer-title">Horário de atendimento</div>
            <div class="footer-info">Seg a Qui das 08h às 18h</div>
            <div class="footer-info">Sex e Sáb das 08h às 17h</div>
            
            <div class="footer-title" style="margin-top: 20px;">Formas de Pagamento</div>
            <div class="payment-methods">
                <div class="payment-icon">VISA</div>
                <div class="payment-icon">MASTER</div>
                <div class="payment-icon">AMEX</div>
                <div class="payment-icon">PIX</div>
            </div>
        </div>

        <div class="footer-section">
            <div class="footer-title">Institucional</div>
            <div class="footer-info">Política de privacidade</div>
            <div class="footer-info">Política de frete</div>
            <div class="footer-info">Termos e condições</div>
            
            <div class="footer-title" style="margin-top: 20px;">Siga nossas redes sociais</div>
            <div class="social-icons">
                <div class="social-icon">📷</div>
                <div class="social-icon">▶️</div>
                <div class="social-icon">f</div>
                <div class="social-icon">𝕏</div>
            </div>
        </div>
    </div>

    <div class="footer-divider"></div>

    <div class="footer-bottom">
        Endereço: Avenida Tal, 1600 - São Paulo, SP - CEP: 01234-005 - CNPJ: 01.234.567/0008-10 © Todos os direitos reservados.
        <div class="footer-note">
            Todas as mídias aqui veiculadas são de propriedade da SUPLEMAX. É proibida a utilização parcial ou total sem autorização prévia, sujeita a penalidade.
        </div>
    </div>
</body>

</html>

<form action="{{ route('logout') }}" method="post">
    @csrf
    <button type="submit">Deslogar</button>
</form>


