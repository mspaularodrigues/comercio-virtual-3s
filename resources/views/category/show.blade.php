 
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Categoria - Whey Protein</title>
  <link rel="stylesheet" href="{{ asset('css/categoria.css') }}" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</head>

<body>

   <!-- Barra superior com informação de parcelamento -->
    <div class="top-bar">
        PARCELAMENTO EM 6X SEM JUROS
    </div>
    
  <!-- Cabeçalho  -->
    <div class="header">
        
            <div class="logo">
                <img src="{{ asset('img/logo.png') }}" alt="Logo da empresa">
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
    
    <!-- Menu de navegação  -->
    <div class="menu-container">
        <div class="menu-item">CREATINA</div>
        <div class="menu-item">WHEY PROTEIN</div>
        <div class="menu-item">PRÉ-TREINO</div>
        <div class="menu-item">TERMOGÊNICOS</div>
        <div class="menu-item">BARRAS PROTEICAS</div>
        <div class="menu-item">KITS PROMOCIONAIS</div>
    </div> 

  <!-- Banner Produto -->
  <section class="banner-produto"> 
    <img src="{{ $category->banner_category }}" alt="Banner da categoria {{ $category->name }}" />
  </section>

  <!-- Breadcrumbs -->
  <div class="breadcrumbs">
    @foreach($breadcrumbs as $crumb)
    @if(!$loop->last)
      <a href="{{ $crumb['url'] }}">{{ $crumb['label'] }}</a> &gt;
    @else
      <span>{{ $crumb['label'] }}</span>
    @endif
  @endforeach
  </div>

  <!-- Filtros -->
<div class="filtros">
    <button>Filtrar <span class="mage--filter"></span></button>
    <button>Ordenar por</button>
  </div> 

  <!-- Cards de produtos -->
  <section class="produtos">
  @forelse($category->products as $product)
    <div class="produto-card">
      <img src="{{ $product->image_url }}" alt="{{ $product->name }}" />
      <h4>{{ $product->name }}</h4>
      <p>R$ {{ number_format($product->price, 2, ',', '.') }}</p>
      <small>Até 6x de R$ {{ number_format($product->price / 6, 2, ',', '.') }}</small>
      <a href="{{ url('/produto/' . $product->slug) }}">
        <button class="btn-ver-produto">Ver Produto</button>
      </a>
    </div>
  @empty
    <p>Nenhum produto encontrado nesta categoria.</p>
  @endforelse
</section>

  <!-- Seções Informativas -->
<section class="info-container {{ $onlyOneInfo ? 'single-info' : '' }}">
    @foreach($info as $section)
        @if(!empty($section['title']) && !empty($section['content'])) <!-- Verifica se existe título e conteúdo -->
            <section id="{{ strtolower($section['title']) }}" class="informacao">
                <h3>{{ $section['title'] }}</h3>
                <p>{{ $section['content'] }}</p>
            </section>
        @endif
    @endforeach
</section>

  <!-- Mais Vendidos -->
  <div id="carouselCards" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-title">
      <h4>MAIS VENDIDOS</h4>
    </div>
    <div class="carousel-inner">

      <!-- Primeiro slide -->
      <div class="carousel-item active">
        <div class="d-flex justify-content-center">
          <div class="card mx-2">
            <img src="./img/creatina_300g.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card 1</h5>
              <p class="card-text">Texto do card 1.</p>
              <a href="#" class="btn btn-primary">Saiba mais</a>
            </div>
          </div>
          <div class="card mx-2">
            <img src="./img/creatina_300g.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card 2</h5>
              <p class="card-text">Texto do card 2.</p>
              <a href="#" class="btn btn-primary">Saiba mais</a>
            </div>
          </div>
          <div class="card mx-2">
            <img src="./img/creatina_300g.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card 3</h5>
              <p class="card-text">Texto do card 3.</p>
              <a href="#" class="btn btn-primary">Saiba mais</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Segundo slide -->
      <div class="carousel-item">
        <div class="d-flex justify-content-center">
          <div class="card mx-2">
            <img src="./img/creatina_300g.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card 4</h5>
              <p class="card-text">Texto do card 4.</p>
              <a href="#" class="btn btn-primary">Saiba mais</a>
            </div>
          </div>
          <div class="card mx-2">
            <img src="./img/creatina_300g.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card 5</h5>
              <p class="card-text">Texto do card 5.</p>
              <a href="#" class="btn btn-primary">Saiba mais</a>
            </div>
          </div>
          <div class="card mx-2">
            <img src="./img/creatina_300g.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card 6</h5>
              <p class="card-text">Texto do card 6.</p>
              <a href="#" class="btn btn-primary">Saiba mais</a>
            </div>
          </div>
        </div>
      </div>

    </div>

    <!-- Botões de navegação -->
    <button class="carousel-control-prev custom-arrow" type="button" data-bs-target="#carouselCards"
      data-bs-slide="prev">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="black" viewBox="0 0 16 16">
        <path fill-rule="evenodd"
          d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
      </svg>
      <span class="visually-hidden">Anterior</span>
    </button>

    <button class="carousel-control-next custom-arrow" type="button" data-bs-target="#carouselCards"
      data-bs-slide="next">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="black" viewBox="0 0 16 16">
        <path fill-rule="evenodd"
          d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
      </svg>
      <span class="visually-hidden">Próximo</span>
    </button>



  </div>



  <!-- Rodapé -->
  <footer class="footer">
    <div class="footer-column">
      <div class="logo-footer">LOGO</div>
      <p>Fale Conosco<br>📞 0800 123 123<br>✉️ suporte@email.com</p>
    </div>
    <div class="footer-column">
      <p><strong>Horário de Atendimento</strong><br>Seg à Qui das 09h às 18h<br>Sex das 09h às 17h</p>
    </div>
    <div class="footer-column">
      <p><strong>Institucional</strong><br>Política de privacidade<br>Termos e condições</p>
    </div>
    <div class="footer-column">
      <p><strong>Formas de Pagamento</strong><br>💳 💰</p>
      <p><strong>Siga nossas redes sociais</strong><br>📸 🐦 📘 🎥</p>
    </div>
  </footer>

  <div class="footer-base">
    Endereço: Avenida Tal, 1600 - São Paulo, SP • CNPJ: 00.123.456/0001-10 • Todos os direitos reservados.
  </div>
 
</body>

</html>
