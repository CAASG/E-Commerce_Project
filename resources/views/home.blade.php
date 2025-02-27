 @extends('layouts.app')

 @section('content')
 <!-- Promotions Banner -->
 <div class="promotion-banner bg-primary text-white py-3">
     <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <div id="promotionCarousel" class="carousel slide" data-bs-ride="carousel">
                     <div class="carousel-inner">
                         <div class="carousel-item active">
                             <div class="d-flex justify-content-center">
                                 <h5><i class="bi bi-tag-fill me-2"></i> SPECIAL OFFER: Get 20% off on all products with
                                     code: WELCOME20</h5>
                             </div>
                         </div>
                         <div class="carousel-item">
                             <div class="d-flex justify-content-center">
                                 <h5><i class="bi bi-truck me-2"></i> FREE SHIPPING on orders over $50!</h5>
                             </div>
                         </div>
                         <div class="carousel-item">
                             <div class="d-flex justify-content-center">
                                 <h5><i class="bi bi-calendar-event me-2"></i> New arrivals every week! Check back often
                                 </h5>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>

 <!-- Hero Section -->
 <div class="hero-section bg-light py-5">
     <div class="container">
         <div class="row align-items-center">
             <div class="col-md-6">
                 <h1>Welcome to Our Store</h1>
                 <p class="lead">Discover amazing products at unbeatable prices.</p>
                 <a href="{{ url('/shop') }}" class="btn btn-primary btn-lg">Shop Now</a>
             </div>
             <div class="col-md-6">
                 <img src="{{ asset('images/hero-image.jpg') }}" alt="Hero Image" class="img-fluid rounded">
             </div>
         </div>
     </div>
 </div>

 <!-- Categories Section -->
 <div class="categories-section py-5">
     <div class="container">
         <div class="row mb-4">
             <div class="col-12">
                 <h2 class="text-center">Shop by Category</h2>
                 <p class="text-center">Browse our wide selection of products</p>
             </div>
         </div>
         <div class="row">
             {{-- @foreach ($categories as $category)
            <div class="col-md-4 mb-4">
                <div class="card category-card">
                    <img src="{{ asset('images/categories/' . $category->image) }}" class="card-img-top" alt="{{ $category->name }}">
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $category->name }}</h5>
                        <p class="card-text">{{ $category->description }}</p>
                        <a href="{{ url('/category/' . $category->slug) }}" class="btn btn-outline-primary">View Products</a>
                    </div>
                </div>
            </div>
            @endforeach --}}
         </div>
     </div>
 </div>

 <!-- Featured Products Section -->
 <div class="featured-products py-5 bg-light">
     <div class="container">
         <div class="row mb-4">
             <div class="col-12">
                 <h2 class="text-center">Featured Products</h2>
                 <p class="text-center">Check out our most popular items</p>
             </div>
         </div>
         <div class="row">
             {{--  @foreach ($featuredProducts as $product)
            <div class="col-md-3 mb-4">
                <div class="card h-100 product-card">
                    <img src="{{ asset('images/products/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text text-muted">{{ Str::limit($product->description, 60) }}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="price">${{ number_format($product->price, 2) }}</span>
                            <a href="{{ url('/product/' . $product->slug) }}" class="btn btn-sm btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach --}}
         </div>
         <div class="row mt-4">
             <div class="col-12 text-center">
                 <a href="{{ url('/shop') }}" class="btn btn-outline-primary">View All Products</a>
             </div>
         </div>
     </div>
 </div>

@endsection
