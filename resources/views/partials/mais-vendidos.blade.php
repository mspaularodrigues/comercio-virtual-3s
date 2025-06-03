<!-- Mais Vendidos -->
<div id="carouselCards" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-title">
    <h4>MAIS VENDIDOS</h4>
  </div>
  <div class="carousel-inner">
    @foreach($maisVendidos->chunk(3) as $index => $chunk)
      <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
        <div class="d-flex justify-content-center">
          @foreach($chunk as $product)
            <div class="card mx-2" style="width: 18rem;">
              <img src="{{ $product->image_url }}" class="card-img-top" alt="{{ $product->name }}">
              <div class="card-body">
                <h6 class="card-title">{{ $product->name }}</h6>
                <p class="card-text">{{ $product->description }}</p>
                <a href="#" class="btn">Ver produto</a>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    @endforeach
  </div>

  <!-- Botões de navegação -->
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselCards" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselCards" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden"></span>
  </button>
</div>
