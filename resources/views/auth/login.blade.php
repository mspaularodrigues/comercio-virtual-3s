<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="./css/login.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;400;700&display=swap" rel="stylesheet">
</head>
<body>
  <div class="container">
    <div class="image-section">
      <img src="/img/login.png" alt="Imagem de login">
      <div class="image-overlay"></div>
    </div>

    <div class="form-section">
      <div class="form-container">
        <h1 class="titulo-cadastro">FAÇA SEU LOGIN</h1>
        <form method="POST" action="{{ route('login') }}">
            @csrf
          <div class="campos-cadastro">
            <label for="email" class="form-label">E-MAIL:</label>
            <input type="email" id="email" name="email" placeholder="Digite seu e-mail" class="form-input">
          </div>

          <div class="campos-cadastro">
            <label for="senha" class="form-label">SENHA:</label>
            <input type="password" id="senha" name="password" placeholder="Digite sua senha" class="form-input">
          </div>

          <button type="submit" class="form-button">ENTRAR</button>

          {{$errors}}

          <p class="cadastro-link">Não tem uma conta? <a href="/register">Inscreva-se</a></p>
        </form>
      </div>
    </div>
  </div>
</body>
</html>


