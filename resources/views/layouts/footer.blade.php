<!-- Footer -->
<footer class="bg-dark text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4 mb-md-0">
                <h5>About Us</h5>
                <p>We are dedicated to providing the best shopping experience with top-quality products at competitive prices.</p>
                <div class="social-icons">
                    <a href="#" class="text-white me-2"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="text-white me-2"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="text-white me-2"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="text-white"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
            <div class="col-md-4 mb-4 mb-md-0">
                <h5>Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ url('/') }}" class="text-white">Home</a></li>
                    <li><a href="{{ url('/shop') }}" class="text-white">Shop</a></li>
                    <li><a href="{{ url('/about') }}" class="text-white">About Us</a></li>
                    <li><a href="{{ url('/contact') }}" class="text-white">Contact Us</a></li>
                    <li><a href="{{ url('/privacy-policy') }}" class="text-white">Privacy Policy</a></li>
                    <li><a href="{{ url('/terms-conditions') }}" class="text-white">Terms & Conditions</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5>Newsletter</h5>
                <p>Subscribe to our newsletter for the latest updates and promotions.</p>
                <form action="{{ url('/subscribe') }}" method="POST">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Your Email" required>
                        <button class="btn btn-primary" type="submit">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>
        <hr class="my-4">
        <div class="row">
            <div class="col-md-6 mb-3 mb-md-0">
                <p class="mb-0">&copy; {{ date('Y') }} {{ config('app.name', 'E-Commerce Store') }}. All rights reserved.</p>
            </div>
            <div class="col-md-6 text-md-end">
                <img src="{{ asset('images/payment-methods.png') }}" alt="Payment Methods" class="img-fluid" style="max-height: 30px;">
            </div>
        </div>
    </div>
</footer>