    <!-- Navbar Start -->
    <nav
      class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-4 px-lg-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <a href="{{ route('home') }}" class="navbar-brand p-0">
        <img class="img-fluid me-3 rounded-circle" src="img/icon/icon-10.jpg" alt="Icon" />
        <h1 class="m-0 text-primary">Mojosemi Park</h1>
      </a>
      <button
        type="button"
        class="navbar-toggler"
        data-bs-toggle="collapse"
        data-bs-target="#navbarCollapse"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse py-4 py-lg-0" id="navbarCollapse">
        <div class="navbar-nav ms-auto">
          @auth
              <a class="nav-item nav-link active">Selamat Datang {{auth()->user()->name}}</a>
          @endauth
          <a href="{{ route('home') }}" class="nav-item nav-link active">Home</a>
          <a href="{{route('about')}}" class="nav-item nav-link">Tentang Kami</a>
          <a href="{{route('tiket')}}" class="nav-item nav-link">tiket</a>
          <a href="{{route('tiket.anda')}}" class="nav-item nav-link">Tiket Anda</a>
        </div>
        @auth
        <form action="{{route('logout') }}" method="post" id="form">@csrf</form>
        <button onclick="document.querySelector('#form').submit()" class="btn btn-primary"
        >Keluar<i class="fa fa-arrow-right ms-3"></i
          ></button>
        @endauth
        @guest
          <a href="{{route('login')}}" class="btn btn-primary"
            >Masuk<i class="fa fa-arrow-right ms-3"></i
          ></a>
        @endguest
      </div>
    </nav>
    <!-- Navbar End -->