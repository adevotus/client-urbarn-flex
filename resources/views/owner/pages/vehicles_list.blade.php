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
                                        <i class="mdi mdi-account-tie"></i> Vehicle List
                                    </h4>
                                    <a href="{{ route('owner.vehicle_registration') }}" class="btn btn-primary btn-sm">
                                        <i class="mdi mdi-account-plus"></i> Register Vehicle
                                    </a>
                                </div>

                                <div class="table-responsive">
                                    <table id="vehicleTable" class="table table-hover align-middle text-center">
                                        <thead class="bg-primary text-white">
                                        <tr>
                                            <th>#</th>
                                            <th>Vehicle Number</th>
                                            <th>Model</th>
                                            <th>Type</th>
                                            <th>Capacity</th>
                                            <th>Assigned Driver</th>
                                            <th>Status</th>
                                            <th>Registered On</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <!-- Sample Data -->
                                        <tr>
                                            <td>1</td>
                                            <td>T 234 DFG</td>
                                            <td>Toyota Axio</td>
                                            <td>Sedan</td>
                                            <td>4 Passengers</td>
                                            <td>Peter Mwangi</td>
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
                                            <td>T 451 ABC</td>
                                            <td>Toyota Probox</td>
                                            <td>Wagon</td>
                                            <td>500 kg</td>
                                            <td>Grace Mutua</td>
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
                                            <td>T 982 KLM</td>
                                            <td>Toyota Vitz</td>
                                            <td>Hatchback</td>
                                            <td>4 Passengers</td>
                                            <td>James Njoroge</td>
                                            <td><span class="badge bg-danger">Under Repair</span></td>
                                            <td>22 Oct 2025</td>
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
                                            <td>4</td>
                                            <td>T 789 ZXC</td>
                                            <td>Nissan Caravan</td>
                                            <td>Van</td>
                                            <td>12 Passengers</td>
                                            <td>—</td>
                                            <td><span class="badge bg-secondary">Unassigned</span></td>
                                            <td>12 Sep 2025</td>
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
        $('#vehicleTable').DataTable({
            pageLength: 5,
            order: [[0, 'asc']],
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Search drivers..."
            }
        });
    });
</script>
