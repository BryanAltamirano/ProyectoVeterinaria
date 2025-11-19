<style>

  .navbar-glass {
    background: rgba(255, 255, 255, 0.12);
    backdrop-filter: blur(12px);
    border-bottom: 1px solid rgba(255, 255, 255, 0.25);
    box-shadow: 0 8px 20px rgba(0,0,0,0.25);
  }
  
  .navbar-glass .nav-link {
    color: #070606ff !important;
    font-weight: 500;
    letter-spacing: 0.5px;
    padding: 8px 15px;
    border-radius: 12px;
    transition: all 0.25s ease-in-out;
  }

  .navbar-glass .nav-link:hover {
    background: rgba(255, 255, 255, 0.20);
    transform: translateY(-2px);
    color: #6f3636ff !important;
  }

  .navbar-glass .nav-link.active {
    background: linear-gradient(135deg, #00d4ff, #007bff);
    color: #fff !important;
    box-shadow: 0 0 10px rgba(0, 180, 255, 0.6);
  }

  .navbar-glass .btn-logout {
    background: linear-gradient(135deg, #ff4b4b, #d60000);
    border: none;
    padding: 6px 12px;
    border-radius: 12px;
    color: #fff;
    font-weight: 500;
    transition: 0.3s;
  }

  .navbar-glass .btn-logout:hover {
    transform: scale(1.08);
    box-shadow: 0 0 12px rgba(255, 70, 70, 0.8);
  }
</style>



<nav class="navbar navbar-expand-lg navbar-dark navbar-glass">
  <div class="container-fluid">

          <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" 
             href="{{ route('home') }}">
            <strong>Veterinaria</strong>
          </a>
        </li>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">

      <ul class="navbar-nav me-auto ">
        @auth
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('usuarios') ? 'active' : '' }}" 
             href="{{ route('usuarios') }}">
            Usuarios existentes
          </a>
        </li>
        @endauth
      </ul>

      <ul class="navbar-nav ms-auto">



        <li class="nav-item">
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="btn-logout mt-1">Cerrar sesión</button>
          </form>
        </li>

      </ul>

    </div>
  </div>
</nav>
