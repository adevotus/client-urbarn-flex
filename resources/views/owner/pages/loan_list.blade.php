@include('assets.css')
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('layouts.owner.header')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial -->
        <!-- partial:partials/_sidebar.html -->
        @include('layouts.owner.sidebar')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper p-4">
                <!-- Greeting -->
                <div class="row">
                    <div class="col-12">
                        <div class="card shadow-sm border-0 rounded-3">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h4 class="card-title text-primary mb-0">
                                        <i class="mdi mdi-account-tie"></i> Loan List
                                        <p class="card-description">Overview of all active and completed driver loan assignments</p>

                                    </h4>

                                    <a href="{{ route('owner.loan_registration') }}" class="btn btn-primary btn-sm">
                                        <i class="mdi mdi-account-plus"></i> Assign Loan Driver
                                    </a>
                                </div>

                                <div class="table-responsive mt-3">
                                    <table id="loanTable" class="table table-hover align-middle text-center">
                                        <thead class="bg-primary text-white">
                                        <tr>
                                            <th>#</th>
                                            <th>Loan No.</th>
                                            <th>Driver Name</th>
                                            <th>Driver No.</th>
                                            <th>Vehicle</th>
                                            <th>Agreement No.</th>
                                            <th>Total Amount (TZS)</th>
                                            <th>Weekly Payment (TZS)</th>
                                            <th>Paid (TZS)</th>
                                            <th>Balance (TZS)</th>
                                            <th>Status</th>
                                            <th>Created On</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <!-- Sample Data -->
                                        <tr>
                                            <td>1</td>
                                            <td>LN-0001</td>
                                            <td>John Doe</td>
                                            <td>DRV-101</td>
                                            <td>Toyota Hiace - T 345 DSE</td>
                                            <td>AG-2025-01</td>
                                            <td>12,000,000</td>
                                            <td>500,000</td>
                                            <td>4,000,000</td>
                                            <td>8,000,000</td>
                                            <td><span class="badge bg-success">Active</span></td>
                                            <td>03 Nov 2025</td>
                                            <td>
                                                <button class="btn btn-outline-primary btn-sm me-1" title="View">
                                                    <i class="mdi mdi-eye"></i>
                                                </button>
                                                <button class="btn btn-outline-warning btn-sm me-1" title="Edit">
                                                    <i class="mdi mdi-pencil"></i>
                                                </button>
                                                <button class="btn btn-outline-danger btn-sm" title="Delete">
                                                    <i class="mdi mdi-delete"></i>
                                                </button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>2</td>
                                            <td>LN-0002</td>
                                            <td>Grace Mutua</td>
                                            <td>DRV-102</td>
                                            <td>Nissan Caravan - T 876 CDZ</td>
                                            <td>AG-2025-02</td>
                                            <td>10,000,000</td>
                                            <td>400,000</td>
                                            <td>6,400,000</td>
                                            <td>3,600,000</td>
                                            <td><span class="badge bg-warning text-dark">Pending</span></td>
                                            <td>27 Oct 2025</td>
                                            <td>
                                                <button class="btn btn-outline-primary btn-sm me-1" title="View">
                                                    <i class="mdi mdi-eye"></i>
                                                </button>
                                                <button class="btn btn-outline-warning btn-sm me-1" title="Edit">
                                                    <i class="mdi mdi-pencil"></i>
                                                </button>
                                                <button class="btn btn-outline-danger btn-sm" title="Delete">
                                                    <i class="mdi mdi-delete"></i>
                                                </button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>3</td>
                                            <td>LN-0003</td>
                                            <td>James Njoroge</td>
                                            <td>DRV-103</td>
                                            <td>Toyota Premio - T 453 DBL</td>
                                            <td>AG-2025-03</td>
                                            <td>9,500,000</td>
                                            <td>380,000</td>
                                            <td>9,500,000</td>
                                            <td>0</td>
                                            <td><span class="badge bg-info text-dark">Completed</span></td>
                                            <td>12 Oct 2025</td>
                                            <td>
                                                <button class="btn btn-outline-primary btn-sm me-1" title="View">
                                                    <i class="mdi mdi-eye"></i>
                                                </button>
                                                <button class="btn btn-outline-success btn-sm me-1" title="Receipt">
                                                    <i class="mdi mdi-file-document"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            @include('layouts.footer')
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->


@include('assets.js')

<script>
    $(document).ready(function() {
        $('#loanTable').DataTable({
            pageLength: 5,
            order: [[0, 'asc']],
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Search drivers..."
            }
        });
    });
</script>
