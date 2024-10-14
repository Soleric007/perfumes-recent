<x-ad-layout>
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Orders</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                    <li class="breadcrumb-item active">Orders</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card" id="orderList">
                            <div class="card-header border-0">
                                <div class="row align-items-center gy-3">
                                    <div class="col-sm">
                                        <h5 class="card-title mb-0">Order History</h5>
                                    </div>
                                    <div class="col-sm-auto">
                                        {{-- <div class="d-flex gap-1 flex-wrap">
                                            <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModal"><i class="ri-add-line align-bottom me-1"></i> Create Order</button>
                                            <button type="button" class="btn btn-info"><i class="ri-file-download-line align-bottom me-1"></i> Import</button>
                                            <button class="btn btn-soft-danger" id="remove-actions" onClick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i></button>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="card-body border border-dashed border-end-0 border-start-0">
                                <form>
                                    <div class="row g-3">
                                        <div class="col-xxl-5 col-sm-6">
                                            <div class="search-box">
                                                <input type="text" class="form-control search"
                                                    placeholder="Search for order ID, customer, order status or something...">
                                                <i class="ri-search-line search-icon"></i>
                                            </div>
                                        </div>



                                        <div class="col-xxl-1 col-sm-4">
                                            <div>
                                                <button type="button" class="btn btn-primary w-100"
                                                    onclick="SearchData();"> <i
                                                        class="ri-equalizer-fill me-1 align-bottom"></i>
                                                    Filters
                                                </button>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </form>
                            </div>
                            <div class="card-body pt-0">
                                <div>
                                    <ul class="nav nav-tabs nav-tabs-custom nav-success mb-3" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active All py-3" data-bs-toggle="tab" id="All"
                                                href="#home1" role="tab" aria-selected="true">
                                                <i class="ri-store-2-fill me-1 align-bottom"></i> All Orders
                                            </a>
                                        </li>
                                        
                                    </ul>

                                    <div class="table-responsive table-card mb-1">
                                        <table class="table table-nowrap align-middle" id="orderTable">
                                            <thead class="text-muted table-light">
                                                <tr class="text-uppercase">
                                                    <th class="sort" data-sort="id">Order ID</th>
                                                    <th class="sort" data-sort="customer_name">Customer</th>
                                                    <th class="sort" data-sort="product_name">Product</th>
                                                    <th class="sort" data-sort="date">Order Date</th>
                                                    <th class="sort" data-sort="amount">Amount</th>
                                                    <th class="sort" data-sort="payment">Payment Method</th>
                                                    <th class="sort" data-sort="status">Payment Status</th>
                                                    <th class="sort" data-sort="status">Delivery Status</th>
                                                    <th class="sort" data-sort="city">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="list form-check-all">
                                                @foreach ($orders as $order)
                                                    <tr>
                                                        <td class="id"><a href="apps-ecommerce-order-details.html"
                                                                class="fw-medium link-primary">#{{ $order->id }}</a>
                                                        </td>
                                                        <td class="customer_name">
                                                            {{ $order->first_name . ' ' . $order->last_name }}</td>
                                                        <!-- Loop through items for each order -->
                                                        <td class="product_name">
                                                            @foreach ($order->items as $item)
                                                                {{ $item->product->title }} <br>
                                                            @endforeach
                                                        </td>
                                                        </td>
                                                        <td class="date">{{ $order->created_at }}</td>
                                                        <td class="amount">${{ $order->total_amount }}</td>
                                                        <td class="payment">{{ $order->payment_method }}</td>
                                                        <td class="status"><span
                                                                class="badge {{$order->payment_status === 'paid' ? 'bg-success-subtle text-white' : 'bg-warning-subtle text-warning'}} text-warning text-uppercase">{{ $order->payment_status }}</span>
                                                        </td>
                                                        <td class="status"><span
                                                                class="badge {{$order->delivery_status === 'delivered' ? 'bg-success-subtle text-white' : 'bg-warning-subtle text-warning'}} text-uppercase">{{ $order->delivery_status }}</span>
                                                        </td>
                                                        <td>
                                                            <ul class="list-inline hstack gap-2 mb-0">
                                                                <li class="list-inline-item" data-bs-toggle="tooltip"
                                                                    data-bs-trigger="hover" data-bs-placement="top"
                                                                    title="View">
                                                                    <a href="{{ route('admin.orderdetails', $order->id) }}"
                                                                        class="btn btn-primary text-white text-primary d-inline-block">
                                                                        View
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item edit"
                                                                    data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                                    data-bs-placement="top" title="Edit">
                                                                    <a aria-disabled="{{$order->delivery_status === "delivered" ? true : false}}" href="{{route('deliver.order', $order->id)}}"

                                                                        class="btn btn-success text-white text-primary d-inline-block edit-item-btn">
                                                                        Delivered
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item" data-bs-toggle="tooltip"
                                                                    data-bs-trigger="hover" data-bs-placement="top"
                                                                    title="Remove">
                                                                    <a class="btn btn-danger text-white d-inline-block remove-item-btn"
                                                                        onclick="return confirm('Are you sure you want to delete this order?')"
                                                                        href="{{ route('order.delete', $order->id) }}">
                                                                        Delete
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        @if (count($orders) === 0)
                                            <div class="noresult">
                                                <div class="text-center">
                                                    <lord-icon src="https://cdn.lordicon.com/msoeawqm.json"
                                                        trigger="loop" colors="primary:#405189,secondary:#0ab39c"
                                                        style="width:75px;height:75px"></lord-icon>
                                                    <h5 class="mt-2">Sorry! No Result Found</h5>
                                                    <p class="text-muted">No orders yet.</p>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <div class="pagination-wrap hstack gap-2">
                                            <div class="gridjs-pagination">
                                                {!! $orders->withQueryString()->links('pagination::bootstrap-5') !!}

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <!--end col-->
                </div>
                <!--end row-->

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
