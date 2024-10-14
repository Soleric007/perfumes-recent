<x-ad-layout>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Create Product</h4>
                            <div class="page-title-right">
                                <ol class="m-0 breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                    <li class="breadcrumb-item active">Create Product</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <form method="POST" action="{{ route('admin.storeProduct') }}" id="createproduct-form" autocomplete="off" class="needs-validation" novalidate enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label class="form-label" for="product-title-input">Product Title</label>
                                        <input type="hidden" class="form-control" id="formAction" name="formAction" value="add">
                                        <input type="text" class="form-control" id="product-title-input" name="title" placeholder="Enter product title" required>
                                        <div class="invalid-feedback">Please enter a product title.</div>
                                        @error('title')
                                            <p class="text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="product-description">Product Description</label>
                                        <textarea class="form-control" id="product-description" name="description" rows="4" required></textarea>
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
                                                <div class="position-absolute top-100 start-100 translate-middle">
                                                    <label for="product-image-input" class="mb-0" data-bs-toggle="tooltip" data-bs-placement="right" title="Select Image">
                                                        <div class="avatar-xs">
                                                            <div class="border cursor-pointer avatar-title bg-light rounded-circle text-muted">
                                                                <i class="ri-image-fill"></i>
                                                            </div>
                                                        </div>
                                                    </label>
                                                    <input class="form-control d-none" name="image" id="product-image-input" type="file" accept="image/*" required>
                                                </div>
                                                <div class="avatar-lg">
                                                    <div class="rounded avatar-title bg-light">
                                                        <img src="" id="product-img" class="h-auto avatar-md d-none" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="invalid-feedback d-block">Please select a product image.</div> --}}
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
                                            <a class="nav-link active" data-bs-toggle="tab" href="#addproduct-general-info" role="tab">General Info</a>
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
                                                        <input type="number" name="stock" class="form-control" id="stocks-input" placeholder="Stocks" required>
                                                        <div class="invalid-feedback">Please enter product stocks.</div>
                                                        @error('stock')
                                                            <p class="text-sm text-red-600">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="product-price-input">Price</label>
                                                        <div class="input-group has-validation">
                                                            <span class="input-group-text" id="product-price-addon">$</span>
                                                            <input type="number" step="0.01" name="price" class="form-control" id="product-price-input" placeholder="Enter price" aria-describedby="product-price-addon" required>
                                                            <div class="invalid-feedback">Please enter a product price.</div>
                                                        </div>
                                                        @error('price')
                                                            <p class="text-sm text-red-600">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="product-discount-input">Discount</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text" id="product-discount-addon">%</span>
                                                            <input type="number" step="0.01" name="discount" class="form-control" id="product-discount-input" placeholder="Enter discount" aria-describedby="product-discount-addon">
                                                            <div class="invalid-feedback">Please enter a valid discount.</div>
                                                            @error('discount')
                                                                <p class="text-sm text-red-600">{{ $message }}</p>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="product-discount-input">Shipping Fee</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text" id="product-discount-addon">$</span>
                                                            <input type="number" step="0.01" name="shippingfee" class="form-control" id="product-discount-input" placeholder="Enter Shipping Fee" aria-describedby="product-discount-addon">
                                                            <div class="invalid-feedback">Please enter a valid amount.</div>
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
                        <script>document.write(new Date().getFullYear())</script> © Velzon.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">Design & Develop by Themesbrand</div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</x-ad-layout>
