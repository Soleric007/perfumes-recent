<x-ad-layout>
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Order Details</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                    <li class="breadcrumb-item active">Order Details</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-xl-9">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <h5 class="card-title flex-grow-1 mb-0">Order #{{ $order->id }}</h5>
                                    <div class="flex-shrink-0">
                                        <a href="" class="btn btn-success btn-sm"><i
                                                class="ri-download-2-fill align-middle me-1"></i> Invoice</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive table-card">
                                    <table class="table table-nowrap align-middle table-borderless mb-0">
                                        <thead class="table-light text-muted">
                                            <tr>
                                                <th scope="col">Product Details</th>
                                                <th scope="col">Item Price</th>
                                                <th scope="col">Quantity</th>
                                                {{-- <th scope="col">Rating</th> --}}
                                                <th scope="col" class="text-end">Total Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($order->items as $item)
                                                <tr>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="flex-shrink-0 avatar-md bg-light rounded p-1">
                                                                <img src="/storage/{{$item->product->image}}"
                                                                    alt="" class="img-fluid d-block">
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h5 class="fs-15"><a href=""
                                                                        class="link-primary text-white text-sm uppercase">{{$item->product->title}}</a></h5>
                                                                
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>${{$item->product->price}}</td>
                                                    <td>{{$item->quantity}}</td>
                                                    
                                                    <td class="fw-medium text-end">
                                                        ${{$item->product->price * $item->quantity}}
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <!--end col-->
                    <div class="col-xl-3">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0"><i class="ri-map-pin-line align-middle me-1 text-muted"></i>
                                    Billing Address</h5>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled vstack gap-2 fs-13 mb-0">
                                    <li class="fw-medium fs-14">{{$order->first_name . " " . $order->last_name}}</li>
                                    <li>+(234) {{$order->phone}}</li>
                                    <li>{{$order->address}}</li>
                                    <li>{{$order->city}}</li>
                                    <li>{{$order->state . ", " . $order->country . "."}}</li>
                                </ul>
                            </div>
                        </div>
                        <!--end card-->
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0"><i class="ri-map-pin-line align-middle me-1 text-muted"></i>
                                    Shipping Address</h5>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled vstack gap-2 fs-13 mb-0">
                                    <li class="fw-medium fs-14">{{$order->first_name . " " . $order->last_name}}</li>
                                    <li>+(234) {{$order->phone}}</li>
                                    <li>{{$order->address}}</li>
                                    <li>{{$order->city}}</li>
                                    <li>{{$order->state . ", " . $order->country . "."}}</li>
                                </ul>
                            </div>
                        </div>
                        <!--end card-->

                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0"><i
                                        class="ri-secure-payment-line align-bottom me-1 text-muted"></i> Payment Details
                                </h5>
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-2">
                                    <div class="flex-shrink-0">
                                        <p class="text-muted mb-0">Transactions:</p>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h6 class="mb-0">#VLZ124561278124</h6>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mb-2">
                                    <div class="flex-shrink-0">
                                        <p class="text-muted mb-0">Payment Method:</p>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h6 class="mb-0">{{$order->payment_method}}</h6>
                                    </div>
                                </div>
                                
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <p class="text-muted mb-0">Total Amount:</p>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h6 class="mb-0">${{$order->total_amount}}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->

            </div><!-- container-fluid -->
        </div><!-- End Page-content -->

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
