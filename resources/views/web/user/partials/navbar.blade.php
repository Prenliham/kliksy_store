<nav class="navbar navbar-expand-lg bg-primary navbar-dark position-sticky top-0">
  <div class="container">
    <a class="navbar-brand font-primary fw-semibold" href="#">{{ config('app.name') }}</a>
    <div class="d-flex gap-3 align-items-center order-lg-1">
      @auth
      <div class="d-flex gap-1 align-items-center">
        {{-- cart  --}}
        <a href="" class="text-decoration-none text-light"><x-icon name="love" width="28"></x-icon></a>
        {{-- vaf products  --}}
        <a href="" class="text-decoration-none text-light"><x-icon name="cart" width="28"></x-icon></a>
        {{-- fotoProfile  --}}
        <a href="" class="rounded-circle overflow-hidden">
          <img src="{{ asset('img/profil-default.jpg') }}" alt="" style="width: 28px;" class="aspect-ratio-1 border">
        </a>
      </div>
      @else
      <a href="{{ route('login') }}" class="nav-link text-light opacity-75 d-flex align-items-center gap-1 opacity-100-hover">
          <x-icon name="login"></x-icon>
          <span class="fw-medium">Login</span>
      </a>
      @endauth
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ route('home.index') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is('products*') ? 'active' : '' }}" href="/products">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
      </ul>
    </div>
  </div>
</nav>