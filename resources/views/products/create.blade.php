@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/products/create.css')}}">
@endsection

@section('content')
    
<div class="container">
    <section class="create-product-section">
        <div class="section-header">
            <h1>Add New Technology Product</h1>
            <p>Create a new PC component for your TechHub inventory</p>
        </div>

        <div class="form-container">
            <form action="/products" method="POST" enctype="multipart/form-data">
                <!-- CSRF Token for Laravel -->
                @csrf

                <div class="form-grid">
                    <div class="form-group">
                        <label for="product_name">Product Name</label>
                        <input type="text" id="product_name" name="product_name" placeholder="e.g. NVIDIA GeForce RTX 4080" required>
                    </div>

                    <div class="form-group">
                        <label for="category">Category</label>
                        <select id="category" name="category" required>
                            <option value="" selected disabled>Select a category</option>
                            <option value="gpu">Graphics Cards</option>
                            <option value="cpu">Processors</option>
                            <option value="motherboard">Motherboards</option>
                            <option value="ram">Memory (RAM)</option>
                            <option value="storage">Storage (SSD/HDD)</option>
                            <option value="psu">Power Supplies</option>
                            <option value="case">PC Cases</option>
                            <option value="cooling">Cooling Systems</option>
                            <option value="peripherals">Peripherals</option>
                            <option value="accessories">Accessories</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea id="description" name="description" placeholder="Detailed description of the product..." required></textarea>
                </div>

                <div class="form-grid">
                    <div class="form-group">
                        <label for="price">Price ($)</label>
                        <div class="input-group">
                            <span>$</span>
                            <input type="number" id="price" name="price" step="0.01" min="0" placeholder="e.g. 599.99" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="stock">Stock Quantity</label>
                        <input type="number" id="stock" name="stock" min="0" placeholder="e.g. 50" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="brand">Brand</label>
                    <input type="text" id="brand" name="brand" placeholder="e.g. NVIDIA, AMD, Intel" required>
                </div>

                <div class="form-group">
                    <label>Technical Specifications</label>
                    <div class="specs-container" id="specs-container">
                        <div class="spec-item">
                            <input type="text" name="spec_name[]" placeholder="Spec Name e.g. Clock Speed">
                            <input type="text" name="spec_value[]" placeholder="Spec Value e.g. 2.5 GHz">
                            <button type="button" class="remove-spec-btn">-</button>
                        </div>
                    </div>
                    <button type="button" class="btn btn-secondary" id="add-spec-btn">
                        Add Another Specification
                    </button>
                </div>

                <div class="form-group">
                    <label for="tags">Tags</label>
                    <div class="tags-input" id="tags-container">
                        <input type="text" id="tag-input" placeholder="Add a tag and press Enter...">
                        <input type="hidden" name="tags" id="tags-hidden">
                    </div>
                    <p class="help-text">Popular tags: gaming, high-performance, budget, rgb, silent</p>
                </div>

                <div class="form-group">
                    <label>Product Images</label>
                    <div class="image-upload" id="image-upload-container">
                        <div class="upload-icon">📁</div>
                        <p>Drag & drop product images here or click to browse</p>
                        <p class="help-text">Supports JPG, PNG, or WEBP. Max 5MB each.</p>
                        <input type="file" name="product_images[]" id="product-images" style="display: none;" multiple accept="image/*">
                    </div>
                </div>

                <div class="form-group">
                    <div class="checkbox-group">
                        <input type="checkbox" id="featured" name="featured">
                        <label for="featured">Mark as Featured Product</label>
                    </div>
                </div>

                <div class="form-group">
                    <div class="checkbox-group">
                        <input type="checkbox" id="active" name="active" checked>
                        <label for="active">Product is Active and Available for Sale</label>
                    </div>
                </div>

                <div class="form-actions">
                    <button type="button" class="btn btn-secondary">Cancel</button>
                    <button type="submit" class="btn">Create Product</button>
                </div>
            </form>
        </div>
    </section>
</div>

