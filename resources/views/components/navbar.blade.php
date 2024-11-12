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
                    <button type="button" class="btn btn-light d-flex align-items-center justify-content-center"
                        style="height: 32px;">Products</button>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3" href="#">Community</a>
                </li>
                <li class="d-flex gap-2">
                    <a href = "{{ url('/login') }}"
                        class="btn btn-light btn-outline-dark px-4 py-2 rounded-3 d-flex justify-content-center align-items-center"
                        style="height: 32px;">Sign in</a>
                    <a href="{{ url('/register') }}"
                        class="btn btn-dark px-4 py-2 rounded-3 d-flex justify-content-center align-items-center"
                        style="height: 32px;">Register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
