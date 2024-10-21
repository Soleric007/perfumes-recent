<x-ad-layout>
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col">

                        <div class="h-100">
                            <div class="row mb-3 pb-1">
                                <div class="col-12">
                                    <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                                        <div class="flex-grow-1">
                                            <h4 class="fs-16 mb-1">Good Morning, {{ $user->name }}</h4>
                                            <p class="text-muted mb-0">Here's what's happening with your store today.
                                            </p>
                                        </div>

                                    </div><!-- end card header -->
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->

                            <div class="row">
                                <div class="col-xl-3 col-md-6">
                                    <!-- card -->
                                    <div class="card card-animate">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                                        Total Earnings</p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-end justify-content-between mt-4">
                                                <div>
                                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4">N<span
                                                            class="counter-value" data-target="{{$totalEarnings}}">0</span> </h4>
                                                </div>
                                                <div class="avatar-sm flex-shrink-0">
                                                    <span class="avatar-title bg-success-subtle rounded fs-3">
                                                        <i class="bx bx-dollar-circle text-success"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div><!-- end col -->

                                <div class="col-xl-3 col-md-6">
                                    <!-- card -->
                                    <div class="card card-animate">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                                        Orders</p>
                                                </div>

                                            </div>
                                            <div class="d-flex align-items-end justify-content-between mt-4">
                                                <div>
                                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span
                                                            class="counter-value" data-target="{{count($orders)}}">0</span></h4>
                                                    <a href="{{route('orders')}}" class="text-decoration-underline">View all
                                                        orders</a>
                                                </div>
                                                <div class="avatar-sm flex-shrink-0">
                                                    <span class="avatar-title bg-info-subtle rounded fs-3">
                                                        <i class="bx bx-shopping-bag text-info"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div><!-- end col -->

                                <div class="col-xl-3 col-md-6">
                                    <!-- card -->
                                    <div class="card card-animate">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                                        Customers</p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-end justify-content-between mt-4">
                                                <div>
                                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span
                                                            class="counter-value" data-target="{{$totalCustomers}}">0</span> </h4>
                                                    <a href="{{route('admin.customers')}}" class="text-decoration-underline">See details</a>
                                                </div>
                                                <div class="avatar-sm flex-shrink-0">
                                                    <span class="avatar-title bg-warning-subtle rounded fs-3">
                                                        <i class="bx bx-user-circle text-warning"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div><!-- end col -->

                                <div class="col-xl-3 col-md-6">
                                    <!-- card -->
                                    <div class="card card-animate">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                                        My Products</p>
                                                </div>

                                            </div>
                                            <div class="d-flex align-items-end justify-content-between mt-4">
                                                <div>
                                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span
                                                            class="counter-value" data-target="{{$totalProducts}}">0</span> </h4>
                                                    <a href="{{route('admin.products')}}" class="text-decoration-underline">View Products</a>
                                                </div>
                                                <div class="avatar-sm flex-shrink-0">
                                                    <span class="avatar-title bg-primary-subtle rounded fs-3">
                                                        <i class="bx bx-wallet text-primary"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div><!-- end col -->
                            </div> <!-- end row-->





                            <div class="row">


                                <div class="col-xl-8">
                                    <div class="card">
                                        <div class="card-header align-items-center d-flex">
                                            <h4 class="card-title mb-0 flex-grow-1">Recent Orders</h4>
                                            <div class="flex-shrink-0">
                                                <button type="button" class="btn btn-soft-info btn-sm">
                                                    <i class="ri-file-list-3-line align-middle"></i> Generate Report
                                                </button>
                                            </div>
                                        </div><!-- end card header -->

                                        <div class="card-body">
                                            <div class="table-responsive table-card">
                                                <table
                                                    class="table table-borderless table-centered align-middle table-nowrap mb-0">
                                                    <thead class="text-muted table-light">
                                                        <tr>
                                                            <th scope="col">Order ID</th>
                                                            <th scope="col">Customer</th>
                                                            <th scope="col">Product</th>
                                                            <th scope="col">Amount</th>
                                                            <th scope="col">Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($orders as $order)
                                                            <tr>
                                                                <td>
                                                                    <a href="apps-ecommerce-order-details.html"
                                                                        class="fw-medium link-primary">#{{ $order->id }}</a>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="flex-shrink-0 me-2">
                                                                            <img src="/admin/assets/images/users/avatar-1.jpg"
                                                                                alt=""
                                                                                class="avatar-xs rounded-circle" />
                                                                        </div>
                                                                        <div class="flex-grow-1">
                                                                            {{ $order->first_name . ' ' . $order->last_name }}
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="uppercase">
                                                                    @foreach ($order->items as $item)
                                                                        {{ $item->product->title }} <br>
                                                                    @endforeach
                                                                </td>
                                                                <td>
                                                                    <span
                                                                        class="text-success">${{ $order->total_amount }}</span>
                                                                </td>
                                                                <td>
                                                                    <span
                                                                        class="badge {{ $order->payment_status === 'paid' ? 'bg-success-subtle text-white' : 'bg-warning-subtle text-warning' }}">{{ $order->payment_status }}</span>
                                                                </td>

                                                            </tr>
                                                        @endforeach
                                                    </tbody><!-- end tbody -->
                                                </table><!-- end table -->
                                                @if (count($orders) === 0)
                                                    <div class="noresult">
                                                        <div class="text-center">
                                                            <lord-icon src="https://cdn.lordicon.com/msoeawqm.json"
                                                                trigger="loop"
                                                                colors="primary:#405189,secondary:#0ab39c"
                                                                style="width:75px;height:75px"></lord-icon>
                                                            <h5 class="mt-2">Sorry! No Result Found</h5>
                                                            <p class="text-muted">No orders yet.</p>
                                                        </div>
                                                    </div>
                                                @endif
                                                <div class="d-flex justify-content-end">
                                                    <div class="pagination-wrap hstack gap-2">
                                                        <div class="gridjs-pagination">
                                                            {!! $orders->withQueryString()->links('pagination::bootstrap-5') !!}

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- .card-->
                                </div> <!-- .col-->
                            </div> <!-- end row-->

                        </div> <!-- end .h-100-->

                    </div> <!-- end col -->


                </div>

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
