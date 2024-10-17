<x-ad-layout>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Add Category</h4>
                            <div class="page-title-right">
                                <ol class="m-0 breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Riyallure</a></li>
                                    <li class="breadcrumb-item active">Create Product</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <form method="POST" action="{{ route('admin.add.category') }}" id="createproduct-form" autocomplete="off" class="needs-validation" novalidate enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label class="form-label" for="product-title-input">Category Name</label>
                                        <input type="hidden" class="form-control" id="formAction" name="formAction" value="add">
                                        <input type="text" class="form-control" id="product-title-input" name="name" placeholder="Enter product title" required>
                                        @error('name')
                                            <p class="text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
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
                        <script>document.write(new Date().getFullYear())</script> © Riyallure.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">Design & Develop by Soleric</div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</x-ad-layout>