<script>
    // Make the image upload area clickable
    document.getElementById('image-upload-container').addEventListener('click', function() {
        document.getElementById('product-images').click();
    });

    // Add file drag & drop functionality
    const uploadArea = document.getElementById('image-upload-container');
    
    uploadArea.addEventListener('dragover', function(e) {
        e.preventDefault();
        uploadArea.style.borderColor = 'var(--accent-color)';
        uploadArea.style.backgroundColor = 'rgba(0, 191, 255, 0.1)';
    });
    
    uploadArea.addEventListener('dragleave', function(e) {
        e.preventDefault();
        uploadArea.style.borderColor = 'var(--gray)';
        uploadArea.style.backgroundColor = 'var(--light-blue)';
    });
    
    uploadArea.addEventListener('drop', function(e) {
        e.preventDefault();
        uploadArea.style.borderColor = 'var(--gray)';
        uploadArea.style.backgroundColor = 'var(--light-blue)';
        
        const files = e.dataTransfer.files;
        document.getElementById('product-images').files = files;
        
        // Update UI to show selected files
        let fileNames = '';
        for (let i = 0; i < files.length; i++) {
            fileNames += files[i].name + '<br>';
        }
        
        if (fileNames) {
            uploadArea.innerHTML = `
                <div class="upload-icon">✓</div>
                <p>${files.length} file(s) selected:</p>
                <p>${fileNames}</p>
                <p class="help-text">Click to select different files</p>
                <input type="file" name="product_images[]" id="product-images" style="display: none;" multiple accept="image/*">
            `;
        }
    });
    
    // Handle file selection
    document.getElementById('product-images').addEventListener('change', function(e) {
        const files = e.target.files;
        
        if (files.length > 0) {
            let fileNames = '';
            for (let i = 0; i < files.length; i++) {
                fileNames += files[i].name + '<br>';
            }
            
            uploadArea.innerHTML = `
                <div class="upload-icon">✓</div>
                <p>${files.length} file(s) selected:</p>
                <p>${fileNames}</p>
                <p class="help-text">Click to select different files</p>
                <input type="file" name="product_images[]" id="product-images" style="display: none;" multiple accept="image/*">
            `;
        }
    });

    // Handle specs addition and removal
    document.getElementById('add-spec-btn').addEventListener('click', function() {
        const specsContainer = document.getElementById('specs-container');
        const newSpec = document.createElement('div');
        newSpec.className = 'spec-item';
        newSpec.innerHTML = `
            <input type="text" name="spec_name[]" placeholder="Spec Name e.g. Clock Speed">
            <input type="text" name="spec_value[]" placeholder="Spec Value e.g. 2.5 GHz">
            <button type="button" class="remove-spec-btn">-</button>
        `;
        specsContainer.appendChild(newSpec);
        
        // Add event listener to the new remove button
        const removeBtn = newSpec.querySelector('.remove-spec-btn');
        removeBtn.addEventListener('click', function() {
            specsContainer.removeChild(newSpec);
        });
    });
    
    // Add initial remove button functionality
    document.querySelector('.remove-spec-btn').addEventListener('click', function() {
        const specsContainer = document.getElementById('specs-container');
        if (specsContainer.children.length > 1) {
            specsContainer.removeChild(this.parentElement);
        }
    });

    // Handle tags input
    const tagsContainer = document.getElementById('tags-container');
    const tagInput = document.getElementById('tag-input');
    const tagsHidden = document.getElementById('tags-hidden');
    const tags = [];
    
    function updateTags() {
        tagsHidden.value = JSON.stringify(tags);
    }
    
    function addTag(text) {
        if (text && !tags.includes(text)) {
            tags.push(text);
            updateTags();
            
            const tag = document.createElement('div');
            tag.className = 'tag';
            tag.textContent = text;
            
            const closeBtn = document.createElement('span');
            closeBtn.innerHTML = 'x';
            closeBtn.addEventListener('click', function() {
                tagsContainer.removeChild(tag);
                tags.splice(tags.indexOf(text), 1);
                updateTags();
            });
            
            tag.appendChild(closeBtn);
            tagsContainer.insertBefore(tag, tagInput);
        }
        tagInput.value = '';
    }
    
    tagInput.addEventListener('keydown', function(e) {
        if (e.key === 'Enter' || e.key === ',') {
            e.preventDefault();
            const text = tagInput.value.trim();
            addTag(text);
        }
    });
</script>

@endsection