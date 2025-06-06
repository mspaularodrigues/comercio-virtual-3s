<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $product->name }}</title>
    <link rel="stylesheet" href="{{ asset('css/produto.css') }}">
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;400;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</head>

<body>

   @include('partials.header')

    <section class="breadcrumbs">
           @foreach($breadcrumbs as $crumb)
        @if(!$loop->last)
            <a href="{{ $crumb['url'] }}" > {{ $crumb['label'] }}</a> &gt;
        @else
            <span>{{ $crumb['label'] }}</span>
        @endif
        @endforeach
    </section>

    <main class="product-page">
    <div class="product-gallery">
<div class="thumbnails">
    @php $index = 0; @endphp

    @if($product->image_url)
        <img src="{{ $product->image_url }}" alt="Miniatura" class="thumb active" data-index="{{ $index }}">
        @php $index++; @endphp
    @endif

    @if($product->image_url2)
        <img src="{{ $product->image_url2 }}" alt="Miniatura" class="thumb" data-index="{{ $index }}">
        @php $index++; @endphp
    @endif

    @if($product->image_url3)
        <img src="{{ $product->image_url3 }}" alt="Miniatura" class="thumb" data-index="{{ $index }}">
        @php $index++; @endphp
    @endif
</div>

<!-- Imagem principal com bolinhas abaixo -->
<div class="main-image-wrapper">
    <img src="{{ $product->image_url }}" alt="Imagem principal" id="mainImage">
    <div class="dots">
        @for ($i = 0; $i < $index; $i++)
            <span class="dot {{ $i === 0 ? 'active' : '' }}" data-index="{{ $i }}"></span>
        @endfor
    </div>
</div>
</div>

        <div class="product-info">
             <h2>{{ $product->name }}</h2>
        <p class="ref">Ref: {{ $product->id }}</p>
        <p class="price">R${{ number_format($product->price, 2, ',', '.') }} <span class="pix">à vista no PIX</span></p>
        <div class="parcel">
            <iconify-icon class="icon-parcel" icon="fluent-mdl2:payment-card" width="20" height="20"></iconify-icon>
            <p>ou R$ {{ number_format($product->price * 1.03, 2, ',', '.') }} em até 6x de {{ number_format(($product->price * 1.03) / 6, 2, ',', '.') }} (sem juros)</p>
            </div>

            <div class="quantity">
                <label for="quantity">Quantidade</label>
                <button class="btn-quantity">-</button>
                <input type="number" id="quantity" value="1" min="1">
                <button class="btn-quantity">+</button>
            </div>

            <button class="add-to-cart">Adicionar ao Carrinho</button>
        </div>
    </main>


    <section class="product-details">
        <div class="tabs">
            <button class="active">Detalhes do Produto</button>
            <button>Informações</button>
        </div>

        <div class="details">
            {!!  $product->desc  !!}

            <div>
                <p><strong></strong></p>
            <p><strong>ESTE PRODUTO NÃO SUBSTITUI UMA ALIMENTAÇÃO EQUILIBRADA E SEU CONSUMO DEVE SER ORIENTADO POR
                    NUTRICIONISTA OU MÉDICO.</strong></p>
            </div>

            <h3>AVISOS</h3>
            <ul>
                <li>Idade mínima recomendada: 18 anos</li>
                <li>Consulte um médico antes do uso</li>
                <li>Este produto é um suplemento dietético, não um medicamento. Suplementa dietas insuficientes.
                    Consulte o seu médico e/ou farmacêutico.</li>
            </ul>
        </div>
    </section>

@include('partials.similares')

