<!-- <table border="1">
    <thead>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Qtd. Produtos</th>
        <th>Ações</th>
    </tr>
    </thead>
    <tbody>
    @foreach($categories as $category)
    <tr>
        <td>{{$category->id}}</td>
        <td>{{$category->name}}</td>
        <td>{{$category->products->count()}}</td>
        <td style="display: flex">
            <a href="/category/{{$category->id}}/edit">Edit</a>
            <form action="/category/{{$category->id}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Apagar</button>
            </form>
        </td>
    </tr>
    @endforeach
    </tbody>
</table> -->

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Categoria - Whey Protein</title>
  <link rel="stylesheet" href="css/categoria.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</head>

<body>
  <!-- Top Banner -->
  <div class="top-banner">PARCELAMENTO EM 6X SEM JUROS</div>

  <!-- Header -->
  <header class="header">
    <div class="logo">LOGO</div>
    <input type="text" class="search" placeholder="O que está buscando?" />
    <div class="icons">🔍 Login 🤍 🛒</div>
  </header>

  <!-- Navigation Menu -->
  <nav class="nav">
    <a href="#">MENU</a>
    <a href="#">MENU</a>
    <a href="#">MENU</a>
    <a href="#">MENU</a>
    <a href="#">MENU</a>
    <a href="#">MENU</a>
  </nav>

  <!-- Banner Produto -->
  <section class="banner-produto">

  </section>

  <!-- Breadcrumbs -->
  <div class="breadcrumbs">Home > Produtos > Proteína</div>

  <!-- Filtros -->
  <div class="filtros">
    <button>Filtrar <span class="mage--filter"></span></button>
    <button>Ordenar por</button>
  </div>

  <!-- Lista de Produtos -->
  <section class="produtos">
    <div class="produto-card">
      <img src="./img/proteina1.png" alt="Produto" />
      <h4>Whey 4 Protein</h4>
      <img id="avaliacao" src="./img/Avaliação.png" alt="Avaliação" />
      <p>R$ 286,00</p>
      <small>Até 6x de R$ 44,33</small>
    </div>
    <div class="produto-card">
      <img src="./img/proteina1.png" alt="Produto" />
      <h4>Whey 4 Protein</h4>
      <img id="avaliacao" src="./img/Avaliação.png" alt="Avaliação" />
      <p>R$ 286,00</p>
      <small>Até 6x de R$ 44,33</small>
    </div>
    <div class="produto-card">
      <img src="./img/proteina1.png" alt="Produto" />
      <h4>Whey 4 Protein</h4>
      <img id="avaliacao" src="./img/Avaliação.png" alt="Avaliação" />
      <p>R$ 286,00</p>
      <small>Até 6x de R$ 44,33</small>
    </div>
  </section>

  <!-- Paginação -->
  <div class="paginacao"><span class="weui--arrow-outlined L"></span>Página 1 de 1<span
      class="weui--arrow-outlined"></span></div>

  <!-- Seções Informativas -->
  <section id="info1" class="informacao">
    <h3>O que é Whey Protein?</h3>
    <p>
      Resultado de uma série de processos industriais que
      são aplicados ao leite, o Whey Protein vem sendo
      procurado por frequentadores de academias e
      também praticantes de atividade física em geral.

      Além disso,
      esse suplemento tem como principal objetivo fornecer
      proteínas de alto valor biológico que poderão ser usadas
      no trabalho de anabolismo muscular, manutenção do
      tecido muscular ou recuperação das fibras.
    </p>
  </section>

  <section id="info2" class="informacao">
    <h3>Qual tipo de Whey Protein escolher?</h3>
    <p>
      O Whey Protein Concentrado é o mais comum e acessível, contendo proteínas de alta qualidade
      com uma pequena quantidade de carboidratos e gorduras, sendo ideal para quem busca um bom
      custo-benefício.
      Já o Whey Protein Isolado é uma versão mais pura, com uma concentração maior de proteínas e menos carboidratos e
      gorduras,
      sendo indicado para quem segue dietas restritivas.
      O Whey Protein Hidrolisado passa por um processo de hidrólise, quebrando as proteínas em partículas menores.
      Essa versão é indicada para atletas que precisam de uma recuperação rápida e eficaz, ou para pessoas com maior
      sensibilidade digestiva.

    </p>
  </section>

  <section id="info3" class="informacao">
    <h3>Quando usar Whey Protein?</h3>
    <p>
      O Whey Protein pode ser consumido antes do treino para fornecer energia e aminoácidos essenciais, preparando os
      músculos para a atividade física intensa. Após o treino, o consumo é altamente recomendado, pois acelera a
      recuperação, repara as fibras musculares e maximiza o ganho de massa. Também pode ser usado entre refeições,
      ajudando no ganho de massa muscular. É uma ótima escolha como lanche saudável. Adapte o consumo conforme suas
      necessidades, seja para ganho de massa, recuperação ou manutenção da dieta.
    </p>
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

      <!-- (Adicione mais slides conforme precisar) -->

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
  <!-- <section class="mais-vendidos">

    <div class="card-deck">
      <div class="card">
        <img src="./img/creatina_300g.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Texto do card 1.</p>
        </div>
      </div>
      <div class="card">
        <img src="./img/creatina_300g.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Texto do card 2.</p>
        </div>
      </div>
      <div class="card">
        <img src="./img/creatina_300g.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Texto do card 3.</p>
        </div>
      </div>
    </div>
  </section> -->

  <!-- Newsletter -->
  <section class="newsletter">
    <span>NEWSLETTER</span>
  </section>

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