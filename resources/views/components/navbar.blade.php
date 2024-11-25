<nav class="navbar navbar-light bg-white fixed-top navbar-expand-lg shadow-sm" style="min-height: 99px">
    <div class="container-xxl">
        <a class="navbar-brand" href="#">Logo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto d-flex align-items-center gap-3">
                <li class="nav-item">
                    <a wire:navigate.prevent href="{{ route('products') }}"
                        class="btn btn-light d-flex align-items-center justify-content-center" style="height: 32px;">
                        Products
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3" href="#">Community</a>
                </li>
                @auth
                    <li class="nav-item">
                        <a class="nav-link px-3" href="{{ route('admin.dashboard') }}">Admin</a>
                    </li>
                @endauth
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="{{ asset('images/321.png') }}" alt="Responsive image"
                                style="max-width: 100%; height: auto; width: 32px; border-radius: 50%">
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Dashboard</a></li>
                            <li><a class="dropdown-item" href="#">Edit Profile</a></li>
                            <li>
                                <form class="d-inline" method="POST" action="{{ route('logout.post') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Log Out</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="d-flex gap-2">
                        <a href="{{ route('login') }}"
                            class="btn btn-light btn-outline-dark px-4 py-2 rounded-3 d-flex justify-content-center align-items-center"
                            style="height: 32px;">Sign in</a>
                        <a href="{{ route('register') }}"
                            class="btn btn-dark px-4 py-2 rounded-3 d-flex justify-content-center align-items-center"
                            style="height: 32px;">Register</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
