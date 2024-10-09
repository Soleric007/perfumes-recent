<x-ad-layout>
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Product Details</h4>

                            <div class="page-title-right">
                                <ol class="m-0 breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                    <li class="breadcrumb-item active">Product Details</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row gx-lg-5">
                                    <div class="mx-auto col-xl-4 col-md-8">
                                        <div class="product-img-slider sticky-side-div">
                                            <div class="p-2 rounded swiper product-thumbnail-slider bg-light">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <img src="/storage/{{$product->image}}" alt=""
                                                            class="img-fluid d-block" />
                                                    </div>

                                                </div>

                                            </div>
                                            <!-- end swiper thumbnail slide -->

                                            <!-- end swiper nav slide -->
                                        </div>
                                    </div>
                                    <!-- end col -->

                                    <div class="col-xl-8">
                                        <div class="mt-5 mt-xl-0">
                                            <div class="d-flex">
                                                <div class="flex-grow-1">
                                                    <h4 class="text-2xl uppercase">{{ $product->title }}</h4>
                                                    <div class="flex-wrap gap-3 hstack">
                                                        <div class="text-muted">Published : <span
                                                                class="text-body fw-medium">{{ $product->created_at }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <div>
                                                        <a onclick="return confirm('Are you sure you want to delete this product?')" href="{{route('admin.deleteProduct', $product->id)}}" class="text-white bg-red-600 hover:bg-red-400 btn btn-light"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Delete">Delete Product</a>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="mt-4 row">
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="p-2 border border-dashed rounded">
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-sm me-2">
                                                                <div
                                                                    class="bg-transparent rounded avatar-title text-success fs-24">
                                                                    <i class="ri-money-dollar-circle-fill"></i>
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <p class="mb-1 text-muted">Price :</p>
                                                                <h5 class="mb-0">${{ $product->price }}</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="p-2 border border-dashed rounded">
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-sm me-2">
                                                                <div
                                                                    class="bg-transparent rounded avatar-title text-success fs-24">
                                                                    <i class="ri-file-copy-2-fill"></i>
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <p class="mb-1 text-muted">No. of Orders :</p>
                                                                <h5 class="mb-0">2,234</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="p-2 border border-dashed rounded">
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-sm me-2">
                                                                <div
                                                                    class="bg-transparent rounded avatar-title text-success fs-24">
                                                                    <i class="ri-stack-fill"></i>
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <p class="mb-1 text-muted">Available Stocks :</p>
                                                                <h5 class="mb-0">{{ $product->stock }}</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col -->

                                            </div>


                                            <!-- end row -->

                                            <div class="mt-4 text-muted">
                                                <h5 class="fs-14">Description :</h5>
                                                <p>{{$product->description}}</p>
                                            </div>


                                            <!-- product-content -->


                                            <!-- end card body -->
                                        </div>
                                    </div>
                                    <!-- end col -->
                                </div>
                                <!-- end row -->
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>
                            document.write(new Date().getFullYear())
                        </script> © Velzon.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Design & Develop by Themesbrand
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</x-ad-layout>
