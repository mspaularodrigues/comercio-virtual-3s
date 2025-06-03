{{ Auth::user()->id }}
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de Compras</title>
    <link rel="stylesheet" href="./css/carrinho.css">
</head>
<body>
<header class="header">
        <div class="logo">LOGO</div>
    </header>

<div class="container">
        <!-- Seção do título do carrinho separada -->
        <div class="cart-header">
            <div class="cart-title">
                MEU CARRINHO <span class="item-count">{{$cartItems->count()}}</span>
            </div>
        </div>
        
        <!-- Seção principal do carrinho -->
        <div class="cart-section">
            <div class="cart-container">
                <div class="cart-left">
                    <table class="cart-table">

                    <!-- <tbody>
                    @foreach($cartItems as $item)
                    <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->user_id}}</td>
        <td>{{$item->product->name}}</td>
        <td>{{$item->units}}</td>
        <td style="display: flex">
            <a href="/cart/{{$item->product_id}}/update">Edit</a>
            <form action="/cart/{{$item->product_id}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Apagar</button>
            </form>
        </td>
    </tr>
@endforeach

                    </tbody> -->
                   

                        <thead>
                            <tr>
                                <th class="item-header">ITEM</th>
                                <th class="quantity-header">QUANTIDADE</th>
                                <th>Excluir</th>
                                <th class="value-header">VALOR</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cartItems as $item)
                            <tr class="cart-item">
                                <td class="item-cell">
                                    <div class="product-img">
                                        <img src="https://via.placeholder.com/80x80/ff0000/ffffff" alt="Creatina">
                                    </div>
                                    <div class="product-name">{{$item->product->name}}</div>
                                </td>
                                <td class="quantity-cell">
                                    <div class="quantity-control">
                                        <form action="/cart/{{$item->id}}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <input type="text" name="units" class="quantity-input" value="{{$item->units}}">
                                            <button type="submit" class="quantity-btn plus-btn">Alterar</button>
                                        </form>
                                    </div>
                                </td>

                                <td class="excluir">
                                <form action="/cart/{{$item->id}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Excluir produto</button>
                                </form>
                                </td>
                                <td class="price-cell">R$ {{$item->product->price * $item->units}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="cart-right">
                    <div class="summary-title">RESUMO DO CARRINHO</div>
                    <div class="cart-summary">
                        <div class="summary-row">
                            <div class="summary-label">ITENS (5)</div>
                            <div class="summary-value">R$ 950,00</div>
                        </div>
                        <div class="summary-row">
                            <div class="summary-label">DESCONTO</div>
                            <div class="summary-value">R$ 00,00</div>
                        </div>
                        <div class="summary-row">
                            <div class="summary-label">FORMA DE PAGAMENTO</div>
                            <div class="summary-value">1X CARTÃO DE CRÉDITO</div>
                        </div>
                        <div class="summary-row">
                            <div class="summary-label">FRETE</div>
                            <div class="summary-value">R$ 100,00</div>
                        </div>
                    </div>

                    <div class="shipping-calculator">
                        <div class="calculator-label">CALCULAR FRETE</div>
                        <div class="shipping-input">
                            <input type="text" name="cep" class="zipcode-input" placeholder="00000-000">
                            <button class="calculate-btn">CALCULAR</button>
                        </div>
                    </div>

                    <div class="total-row">
                        <div class="total-label">TOTAL A PAGAR</div>
                        <div class="total-value">R$ 1050,00</div>
                    </div>

                    <a href="#" class="checkout-btn">Finalizar compra</a>
                </div>
            </div>
        </div>
    </div>

    

    <footer class="footer">
        <div class="footer-container">
            <div class="footer-col logo-col">
                <div class="logo-container">LOGO</div>
            </div>

            <div class="footer-col">
                <h3>Fale Conosco</h3>
                <div class="contact-info">
                    <i class="icon">📞</i> 0800 1010
                </div>
                <div class="contact-info">
                    <i class="icon">✉️</i> tst@gmail.com
                </div>
                <div class="contact-info">
                    <i class="icon">📱</i> (11) 2345-6789
                </div>
            </div>

            <div class="footer-col">
                <h3>Horário de atendimento</h3>
                <div class="contact-info">Seg a Qui das 08h às 18h</div>
                <div class="contact-info">Sex e Sáb das 08h às 17h</div>
            </div>

            <div class="footer-col">
                <h3>Institucional</h3>
                <div class="contact-info">Política de privacidade</div>
                <div class="contact-info">Política de frete</div>
                <div class="contact-info">Termos e condições</div>
            </div>

            <div class="footer-col payment-col">
                <h3>Formas de Pagamento</h3>
                <div class="payment-methods">
                    <div class="payment-icon visa">Visa</div>
                    <div class="payment-icon mastercard">MC</div>
                    <div class="payment-icon amex">Amex</div>
                    <div class="payment-icon pix">PIX</div>
                </div>
            </div>

            <div class="footer-col social-col">
                <h3>Siga nossas redes sociais</h3>
                <div class="social-media">
                    <div class="social-icon instagram">IG</div>
                    <div class="social-icon youtube">YT</div>
                    <div class="social-icon facebook">FB</div>
                    <div class="social-icon twitter">X</div>
                </div>
            </div>
        </div>
    </footer>
    <!-- <script>
        // Add functionality to quantity buttons
        document.querySelectorAll('.quantity-btn').forEach(button => {
            button.addEventListener('click', function() {
                const input = this.parentNode.querySelector('.quantity-input');
                let value = parseInt(input.value);
                
                if (this.classList.contains('plus-btn')) {
                    value++;
                } else if (this.classList.contains('minus-btn') && value > 1) {
                    value--;
                }
                
                input.value = value;
                
                // Animation effect on price change
                const priceElement = this.closest('tr').querySelector('.price-cell');
                priceElement.style.animation = 'none';
                setTimeout(() => {
                    priceElement.style.animation = 'fadeIn 0.3s';
                }, 5);
            });
        });

        // Add animation to checkout button
        const checkoutBtn = document.querySelector('.checkout-btn');
        checkoutBtn.addEventListener('mouseover', function() {
            this.style.transform = 'translateY(-2px)';
        });

        checkoutBtn.addEventListener('mouseout', function() {
            this.style.transform = 'translateY(0)';
        });

        checkoutBtn.addEventListener('click', function(e) {
            e.preventDefault();
            this.style.transform = 'scale(0.98)';
            setTimeout(() => {
                this.style.transform = 'scale(1)';
                alert('Finalizando sua compra!');
            }, 100);
        });

        // Add animation to product images
        document.querySelectorAll('.product-img img').forEach(img => {
            img.addEventListener('mouseover', function() {
                this.style.transform = 'scale(1.1)';
            });
            
            img.addEventListener('mouseout', function() {
                this.style.transform = 'scale(1)';
            });
        });
    </script> -->
</body>
</html>