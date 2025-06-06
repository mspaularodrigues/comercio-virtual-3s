<!-- {{ Auth::user()->id }}  -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de Compras</title>
    <link rel="stylesheet" href="./css/carrinho.css">
      <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;400;700&display=swap" rel="stylesheet">
              <link href="https://cdn.materialdesignicons.com/6.6.96/css/materialdesignicons.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>



<!-- Cabeçalho -->
<div class="header">

<!-- Botão voltar para home -->
<a href="/" title="Voltar para a Home" class="user-actions" style="margin-right: 20px;">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor"
        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left">
        <line x1="19" y1="12" x2="5" y2="12" />
        <polyline points="12 19 5 12 12 5" />
    </svg>
</a>

<!-- Logo -->
<div class="logo">
    <img src="{{ asset('img/logo.png') }}" alt="Logo da empresa">
</div>
</div>


<div class="container">
        <!-- Seção do título do carrinho separada -->
        <div class="cart-header">
            <div class="cart-title">
                MEU CARRINHO <span class="item-count">{{$cartItems->sum('units')}}</span>
            </div>
        </div>
        
        <!-- Seção principal do carrinho -->
        <div class="cart-section">
            <div class="cart-container">
                <div class="cart-left">
                    <table class="cart-table">
                   

                        <thead>
  <tr>
    <th class="item-header">ITEM</th>
    <th class="quantity-header">QUANTIDADE</th>
    <th class="value-header">VALOR</th>
  </tr>
</thead>
                        <tbody>
                            @foreach($cartItems as $item)
                            <tr class="cart-item">
                                <td class="item-cell">
                                    <div class="product-img">
                                        <img src="{{ $item->product->image_url }}" alt="{{ $item->product->name }}">
                                    </div>

                                    <h6>{{ $item->product->name }}</h6>
                                </td>

                                
                               <td class="quantity-cell">
  <div class="quantity-control">
    <form action="/cart/{{$item->id}}" method="POST" style="display: flex; align-items: center; gap: 8px;">
      @csrf
      @method('PUT')
      <input 
        type="text" 
        name="units" 
        class="quantity-input" 
        value="{{ $item->units }}" 
        oninput="this.value = this.value.replace(/[^0-9]/g, ''); if (this.value === '' || this.value === '0') this.value = '1';"
        onblur="if (this.value < 1) this.value = '1';"
        style="width: 40px; margin-right: 8px;"
      >
      <button type="submit" class="quantity-btn plus-btn">Alterar</button>
    </form>

    <form action="/cart/{{$item->id}}" method="POST" style="margin-left: 12px;">
      @csrf
      @method('DELETE')
      <button type="submit" class="quantity-btn delete-btn">Excluir produto</button>
    </form>
  </div>
</td>

                                <td class="price-cell">R$ {{$item->product->price }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>


                    <div class="cart-right">
    <div class="summary-title">RESUMO DO CARRINHO</div>

<div class="cart-summary">
        <div class="summary-row">
            <div class="summary-label">ITENS ({{ $totalUnits }})</div>
            <div class="summary-value">R$ {{ number_format($totalPrice, 2, ',', '.') }}</div>
        </div>

        <div class="summary-row">
            <div class="summary-label">DESCONTO</div>
            <div class="summary-value">R$ 00,00</div>
        </div>

        <div class="summary-row">
    <div class="summary-label">FORMA DE PAGAMENTO</div>
    <div class="summary-value">
        <select name="parcelas" id="parcelas">
            <option value="1">1x Cartão de Crédito</option>
            <option value="2">2x Cartão de Crédito</option>
            <option value="3">3x Cartão de Crédito</option>
            <option value="4">4x Cartão de Crédito</option>
            <option value="5">5x Cartão de Crédito</option>
            <option value="6">6x Cartão de Crédito</option>
        </select>
    </div>
</div>

        <div class="total-row">
            <div class="total-label">TOTAL A PAGAR</div>
            <div class="total-value">R$ {{ number_format($totalPrice, 2, ',', '.') }}</div>
        </div>
    </div>
</div> 


                    <a href="#" class="checkout-btn">Finalizar compra</a>
                </div>
            </div>
        </div>
    </div>

     @include('partials.footer')

     <script>
  document.addEventListener('DOMContentLoaded', function () {
    const btn = document.querySelector('.checkout-btn');

    btn.addEventListener('click', function (e) {
      e.preventDefault(); // impede que o link navegue
      alert('Compra finalizada com sucesso!');
    });
  });
</script>


</body>
</html>