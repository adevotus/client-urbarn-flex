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

                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title text-primary">Create Loan Assignment</h4>
                                <p class="card-description">Assign driver to a specific vehicle and agreement</p>

                                <form class="forms-sample">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Loan Number (Auto Generated)</label>
                                                <input type="text" class="form-control" value="LN-00321" readonly>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Select Agreement</label>
                                                <select class="form-select form-control">
                                                    <option>AG-2025-01 - Toyota Hiace (T345 DSE)</option>
                                                    <option>AG-2025-02 - Nissan Caravan (T876 CDZ)</option>
                                                    <option>AG-2025-03 - Toyota Premio (T453 DBL)</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <h5 class="text-primary mt-4">Driver Assignment</h5>
                                    <div class="row mt-2">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Select Driver</label>
                                                <select class="form-select form-control">
                                                    <option>John Doe - DRV-101</option>
                                                    <option>Michael Smith - DRV-102</option>
                                                    <option>Joseph Msuya - DRV-103</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Select Vehicle</label>
                                                <select class="form-select form-control">
                                                    <option>Toyota Hiace - T345 DSE</option>
                                                    <option>Nissan Caravan - T876 CDZ</option>
                                                    <option>Toyota Premio - T453 DBL</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <h5 class="text-primary mt-4">Loan Details</h5>
                                    <div class="row mt-2">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Total Loan Amount (TZS)</label>
                                                <input type="number" class="form-control" value="12000000">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Weekly Payment (TZS)</label>
                                                <input type="number" class="form-control" value="500000">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Loan Duration (Weeks)</label>
                                                <input type="number" class="form-control" value="24">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Start Date</label>
                                                <input type="date" class="form-control" value="2025-11-05">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group mt-3">
                                        <label for="remarks">Remarks / Terms</label>
                                        <textarea class="form-control" rows="4">
Driver must ensure weekly payments are made every Friday.
Late payments attract a penalty of 5%.
Vehicle maintenance remains owner's responsibility.
                </textarea>
                                    </div>

                                    <div class="mt-4 d-flex justify-content-end">
                                        <button type="button" class="btn btn-primary me-2">Create Loan Assignment</button>
                                        <button type="reset" class="btn btn-light">Cancel</button>
                                    </div>
                                </form>
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


