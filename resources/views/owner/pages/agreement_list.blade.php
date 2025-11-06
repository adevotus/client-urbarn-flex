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
                                        <i class="mdi mdi-account-tie"></i> Agreement List
                                    </h4>
                                    <a href="{{ route('owner.agreements_creation') }}" class="btn btn-primary btn-sm">
                                        <i class="mdi mdi-account-plus"></i> Create Agreement
                                    </a>
                                </div>

                                <div class="table-responsive">
                                    <table id="agreementTable" class="table table-hover align-middle text-center">
                                        <thead class="bg-primary text-white">
                                        <tr>
                                            <th>#</th>
                                            <th>Agreement No.</th>
                                            <th>Vehicle</th>
                                            <th>Owner</th>
                                            <th>Driver</th>
                                            <th>Rental Type</th>
                                            <th>Total Amount (TZS)</th>
                                            <th>Amount Paid</th>
                                            <th>Balance</th>
                                            <th>Status</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <!-- Sample Agreement Data -->
                                        <tr>
                                            <td>1</td>
                                            <td>AG-2025-001</td>
                                            <td>
                                                <strong>T 234 DFG</strong><br>
                                                <small class="text-muted">Toyota Axio (Sedan)</small>
                                            </td>
                                            <td>John Doe</td>
                                            <td>Peter Mwangi</td>
                                            <td>Daily</td>
                                            <td>2,700,000</td>
                                            <td>2,700,000</td>
                                            <td>0</td>
                                            <td><span class="badge bg-success">Completed</span></td>
                                            <td>01 Aug 2025</td>
                                            <td>29 Oct 2025</td>
                                            <td>
                                                <button class="btn btn-outline-primary btn-sm me-1" title="View Details">
                                                    <i class="mdi mdi-eye"></i>
                                                </button>
                                                <button class="btn btn-outline-warning btn-sm me-1" title="Edit Agreement">
                                                    <i class="mdi mdi-pencil"></i>
                                                </button>
                                                <button class="btn btn-outline-danger btn-sm" title="Delete Agreement">
                                                    <i class="mdi mdi-delete"></i>
                                                </button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>2</td>
                                            <td>AG-2025-002</td>
                                            <td>
                                                <strong>T 451 ABC</strong><br>
                                                <small class="text-muted">Toyota Probox (Wagon)</small>
                                            </td>
                                            <td>Jane Mushi</td>
                                            <td>Grace Mutua</td>
                                            <td>Weekly</td>
                                            <td>1,200,000</td>
                                            <td>600,000</td>
                                            <td>600,000</td>
                                            <td><span class="badge bg-warning text-dark">Ongoing</span></td>
                                            <td>15 Oct 2025</td>
                                            <td>15 Jan 2026</td>
                                            <td>
                                                <button class="btn btn-outline-primary btn-sm me-1" title="View Details">
                                                    <i class="mdi mdi-eye"></i>
                                                </button>
                                                <button class="btn btn-outline-warning btn-sm me-1" title="Edit Agreement">
                                                    <i class="mdi mdi-pencil"></i>
                                                </button>
                                                <button class="btn btn-outline-danger btn-sm" title="Delete Agreement">
                                                    <i class="mdi mdi-delete"></i>
                                                </button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>3</td>
                                            <td>AG-2025-003</td>
                                            <td>
                                                <strong>T 789 ZXC</strong><br>
                                                <small class="text-muted">Nissan Caravan (Van)</small>
                                            </td>
                                            <td>Alex Kimaro</td>
                                            <td>Unassigned</td>
                                            <td>Monthly</td>
                                            <td>3,500,000</td>
                                            <td>0</td>
                                            <td>3,500,000</td>
                                            <td><span class="badge bg-secondary">Created</span></td>
                                            <td>05 Nov 2025</td>
                                            <td>05 Feb 2026</td>
                                            <td>
                                                <button class="btn btn-outline-primary btn-sm me-1" title="View Details">
                                                    <i class="mdi mdi-eye"></i>
                                                </button>
                                                <button class="btn btn-outline-warning btn-sm me-1" title="Edit Agreement">
                                                    <i class="mdi mdi-pencil"></i>
                                                </button>
                                                <button class="btn btn-outline-danger btn-sm" title="Delete Agreement">
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
        $('#agreementTable').DataTable({
            pageLength: 5,
            order: [[0, 'asc']],
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Search drivers..."
            }
        });
    });
</script>
