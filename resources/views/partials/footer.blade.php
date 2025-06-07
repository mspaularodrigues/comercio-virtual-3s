<style>
    :root {
    --vermelho-principal: #8B0000;
    --cinza-claro: #f0f0f0;
    --cinza-texto: #555;
    --fonte-principal: 'Inter', sans-serif;
    --sombra-card: 0 2px 8px rgba(0, 0, 0, 0.1);
}
    /* Newsletter bar (barra antes do footer) */
.newsletter-bar {
  background: linear-gradient(180deg, #7a1c1d, #3f0a0b);
  padding: 20px;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: center;
  gap: 16px;
  font-family: 'Segoe UI', sans-serif;
}


.newsletter-text {
  font-size: 18px;
  font-weight: 600;
  color: #fff;
}

.newsletter-form {
  display: flex;
  gap: 8px;
  flex-wrap: wrap;
}

.input-wrapper {
  position: relative;
  flex: 1;
  min-width: 250px;
}

.input-wrapper input {
  width: 100%;
  padding: 12px 40px 12px 16px;
  border-radius: 30px;
  border: none;
  background-color: #fceaea;
  font-size: 14px;
  box-shadow: inset 0 1px 3px rgba(0,0,0,0.1);
}

.input-wrapper input:focus {
  outline: none;
  background-color: #fff;
  box-shadow: 0 0 0 2px #c0392b;
}

.input-icon {
  position: absolute;
  right: 14px;
  top: 50%;
  transform: translateY(-50%);
  font-size: 18px;
  color: #c0392b;
  pointer-events: none;
}

.newsletter-form button {
  background-color: #8b2c28;
  color: #fff;
  border: none;
  border-radius: 30px;
  padding: 12px 24px;
  font-size: 14px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.newsletter-form button:hover {
  background-color: #6f221f;
}


/* Footer content (conteúdo principal do rodapé) */
.footer-content {
    display: flex;
    padding: 40px;
    background-color: white;
}

/* Logo section dentro do footer */
.logo-section {
    width: 145px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.logo {
    width: 140px;
}

.logo img {
    width: 100%;
    height: auto;
    display: block;
}

/* Seções internas do footer */
.footer-section, .logo-section {
    flex: 1 1 220px;
    min-width: 220px;
}

/* Títulos das seções */
.footer-title {
    font-weight: 700;
    font-size: 18px;
    color: var(--vermelho-principal);
    margin-bottom: 12px;
}

/* Textos das informações */
.footer-info, 
.contact-info span:nth-child(2),
.footer-info a {
    font-size: 15px;
    color: var(--cinza-texto);
    line-height: 1.4;
}

/* Links com estilo e hover */
.footer-info a {
    text-decoration: none;
    color: var(--cinza-texto);
    transition: color 0.3s ease;
}

.footer-info a:hover {
    color: var(--vermelho-principal);
}

/* Ícones e textos em linha no contato */
.contact-info {
    display: flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 6px;
    font-size: 15px;
}

.contact-info i {
    color: var(--cinza-texto);
}

/* Espaçamento entre grupos no mesmo bloco */
.footer-section > .footer-title + * {
    margin-bottom: 8px;
}

/* Imagem das formas de pagamento */
.payment-methods {
    margin-top: 12px;
}

.payment-banner {
    max-width: 80%;
    height: auto;
    display: block;
}

/* Ícones das redes sociais */
.social-icons {
    display: flex;
    gap: 15px;
    margin-top: 12px;
    text-decoration: none;
    fill: var(--cinza-texto);
}

.social-icon i {
    color: var(--cinza-texto);
    font-size: 22px;
    transition: color 0.3s ease;
}

.social-icon:hover i {
    color: var(--vermelho-principal);
}

.social-icons a {
    text-decoration: none;
}

/* Divisor do footer */
.footer-divider {
    margin: 0 20px;
    border-top: 1px solid #ccc;
    opacity: 0.3;
}

/* Parte inferior do footer */
.footer-bottom {
    background-color: var(--cinza-claro);
    padding: 20px;
    font-size: 13px;
    color: var(--cinza-texto);
    text-align: center;
    line-height: 1.5;
    max-width: 100%;
    margin: 0 auto;
}

/* Nota menor dentro do footer-bottom */
.footer-note {
    margin-top: 12px;
    font-size: 12px;
    color: #777;
    font-style: italic;
}

/* Responsividade do footer */
@media (max-width: 900px) {
    .footer-content {
        justify-content: center;
        gap: 30px;
    }

    .footer-section, .logo-section {
        flex: 1 1 100%;
        max-width: 480px;
        text-align: center;
    }

    .logo-section {
        margin-bottom: 20px;
        justify-content: center;
    }

    .social-icons {
        justify-content: center;
    }
}

/* ===========================
   MEDIA QUERIES
   =========================== */

/* Telas médias até 900px (já existia) */
@media (max-width: 900px) {
  .footer-content {
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 30px;
    padding: 30px 20px;
  }

  .footer-section, .logo-section {
    flex: 1 1 100%;
    max-width: 480px;
    text-align: center;
  }

  .logo-section {
    margin-bottom: 20px;
    justify-content: center;
  }

  .social-icons {
    justify-content: center;
  }
}

/* Telas pequenas até 768px */
@media (max-width: 768px) {
  .newsletter-bar {
    flex-direction: column;
    padding: 24px 16px;
    gap: 12px;
    text-align: center;
  }

  .newsletter-text {
    font-size: 16px;
  }

  .newsletter-form {
    width: 100%;
    justify-content: center;
  }

  .input-wrapper {
    width: 100%;
    min-width: unset;
  }

  .newsletter-form button {
    width: 100%;
  }

  .footer-content {
    padding: 24px 16px;
  }

  .footer-title {
    font-size: 16px;
  }

  .footer-info,
  .contact-info {
    font-size: 14px;
  }

  .social-icon i {
    font-size: 20px;
  }
}

/* Telas muito pequenas até 480px */
@media (max-width: 480px) {
  .newsletter-text {
    font-size: 15px;
  }

  .input-wrapper input {
    font-size: 13px;
    padding: 10px 40px 10px 14px;
  }

  .newsletter-form button {
    font-size: 13px;
    padding: 10px 20px;
  }

  .footer-title {
    font-size: 15px;
  }

  .footer-info {
    font-size: 13px;
  }

  .footer-bottom {
    font-size: 12px;
    padding: 16px;
  }

  .footer-note {
    font-size: 11px;
  }

  .social-icon i {
    font-size: 18px;
  }

  .payment-banner {
    max-width: 100%;
  }
}


</style>

<div class="newsletter-bar">
  <span class="newsletter-text">Não perca nossas novidades:</span>

  <form class="newsletter-form">
    <div class="input-wrapper">
      <input type="email" placeholder="Digite seu e-mail" required>
      <!-- <span class="input-icon">📩</span> -->
    </div>
    <button type="submit">Assinar</button>
  </form>
</div>


   <!-- Rodapé -->
  <div class="footer-content">

    <!-- Logo -->
    <div class="logo-section">
      <div class="logo">
        <img src="{{ asset('img/logo.png') }}" alt="Suplemax Suplementos de Academia">
      </div>
    </div>

    <!-- Fale Conosco -->
    <div class="footer-section">
      <div class="footer-title">Fale Conosco</div>

      <div class="contact-info">
        <span> <i class="fa-solid fa-phone-volume"></i></span>
        <div class="footer-info">0800 000 1010</div>
      </div>
      
      <div class="contact-info">
        <span><i class="fa-solid fa-envelope"></i></span>
        <span>sac@suplemax.com.br</span>
      </div>
      <div class="contact-info">
        <span><i class="fa-solid fa-mobile"></i></span>
        <span>(11) 91234-5678</span>
      </div>
    </div>

    <!-- Horário e Pagamento -->
    <div class="footer-section">
      <div class="footer-title">Horário de Atendimento</div>
      <div class="footer-info">Seg a Qui das 08h às 18h</div>
      <div class="footer-info">Sex e Sáb das 08h às 17h</div>

      <div class="footer-title" style="margin-top: 20px;">Formas de Pagamento</div>
      <div class="payment-methods">
        <img src="{{ asset('img/bandeiraspagamento.png') }}" alt="Formas de pagamento" class="payment-banner">
      </div>
    </div>

    <!-- Institucional e Redes Sociais -->
    <div class="footer-section">
      <div class="footer-title">Institucional</div>
      <div class="footer-info"><a href="#">Política de Privacidade</a></div>
      <div class="footer-info"><a href="#">Política de Frete</a></div>
      <div class="footer-info"><a href="#">Termos e Condições</a></div>

      <div class="footer-title" style="margin-top: 20px;">Siga nossas redes sociais</div>
      <div class="social-icons">
        <a href="#" class="social-icon" title="Instagram"><i class="fab fa-instagram"></i></a>
        <a href="#" class="social-icon" title="YouTube"><i class="fab fa-youtube"></i></a>
        <a href="#" class="social-icon" title="Facebook"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="social-icon" title="Twitter"><i class="fab fa-twitter"></i></a>
      </div>
    </div>
  </div>

  <!-- Divisor -->
  <div class="footer-divider"></div>

  <!-- Parte inferior -->
  <div class="footer-bottom">
    Endereço: Avenida das Nações, 1600 - São Paulo, SP - CEP: 01234-005 - CNPJ: 01.234.567/0001-10 © Suplemax Suplementos de Academia - Todos os direitos reservados.
    <div class="footer-note">
      Todas as mídias aqui veiculadas são de propriedade da Suplemax Suplementos de Academia. É proibida a utilização parcial ou total sem autorização prévia, sujeita a penalidade.
    </div>
  </div>