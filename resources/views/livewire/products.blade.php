<div class="container-xxl">
    <div class="row py-4">
        <div class="col-12 col-lg-3">
            <div class="border p-3 rounded-3" style="position: sticky; top: 120px;">
                <div class="d-flex justify-content-between align-items-center">
                    <h5>Filters</h5>
                    <button class="btn btn-sm btn-outline-secondary">Clear</button>
                </div>
                <h5>Categories</h5>
                <ul class="list-group list-group-flush">
                    <li class="list-group list-group-item">All</li>
                    <li class="list-group list-group-item">BBB</li>
                    <li class="list-group list-group-item">BBBB</li>
                </ul>
                <div class="mt-4">
                    <h5>Price</h5>
                    <div class="d-flex justify-content-between align-items-center">
                        <span>$0</span>
                        <span>$100</span>
                    </div>
                    <input type="range" min="0" max="100" value="50" id="myRange" class="w-100">
                    <span id="percent"></span>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-9">
            <div class="d-flex flex-wrap justify-content-between align-items-center mb-4">
                <div class="input-group d-flex align-items-center" style="max-width: 400px;">
                    <input type="search" class="form-control rounded-pill" placeholder="Search">
                    <button class="btn position-absolute end-0 z-2" style="border: none; background: none;">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>
                <div class="ms-auto">
                    <button class="btn btn-sm btn-outline-secondary">New</button>
                    <button class="btn btn-sm btn-outx  line-secondary">Price ascending</button>
                    <button class="btn btn-sm btn-outline-secondary">Price descending</button>
                    <button class="btn btn-sm btn-outline-secondary">Rating</button>
                </div>
            </div>

            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                @foreach ($products as $product)
                    <div class="col">
                        <div class="card h-100 border rounded-2">
                            <img src="{{ asset('images/' . $product->images->first()->source) }}"
                                alt="{{ $product->name }}" class="p-1 rounded-3" style="max-width: 100%; height: auto;"
                                loading="lazy">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="card-text">${{ $product->price }}</p>
                                <p class="card-text">{{ $product->description }}</p>
                                <div class="mt-auto">
                                    <button class="btn btn-primary rounded-pill">
                                        <i class="fa-solid fa-cart-plus me-2"></i>Add to Cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
