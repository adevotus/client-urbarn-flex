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
                                        <i class="mdi mdi-account-tie"></i> Payments
                                    </h4>

                                </div>

                                <div class="table-responsive mt-4">
                                    <table id="paymentTable" class="table table-hover align-middle text-center">
                                        <thead class="bg-primary text-white">
                                        <tr>
                                            <th>#</th>
                                            <th>Agreement No.</th>
                                            <th>Loan No.</th>
                                            <th>Customer Name</th>
                                            <th>Driver Name</th>
                                            <th>Driver No.</th>
                                            <th>Vehicle</th>
                                            <th>Total Loan (TZS)</th>
                                            <th>Weekly Payment (TZS)</th>
                                            <th>Weeks Paid</th>
                                            <th>Remaining Balance (TZS)</th>
                                            <th>Next Due Date</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <!-- Sample Data -->
                                        <tr>
                                            <td>1</td>
                                            <td>AGR-00125</td>
                                            <td>LN-2025-0345</td>
                                            <td>John Mwakalinga</td>
                                            <td>Peter Mwangi</td>
                                            <td>DRV-0981</td>
                                            <td>T 234 DFG - Toyota Axio</td>
                                            <td>6,000,000</td>
                                            <td>150,000</td>
                                            <td>12 / 40</td>
                                            <td>4,200,000</td>
                                            <td>10 Nov 2025</td>
                                            <td><span class="badge bg-success">On Track</span></td>
                                            <td>
                                                <button class="btn btn-outline-primary btn-sm me-1" title="View Details">
                                                    <i class="mdi mdi-eye"></i>
                                                </button>
                                                <button class="btn btn-outline-warning btn-sm me-1" title="Edit Payment">
                                                    <i class="mdi mdi-pencil"></i>
                                                </button>
                                                <button class="btn btn-outline-danger btn-sm" title="Delete Record">
                                                    <i class="mdi mdi-delete"></i>
                                                </button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>2</td>
                                            <td>AGR-00130</td>
                                            <td>LN-2025-0350</td>
                                            <td>Mary John</td>
                                            <td>Grace Mutua</td>
                                            <td>DRV-1422</td>
                                            <td>T 451 ABC - Toyota Probox</td>
                                            <td>5,200,000</td>
                                            <td>130,000</td>
                                            <td>8 / 40</td>
                                            <td>4,160,000</td>
                                            <td>08 Nov 2025</td>
                                            <td><span class="badge bg-warning text-dark">Pending</span></td>
                                            <td>
                                                <button class="btn btn-outline-primary btn-sm me-1" title="View Details">
                                                    <i class="mdi mdi-eye"></i>
                                                </button>
                                                <button class="btn btn-outline-warning btn-sm me-1" title="Edit Payment">
                                                    <i class="mdi mdi-pencil"></i>
                                                </button>
                                                <button class="btn btn-outline-danger btn-sm" title="Delete Record">
                                                    <i class="mdi mdi-delete"></i>
                                                </button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>3</td>
                                            <td>AGR-00142</td>
                                            <td>LN-2025-0370</td>
                                            <td>Peter Mwenda</td>
                                            <td>James Njoroge</td>
                                            <td>DRV-1890</td>
                                            <td>T 982 KLM - Toyota Vitz</td>
                                            <td>4,800,000</td>
                                            <td>120,000</td>
                                            <td>20 / 40</td>
                                            <td>2,400,000</td>
                                            <td>09 Nov 2025</td>
                                            <td><span class="badge bg-danger">Overdue</span></td>
                                            <td>
                                                <button class="btn btn-outline-primary btn-sm me-1" title="View Details">
                                                    <i class="mdi mdi-eye"></i>
                                                </button>
                                                <button class="btn btn-outline-warning btn-sm me-1" title="Edit Payment">
                                                    <i class="mdi mdi-pencil"></i>
                                                </button>
                                                <button class="btn btn-outline-danger btn-sm" title="Delete Record">
                                                    <i class="mdi mdi-delete"></i>
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
        $('#paymentTable').DataTable({
            pageLength: 5,
            order: [[0, 'asc']],
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Search drivers..."
            }
        });
    });
</script>
