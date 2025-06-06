<style>
.carousel-title {
  text-align: center;
  margin-top: 70px;
}

#carouselCards .card {
  background-color: #ffffff;
  flex: 0 0 200px;
  max-width: 200px;
  text-align: center;

  /* Mantém altura uniforme */
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}

#carouselCards .card-img-top {
  width: auto;
  max-width: 60%;
  padding-top: 12px;
  height: auto;
  display: block;
  margin-left: auto;
  margin-right: auto;
}

#carouselCards .card-body {
  display: flex;
  flex-direction: column;
  flex-grow: 1;
  justify-content: space-between;
}

#carouselCards .card-title {
  font-size: 16px;
  margin-bottom: 8px;
}

#carouselCards .card-text {
  font-size: 14px;
  margin-bottom: 12px;
  flex-grow: 1;
}

#carouselCards .btn {
  background-color: #8B0000;
  color: #fff;
  margin-top: auto; /* força botão para base */
}

#carouselCards .carousel-item {
  padding: 20px 0;
}

#carouselCards {
  position: relative;
}

/* Estilização dos botões do carousel */
#carouselCards .carousel-control-prev,
#carouselCards .carousel-control-next {
  width: 40px;
  height: 40px;
  top: 50%;
  transform: translateY(-50%);
  border-radius: 50%;
  border: none;
  transition: background-color 0.3s ease;
}

#carouselCards .carousel-control-prev:hover,
#carouselCards .carousel-control-next:hover {
  background-color: rgba(0, 0, 0, 0.6);
}

#carouselCards .carousel-control-prev-icon,
#carouselCards .carousel-control-next-icon {
  filter: invert(1); /* seta branca */
  width: 20px;
  height: 20px;
}
</style>

<div id="carouselDestaques" class="carousel slide" data-bs-ride="carousel" data-bs-wrap="true">
  <div class="carousel-title">
    <h4>PRODUTOS EM DESTAQUE</h4>
  </div>
  <div class="carousel-inner">
    @foreach($destaques as $index => $product)
      <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
        <div class="d-flex justify-content-center">
          @for ($i = 0; $i < 3; $i++)
            @php
              $pos = ($index + $i) % $destaques->count();
              $p = $destaques[$pos];
            @endphp
            <div class="card mx-2" style="width: 18rem;">
              <img src="{{ $p->image_url }}" class="card-img-top" alt="{{ $p->name }}">
              <div class="card-body">
                <h6 class="card-title">{{ $p->name }}</h6>
                <p class="card-text">{{ $p->description }}</p>
                <a href="{{ route('product.show', $p->slug) }}" class="btn">Ver produto</a>
              </div>
            </div>
          @endfor
        </div>
      </div>
    @endforeach
  </div>

  <!-- Botões de navegação -->
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselDestaques" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Anterior</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselDestaques" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Próximo</span>
  </button>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const carouselElement = document.getElementById('carouselDestaques');
    const totalSlides = {{ $destaques->count() }};
    
    const carousel = bootstrap.Carousel.getInstance(carouselElement) || new bootstrap.Carousel(carouselElement, {
      wrap: true
    });

    carouselElement.addEventListener('slide.bs.carousel', function (event) {
      if (event.to >= totalSlides) {
        event.preventDefault();
        carousel.to(0);
      } else if (event.to < 0) {
        event.preventDefault();
        carousel.to(totalSlides - 1);
      }
    });
  });
</script>

