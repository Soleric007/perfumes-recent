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
                                <ol class="m-0 breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Riyallure</a></li>
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
                            <div class="border-0 card-header">
                                <div class="row align-items-center gy-3">
                                    <div class="col-sm">
                                        <h5 class="mb-0 card-title">Order History</h5>
                                    </div>
                                    <div class="col-sm-auto">
                                        {{-- <div class="flex-wrap gap-1 d-flex">
                                            <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModal"><i class="align-bottom ri-add-line me-1"></i> Create Order</button>
                                            <button type="button" class="btn btn-info"><i class="align-bottom ri-file-download-line me-1"></i> Import</button>
                                            <button class="btn btn-soft-danger" id="remove-actions" onClick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i></button>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>

                            <div class="pt-0 card-body">
                                <div>
                                    <ul class="mb-3 nav nav-tabs nav-tabs-custom nav-success" role="tablist">
                                        <li class="nav-item">
                                            <a class="py-3 nav-link active All" data-bs-toggle="tab" id="All"
                                                href="#home1" role="tab" aria-selected="true">
                                                <i class="align-bottom ri-store-2-fill me-1"></i> All Orders
                                            </a>
                                        </li>

                                    </ul>

                                    <div class="mb-1 table-responsive table-card">
                                        <table class="table align-middle table-nowrap" id="orderTable">
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
                                                        <td class="amount">N{{ $order->total_amount }}</td>
                                                        <td class="payment">{{ $order->payment_method }}</td>
                                                        <td class="status"><span
                                                                class="badge {{$order->payment_status === 'paid' ? 'bg-success-subtle text-white' : 'bg-warning-subtle text-warning'}} text-warning text-uppercase">{{ $order->payment_status }}</span>
                                                        </td>
                                                        <td class="status"><span
                                                                class="badge {{$order->delivery_status === 'delivered' ? 'bg-success-subtle text-white' : 'bg-warning-subtle text-warning'}} text-uppercase">{{ $order->delivery_status }}</span>
                                                        </td>
                                                        <td>
                                                            <ul class="gap-2 mb-0 list-inline hstack">
                                                                <li class="list-inline-item" data-bs-toggle="tooltip"
                                                                    data-bs-trigger="hover" data-bs-placement="top"
                                                                    title="View">
                                                                    <a href="{{ route('admin.orderdetails', $order->id) }}"
                                                                        class="text-white btn btn-primary text-primary d-inline-block">
                                                                        View
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item edit"
                                                                    data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                                    data-bs-placement="top" title="Edit">
                                                                    <a aria-disabled="{{$order->delivery_status === "delivered" ? true : false}}" href="{{route('deliver.order', $order->id)}}"

                                                                        class="text-white btn btn-success text-primary d-inline-block edit-item-btn">
                                                                        Delivered
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item edit"
                                                                    data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                                    data-bs-placement="top" title="Edit">
                                                                    <a aria-disabled="{{$order->payment_status === "paid" ? true : false}}" href="{{route('admin.orders.confirmPayment', $order->id)}}"

                                                                        class="text-white btn btn-success text-primary d-inline-block edit-item-btn">
                                                                        Confirm Payment
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item edit"
                                                                    data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                                    data-bs-placement="top" title="Edit">
                                                                    <a href="{{route('orders.download', $order->id)}}"

                                                                        class="text-white bg-indigo-600 btn text-primary d-inline-block edit-item-btn">
                                                                        Download PDF
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item" data-bs-toggle="tooltip"
                                                                    data-bs-trigger="hover" data-bs-placement="top"
                                                                    title="Remove">
                                                                    <a class="text-white btn btn-danger d-inline-block remove-item-btn"
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
                                        <div class="gap-2 pagination-wrap hstack">
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
                        </script> © Riyallure.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Design & Develop by Soleric
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</x-ad-layout>
