<x-ad-layout>
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Products</h4>

                            <div class="page-title-right">
                                <ol class="m-0 breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                    <li class="breadcrumb-item active">Products</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">

                    <!-- end col -->

                    <div class="col-xl-12 col-lg-12">
                        <div>
                            <div class="card">
                                <div class="border-0 card-header">
                                    <div class="row g-4">
                                        <div class="col-sm-auto">
                                            <div>
                                                <a href="{{ route('admin.createproduct') }}" class="btn btn-success"
                                                    id="addproduct-btn"><i class="align-bottom ri-add-line me-1"></i>
                                                    Add Product</a>
                                            </div>
                                        </div>
                                        <div class="col-sm">
                                            <div class="d-flex justify-content-sm-end">
                                                <form action="{{ route('admin.product.search') }}" method="get">
                                                    @csrf
                                                    <div class="search-box ms-2">
                                                        <input type="search" name="search" lass="form-control"
                                                            id="searchProductList" placeholder="Search Products...">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <ul class="nav nav-tabs-custom card-header-tabs border-bottom-0"
                                                role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active fw-semibold" data-bs-toggle="tab"
                                                        href="#productnav-all" role="tab">
                                                        All <span
                                                            class="align-middle badge bg-danger-subtle text-danger rounded-pill ms-1">{{ count($products) }}</span>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                        <div class="col-auto">
                                            <div id="selection-element">
                                                <div class="my-n1 d-flex align-items-center text-muted">
                                                    Select <div id="select-content" class="px-1 text-body fw-semibold">
                                                    </div> Result <button type="button"
                                                        class="p-0 btn btn-link link-danger ms-3" data-bs-toggle="modal"
                                                        data-bs-target="#removeItemModal">Remove</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card header -->
                                <div class="card-body">
                                    @if ($searchText && count($products) !== 0)
                                        <div class="my-4 text-3xl">
                                            <h1 class="font-bold">Search Results for "{{ $searchText }}"</h1>
                                        </div>
                                    @endif
                                    @if (count($products) === 0)
                                        <div class="my-4 text-3xl text-center">
                                            <h1 class="font-bold">No results found for "{{ $searchText }}"</h1>
                                        </div>
                                    @else
                                    @endif

                                    <div class="tab-content text-muted">
                                        <div class="tab-pane active" id="productnav-all" role="tabpanel">
                                            <div id="table-product-list-all" class="table-card gridjs-border-none">
                                                <div role="complementary" class="gridjs gridjs-container"
                                                    style="width: 100%;">
                                                    <div class="gridjs-wrapper" style="height: auto;">
                                                        <table role="grid" class="gridjs-table"
                                                            style="height: auto;">
                                                            <thead class="gridjs-thead">
                                                                <tr class="gridjs-tr">
                                                                    <th data-column-id="#"
                                                                        class="gridjs-th gridjs-th-sort text-muted"
                                                                        tabindex="0" style="width: 40px;">
                                                                        <div class="gridjs-th-content">#</div><button
                                                                            tabindex="-1"
                                                                            aria-label="Sort column ascending"
                                                                            title="Sort column ascending"
                                                                            class="gridjs-sort gridjs-sort-neutral"></button>
                                                                    </th>
                                                                    <th data-column-id="product"
                                                                        class="gridjs-th gridjs-th-sort text-muted"
                                                                        tabindex="0" style="width: 360px;">
                                                                        <div class="gridjs-th-content">Product</div>
                                                                        <button tabindex="-1"
                                                                            aria-label="Sort column ascending"
                                                                            title="Sort column ascending"
                                                                            class="gridjs-sort gridjs-sort-neutral"></button>
                                                                    </th>
                                                                    <th data-column-id="product"
                                                                        class="gridjs-th gridjs-th-sort text-muted"
                                                                        tabindex="0" style="width: 360px;">
                                                                        <div class="gridjs-th-content">Category</div>
                                                                        <button tabindex="-1"
                                                                            aria-label="Sort column ascending"
                                                                            title="Sort column ascending"
                                                                            class="gridjs-sort gridjs-sort-neutral"></button>
                                                                    </th>
                                                                    <th data-column-id="stock"
                                                                        class="gridjs-th gridjs-th-sort text-muted"
                                                                        tabindex="0" style="width: 94px;">
                                                                        <div class="gridjs-th-content">Stock</div>
                                                                        <button tabindex="-1"
                                                                            aria-label="Sort column ascending"
                                                                            title="Sort column ascending"
                                                                            class="gridjs-sort gridjs-sort-neutral"></button>
                                                                    </th>
                                                                    <th data-column-id="price"
                                                                        class="gridjs-th gridjs-th-sort text-muted"
                                                                        tabindex="0" style="width: 101px;">
                                                                        <div class="gridjs-th-content">Price</div>
                                                                        <button tabindex="-1"
                                                                            aria-label="Sort column descending"
                                                                            title="Sort column descending"
                                                                            class="gridjs-sort gridjs-sort-asc"></button>
                                                                    </th>
                                                                    <th data-column-id="price"
                                                                        class="gridjs-th gridjs-th-sort text-muted"
                                                                        tabindex="0" style="width: 101px;">
                                                                        <div class="gridjs-th-content">Discount</div>
                                                                        <button tabindex="-1"
                                                                            aria-label="Sort column descending"
                                                                            title="Sort column descending"
                                                                            class="gridjs-sort gridjs-sort-asc"></button>
                                                                    </th>
                                                                    <th data-column-id="price"
                                                                        class="gridjs-th gridjs-th-sort text-muted"
                                                                        tabindex="0" style="width: 101px;">
                                                                        <div class="gridjs-th-content">Shipping Fee
                                                                        </div>
                                                                        <button tabindex="-1"
                                                                            aria-label="Sort column descending"
                                                                            title="Sort column descending"
                                                                            class="gridjs-sort gridjs-sort-asc"></button>
                                                                    </th>
                                                                    <th data-column-id="orders"
                                                                        class="gridjs-th gridjs-th-sort text-muted"
                                                                        tabindex="0" style="width: 84px;">
                                                                        <div class="gridjs-th-content">Orders</div>
                                                                        <button tabindex="-1"
                                                                            aria-label="Sort column ascending"
                                                                            title="Sort column ascending"
                                                                            class="gridjs-sort gridjs-sort-neutral"></button>
                                                                    </th>

                                                                    <th data-column-id="published"
                                                                        class="gridjs-th gridjs-th-sort text-muted"
                                                                        tabindex="0" style="width: 220px;">
                                                                        <div class="gridjs-th-content">Published</div>
                                                                        <button tabindex="-1"
                                                                            aria-label="Sort column ascending"
                                                                            title="Sort column ascending"
                                                                            class="gridjs-sort gridjs-sort-neutral"></button>
                                                                    </th>
                                                                    <th data-column-id="action"
                                                                        class="gridjs-th gridjs-th-sort text-muted"
                                                                        tabindex="0" style="width: 80px;">
                                                                        <div class="gridjs-th-content">Action</div>
                                                                        <button tabindex="-1"
                                                                            aria-label="Sort column ascending"
                                                                            title="Sort column ascending"
                                                                            class="gridjs-sort gridjs-sort-neutral"></button>
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="gridjs-tbody">
                                                                @foreach ($products as $product)
                                                                    <tr class="gridjs-tr">
                                                                        <td data-column-id="#" class="gridjs-td">
                                                                            <span>
                                                                                <div
                                                                                    class="form-check checkbox-product-list">
                                                                                    <input class="form-check-input"
                                                                                        type="checkbox" value="7"
                                                                                        id="checkbox-7"> <label
                                                                                        class="form-check-label"
                                                                                        for="checkbox-7"></label>
                                                                                </div>
                                                                            </span>
                                                                        </td>
                                                                        <td data-column-id="product"
                                                                            class="gridjs-td">
                                                                            <span>
                                                                                <div class="d-flex align-items-center">
                                                                                    <div class="flex-shrink-0 me-3">
                                                                                        <div style="background-image: url('/storage/{{ $product->image }}'); background-size:contain; background-position: center;"
                                                                                            class="p-1 rounded avatar-sm bg-light">

                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="flex-grow-1">
                                                                                        <h5 class="mb-1 fs-14"><a
                                                                                                href="{{ route('admin.productdetails', $product->id) }}"
                                                                                                class="text-body">{{ $product->title }}</a>
                                                                                        </h5>

                                                                                    </div>
                                                                                </div>
                                                                            </span>
                                                                        </td>
                                                                        <td data-column-id="stock" class="gridjs-td">
                                                                            {{ $product->category->name ?? 'Nil' }}
                                                                        </td>
                                                                        <td data-column-id="stock" class="gridjs-td">
                                                                            {{ $product->stock }}
                                                                        </td>
                                                                        <td data-column-id="price" class="gridjs-td">
                                                                            <span>N{{ $product->price }}</span>
                                                                        </td>
                                                                        <td data-column-id="price" class="gridjs-td">
                                                                            <span>N{{ $product->discount }}</span>
                                                                        </td>
                                                                        <td data-column-id="price" class="gridjs-td">
                                                                            <span>N{{ $product->shippingfee }}</span>
                                                                        </td>
                                                                        <td data-column-id="orders" class="gridjs-td">
                                                                            {{ $product->orders }}
                                                                        </td>

                                                                        <td data-column-id="published"
                                                                            class="gridjs-td">
                                                                            <span>{{ $product->created_at }}</span>
                                                                        </td>
                                                                        <td data-column-id="action" class="gridjs-td">
                                                                            <span>
                                                                                <div class="dropdown"><button
                                                                                        class="btn btn-soft-secondary btn-sm dropdown"
                                                                                        type="button"
                                                                                        data-bs-toggle="dropdown"
                                                                                        aria-expanded="false"><i
                                                                                            class="ri-more-fill"></i></button>
                                                                                    <ul
                                                                                        class="dropdown-menu dropdown-menu-end">
                                                                                        <li><a class="dropdown-item"
                                                                                                href="{{ route('admin.productdetails', $product->id) }}"><i
                                                                                                    class="align-bottom ri-eye-fill me-2 text-muted"></i>
                                                                                                View</a></li>

                                                                                        <li><a class="dropdown-item remove-list"
                                                                                                href="{{ route('admin.deleteProduct', $product->id) }}"
                                                                                                onclick="return confirm('Are you sure you want to delete this product?')">
                                                                                                Delete</a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </span>
                                                                        </td>
                                                                    </tr>
                                                                @endforeach


                                                            </tbody>
                                                        </table>
                                                        @if (count($products) === 0)
                                                            <div class="noresult">
                                                                <div class="text-center">
                                                                    <lord-icon
                                                                        src="https://cdn.lordicon.com/msoeawqm.json"
                                                                        trigger="loop"
                                                                        colors="primary:#405189,secondary:#0ab39c"
                                                                        style="width:75px;height:75px"></lord-icon>
                                                                    <h5 class="mt-2">Sorry! No Result Found</h5>
                                                                    <p class="text-muted">No product yet.</p>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    </div>
                                                    <div class="gridjs-footer">
                                                        <div class="gridjs-pagination">
                                                            {!! $products->withQueryString()->links('pagination::bootstrap-5') !!}

                                                        </div>
                                                    </div>
                                                    <div id="gridjs-temp" class="gridjs-temp"></div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- end tab pane -->

                                    <div class="tab-pane" id="productnav-draft" role="tabpanel">
                                        <!-- <div class="py-4 text-center">
                                                <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#405189,secondary:#0ab39c" style="width:72px;height:72px">
                                                </lord-icon>
                                                <h5 class="mt-4">Sorry! No Result Found</h5>
                                            </div> -->

                                    </div>
                                    <!-- end tab pane -->
                                </div>
                                <!-- end tab content -->

                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
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
    <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->


</x-ad-layout>
