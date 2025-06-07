<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Cadastro Fitness</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;400;700&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="css/cadastro.css" />
</head>
<body>
    <form action="{{ route('register') }}" method="post">
        @csrf
    <div class="container">
    <div class="form-section">
      <div class="form-container">
        <h2 class="titulo-cadastro">CADASTRE-SE</h2>

        <div class="campos-cadastro">
          <label class="form-label" for="nome">NOME:</label>
          <input type="text" id="nome" name="name" class="form-input" placeholder="Digite seu nome" />
        </div>

        <div class="campos-cadastro">
          <label class="form-label" for="email">E-MAIL:</label>
          <input type="email" id="email" name="email" class="form-input" placeholder="Digite seu e-mail" />
        </div>

        <div class="campos-cadastro">
          <label class="form-label" for="cpf">CPF:</label>
          <input type="text" id="cpf" name="cpf" class="form-input" placeholder="Digite seu CPF" />
        </div>

        <div class="campos-cadastro">
          <label class="form-label" for="telefone">TELEFONE:</label>
          <input type="tel" id="telefone" name="telefone" class="form-input" placeholder="Digite seu telefone" />
        </div>

        <div class="campos-cadastro">
          <label class="form-label" for="senha">SENHA:</label>
          <input type="password" id="senha" name="password" class="form-input" placeholder="Digite sua senha" />
        </div>

        <div class="campos-cadastro">
          <label class="form-label" for="senha">CONFIRMA SENHA:</label>
          <input type="password" id="senha" name="password_confirmation" class="form-input" placeholder="Digite sua senha" />
        </div>

         <!-- {{ $errors }}  -->

        <button class="form-button">ENTRAR</button>
      </div>
    </div>

    <div class="image-section">
      <img src="img/cadastro (2).png" alt="Imagem de cadastro" class="cadastro-imagem">
    </div>
  </div>

  </div>
    </form>

</body>
</html>



