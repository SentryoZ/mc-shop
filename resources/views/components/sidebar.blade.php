<nav id="sidebar" class="col-md-2 col-lg-2 d-md-block bg-dark sidebar min-vh-100">
    <div class="position-sticky pt-3 h-100">
        <div class="px-3 mb-4">
            <a href="#" class="text-decoration-none">
                <div class="d-flex align-items-center">
                    <span class="ms-2 fs-4 text-white">Admin Panel</span>
                </div>
            </a>
        </div>

        <ul class="nav flex-column">
            <li class="nav-item">
                <a href="{{ route('admin.dashboard') }}" class="nav-link active">
                    <i class="bi bi-house-door me-2"></i>
                    Dashboard
                </a>
            </li>

            <li class="nav-item">
                <button class="btn nav-link w-100 text-start collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#productCollapse" aria-expanded="false" aria-controls="productCollapse">
                    <i class="bi bi-box me-2"></i>
                    Products
                    <i class="fa-solid fa-chevron-down"></i>
                </button>

                <div class="collapse pl" id="productCollapse" style="padding-left: 0.5rem;">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.products.create') }}">
                                <i class="bi bi-box-seam me-2"></i>
                                Add Product
                            </a>
                        </li>

                    </ul>
                </div>
            </li>

            <li class="nav-item mt-4">
                <form class="d-inline" method="POST" action="{{ route('logout.post') }}">
                    @csrf
                    <button type="submit" class="btn btn-outline-light w-100">
                        <i class="bi bi-box-arrow-right me-2"></i>
                        Logout
                    </button>
                </form>
            </li>

        </ul>
    </div>
</nav>
