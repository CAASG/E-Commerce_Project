@extends('layouts.products')

@section('css')
<link rel="stylesheet" href="{{asset('css/products/show.css')}}">
@endsection

@section('content')
    
<div class="container">
    <div class="product-details">
        <div class="breadcrumb">
            <a href="/">Home</a>
            <span>/</span>
            <a href="/products">Products</a>
            <span>/</span>
            <a href="/products/category/gpu">Graphics Cards</a>
            <span>/</span>
            NVIDIA GeForce RTX 4080 Super Gaming OC
        </div>
        
        <div class="product-grid">
            <div class="product-gallery">
                <div class="product-badges">
                    <div class="badge featured">Featured</div>
                    <div class="badge new">New</div>
                </div>
                
                <div class="featured-image">
                    <img src="{{ $product->url_image ?? 'https://via.placeholder.com/640x400/2A3990/FFFFFF?text=Imagen+Temporal' }}" 
                    alt="produc-placeholder" 
                    id="main-product-image">
                </div>
                
                <div class="thumbnail-container">
                    <div class="thumbnail active" data-image="/api/placeholder/800/600">
                        <img src="/api/placeholder/800/600" alt="NVIDIA GeForce RTX 4080 Super Gaming OC - Main View">
                    </div>
                    <div class="thumbnail" data-image="/api/placeholder/800/600">
                        <img src="/api/placeholder/800/600" alt="NVIDIA GeForce RTX 4080 Super Gaming OC - Side View">
                    </div>
                    <div class="thumbnail" data-image="/api/placeholder/800/600">
                        <img src="/api/placeholder/800/600" alt="NVIDIA GeForce RTX 4080 Super Gaming OC - Back View">
                    </div>
                    <div class="thumbnail" data-image="/api/placeholder/800/600">
                        <img src="/api/placeholder/800/600" alt="NVIDIA GeForce RTX 4080 Super Gaming OC - Box">
                    </div>
                </div>
            </div>
            
            <div class="product-info">
                <h1>NVIDIA GeForce RTX 4080 Super Gaming OC</h1>
                <span class="brand">Gigabyte</span>
                
                <div class="rating">
                    <div class="stars">★★★★★</div>
                    <span class="review-count">4.8 (128 reviews)</span>
                </div>
                
                <div class="price-container">
                    <span class="current-price">$999.99</span>
                    <span class="original-price">$1,199.99</span>
                    <span class="discount-badge">-17%</span>
                </div>
                
                <div class="stock-status in-stock">
                    <span>✓</span> In Stock (18 units) - Ships within 24 hours
                </div>
                
                <div class="spec-highlight">
                    <div class="spec-highlight-item">
                        <div class="spec-highlight-icon">🔧</div>
                        <div class="spec-highlight-text">
                            <div class="spec-highlight-name">CUDA Cores</div>
                            <div>10,240</div>
                        </div>
                    </div>
                    <div class="spec-highlight-item">
                        <div class="spec-highlight-icon">⚡</div>
                        <div class="spec-highlight-text">
                            <div class="spec-highlight-name">Boost Clock</div>
                            <div>2.6 GHz</div>
                        </div>
                    </div>
                    <div class="spec-highlight-item">
                        <div class="spec-highlight-icon">💾</div>
                        <div class="spec-highlight-text">
                            <div class="spec-highlight-name">Memory</div>
                            <div>16GB GDDR6X</div>
                        </div>
                    </div>
                </div>
                
                <div class="quantity-control">
                    <button class="quantity-btn" id="decrease-quantity">-</button>
                    <input type="number" min="1" max="18" value="1" class="quantity-input" id="quantity">
                    <button class="quantity-btn" id="increase-quantity">+</button>
                </div>
                
                <div class="btn-container">
                    <a href="#" class="btn">Add to Cart</a>
                    <a href="#" class="btn btn-secondary">Add to Wishlist</a>
                </div>
                
                <div class="tags-container">
                    <div class="tag">Gaming</div>
                    <div class="tag">Ray Tracing</div>
                    <div class="tag">DLSS</div>
                    <div class="tag">High-End</div>
                    <div class="tag">RGB</div>
                </div>
            </div>
        </div>
        
        <div class="product-details-tabs">
            <div class="tabs-header">
                <button class="tab-btn active" data-tab="description">Description</button>
                <button class="tab-btn" data-tab="specifications">Specifications</button>
                <button class="tab-btn" data-tab="reviews">Reviews (128)</button>
                <button class="tab-btn" data-tab="shipping">Shipping & Returns</button>
            </div>
            
            <div class="tab-content active" id="description">
                <p>Experience unparalleled gaming performance with the NVIDIA GeForce RTX 4080 Super Gaming OC. This powerhouse GPU is built with Gigabyte's premium cooling solution and features the latest NVIDIA Ada Lovelace architecture.</p>
                
                <p>The RTX 4080 Super delivers exceptional frame rates in today's most demanding games, even at 4K resolution. With advanced ray tracing capabilities and DLSS 3.0 technology, you'll enjoy stunningly realistic graphics with optimal performance.</p>
                
                <p>This Gigabyte Gaming OC edition features a factory overclock for even better performance, RGB Fusion 2.0 lighting that can be synchronized with other RGB components, and WINDFORCE cooling system with alternate spinning fans that ensure optimal thermal performance even during intense gaming sessions.</p>
                
                <p>Whether you're a hardcore gamer, content creator, or AI enthusiast, the RTX 4080 Super provides the computational power you need for any demanding task.</p>
            </div>
            
            <div class="tab-content" id="specifications">
                <div class="specs-container">
                    <div class="spec-item">
                        <div class="spec-name">GPU</div>
                        <div class="spec-value">NVIDIA GeForce RTX 4080 Super</div>
                    </div>
                    <div class="spec-item">
                        <div class="spec-name">CUDA Cores</div>
                        <div class="spec-value">10,240</div>
                    </div>
                    <div class="spec-item">
                        <div class="spec-name">Core Clock</div>
                        <div class="spec-value">2.21 GHz</div>
                    </div>
                    <div class="spec-item">
                        <div class="spec-name">Boost Clock</div>
                        <div class="spec-value">2.6 GHz (OC Mode)</div>
                    </div>
                    <div class="spec-item">
                        <div class="spec-name">Memory Size</div>
                        <div class="spec-value">16 GB</div>
                    </div>
                    <div class="spec-item">
                        <div class="spec-name">Memory Type</div>
                        <div class="spec-value">GDDR6X</div>
                    </div>
                    <div class="spec-item">
                        <div class="spec-name">Memory Bus</div>
                        <div class="spec-value">256-bit</div>
                    </div>
                    <div class="spec-item">
                        <div class="spec-name">Memory Bandwidth</div>
                        <div class="spec-value">736 GB/s</div>
                    </div>
                    <div class="spec-item">
                        <div class="spec-name">Card Length</div>
                        <div class="spec-value">340 mm</div>
                    </div>
                    <div class="spec-item">
                        <div class="spec-name">Power Connectors</div>
                        <div class="spec-value">16-pin (adapter included)</div>
                    </div>
                    <div class="spec-item">
                        <div class="spec-name">Recommended PSU</div>
                        <div class="spec-value">850W</div>
                    </div>
                    <div class="spec-item">
                        <div class="spec-name">Outputs</div>
                        <div class="spec-value">3x DisplayPort 1.4a, 1x HDMI 2.1</div>
                    </div>
                    <div class="spec-item">
                        <div class="spec-name">Maximum Resolution</div>
                        <div class="spec-value">7680x4320 (8K)</div>
                    </div>
                    <div class="spec-item">
                        <div class="spec-name">DirectX Support</div>
                        <div class="spec-value">DirectX 12 Ultimate</div>
                    </div>
                    <div class="spec-item">
                        <div class="spec-name">Cooling</div>
                        <div class="spec-value">WINDFORCE Triple Fan</div>
                    </div>
                    <div class="spec-item">
                        <div class="spec-name">RGB Lighting</div>
                        <div class="spec-value">RGB Fusion 2.0</div>
                    </div>
                </div>
            </div>
            
            <div class="tab-content" id="reviews">
                <p>Customer reviews content would go here. This would typically be dynamically loaded from your database.</p>
            </div>
            
            <div class="tab-content" id="shipping">
                <h3>Shipping Information</h3>
                <p>Free shipping on all orders over $100. Standard shipping takes 2-4 business days. Express shipping is available for an additional fee.</p>
                
                <h3>Return Policy</h3>
                <p>We accept returns within 30 days of delivery for a full refund. The product must be in its original packaging and in unused condition. Please contact our support team to initiate a return.</p>
                
                <h3>Warranty</h3>
                <p>This product comes with a 3-year manufacturer warranty from Gigabyte. Extended warranty options are available at checkout.</p>
            </div>
        </div>
    </div>
    
    <div class="related-products">
        <h2 class="section-header">You May Also Like</h2>
        
        <div class="product-grid-display">
            <div class="product-card">
                <div class="card-image">
                    <img src="/api/placeholder/400/300" alt="AMD Radeon RX 7900 XTX">
                </div>
                <div class="card-content">
                    <div class="card-title">AMD Radeon RX 7900 XTX</div>
                    <div class="card-brand">Sapphire</div>
                    <div class="card-price">$949.99</div>
                </div>
            </div>
            
            <div class="product-card">
                <div class="card-image">
                    <img src="/api/placeholder/400/300" alt="NVIDIA GeForce RTX 4070 Ti">
                </div>
                <div class="card-content">
                    <div class="card-title">NVIDIA GeForce RTX 4070 Ti</div>
                    <div class="card-brand">MSI</div>
                    <div class="card-price">$799.99</div>
                </div>
            </div>
            
            <div class="product-card">
                <div class="card-image">
                    <img src="/api/placeholder/400/300" alt="AMD Ryzen 9 7950X3D">
                </div>
                <div class="card-content">
                    <div class="card-title">AMD Ryzen 9 7950X3D</div>
                    <div class="card-brand">AMD</div>
                    <div class="card-price">$649.99</div>
                </div>
            </div>
            
            <div class="product-card">
                <div class="card-image">
                    <img src="/api/placeholder/400/300" alt="1TB Samsung 990 PRO SSD">
                </div>
                <div class="card-content">
                    <div class="card-title">Samsung 990 PRO 1TB PCIe 4.0 SSD</div>
                    <div class="card-brand">Samsung</div>
                    <div class="card-price">$129.99</div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Thumbnail gallery functionality
    const thumbnails = document.querySelectorAll('.thumbnail');
    const mainImage = document.getElementById('main-product-image');
    
    thumbnails.forEach(thumbnail => {
        thumbnail.addEventListener('click', function() {
            // Remove active class from all thumbnails
            thumbnails.forEach(t => t.classList.remove('active'));
            
            // Add active class to clicked thumbnail
            this.classList.add('active');
            
            // Update main image
            const imageUrl = this.getAttribute('data-image');
            mainImage.src = imageUrl;
        });
    });
    
    // Quantity control
    const decreaseBtn = document.getElementById('decrease-quantity');
    const increaseBtn = document.getElementById('increase-quantity');
    const quantityInput = document.getElementById('quantity');
    
    decreaseBtn.addEventListener('click', function() {
        let currentValue = parseInt(quantityInput.value);
        if (currentValue > 1) {
            quantityInput.value = currentValue - 1;
        }
    });
    
    increaseBtn.addEventListener('click', function() {
        let currentValue = parseInt(quantityInput.value);
        let maxValue = parseInt(quantityInput.getAttribute('max'));
        if (currentValue < maxValue) {
            quantityInput.value = currentValue + 1;
        }
    });
    
    // Tabs functionality
    const tabButtons = document.querySelectorAll('.tab-btn');
    const tabContents = document.querySelectorAll('.tab-content');
    
    tabButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Remove active class from all buttons and contents
            tabButtons.forEach(btn => btn.classList.remove('active'));
            tabContents.forEach(content => content.classList.remove('active'));
            
            // Add active class to clicked button
            this.classList.add('active');
            
            // Show corresponding content
            const tabId = this.getAttribute('data-tab');
            document.getElementById(tabId).classList.add('active');
        });
    });
</script>

@endsection

