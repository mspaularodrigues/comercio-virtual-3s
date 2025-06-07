<style>
:root {
  --vermelho-principal: #8B0000;
  --cinza-claro: #f0f0f0;
  --cinza-texto: #555;
  --fonte-principal: 'Inter', sans-serif;
  --sombra-card: 0 2px 8px rgba(0, 0, 0, 0.1);
}

/* ===========================
   HEADER - Estilo Base (desktop)
   =========================== */

.top-bar {
  background-color: var(--vermelho-principal);
  color: white;
  text-align: center;
  padding: 15px 0;
  font-weight: bold;
  font-size: 18px;
}

.header {
  display: flex;
  align-items: center;
  padding: 20px 40px;
  background-color: var(--cinza-claro);
  justify-content: space-between;
  flex-wrap: nowrap;
}

.logo {
  font-weight: bold;
  font-size: 28px;
  color: #333;
  margin-right: 20px;
}

.logo img {
  max-height: 40px;
  max-width: 100%;
}

.search-bar {
  display: flex;
  width: 40%;
  margin: 0 20px;
  position: relative;
}

.search-bar input {
  padding: 12px 20px;
  border: 1px solid #ccc;
  border-radius: 30px;
  width: 100%;
  outline: none;
  font-size: 16px;
}

.search-bar button {
  background: none;
  border: none;
  position: absolute;
  right: 15px;
  top: 50%;
  transform: translateY(-50%);
  cursor: pointer;
  font-size: 18px;
}

.user-actions {
  display: flex;
  align-items: center;
}

.user-actions a {
  margin-left: 25px;
  text-decoration: none;
  color: #333;
  font-size: 24px;
}

/* ===========================
   MENU - Estilo Base
   =========================== */

.menu-container {
  display: flex;
  justify-content: space-around;
  flex-wrap: wrap;
  padding: 20px 40px;
  background-color: var(--cinza-claro);
  gap: 10px;
}

.menu-item {
  position: relative;
  padding: 12px 20px;
  background-color: #ffffff;
  border-radius: 25px;
  font-weight: bold;
  font-size: 16px;
  color: #333;
  cursor: pointer;
  transition: background-color 0.3s, transform 0.2s;
  text-align: center;
  min-width: 150px;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
}

.menu-container a {
  text-decoration: none;
}

.menu-item:hover {
  background-color: var(--vermelho-principal);
  color: white;
  transform: translateY(-2px);
}

/* ===========================
   MEDIA QUERIES
   =========================== */

/* Telas médias (até 992px) */
@media (max-width: 992px) {
  .header {
    flex-wrap: wrap;
    padding: 16px 24px;
    gap: 15px;
  }

  .logo {
    font-size: 24px;
  }

  .search-bar {
    width: 100%;
    margin: 10px 0;
  }

  .user-actions {
    width: 100%;
    justify-content: flex-end;
  }

  .user-actions a {
    font-size: 22px;
    margin-left: 18px;
  }
}

/* Telas pequenas (até 768px) */
@media (max-width: 768px) {
  .top-bar {
    font-size: 16px;
    padding: 10px 0;
  }

  .logo {
    font-size: 20px;
    text-align: center;
    width: 100%;
  }

  .header {
    flex-direction: column;
    align-items: center;
    padding: 16px;
  }

  .search-bar input {
    font-size: 15px;
  }

  .user-actions {
    justify-content: center;
    margin-top: 10px;
  }

  .user-actions a {
    font-size: 20px;
    margin: 0 10px;
  }

  .menu-container {
    flex-direction: column;
    align-items: center;
    padding: 16px;
  }

  .menu-item {
    width: 90%;
    max-width: 300px;
    font-size: 15px;
  }
}

/* Telas muito pequenas (até 480px) */
@media (max-width: 480px) {
  .top-bar {
    font-size: 14px;
  }

  .menu-item {
    padding: 10px 16px;
    font-size: 14px;
  }

  .search-bar input {
    padding: 10px 16px;
  }
}
</style>

    <!-- Barra superior com informação de parcelamento -->
    <div class="top-bar">
        PARCELAMENTO EM 6X SEM JUROS
    </div>
    
    <!-- Cabeçalho -->
    <div class="header">
        
    <a href="/">
        <div class="logo">
                <img src="{{ asset('img/logo.png') }}" alt="Logo da empresa">
            </div>
    </a>
            
        
        <div class="search-bar">
            <input type="text" disabled placeholder="O que está buscando?">
            <button>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
            </button>
        </div>
        
  
        <div class="user-actions flex items-center gap-5 text-black">

            <!-- <a href="#" title="Deslogar" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> -->
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
        stroke="currentColor" stroke-width="2" stroke-linecap="round"
        stroke-linejoin="round" class="feather feather-user">
        <circle cx="8" cy="5" r="3"/>
        <path d="M2 19c0-2 2.5-6 6-6s6 4 6 6"/>
    </svg>
</a>


    {{-- Carrinho --}}
    <a href="/cart" title="Carrinho">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
            viewBox="0 0 16 16">
            <path
                d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
        </svg>
    </a>

    {{-- Logout --}}
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    <a href="#" title="Deslogar" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round" class="feather feather-log-out">
            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />
            <polyline points="16 17 21 12 16 7" />
            <line x1="21" y1="12" x2="9" y2="12" />
        </svg>
    </a>
</div>

        </div>
    </div>

<div class="menu-container"> <a href="/category/creatina">
<div class="menu-item">CREATINA</div>
</a>
    
 <a href="/category/whey-protein">
<div class="menu-item">  WHEY PROTEIN</div>
    </a>

   <a href="/category/pre-treino"> <div class="menu-item"> PRÉ-TREINO </div></a>

   <a href="/category/termogenicos"> <div class="menu-item"> TERMOGÊNICOS</div> </a>

   <a href="/category/barras-proteicas"><div class="menu-item">BARRAS PROTEICAS</div> </a> 

    <a href="/category/kits-promocionais"><div class="menu-item">KITS PROMOCIONAIS</div> </a>
</div>