<x-ad-layout>
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Categories</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Riyallure</a></li>
                                    <li class="breadcrumb-item active">Categories</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card" id="customerList">
                            <div class="card-header border-bottom-dashed">

                                <div class="row g-4 align-items-center">
                                    <div class="col-sm">
                                        <div>
                                            <h5 class="card-title mb-0">Categories List</h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-auto">
                                        {{-- <div class="d-flex flex-wrap align-items-start gap-2">
                                            <button class="btn btn-soft-danger" id="remove-actions" onClick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i></button>
                                            <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModal"><i class="ri-add-line align-bottom me-1"></i> Add Customer</button>
                                            <button type="button" class="btn btn-info"><i class="ri-file-download-line align-bottom me-1"></i> Import</button>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div>
                                    <div class="table-responsive table-card mb-1">
                                        <table class="table align-middle" id="customerTable">
                                            <thead class="table-light text-muted">
                                                <tr>
                                                    <th class="sort" data-sort="customer_name">Name</th>
                                                    <th class="sort" data-sort="date">Date Created</th>
                                                    <th class="sort" data-sort="action">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="list form-check-all">
                                                @foreach ($categories as $category)
                                                    <tr>
                                                        <td class="id" style="display:none;"><a
                                                                href="javascript:void(0);"
                                                                class="fw-medium link-primary">#{{ $category->id }}</a>
                                                        </td>
                                                        <td class="customer_name">{{ $category->name }}</td>
                                                        <td class="date">{{ $category->created_at }}</td>
                                                        <td>
                                                            <ul class="list-inline hstack gap-2 mb-0">

                                                                <li class="list-inline-item" data-bs-toggle="tooltip"
                                                                    data-bs-trigger="hover" data-bs-placement="top"
                                                                    title="Remove">
                                                                    <a class="text-danger d-inline-block remove-item-btn btn btn-danger text-white"
                                                                        onclick='return confirm("Are you sure you want to delete this category?")'
                                                                        href="{{ route('admin.deleteCategory', $category->id) }}">
                                                                        Delete
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        @if (count($categories) === 0)
                                            <div class="noresult">
                                                <div class="text-center">
                                                    <lord-icon src="https://cdn.lordicon.com/msoeawqm.json"
                                                        trigger="loop" colors="primary:#405189,secondary:#0ab39c"
                                                        style="width:75px;height:75px"></lord-icon>
                                                    <h5 class="mt-2">Sorry! No Result Found</h5>
                                                    <p class="text-muted">No category yet.</p>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                    {{-- <div class="gridjs-footer">
                                        <div class="gridjs-pagination">
                                            {!! $users->withQueryString()->links('pagination::bootstrap-5') !!}

                                        </div>
                                    </div> --}}
                                </div>
                                {{-- <div class="d-flex justify-content-end">
                                    <div class="pagination-wrap hstack gap-2">
                                        <div class="mt-8">{!! $users->withQueryString()->links('pagination::bootstrap-5') !!}</div>
                                    </div>
                                </div> --}}
                            </div>
                            <div class="modal fade" id="showModal" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header bg-light p-3">
                                            <h5 class="modal-title" id="exampleModalLabel"></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close" id="close-modal"></button>
                                        </div>
                                        <form class="tablelist-form" autocomplete="off">
                                            <div class="modal-body">
                                                <input type="hidden" id="id-field" />

                                                <div class="mb-3" id="modal-id" style="display: none;">
                                                    <label for="id-field1" class="form-label">ID</label>
                                                    <input type="text" id="id-field1" class="form-control"
                                                        placeholder="ID" readonly />
                                                </div>

                                                <div class="mb-3">
                                                    <label for="customername-field" class="form-label">Customer
                                                        Name</label>
                                                    <input type="text" id="customername-field" class="form-control"
                                                        placeholder="Enter name" required />
                                                    <div class="invalid-feedback">Please enter a customer name.
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="email-field" class="form-label">Email</label>
                                                    <input type="email" id="email-field" class="form-control"
                                                        placeholder="Enter email" required />
                                                    <div class="invalid-feedback">Please enter an email.</div>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="phone-field" class="form-label">Phone</label>
                                                    <input type="text" id="phone-field" class="form-control"
                                                        placeholder="Enter phone no." required />
                                                    <div class="invalid-feedback">Please enter a phone.</div>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="date-field" class="form-label">Joining
                                                        Date</label>
                                                    <input type="date" id="date-field" class="form-control"
                                                        data-provider="flatpickr" data-date-format="d M, Y" required
                                                        placeholder="Select date" />
                                                    <div class="invalid-feedback">Please select a date.</div>
                                                </div>

                                                <div>
                                                    <label for="status-field" class="form-label">Status</label>
                                                    <select class="form-control" data-choices data-choices-search-false
                                                        name="status-field" id="status-field" required>
                                                        <option value="">Status</option>
                                                        <option value="Active">Active</option>
                                                        <option value="Block">Block</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <div class="hstack gap-2 justify-content-end">
                                                    <button type="button" class="btn btn-light"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-success" id="add-btn">Add
                                                        Customer</button>
                                                    <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                                                </div>
                                            </div>
                                        </form>
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
    <script type="text/javascript">
        function confirmation(e) {
            var urlToredirect = e.currentTarget.getAttribute('href');
            swal({
                    title: "Are you sure to remove this category",
                    text: "You will not be able to revert this!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willcancel) => {
                    if (willcancel) {
                        window.location.href = urlToredirect;
                    }
                });
        }
    </script>
</x-ad-layout>
