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
                                                <div class="search-box ms-2">
                                                    <input type="text" class="form-control" id="searchProductList"
                                                        placeholder="Search Products...">
                                                    <i class="ri-search-line search-icon"></i>
                                                </div>
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
                                                                            </span></td>
                                                                        <td data-column-id="product"
                                                                            class="gridjs-td">
                                                                            <span>
                                                                                <div class="d-flex align-items-center">
                                                                                    <div class="flex-shrink-0 me-3">
                                                                                        <div
                                                                                            class="p-1 rounded avatar-sm bg-light">
                                                                                            <img src="/storage/{{$product->image}}"
                                                                                                alt=""
                                                                                                class="img-fluid d-block">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="flex-grow-1">
                                                                                        <h5 class="mb-1 fs-14"><a
                                                                                                href="{{route('admin.productdetails', $product->id)}}"
                                                                                                class="text-body">{{$product->title}}</a>
                                                                                        </h5>

                                                                                    </div>
                                                                                </div>
                                                                            </span>
                                                                        </td>
                                                                        <td data-column-id="stock" class="gridjs-td">
                                                                            {{$product->stock}}
                                                                        </td>
                                                                        <td data-column-id="price" class="gridjs-td">
                                                                            <span>${{$product->price}}</span>
                                                                        </td>
                                                                        <td data-column-id="orders" class="gridjs-td">
                                                                            45
                                                                        </td>

                                                                        <td data-column-id="published"
                                                                            class="gridjs-td">
                                                                            <span>{{$product->created_at}}</span>
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
                                                                                                href="{{route('admin.productdetails', $product->id)}}"><i
                                                                                                    class="align-bottom ri-eye-fill me-2 text-muted"></i>
                                                                                                View</a></li>

                                                                                        <li><a class="dropdown-item remove-list"
                                                                                                href="{{route('admin.deleteProduct', $product->id)}}"
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
                                                    </div>
                                                    <div class="gridjs-footer">
                                                        <div class="gridjs-pagination">
                                                            <div role="status" aria-live="polite"
                                                                class="gridjs-summary" title="Page 1 of 2">Showing
                                                                <b>1</b> to <b>10</b> of <b>12</b> results
                                                            </div>
                                                            <div class="gridjs-pages"><button tabindex="0"
                                                                    role="button" disabled="" title="Previous"
                                                                    aria-label="Previous"
                                                                    class="">Previous</button><button
                                                                    tabindex="0" role="button"
                                                                    class="gridjs-currentPage" title="Page 1"
                                                                    aria-label="Page 1">1</button><button
                                                                    tabindex="0" role="button" class=""
                                                                    title="Page 2"
                                                                    aria-label="Page 2">2</button><button
                                                                    tabindex="0" role="button" title="Next"
                                                                    aria-label="Next" class="">Next</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="gridjs-temp" class="gridjs-temp"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end tab pane -->

                                        <div class="tab-pane" id="productnav-published" role="tabpanel">
                                            <div id="table-product-list-published"
                                                class="table-card gridjs-border-none">
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
                                                                            aria-label="Sort column ascending"
                                                                            title="Sort column ascending"
                                                                            class="gridjs-sort gridjs-sort-neutral"></button>
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
                                                                    <th data-column-id="rating"
                                                                        class="gridjs-th gridjs-th-sort text-muted"
                                                                        tabindex="0" style="width: 105px;">
                                                                        <div class="gridjs-th-content">Rating</div>
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
                                                                <tr class="gridjs-tr">
                                                                    <td data-column-id="#" class="gridjs-td"><span>
                                                                            <div
                                                                                class="form-check checkbox-product-list">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" value="undefined"
                                                                                    id="checkboxpublished-undefined">
                                                                                <label class="form-check-label"
                                                                                    for="checkbox-undefined"></label>
                                                                            </div>
                                                                        </span></td>
                                                                    <td data-column-id="product" class="gridjs-td">
                                                                        <span>
                                                                            <div class="d-flex align-items-center">
                                                                                <div class="flex-shrink-0 me-3">
                                                                                    <div
                                                                                        class="p-1 rounded avatar-sm bg-light">
                                                                                        <img src="assets/images/products/img-2.png"
                                                                                            alt=""
                                                                                            class="img-fluid d-block">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="flex-grow-1">
                                                                                    <h5 class="mb-1 fs-14"><a
                                                                                            href="apps-ecommerce-{{route('shop.product.detail', $product->id)}}"
                                                                                            class="text-body">Urban
                                                                                            Ladder Pashe Chair</a></h5>
                                                                                    <p class="mb-0 text-muted">Category
                                                                                        : <span
                                                                                            class="fw-medium">Furniture</span>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </span>
                                                                    </td>
                                                                    <td data-column-id="stock" class="gridjs-td">06
                                                                    </td>
                                                                    <td data-column-id="price" class="gridjs-td">
                                                                        <span>$160.00</span>
                                                                    </td>
                                                                    <td data-column-id="orders" class="gridjs-td">30
                                                                    </td>
                                                                    <td data-column-id="rating" class="gridjs-td">
                                                                        <span><span
                                                                                class="badge bg-light text-body fs-12 fw-medium"><i
                                                                                    class="mdi mdi-star text-warning me-1"></i>4.3</span></span>
                                                                    </td>
                                                                    <td data-column-id="published" class="gridjs-td">
                                                                        <span>06 Jan, 2021<small
                                                                                class="text-muted ms-1">01:31
                                                                                PM</small></span>
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
                                                                                            href="apps-ecommerce-{{route('shop.product.detail', $product->id)}}"><i
                                                                                                class="align-bottom ri-eye-fill me-2 text-muted"></i>
                                                                                            View</a></li>
                                                                                    <li><a class="dropdown-item"
                                                                                            href="apps-ecommerce-add-product.html"><i
                                                                                                class="align-bottom ri-pencil-fill me-2 text-muted"></i>
                                                                                            Edit</a></li>
                                                                                    <li class="dropdown-divider"></li>
                                                                                    <li><a class="dropdown-item remove-list"
                                                                                            href="#"
                                                                                            data-id="undefined"
                                                                                            data-bs-toggle="modal"
                                                                                            data-bs-target="#removeItemModal"><i
                                                                                                class="align-bottom ri-delete-bin-fill me-2 text-muted"></i>
                                                                                            Delete</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                                <tr class="gridjs-tr">
                                                                    <td data-column-id="#" class="gridjs-td"><span>
                                                                            <div
                                                                                class="form-check checkbox-product-list">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" value="undefined"
                                                                                    id="checkboxpublished-undefined">
                                                                                <label class="form-check-label"
                                                                                    for="checkbox-undefined"></label>
                                                                            </div>
                                                                        </span></td>
                                                                    <td data-column-id="product" class="gridjs-td">
                                                                        <span>
                                                                            <div class="d-flex align-items-center">
                                                                                <div class="flex-shrink-0 me-3">
                                                                                    <div
                                                                                        class="p-1 rounded avatar-sm bg-light">
                                                                                        <img src="assets/images/products/img-6.png"
                                                                                            alt=""
                                                                                            class="img-fluid d-block">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="flex-grow-1">
                                                                                    <h5 class="mb-1 fs-14"><a
                                                                                            href="apps-ecommerce-{{route('shop.product.detail', $product->id)}}"
                                                                                            class="text-body">Half
                                                                                            Sleeve T-Shirts (Blue)</a>
                                                                                    </h5>
                                                                                    <p class="mb-0 text-muted">Category
                                                                                        : <span
                                                                                            class="fw-medium">Fashion</span>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </span>
                                                                    </td>
                                                                    <td data-column-id="stock" class="gridjs-td">15
                                                                    </td>
                                                                    <td data-column-id="price" class="gridjs-td">
                                                                        <span>$125.00</span>
                                                                    </td>
                                                                    <td data-column-id="orders" class="gridjs-td">48
                                                                    </td>
                                                                    <td data-column-id="rating" class="gridjs-td">
                                                                        <span><span
                                                                                class="badge bg-light text-body fs-12 fw-medium"><i
                                                                                    class="mdi mdi-star text-warning me-1"></i>4.2</span></span>
                                                                    </td>
                                                                    <td data-column-id="published" class="gridjs-td">
                                                                        <span>12 Oct, 2021<small
                                                                                class="text-muted ms-1">04:55
                                                                                PM</small></span>
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
                                                                                            href="apps-ecommerce-{{route('shop.product.detail', $product->id)}}"><i
                                                                                                class="align-bottom ri-eye-fill me-2 text-muted"></i>
                                                                                            View</a></li>
                                                                                    <li><a class="dropdown-item"
                                                                                            href="apps-ecommerce-add-product.html"><i
                                                                                                class="align-bottom ri-pencil-fill me-2 text-muted"></i>
                                                                                            Edit</a></li>
                                                                                    <li class="dropdown-divider"></li>
                                                                                    <li><a class="dropdown-item remove-list"
                                                                                            href="#"
                                                                                            data-id="undefined"
                                                                                            data-bs-toggle="modal"
                                                                                            data-bs-target="#removeItemModal"><i
                                                                                                class="align-bottom ri-delete-bin-fill me-2 text-muted"></i>
                                                                                            Delete</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                                <tr class="gridjs-tr">
                                                                    <td data-column-id="#" class="gridjs-td"><span>
                                                                            <div
                                                                                class="form-check checkbox-product-list">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" value="undefined"
                                                                                    id="checkboxpublished-undefined">
                                                                                <label class="form-check-label"
                                                                                    for="checkbox-undefined"></label>
                                                                            </div>
                                                                        </span></td>
                                                                    <td data-column-id="product" class="gridjs-td">
                                                                        <span>
                                                                            <div class="d-flex align-items-center">
                                                                                <div class="flex-shrink-0 me-3">
                                                                                    <div
                                                                                        class="p-1 rounded avatar-sm bg-light">
                                                                                        <img src="assets/images/products/img-4.png"
                                                                                            alt=""
                                                                                            class="img-fluid d-block">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="flex-grow-1">
                                                                                    <h5 class="mb-1 fs-14"><a
                                                                                            href="apps-ecommerce-{{route('shop.product.detail', $product->id)}}"
                                                                                            class="text-body">Fabric
                                                                                            Dual Tone Living Room
                                                                                            Chair</a></h5>
                                                                                    <p class="mb-0 text-muted">
                                                                                        Category : <span
                                                                                            class="fw-medium">Furniture</span>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </span>
                                                                    </td>
                                                                    <td data-column-id="stock" class="gridjs-td">15
                                                                    </td>
                                                                    <td data-column-id="price" class="gridjs-td">
                                                                        <span>$140.00</span>
                                                                    </td>
                                                                    <td data-column-id="orders" class="gridjs-td">40
                                                                    </td>
                                                                    <td data-column-id="rating" class="gridjs-td">
                                                                        <span><span
                                                                                class="badge bg-light text-body fs-12 fw-medium"><i
                                                                                    class="mdi mdi-star text-warning me-1"></i>4.2</span></span>
                                                                    </td>
                                                                    <td data-column-id="published" class="gridjs-td">
                                                                        <span>19 Apr, 2021<small
                                                                                class="text-muted ms-1">02:51
                                                                                PM</small></span></td>
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
                                                                                            href="apps-ecommerce-{{route('shop.product.detail', $product->id)}}"><i
                                                                                                class="align-bottom ri-eye-fill me-2 text-muted"></i>
                                                                                            View</a></li>
                                                                                    <li><a class="dropdown-item"
                                                                                            href="apps-ecommerce-add-product.html"><i
                                                                                                class="align-bottom ri-pencil-fill me-2 text-muted"></i>
                                                                                            Edit</a></li>
                                                                                    <li class="dropdown-divider"></li>
                                                                                    <li><a class="dropdown-item remove-list"
                                                                                            href="#"
                                                                                            data-id="undefined"
                                                                                            data-bs-toggle="modal"
                                                                                            data-bs-target="#removeItemModal"><i
                                                                                                class="align-bottom ri-delete-bin-fill me-2 text-muted"></i>
                                                                                            Delete</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                                <tr class="gridjs-tr">
                                                                    <td data-column-id="#" class="gridjs-td"><span>
                                                                            <div
                                                                                class="form-check checkbox-product-list">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" value="undefined"
                                                                                    id="checkboxpublished-undefined">
                                                                                <label class="form-check-label"
                                                                                    for="checkbox-undefined"></label>
                                                                            </div>
                                                                        </span></td>
                                                                    <td data-column-id="product" class="gridjs-td">
                                                                        <span>
                                                                            <div class="d-flex align-items-center">
                                                                                <div class="flex-shrink-0 me-3">
                                                                                    <div
                                                                                        class="p-1 rounded avatar-sm bg-light">
                                                                                        <img src="assets/images/products/img-4.png"
                                                                                            alt=""
                                                                                            class="img-fluid d-block">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="flex-grow-1">
                                                                                    <h5 class="mb-1 fs-14"><a
                                                                                            href="apps-ecommerce-{{route('shop.product.detail', $product->id)}}"
                                                                                            class="text-body">350 ml
                                                                                            Glass Grocery Container</a>
                                                                                    </h5>
                                                                                    <p class="mb-0 text-muted">
                                                                                        Category : <span
                                                                                            class="fw-medium">Grocery</span>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </span>
                                                                    </td>
                                                                    <td data-column-id="stock" class="gridjs-td">10
                                                                    </td>
                                                                    <td data-column-id="price" class="gridjs-td">
                                                                        <span>$125.00</span>
                                                                    </td>
                                                                    <td data-column-id="orders" class="gridjs-td">48
                                                                    </td>
                                                                    <td data-column-id="rating" class="gridjs-td">
                                                                        <span><span
                                                                                class="badge bg-light text-body fs-12 fw-medium"><i
                                                                                    class="mdi mdi-star text-warning me-1"></i>4.5</span></span>
                                                                    </td>
                                                                    <td data-column-id="published" class="gridjs-td">
                                                                        <span>26 Mar, 2021<small
                                                                                class="text-muted ms-1">11:40
                                                                                AM</small></span></td>
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
                                                                                            href="apps-ecommerce-{{route('shop.product.detail', $product->id)}}"><i
                                                                                                class="align-bottom ri-eye-fill me-2 text-muted"></i>
                                                                                            View</a></li>
                                                                                    <li><a class="dropdown-item"
                                                                                            href="apps-ecommerce-add-product.html"><i
                                                                                                class="align-bottom ri-pencil-fill me-2 text-muted"></i>
                                                                                            Edit</a></li>
                                                                                    <li class="dropdown-divider"></li>
                                                                                    <li><a class="dropdown-item remove-list"
                                                                                            href="#"
                                                                                            data-id="undefined"
                                                                                            data-bs-toggle="modal"
                                                                                            data-bs-target="#removeItemModal"><i
                                                                                                class="align-bottom ri-delete-bin-fill me-2 text-muted"></i>
                                                                                            Delete</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                                <tr class="gridjs-tr">
                                                                    <td data-column-id="#" class="gridjs-td"><span>
                                                                            <div
                                                                                class="form-check checkbox-product-list">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" value="undefined"
                                                                                    id="checkboxpublished-undefined">
                                                                                <label class="form-check-label"
                                                                                    for="checkbox-undefined"></label>
                                                                            </div>
                                                                        </span></td>
                                                                    <td data-column-id="product" class="gridjs-td">
                                                                        <span>
                                                                            <div class="d-flex align-items-center">
                                                                                <div class="flex-shrink-0 me-3">
                                                                                    <div
                                                                                        class="p-1 rounded avatar-sm bg-light">
                                                                                        <img src="assets/images/products/img-5.png"
                                                                                            alt=""
                                                                                            class="img-fluid d-block">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="flex-grow-1">
                                                                                    <h5 class="mb-1 fs-14"><a
                                                                                            href="apps-ecommerce-{{route('shop.product.detail', $product->id)}}"
                                                                                            class="text-body">Crux
                                                                                            Motorsports Helmet</a></h5>
                                                                                    <p class="mb-0 text-muted">
                                                                                        Category : <span
                                                                                            class="fw-medium">Automotive
                                                                                            Accessories</span></p>
                                                                                </div>
                                                                            </div>
                                                                        </span>
                                                                    </td>
                                                                    <td data-column-id="stock" class="gridjs-td">08
                                                                    </td>
                                                                    <td data-column-id="price" class="gridjs-td">
                                                                        <span>$135.00</span>
                                                                    </td>
                                                                    <td data-column-id="orders" class="gridjs-td">55
                                                                    </td>
                                                                    <td data-column-id="rating" class="gridjs-td">
                                                                        <span><span
                                                                                class="badge bg-light text-body fs-12 fw-medium"><i
                                                                                    class="mdi mdi-star text-warning me-1"></i>4.4</span></span>
                                                                    </td>
                                                                    <td data-column-id="published" class="gridjs-td">
                                                                        <span>30 Mar, 2021<small
                                                                                class="text-muted ms-1">09:42
                                                                                AM</small></span></td>
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
                                                                                            href="apps-ecommerce-{{route('shop.product.detail', $product->id)}}"><i
                                                                                                class="align-bottom ri-eye-fill me-2 text-muted"></i>
                                                                                            View</a></li>
                                                                                    <li><a class="dropdown-item"
                                                                                            href="apps-ecommerce-add-product.html"><i
                                                                                                class="align-bottom ri-pencil-fill me-2 text-muted"></i>
                                                                                            Edit</a></li>
                                                                                    <li class="dropdown-divider"></li>
                                                                                    <li><a class="dropdown-item remove-list"
                                                                                            href="#"
                                                                                            data-id="undefined"
                                                                                            data-bs-toggle="modal"
                                                                                            data-bs-target="#removeItemModal"><i
                                                                                                class="align-bottom ri-delete-bin-fill me-2 text-muted"></i>
                                                                                            Delete</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="gridjs-footer">
                                                        <div class="gridjs-pagination">
                                                            <div role="status" aria-live="polite"
                                                                class="gridjs-summary" title="Page 1 of 1">Showing
                                                                <b>1</b> to <b>5</b> of <b>5</b> results
                                                            </div>
                                                            <div class="gridjs-pages"><button tabindex="0"
                                                                    role="button" disabled="" title="Previous"
                                                                    aria-label="Previous"
                                                                    class="">Previous</button><button
                                                                    tabindex="0" role="button"
                                                                    class="gridjs-currentPage" title="Page 1"
                                                                    aria-label="Page 1">1</button><button
                                                                    tabindex="0" role="button" disabled=""
                                                                    title="Next" aria-label="Next"
                                                                    class="">Next</button></div>
                                                        </div>
                                                    </div>
                                                    <div id="gridjs-temp" class="gridjs-temp"></div>
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

    <!-- removeItemModal -->
    <div id="removeItemModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        id="btn-close"></button>
                </div>
                <div class="modal-body">
                    <div class="mt-2 text-center">
                        <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop"
                            colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                        <div class="pt-2 mx-4 mt-4 fs-15 mx-sm-5">
                            <h4>Are you sure ?</h4>
                            <p class="mx-4 mb-0 text-muted">Are you sure you want to remove this product ?</p>
                        </div>
                    </div>
                    <div class="gap-2 mt-4 mb-2 d-flex justify-content-center">
                        <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn w-sm btn-danger " id="delete-product">Yes, Delete
                            It!</button>
                    </div>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</x-ad-layout>
