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
                                        <i class="mdi mdi-account-tie"></i> Driver List
                                    </h4>
                                    <a href="{{ route('owner.driver_registration') }}" class="btn btn-primary btn-sm">
                                        <i class="mdi mdi-account-plus"></i> Register Driver
                                    </a>
                                </div>

                                <div class="table-responsive">
                                    <table id="driverTable" class="table table-hover align-middle text-center">
                                        <thead class="bg-primary text-white">
                                        <tr>
                                            <th>#</th>
                                            <th>Driver Name</th>
                                            <th>Address</th>
                                            <th>License No.</th>
                                            <th>Phone</th>
                                            <th>Assigned Vehicle</th>
                                            <th>Status</th>
                                            <th>Registered On</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <!-- Sample Data -->
                                        <tr>
                                            <td>1</td>
                                            <td>Peter Mwangi</td>
                                            <td>Kenya</td>
                                            <td>DL-4589321</td>
                                            <td>+255 712 345 678</td>
                                            <td>Toyota Axio - T 234 DFG</td>
                                            <td><span class="badge bg-success">Active</span></td>
                                            <td>03 Nov 2025</td>
                                            <td>
                                                <button class="btn btn-outline-primary btn-sm me-1">
                                                    <i class="mdi mdi-eye"></i>
                                                </button>
                                                <button class="btn btn-outline-warning btn-sm me-1">
                                                    <i class="mdi mdi-pencil"></i>
                                                </button>
                                                <button class="btn btn-outline-danger btn-sm">
                                                    <i class="mdi mdi-delete"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Grace Mutua</td>
                                            <td>Kigoma</td>
                                            <td>DL-7821594</td>
                                            <td>+255 713 555 432</td>
                                            <td>Probox - T 451 ABC</td>
                                            <td><span class="badge bg-warning text-dark">Pending</span></td>
                                            <td>29 Oct 2025</td>
                                            <td>
                                                <button class="btn btn-outline-primary btn-sm me-1">
                                                    <i class="mdi mdi-eye"></i>
                                                </button>
                                                <button class="btn btn-outline-warning btn-sm me-1">
                                                    <i class="mdi mdi-pencil"></i>
                                                </button>
                                                <button class="btn btn-outline-danger btn-sm">
                                                    <i class="mdi mdi-delete"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>James Njoroge</td>
                                            <td>Dar</td>
                                            <td>DL-9632547</td>
                                            <td>+255 718 678 901</td>
                                            <td>Vitz - T 982 KLM</td>
                                            <td><span class="badge bg-danger">Suspended</span></td>
                                            <td>22 Oct 2025</td>
                                            <td>
                                                <button class="btn btn-outline-primary btn-sm me-1">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                                <button class="btn btn-outline-warning btn-sm me-1">
                                                    <i class="mdi mdi-pencil"></i>
                                                </button>
                                                <button class="btn btn-outline-danger btn-sm">
                                                    <i class="mdi mdi-cake"></i>
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
        $('#driverTable').DataTable({
            pageLength: 5,
            order: [[0, 'asc']],
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Search drivers..."
            }
        });
    });
</script>
