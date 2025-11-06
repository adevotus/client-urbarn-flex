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
                                <h4 class="card-title">Vehicle Particulars</h4>
                                <p class="card-description">
                                    Enter vehicle registration details
                                </p>

                                <form class="forms-sample">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="vehicleNumber">Vehicle Number (Plate)</label>
                                                <input type="text" class="form-control" id="vehicleNumber" name="vehicle_number" placeholder="e.g. T 234 DFG">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="vehicleModel">Vehicle Model</label>
                                                <input type="text" class="form-control" id="vehicleModel" name="vehicle_model" placeholder="e.g. Toyota Axio">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="vehicleColor">Color</label>
                                                <input type="text" class="form-control" id="vehicleColor" name="color" placeholder="e.g. White">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="chassisNumber">Chassis Number</label>
                                                <input type="text" class="form-control" id="chassisNumber" name="chassis_number" placeholder="Enter Chassis Number">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="engineNumber">Engine Number</label>
                                                <input type="text" class="form-control" id="engineNumber" name="engine_number" placeholder="Enter Engine Number">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="vehicleType">Vehicle Type</label>
                                                <select class="form-select" id="vehicleType" name="vehicle_type">
                                                    <option value="">Select Type</option>
                                                    <option>Sedan</option>
                                                    <option>Hatchback</option>
                                                    <option>Van</option>
                                                    <option>Truck</option>
                                                    <option>Bus</option>
                                                    <option>Motorbike</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>



                                    <h4 class="card-title mt-3">Ownership & Capacity</h4>

                                    <div class="row mt-3">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="ownerName">Owner Name</label>
                                                <input type="text" class="form-control" id="ownerName" name="owner_name" placeholder="Owner Full Name">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="capacity">Capacity</label>
                                                <input type="text" class="form-control" id="capacity" name="capacity" placeholder="e.g. 4 Passengers / 1000kg">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="registrationDate">Registration Date</label>
                                                <input type="date" class="form-control" id="registrationDate" name="registration_date">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row mt-3">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="assignedDriver">Assigned Driver</label>
                                                <select class="form-select" id="assignedDriver" name="assigned_driver">
                                                    <option value="">Select Driver</option>
                                                    <option>Peter Mwangi</option>
                                                    <option>Grace Mutua</option>
                                                    <option>James Njoroge</option>
                                                    <option>Unassigned</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <h4 class="card-title mt-3">Vehicle Documents</h4>

                                    <div class="row mt-3">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Logbook</label>
                                                <input type="file" name="logbook" class="file-upload-default">
                                                <div class="input-group col-xs-12 d-flex align-items-center">
                                                    <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Logbook">
                                                    <span class="input-group-append ms-2">
                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                </span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Insurance</label>
                                                <input type="file" name="insurance" class="file-upload-default">
                                                <div class="input-group col-xs-12 d-flex align-items-center">
                                                    <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Insurance">
                                                    <span class="input-group-append ms-2">
                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group mt-3">
                                        <label for="remarks">Remarks</label>
                                        <textarea class="form-control" id="remarks" name="remarks" rows="4" placeholder="Additional comments about the vehicle"></textarea>
                                    </div>

                                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                                    <button type="reset" class="btn btn-light">Cancel</button>
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


