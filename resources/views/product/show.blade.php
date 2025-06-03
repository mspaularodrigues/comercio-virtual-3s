<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Whey 4 Protein 900g</title>
    <link rel="stylesheet" href="css/produto.css">
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

</head>

<body>

    <header class="top-bar">
        <p>PARCELAMENTO EM 6X SEM JUROS</p>
    </header>

    <nav class="main-nav">
        <div class="logo">LOGO</div>
        <div class="search-bar">
            <input type="text" placeholder="O que está buscando?">
            <button>🔍</button>
        </div>
        <div class="nav-icons">
            <a href="#">Login</a>
            <a href="#">❤️</a>
            <a href="#">🛒</a>
        </div>
        <div class="menu">
            <a href="#">MENU</a>
            <a href="#">MENU</a>
            <a href="#">MENU</a>
            <a href="#">MENU</a>
            <a href="#">MENU</a>
        </div>
    </nav>

    <section class="banner">
        <h1>BANNER PRODUTO</h1>
    </section>

    <section class="breadcrumbs">
        <p>Home > Produtos > Proteína > Whey 4 Protein</p>
    </section>

    <main class="product-page">
        <div class="product-gallery">
            <div class="thumbnails">
                <img src="./img/proteina1.png" alt="Miniatura 1">
                <img src="./img/proteina1.png" alt="Miniatura 2">
                <img src="./img/proteina1.png" alt="Miniatura 3">
            </div>
            <div class="main-image">
                <img src="./img/proteina1.png" alt="Imagem principal">
            </div>
        </div>

        <div class="product-info">
            <h2>Whey 4 Protein 900g</h2>
            <p>Ref: 00001</p>
            <div class="rating">
                ★★★★☆ <div id="rating-count">(148)</div>
            </div>
            <p class="price">R$260,00 <span class="pix">à vista no PIX</span></p>
            <div class="parcel">
                <iconify-icon icon="fluent-mdl2:payment-card" width="20" height="20"></iconify-icon>
                <p>ou R$ 268,00 em até 6x de R$44,00 (sem juros)</p>
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
            <p>Precisando de ajuda na manutenção e ganho de massa muscular? O Whey 4 Protein da Pro Corps é um
                suplemento proteico de alto valor biológico que auxilia no aumento de massa muscular e na recuperação da
                fibra muscular, sendo ideal para hipertrofia e atletas de alto desempenho. Possui em sua composição
                quatro derivados proteicos: Proteína concentrada, isolada e hidrolisada do soro de leite e proteína
                hidrolisada da carne, que são essenciais para o bom funcionamento do organismo. Contém um índice elevado
                de aminoácidos (BCAA), importantes para a produção de fibras musculares.</p>

            <h3>DESTAQUES</h3>
            <ul>
                <li>32g de Proteína por dose</li>
                <li>5g de carboidratos por dose</li>
                <li>7g de BCAA</li>
                <li>WPH / WPI / WPC / Beef Protein</li>
            </ul>

            <p><strong>Modo de preparo e sugestão de consumo:</strong> Dissolver um medidor e meio (40g) em 200 ml de
                água, bater no mixer ou liquidificador. Consumir duas porções ao dia.</p>

            <p><strong>ALÉRGICOS CONTÉM DERIVADOS DE LEITE</strong></p>
            <p><strong>ESTE PRODUTO NÃO SUBSTITUI UMA ALIMENTAÇÃO EQUILIBRADA E SEU CONSUMO DEVE SER ORIENTADO POR
                    NUTRICIONISTA OU MÉDICO.</strong></p>

            <h3>AVISOS</h3>
            <ul>
                <li>Idade mínima recomendada: 18 anos</li>
                <li>Consulte um médico antes do uso</li>
                <li>Este produto é um suplemento dietético, não um medicamento. Suplementa dietas insuficientes.
                    Consulte o seu médico e/ou farmacêutico.</li>
            </ul>
        </div>
    </section>

    <section class="similar-products">
        <h2>Produtos Similares</h2>
        <!-- produtos similares aqui -->
    </section>

    <section class="reviews">
        <h2>Avaliações</h2>
        <!-- avaliações aqui -->
    </section>

    <footer class="footer">
        <div class="newsletter">
            <input type="email" placeholder="NEWSLETTER">
        </div>

        <div class="footer-info">
            <div class="contact">
                <h4>Fale Conosco</h4>
                <p>0800 1010</p>
                <p>instagram@email.com</p>
                <p>(11) 2345-6789</p>
            </div>

            <div class="schedule">
                <h4>Horário de atendimento</h4>
                <p>Seg a Qui das 08h às 18h</p>
                <p>Sex e Sáb das 08h às 17h</p>
            </div>

            <div class="institutional">
                <h4>Institucional</h4>
                <p>Política de Privacidade</p>
                <p>Política de Frete</p>
                <p>Termos e Condições</p>
            </div>

            <div class="social-media">
                <h4>Siga nossas redes sociais</h4>
                <p>📷 🎥 👍 🐦</p>
            </div>
        </div>

        <div class="payments">
            <p>Formas de Pagamento: Visa, MasterCard, Pix</p>
        </div>

        <div class="address">
            <p>Endereço: Avenida Tal, 1800 - São Paulo, SP - CEP: 01234-005 - CNPJ: 01.234.567/0008-10</p>
        </div>
    </footer>

    <script>
        const tabs = document.querySelectorAll('.tabs button');
        const detailsDiv = document.querySelector('.details');
    
        // Conteúdos diferentes
        const contents = {
    detalhes: `
        <p>Precisando de ajuda na manutenção e ganho de massa muscular? O Whey 4 Protein da Pro Corps é um
            suplemento proteico de alto valor biológico que auxilia no aumento de massa muscular e na recuperação da
            fibra muscular, sendo ideal para hipertrofia e atletas de alto desempenho. Possui em sua composição
            quatro derivados proteicos: Proteína concentrada, isolada e hidrolisada do soro de leite e proteína
            hidrolisada da carne, que são essenciais para o bom funcionamento do organismo. Contém um índice elevado
            de aminoácidos (BCAA), importantes para a produção de fibras musculares.</p>

        <h3>DESTAQUES</h3>
        <ul>
            <li>32g de Proteína por dose</li>
            <li>5g de carboidratos por dose</li>
            <li>7g de BCAA</li>
            <li>WPH / WPI / WPC / Beef Protein</li>
        </ul>

        <p><strong>Modo de preparo e sugestão de consumo:</strong> Dissolver um medidor e meio (40g) em 200 ml de
            água, bater no mixer ou liquidificador. Consumir duas porções ao dia.</p>

        <p><strong>ALÉRGICOS CONTÉM DERIVADOS DE LEITE</strong></p>
        <p><strong>ESTE PRODUTO NÃO SUBSTITUI UMA ALIMENTAÇÃO EQUILIBRADA E SEU CONSUMO DEVE SER ORIENTADO POR
                NUTRICIONISTA OU MÉDICO.</strong></p>
    `,
    informacoes: `
        <h3>INFORMAÇÕES NUTRICIONAIS</h3>
        <table class="info-table">
            <thead>
                <tr>
                    <th>Componente</th>
                    <th>Quantidade por porção</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Valor Energético</td>
                    <td>160 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>32g</td>
                </tr>
                <tr>
                    <td>Carboidratos</td>
                    <td>5g</td>
                </tr>
                <tr>
                    <td>Gorduras Totais</td>
                    <td>2g</td>
                </tr>
                <tr>
                    <td>Gorduras Saturadas</td>
                    <td>1g</td>
                </tr>
                <tr>
                    <td>Sódio</td>
                    <td>120mg</td>
                </tr>
            </tbody>
        </table>
    `
};
    
        // Evento de clique nos botões
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
    </script>
    

</body>

</html>