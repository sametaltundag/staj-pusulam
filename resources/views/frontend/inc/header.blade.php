<nav class="navbar navbar-dark" aria-label="Dark offcanvas navbar" style="background-color: #00a8ff;">
    <div class="container" style="height: 70px !important;">
        <a class="navbar-brand" href="{{ route('dashboard') }}"
            style="font-size: 35px;font-family: var(--font-poppins);"><i class="far fa-compass"></i></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarDark"
            aria-controls="offcanvasNavbarDark">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasNavbarDark"
            aria-labelledby="offcanvasNavbarDarkLabel">
            <div class="offcanvas-header">
                @php
                    $roleFolder = Auth::user()->role === 'employer' ? 'employers' : 'users';
                @endphp
                <h5 class="offcanvas-title" id="offcanvasNavbarDarkLabel">
                <img src="{{ Auth::user()->photo ? asset("images/{$roleFolder}/" . Auth::user()->photo) : asset("images/{$roleFolder}/user.png") }}"
                     class="mx-2"
                     style="height: 50px; width: 50px; object-fit: cover; object-position: center; border-radius: 50%">
                {{ Auth::user()->name }} <i class="fas fa-code"></i>
                </h5>
                <button type="button" style="border: none; outline: none" class="btn-close btn-close-white"
                    data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                @if (Auth::user()->role != 'employer')
                <ul class="navbar-nav justify-content-start flex-grow-1 pe-3">
                    <li class="nav-item item-nav">
                        <a class="nav-link" aria-current="page" href="{{ route('dashboard') }}"><i class="fas fa-home"></i> Anasayfa</a>
                    </li>
                    <li class="nav-item item-nav"><a class="nav-link" href="{{ route('profile') }}"><i class="far fa-user-circle"></i> Profilim</a></li>
                    <li class="nav-item item-nav"><a class="nav-link" href="#"><i class="fas fa-tasks"></i> Başvurularım</a></li>
                    <li class="nav-item item-nav"><a class="nav-link" href="{{route('adverts')}}"><i class="fas fa-th"></i> İlanlar</a></li>
                    <li class="nav-item item-nav"><a class="nav-link" href="#"><i class="far fa-heart"></i> Pusulama Göre İlanlar</a></li>
                    </li>
                </ul>
                @endif

                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="btn btn-sm btn-outline-danger w-100" type="submit">Çıkış <i class="fas fa-sign-out-alt"></i></button>
                </form>
            </div>
        </div>
    </div>
</nav>
