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
  @include('partials.header')

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

@include('partials.mais-vendidos')

@include('partials.footer')
 
</body>
</html>
