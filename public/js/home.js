document.addEventListener('DOMContentLoaded', function() {
    // Initialize promotion banner carousel with auto-play
    const promotionCarousel = document.getElementById('promotionCarousel');
    if (promotionCarousel) {
        const carousel = new bootstrap.Carousel(promotionCarousel, {
            interval: 3000,
            ride: 'carousel',
            pause: 'hover'
        });
    }

    // Product card hover effects
    const productCards = document.querySelectorAll('.product-card');
    productCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.querySelector('.btn-sm').classList.remove('btn-primary');
            this.querySelector('.btn-sm').classList.add('btn-danger');
        });
        
        card.addEventListener('mouseleave', function() {
            this.querySelector('.btn-sm').classList.remove('btn-danger');
            this.querySelector('.btn-sm').classList.add('btn-primary');
        });
    });

    // Newsletter subscription form validation
    const newsletterForm = document.querySelector('form[action*="subscribe"]');
    if (newsletterForm) {
        newsletterForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const emailInput = this.querySelector('input[type="email"]');
            
            if (!validateEmail(emailInput.value)) {
                // Show error
                showToast('Please enter a valid email address.', 'error');
                return;
            }
            
            // Simulate sending subscription (would be AJAX in a real app)
            showToast('Thank you for subscribing to our newsletter!', 'success');
            emailInput.value = '';
        });
    }

    // Add to cart functionality
    const addToCartButtons = document.querySelectorAll('.add-to-cart-btn');
    addToCartButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const productId = this.getAttribute('data-product-id');
            const productName = this.getAttribute('data-product-name');
            
            // Simulate adding to cart (would be AJAX in a real app)
            showToast(`${productName} added to your cart!`, 'success');
            
            // Update cart icon count (example)
            updateCartCount(1);
        });
    });

    // Back to top button functionality
    window.addEventListener('scroll', function() {
        const backToTopBtn = document.getElementById('back-to-top');
        if (!backToTopBtn) return;
        
        if (window.pageYOffset > 300) {
            backToTopBtn.classList.add('show');
        } else {
            backToTopBtn.classList.remove('show');
        }
    });

    // Sticky header on scroll
    let lastScrollTop = 0;
    const navbar = document.querySelector('.navbar');
    if (navbar) {
        window.addEventListener('scroll', function() {
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            
            if (scrollTop > 100) {
                navbar.classList.add('navbar-sticky');
                
                if (scrollTop > lastScrollTop) {
                    // Scrolling down
                    navbar.classList.add('navbar-hide');
                } else {
                    // Scrolling up
                    navbar.classList.remove('navbar-hide');
                }
            } else {
                navbar.classList.remove('navbar-sticky');
            }
            
            lastScrollTop = scrollTop;
        });
    }

    // Helper function for email validation
    function validateEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(String(email).toLowerCase());
    }

    // Toast notification system
    function showToast(message, type = 'info') {
        // Create toast container if it doesn't exist
        let toastContainer = document.querySelector('.toast-container');
        if (!toastContainer) {
            toastContainer = document.createElement('div');
            toastContainer.className = 'toast-container position-fixed bottom-0 end-0 p-3';
            document.body.appendChild(toastContainer);
        }
        
        // Create toast
        const toastEl = document.createElement('div');
        toastEl.className = `toast align-items-center text-white bg-${type === 'success' ? 'success' : type === 'error' ? 'danger' : 'primary'} border-0`;
        toastEl.setAttribute('role', 'alert');
        toastEl.setAttribute('aria-live', 'assertive');
        toastEl.setAttribute('aria-atomic', 'true');
        
        // Toast content
        toastEl.innerHTML = `
            <div class="d-flex">
                <div class="toast-body">
                    ${message}
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        `;
        
        // Add toast to container
        toastContainer.appendChild(toastEl);
        
        // Initialize and show toast
        const toast = new bootstrap.Toast(toastEl, {
            autohide: true,
            delay: 3000
        });
        toast.show();
        
        // Remove toast after it's hidden
        toastEl.addEventListener('hidden.bs.toast', function() {
            this.remove();
        });
    }

    // Helper function to update cart count
    function updateCartCount(increment = 0) {
        const cartBadge = document.querySelector('.navbar .badge');
        if (!cartBadge) return;
        
        let currentCount = parseInt(cartBadge.textContent) || 0;
        currentCount += increment;
        cartBadge.textContent = currentCount;
        
        // Animate badge
        cartBadge.classList.add('pulse');
        setTimeout(() => {
            cartBadge.classList.remove('pulse');
        }, 500);
    }

    // Initialize tooltips
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    tooltipTriggerList.map(function(tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });

    // Add lazy loading to images
    const images = document.querySelectorAll('img');
    images.forEach(img => {
        if (!img.hasAttribute('loading')) {
            img.setAttribute('loading', 'lazy');
        }
    });
});