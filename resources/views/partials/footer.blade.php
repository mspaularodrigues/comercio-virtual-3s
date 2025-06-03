 <style>
        .footer-content {
    display: flex;
    padding: 20px;
    background-color: #f0f0f0;
}

.logo-section {
    width: 150px;
    margin-right: 20px;
    display: flex;
    align-items: center;
}

.logo {
    width: 120px;
}

.logo img {
    width: 100%;
    height: auto;
    display: block;
}

.footer-section {
    flex: 1;
    margin: 0 15px;
}

.footer-title {
    font-weight: bold;
    margin-bottom: 10px;
    font-size: 16px;
}

.footer-info {
    margin-bottom: 5px;
    font-size: 14px;
}

.contact-info {
    display: flex;
    align-items: center;
    margin-bottom: 5px;
}

.payment-methods {
    display: flex;
    gap: 10px;
    margin-top: 10px;
}

.payment-icon {
    width: 40px;
    height: 25px;
    background-color: white;
    border-radius: 4px;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 10px;
}

.social-icons {
    display: flex;
    gap: 10px;
    margin-top: 10px;
}

.social-icon {
    width: 32px;
    height: 32px;
    background-color: white;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 18px;
}

.footer-divider {
    height: 1px;
    background-color: #ccc;
    margin: 0 20px;
}

.footer-bottom {
    padding: 15px 20px;
    font-size: 12px;
    color: #555;
    text-align: center;
    background-color: #f0f0f0;
}

.footer-note {
    margin-top: 5px;
    font-size: 10px;
    color: #666;
    text-align: center;
}
    </style>

    <div class="footer-content">
        <div class="logo-section">
            <div class="logo">
                <img src="{{ asset('img/logo.png') }}" alt="SUPLEMAX - Suplementos de Academia">
            </div>
        </div>

        <div class="footer-section">
            <div class="footer-title">Fale Conosco</div>
            <div class="footer-info">0800 1010</div>
            <div class="contact-info">
                <span>✉️</span>
                <span>teste@gmail.com</span>
            </div>
            <div class="contact-info">
                <span>📱</span>
                <span>(11) 2345-6789</span>
            </div>
        </div>

        <div class="footer-section">
            <div class="footer-title">Horário de atendimento</div>
            <div class="footer-info">Seg a Qui das 08h às 18h</div>
            <div class="footer-info">Sex e Sáb das 08h às 17h</div>
            
            <div class="footer-title" style="margin-top: 20px;">Formas de Pagamento</div>
            <div class="payment-methods">
                <div class="payment-icon">VISA</div>
                <div class="payment-icon">MASTER</div>
                <div class="payment-icon">AMEX</div>
                <div class="payment-icon">PIX</div>
            </div>
        </div>

        <div class="footer-section">
            <div class="footer-title">Institucional</div>
            <div class="footer-info">Política de privacidade</div>
            <div class="footer-info">Política de frete</div>
            <div class="footer-info">Termos e condições</div>
            
            <div class="footer-title" style="margin-top: 20px;">Siga nossas redes sociais</div>
            <div class="social-icons">
                <div class="social-icon">📷</div>
                <div class="social-icon">▶️</div>
                <div class="social-icon">f</div>
                <div class="social-icon">𝕏</div>
            </div>
        </div>
    </div>

    <div class="footer-divider"></div>

    <div class="footer-bottom">
        Endereço: Avenida Tal, 1600 - São Paulo, SP - CEP: 01234-005 - CNPJ: 01.234.567/0008-10 © Todos os direitos reservados.
        <div class="footer-note">
            Todas as mídias aqui veiculadas são de propriedade da SUPLEMAX. É proibida a utilização parcial ou total sem autorização prévia, sujeita a penalidade.
        </div>
    </div>
</body>
</html>