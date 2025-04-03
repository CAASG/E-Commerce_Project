@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/products/index.css')}}">
@endsection

@section('content')
<header>
    <div class="container">
        <div class="header-content">
            <div class="logo">Tech<span>Hub</span></div>
            <div class="search-bar">
                <input type="text" placeholder="Search for components...">
                <button>🔍</button>
            </div>
            <div class="nav-icons">
                <a href="#">🛒</a>
                <a href="#">👤</a>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<main class="container">
    <!-- Filters -->
    <div class="filters">
        <div class="filter-group">
            <select name="category">
                <option value="">All Categories</option>
                <option value="processors">Processors</option>
                <option value="graphics-cards">Graphics Cards</option>
                <option value="motherboards">Motherboards</option>
                <option value="memory">Memory</option>
                <option value="storage">Storage</option>
                <option value="cases">Cases</option>
                <option value="power-supplies">Power Supplies</option>
            </select>
            <select name="brand">
                <option value="">All Brands</option>
                <option value="intel">Intel</option>
                <option value="amd">AMD</option>
                <option value="nvidia">NVIDIA</option>
                <option value="asus">ASUS</option>
                <option value="msi">MSI</option>
                <option value="corsair">Corsair</option>
            </select>
            <select name="price">
                <option value="">Price Range</option>
                <option value="0-100">$0 - $100</option>
                <option value="100-300">$100 - $300</option>
                <option value="300-500">$300 - $500</option>
                <option value="500+">$500+</option>
            </select>
        </div>
        <div class="filter-group">
            <select name="sort">
                <option value="recommended">Recommended</option>
                <option value="price-low">Price: Low to High</option>
                <option value="price-high">Price: High to Low</option>
                <option value="newest">Newest First</option>
                <option value="rating">Highest Rated</option>
            </select>
            <div class="view-options">
                <button class="active">⊞</button>
                <button>≡</button>
            </div>
        </div>
    </div>

    <!-- Products -->
    <div class="products">

        @foreach ($listProducts as $product)
            <!-- Product 1 -->
            <div class="product-card">
                <div class="product-img">
                    <img src="{{ $product->url_image }}" alt="Product">
                    <div class="product-badge">NEW</div>
                </div>
                <div class="product-info">
                    <div class="product-category">{{ $product->categories_id }}</div>
                    <h3 class="product-name">{{ $product->name }}</h3>
                    <div class="product-ratings">★★★★★ (128)</div>
                    <div class="product-price">
                        <div>
                            <span class="price">{{ $product->price }}</span>
                            <a href="{{ url('/products/{name}') }}"><button class="add-to-cart">See Details</button></a>
                        </div>
                        <button class="add-to-cart"><i class="bi bi-cart-plus"></i></button>
                    </div>
                </div>
            </div>
        @endforeach

        {{ $listProducts->links() }}

    </div>
</main>    
@endsection