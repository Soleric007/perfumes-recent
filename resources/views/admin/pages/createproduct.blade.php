<x-ad-layout>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">{{ isset($product) ? 'Edit Product' : 'Create Product' }}</h4>
                            <div class="page-title-right">
                                <ol class="m-0 breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Riyallure</a></li>
                                    <li class="breadcrumb-item active">
                                        {{ isset($product) ? 'Edit Product' : 'Create Product' }}</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <form method="POST"
                    action="{{ isset($product) ? route('admin.updateProduct', $product->id) : route('admin.storeProduct') }}"
                    id="createproduct-form" autocomplete="off" class="needs-validation" novalidate
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label class="form-label" for="product-title-input">Product Title</label>
                                        <input type="hidden" class="form-control" id="formAction" name="formAction"
                                            value="add">
                                        <input type="text" class="form-control" id="product-title-input"
                                            name="title" placeholder="Enter product title"
                                            value="{{ $product->title ?? '' }}" required>
                                        <div class="invalid-feedback">Please enter a product title.</div>
                                        @error('title')
                                            <p class="text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="category" class="form-label">Category <span
                                                class="text-danger">*</span></label>
                                        <select name="category_id" id="category" class="form-control" required>
                                            <option value="">Select a Category</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}"
                                                    {{ (isset($product) && $product->category_id == $category->id) || old('category_id') == $category->id ? 'selected' : '' }}>
                                                    {{ $category->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="scent_id" class="form-label">Scent</label>
                                        <select name="scent_id" id="scent_id" class="form-control">
                                            <option value="">Select Scent (Optional)</option>
                                            @foreach ($scents as $scent)
                                                <option value="{{ $scent->id }}"
                                                    {{ (isset($product) && $product->scent_id == $scent->id) || old('scent_id') == $scent->id ? 'selected' : '' }}>
                                                    {{ $scent->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('scent_id')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="product-description">Product Description</label>
                                        <textarea class="form-control" id="product-description" name="description" rows="4" required>{{ $product->description ?? '' }}</textarea>
                                        <div class="invalid-feedback">Please enter a product description.</div>
                                        @error('description')
                                            <p class="text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!-- end card -->


                            <div class="card">
                                <div class="card-header">
                                    <h5 class="mb-0 card-title">Product Gallery</h5>
                                </div>
                                <div class="card-body">
                                    <div class="mb-4">
                                        <h5 class="mb-1 fs-14">Product Image</h5>
                                        <p class="text-muted">Add Product main Image.</p>
                                        <div class="text-center">
                                            <div class="position-relative d-inline-block">
                                                <!-- Hidden file input - CRITICAL: must not be display:none on mobile -->
                                                <input class="form-control d-none" name="image"
                                                    id="product-image-input" type="file" accept="image/*" required
                                                    style="position: absolute; opacity: 0; width: 100%; height: 100%; top: 0; left: 0; cursor: pointer; z-index: 10;">

                                                <!-- Clickable area - larger touch target -->
                                                <div class="avatar-lg">
                                                    <div class="rounded avatar-title bg-light"
                                                        style="cursor: pointer; width: 100%; height: 100%;">
                                                        <img src="" id="product-img"
                                                            class="h-auto avatar-md d-none" />
                                                        <div id="image-placeholder" class="text-muted">
                                                            <i class="ri-image-fill" style="font-size: 2rem;"></i>
                                                            <p style="margin-top: 0.5rem; font-size: 0.875rem;">Tap to
                                                                select image</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @error('image')
                                            <p class="text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!-- end card -->

                            <div class="card">
                                <div class="card-header">
                                    <ul class="nav nav-tabs-custom card-header-tabs border-bottom-0" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab"
                                                href="#addproduct-general-info" role="tab">General Info</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="addproduct-general-info" role="tabpanel">
                                            <div class="row">
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="stocks-input">Stocks</label>
                                                        <input type="number" name="stock" class="form-control"
                                                            id="stocks-input" placeholder="Stocks"
                                                            value="{{ $product->stock ?? '' }}" required>
                                                        <div class="invalid-feedback">Please enter product stocks.
                                                        </div>
                                                        @error('stock')
                                                            <p class="text-sm text-red-600">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="mb-3">
                                                        <label class="form-label"
                                                            for="product-price-input">Price</label>
                                                        <div class="input-group has-validation">
                                                            <span class="input-group-text"
                                                                id="product-price-addon">N</span>
                                                            <input type="number" step="0.01" name="price"
                                                                class="form-control" id="product-price-input"
                                                                placeholder="Enter price"
                                                                aria-describedby="product-price-addon"
                                                                value="{{ $product->price ?? '' }}" required>
                                                            <div class="invalid-feedback">Please enter a product price.
                                                            </div>
                                                        </div>
                                                        @error('price')
                                                            <p class="text-sm text-red-600">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="mb-3">
                                                        <label class="form-label"
                                                            for="product-discount-input">Discount</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text"
                                                                id="product-discount-addon">N</span>
                                                            <input type="number" step="0.01" name="discount"
                                                                class="form-control" id="product-discount-input"
                                                                placeholder="Enter discount"
                                                                aria-describedby="product-discount-addon"
                                                                value="{{ $product->discount ?? '' }}">
                                                            <div class="invalid-feedback">Please enter a valid
                                                                discount.</div>
                                                            @error('discount')
                                                                <p class="text-sm text-red-600">{{ $message }}</p>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="mb-3">
                                                        <label class="form-label"
                                                            for="product-discount-input">Shipping Fee</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text"
                                                                id="product-discount-addon">N</span>
                                                            <input type="number" step="0.01" name="shippingfee"
                                                                class="form-control" id="product-discount-input"
                                                                placeholder="Enter Shipping Fee"
                                                                aria-describedby="product-discount-addon"
                                                                value="{{ $product->shippingfee ?? '' }}">
                                                            <div class="invalid-feedback">Please enter a valid amount.
                                                            </div>
                                                            @error('shippingfee')
                                                                <p class="text-sm text-red-600">{{ $message }}</p>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Perfume Variants Section -->
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="mb-0 card-title">Perfume Variants (Optional)</h5>
                                    <small class="text-muted">Add different sizes and types (spray/oil)</small>
                                </div>
                                <div class="card-body">
                                    <div id="variants-container">
                                        <!-- Variants will be added here -->
                                        @if (isset($product) && $product->variants->count())
    @foreach ($product->variants as $variant)
        <div class="mb-3 variant-item card" style="border: 1px solid #dee2e6;">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <label class="form-label">Type</label>
                        <select name="variants_edit[{{ $variant->id }}][type]" class="form-control" required>
                            <option value="spray" {{ $variant->type == 'spray' ? 'selected' : '' }}>Spray</option>
                            <option value="oil" {{ $variant->type == 'oil' ? 'selected' : '' }}>Oil</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Size (e.g., 50ml)</label>
                        <input type="text" name="variants_edit[{{ $variant->id }}][size]" class="form-control" placeholder="e.g., 50ml" value="{{ $variant->size }}" required>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Price</label>
                        <div class="input-group">
                            <span class="input-group-text">N</span>
                            <input type="number" step="0.01" name="variants_edit[{{ $variant->id }}][price]" class="form-control" placeholder="Price" value="{{ $variant->price }}" required>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Stock</label>
                        <input type="number" name="variants_edit[{{ $variant->id }}][stock]" class="form-control" placeholder="Stock" value="{{ $variant->stock ?? 0 }}" required min="0">
                    </div>
                </div>
                <input type="hidden" name="existing_variants[]" value="{{ $variant->id }}">
                <button type="button" class="mt-2 btn btn-danger btn-sm remove-variant-btn">Remove</button>
            </div>
        </div>
    @endforeach
@endif
                                    </div>
                                    <button type="button" class="btn btn-primary btn-sm" id="add-variant-btn">
                                        <i class="ri-add-line me-1"></i>Add Variant
                                    </button>
                                </div>
                            </div>
                            <!-- end card -->
                            <div class="mb-3 text-end">
                                <button type="submit" class="btn btn-success w-sm">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>
                            document.write(new Date().getFullYear())
                        </script> © Riyallure.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">Design & Develop by Soleric</div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script>
    let variantCount = 0;

    document.getElementById('add-variant-btn').addEventListener('click', function() {
        const container = document.getElementById('variants-container');
        variantCount++;

        const variantHtml = `
            <div class="mb-3 variant-item card" style="border: 1px solid #dee2e6;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <label class="form-label">Type</label>
                            <select name="variants[${variantCount}][type]" class="form-control" required>
                                <option value="">Select Type</option>
                                <option value="spray">Spray</option>
                                <option value="oil">Oil</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Size (e.g., 50ml)</label>
                            <input type="text" name="variants[${variantCount}][size]" class="form-control" placeholder="e.g., 50ml" required>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Price</label>
                            <div class="input-group">
                                <span class="input-group-text">N</span>
                                <input type="number" step="0.01" name="variants[${variantCount}][price]" class="form-control" placeholder="Price" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Stock</label>
                            <input type="number" name="variants[${variantCount}][stock]" class="form-control" placeholder="Stock" required min="0" value="0">
                        </div>
                    </div>
                    <button type="button" class="mt-2 btn btn-danger btn-sm remove-variant-btn">Remove</button>
                </div>
            </div>
        `;

        container.insertAdjacentHTML('beforeend', variantHtml);
    });

    document.addEventListener('click', function(e) {
        if (e.target.classList.contains('remove-variant-btn')) {
            e.target.closest('.variant-item').remove();
        }
    });
</script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const fileInput = document.getElementById('product-image-input');
            const productImg = document.getElementById('product-img');
            const imagePlaceholder = document.getElementById('image-placeholder');
            const uploadArea = productImg.closest('.avatar-title');

            // Make the entire upload area clickable
            uploadArea.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                fileInput.click();
            });

            // Handle file selection
            fileInput.addEventListener('change', function(e) {
                const file = this.files[0];

                if (file) {
                    const reader = new FileReader();

                    reader.onload = function(event) {
                        productImg.src = event.target.result;
                        productImg.classList.remove('d-none');
                        if (imagePlaceholder) {
                            imagePlaceholder.style.display = 'none';
                        }
                    };

                    reader.readAsDataURL(file);
                }
            });

            // Optional: Allow drag and drop
            uploadArea.addEventListener('dragover', function(e) {
                e.preventDefault();
                uploadArea.style.backgroundColor = '#f0f0f0';
            });

            uploadArea.addEventListener('dragleave', function() {
                uploadArea.style.backgroundColor = '';
            });

            uploadArea.addEventListener('drop', function(e) {
                e.preventDefault();
                uploadArea.style.backgroundColor = '';

                const files = e.dataTransfer.files;
                if (files.length > 0) {
                    fileInput.files = files;
                    const event = new Event('change', {
                        bubbles: true
                    });
                    fileInput.dispatchEvent(event);
                }
            });
        });
    </script>
    
</x-ad-layout>
