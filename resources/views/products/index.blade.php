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
        <!-- Product 1 -->
        <div class="product-card">
            <div class="product-img">
                <img src="/api/placeholder/400/320" alt="NVIDIA RTX 4080">
                <div class="product-badge">NEW</div>
            </div>
            <div class="product-info">
                <div class="product-category">Graphics Cards</div>
                <h3 class="product-name">NVIDIA GeForce RTX 4080 16GB GDDR6X</h3>
                <div class="product-ratings">★★★★★ (128)</div>
                <div class="product-price">
                    <div>
                        <span class="old-price">$1,299.99</span>
                        <span class="price">$1,199.99</span>
                    </div>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
            </div>
        </div>

        <!-- Product 2 -->
        <div class="product-card">
            <div class="product-img">
                <img src="/api/placeholder/400/320" alt="AMD Ryzen 9 7950X">
            </div>
            <div class="product-info">
                <div class="product-category">Processors</div>
                <h3 class="product-name">AMD Ryzen 9 7950X 16-Core, 32-Thread</h3>
                <div class="product-ratings">★★★★☆ (96)</div>
                <div class="product-price">
                    <div>
                        <span class="price">$589.99</span>
                    </div>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
            </div>
        </div>

        <!-- Product 3 -->
        <div class="product-card">
            <div class="product-img">
                <img src="/api/placeholder/400/320" alt="ASUS ROG Maximus Z790">
                <div class="product-badge">BEST SELLER</div>
            </div>
            <div class="product-info">
                <div class="product-category">Motherboards</div>
                <h3 class="product-name">ASUS ROG Maximus Z790 Hero</h3>
                <div class="product-ratings">★★★★★ (64)</div>
                <div class="product-price">
                    <div>
                        <span class="old-price">$629.99</span>
                        <span class="price">$599.99</span>
                    </div>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
            </div>
        </div>

        <!-- Product 4 -->
        <div class="product-card">
            <div class="product-img">
                <img src="/api/placeholder/400/320" alt="Corsair Vengeance RGB Pro">
            </div>
            <div class="product-info">
                <div class="product-category">Memory</div>
                <h3 class="product-name">Corsair Vengeance RGB Pro 32GB (2x16GB) DDR4 3600</h3>
                <div class="product-ratings">★★★★☆ (210)</div>
                <div class="product-price">
                    <div>
                        <span class="price">$119.99</span>
                    </div>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
            </div>
        </div>

        <!-- Product 5 -->
        <div class="product-card">
            <div class="product-img">
                <img src="/api/placeholder/400/320" alt="Samsung 990 PRO">
                <div class="product-badge">HOT</div>
            </div>
            <div class="product-info">
                <div class="product-category">Storage</div>
                <h3 class="product-name">Samsung 990 PRO 2TB NVMe SSD</h3>
                <div class="product-ratings">★★★★★ (152)</div>
                <div class="product-price">
                    <div>
                        <span class="old-price">$249.99</span>
                        <span class="price">$189.99</span>
                    </div>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
            </div>
        </div>

        <!-- Product 6 -->
        <div class="product-card">
            <div class="product-img">
                <img src="/api/placeholder/400/320" alt="Intel Core i9-13900K">
            </div>
            <div class="product-info">
                <div class="product-category">Processors</div>
                <h3 class="product-name">Intel Core i9-13900K Desktop Processor</h3>
                <div class="product-ratings">★★★★☆ (87)</div>
                <div class="product-price">
                    <div>
                        <span class="price">$549.99</span>
                    </div>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
            </div>
        </div>

        <!-- Product 7 -->
        <div class="product-card">
            <div class="product-img">
                <img src="/api/placeholder/400/320" alt="NZXT H5 Flow">
            </div>
            <div class="product-info">
                <div class="product-category">Cases</div>
                <h3 class="product-name">NZXT H5 Flow Compact ATX Mid-Tower</h3>
                <div class="product-ratings">★★★★☆ (73)</div>
                <div class="product-price">
                    <div>
                        <span class="price">$94.99</span>
                    </div>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
            </div>
        </div>

        <!-- Product 8 -->
        <div class="product-card">
            <div class="product-img">
                <img src="/api/placeholder/400/320" alt="Corsair RM850x">
            </div>
            <div class="product-info">
                <div class="product-category">Power Supplies</div>
                <h3 class="product-name">Corsair RM850x 850W 80+ Gold Fully Modular</h3>
                <div class="product-ratings">★★★★★ (142)</div>
                <div class="product-price">
                    <div>
                        <span class="old-price">$159.99</span>
                        <span class="price">$139.99</span>
                    </div>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Pagination -->
    <div class="pagination">
        <button>←</button>
        <button class="active">1</button>
        <button>2</button>
        <button>3</button>
        <button>4</button>
        <button>→</button>
    </div>
</main>    
@endsection