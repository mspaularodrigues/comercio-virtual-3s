 <!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja Virtual</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;400;700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.materialdesignicons.com/6.6.96/css/materialdesignicons.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>

<body>
    @include('partials.header')

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
      aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
      aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
      aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('img/home1.webp') }}" class="d-block w-100" alt="Imagem Home 1">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('img/home2.webp') }}" class="d-block w-100" alt="Imagem Home 2">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('img/home3.webp') }}" class="d-block w-100" alt="Imagem Home 3">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
    data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Anterior</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
    data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Próximo</span>
  </button>
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
    
   
    <!-- Mais Vendidos -->
<div id="carouselCards" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-title">
  <h4 style="font-family: 'Inter', sans-serif;">MAIS VENDIDOS</h4>
<p class="testimonial-text">
  Veja nossos produtos mais vendidos e conheça um pouco de sua composição. 
  Aproveite para descobrir os diferenciais de cada produto e encontrar  
  <strong> o que mais combina com você!</strong>
</p>

  </div>

  @include('partials.mais-vendidos')

    <!-- Carrossel -->
@include('partials.destaques', ['destaques' => $destaques])

    
    <!-- Seção de depoimentos -->
    <div class="testimonials">
        <!-- Depoimento 1 -->
        <div class="testimonial-card">
            <div class="testimonial-text"> “O atendimento foi impecável! Fui muito bem atendida, com atenção e rapidez nas respostas. Recomendo muito!”</div>
            <div class="testimonial-author">Guilherme Ferreira</div>
        </div>
        
        <!-- Depoimento 2 -->
        <div class="testimonial-card">
            <div class="testimonial-text">“Rápidos, educados e muito eficientes! O atendimento fez toda a diferença na minha escolha, sensacional e irei comprar mais vezes!”</div>
            <div class="testimonial-author">Ana Santos</div>
        </div>
        
        <!-- Depoimento 3 -->
        <div class="testimonial-card">
            <div class="testimonial-text"> “Equipe super atenciosa e prestativa. Tiraram todas as minhas dúvidas e me ajudaram a escolher o melhor produto para mim.”</div>
            <div class="testimonial-author"> Arthur Brito</div>
        </div>
    </div>
 
    
 @include('partials.footer')

    </div>
</body>

</html>