@include('partials.footer')

    <script>
        const tabs = document.querySelectorAll('.tabs button');
        const detailsDiv = document.querySelector('.details');
    
        // Conteúdos diferentes
        const contents = {
    detalhes: `
     {!!  $product->desc  !!}

         <div>
                <p><strong></strong></p>
            <p><strong>ESTE PRODUTO NÃO SUBSTITUI UMA ALIMENTAÇÃO EQUILIBRADA E SEU CONSUMO DEVE SER ORIENTADO POR
                    NUTRICIONISTA OU MÉDICO.</strong></p>
            </div>

            <h3>AVISOS</h3>
            <ul>
                <li>Idade mínima recomendada: 18 anos</li>
                <li>Consulte um médico antes do uso</li>
                <li>Este produto é um suplemento dietético, não um medicamento. Suplementa dietas insuficientes.
                    Consulte o seu médico e/ou farmacêutico.</li>
            </ul>
    `,
    informacoes: `
        <h3>INFORMAÇÕES ADICIONAIS</h3>
        <table class="info-table">
            <tbody>
                <tr>
                    <td>Ingredientes</td>
                    <td>{{ $info->ingredientes }}</td>
                </tr>
                <tr>
                    <td>Recomendação de uso</td>
                    <td>{{ $info->recomendacao_uso }}</td>
                </tr>
                <tr>
                    <td>Modo de preparo</td>
                    <td>{{ $info->modo_preparo }}</td>
                </tr>
                <tr>
                    <td>Advertências</td>
                    <td>{{ $info->advertencia }}</td>
                </tr>
                <tr>
                    <td>Alergênicos</td>
                    <td>{{ $info->alergenicos }}</td>
                </tr>
                <tr>
                    <td>Tamanho</td>
                    <td>{{ $info->tamanho }}</td>
                </tr>
            </tbody>
        </table>
    `
};
    
        // Evento de clique nos botões de informação
        tabs.forEach((tab, index) => {
            tab.addEventListener('click', () => {
                // Atualiza a classe "active"
                tabs.forEach(t => t.classList.remove('active'));
                tab.classList.add('active');
    
                // Troca o conteúdo baseado no botão
                if (index === 0) {
                    detailsDiv.innerHTML = contents.detalhes;
                } else {
                    detailsDiv.innerHTML = contents.informacoes;
                }
            });
        });

        //seleção de miniatura
         document.querySelectorAll('.thumb').forEach(thumb => {
    thumb.addEventListener('click', function () {
        const mainImage = document.getElementById('mainImage');
        mainImage.src = this.src;
        mainImage.alt = this.alt;

        document.querySelectorAll('.thumb').forEach(t => t.classList.remove('active'));
        this.classList.add('active');
    });
});

//ativando os botões de quantidade
document.addEventListener("DOMContentLoaded", function () {
        const quantityInput = document.getElementById("quantity");
        const buttons = document.querySelectorAll(".btn-quantity");

        buttons.forEach(button => {
            button.addEventListener("click", function () {
                // Evita múltiplos cliques rápidos
                button.disabled = true;

                let current = parseInt(quantityInput.value) || 1;

                if (this.textContent === "+" || this.innerText === "+") {
                    quantityInput.value = current + 1;
                } else if (this.textContent === "-" || this.innerText === "-") {
                    if (current > 1) {
                        quantityInput.value = current - 1;
                    }
                }

                // Reativa o botão após um pequeno delay
                setTimeout(() => {
                    button.disabled = false;
                }, 200); // 200ms de debounce
            });
        });
    });

    //paginadores da galeria
     document.addEventListener("DOMContentLoaded", function () {
        const thumbnails = document.querySelectorAll(".thumb");
        const mainImage = document.getElementById("mainImage");
        const dots = document.querySelectorAll(".dot");

        thumbnails.forEach((thumb, index) => {
            thumb.addEventListener("click", () => {
                mainImage.src = thumb.src;

                // Atualizar miniatura ativa
                thumbnails.forEach(t => t.classList.remove("active"));
                thumb.classList.add("active");

                // Atualizar bolinha ativa
                dots.forEach(dot => dot.classList.remove("active"));
                dots[index].classList.add("active");
            });
        });

        dots.forEach((dot, index) => {
    dot.addEventListener("click", () => {
        // Troca a imagem principal
        const thumb = thumbnails[index];
        if (thumb) {
            mainImage.src = thumb.src;
            mainImage.alt = thumb.alt;

            // Atualiza miniaturas
            thumbnails.forEach(t => t.classList.remove("active"));
            thumb.classList.add("active");

            // Atualiza bolinhas
            dots.forEach(d => d.classList.remove("active"));
            dot.classList.add("active");
        }
    });
});
    });
    </script>
    

</body>

</html>