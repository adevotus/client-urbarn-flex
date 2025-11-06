@include('assets.css')

<style>
    .hover-glow:hover {
        box-shadow: 0 0 20px rgba(0, 123, 255, 0.4);
        transform: translateY(-5px);
        transition: all 0.3s ease-in-out;
    }
    .timeline-item {
        border-left: 3px solid #007bff;
        padding-left: 10px;
        position: relative;
    }
    .timeline-item::before {
        content: '';
        position: absolute;
        left: -7px;
        top: 6px;
        width: 10px;
        height: 10px;
        background: #007bff;
        border-radius: 50%;
    }
</style>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('layouts.driver.header')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">

        <!-- partial -->
        <!-- partial:partials/_sidebar.html -->
        @include('layouts.driver.sidebar')
        <!-- partial -->
        <div class="main-panel">
            <!-- Driver Dashboard -->
            <div class="content-wrapper" data-aos="fade-up">
                {{-- Greeting Section --}}
                <div class="row mb-4">
                    <div class="col-md-12 d-flex justify-content-between align-items-center flex-wrap">
                        <div data-aos="fade-right">
                            @if(session('user'))
                                @php $user = session('user'); @endphp
                                <h3 class="font-weight-bold text-primary mb-1">
                                    Good
                                    @php
                                        $hour = now()->hour;
                                        if ($hour < 12) echo 'Morning';
                                        elseif ($hour < 18) echo 'Afternoon';
                                        else echo 'Evening';
                                    @endphp,
                                    {{ $user['first_name'] ?? $user['name'] ?? 'Driver' }} 👋
                                </h3>
                                <p class="text-muted mb-0">Welcome back! Here’s a summary of your vehicle and payment progress.</p>
                            @endif
                        </div>

                        <div data-aos="fade-left">
                            <button class="btn btn-outline-primary btn-sm">
                                <i class="mdi mdi-calendar"></i> {{ now()->format('d M Y') }}
                            </button>
                        </div>
                    </div>
                </div>

                {{-- Summary Cards --}}
                <div class="row">
                    <div class="col-md-3 mb-4 stretch-card" data-aos="zoom-in">
                        <div class="card shadow-sm border-0 rounded-lg bg-info text-white hover-glow">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="mb-2">Assigned Vehicle</p>
                                        <h4 class="font-weight-bold mb-0">Toyota Axio (T123 DSW)</h4>
                                    </div>
                                    <i class="mdi mdi-car fs-30"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 mb-4 stretch-card" data-aos="zoom-in" data-aos-delay="100">
                        <div class="card shadow-sm border-0 rounded-lg bg-primary text-white hover-glow">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="mb-2">Total Amount Due</p>
                                        <h3 class="font-weight-bold mb-0">TZS 1,500,000</h3>
                                    </div>
                                    <i class="mdi mdi-cash fs-30"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 mb-4 stretch-card" data-aos="zoom-in" data-aos-delay="200">
                        <div class="card shadow-sm border-0 rounded-lg bg-success text-white hover-glow">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="mb-2">Payments Completed</p>
                                        <h3 class="font-weight-bold mb-0">8 / 12</h3>
                                    </div>
                                    <i class="mdi mdi-check-circle fs-30"></i>
                                </div>
                                <div class="progress mt-2" style="height: 5px;">
                                    <div class="progress-bar bg-light" role="progressbar" style="width: 67%" aria-valuenow="67"></div>
                                </div>
                                <small>Payment Progress: 67%</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 mb-4 stretch-card" data-aos="zoom-in" data-aos-delay="300">
                        <div class="card shadow-sm border-0 rounded-lg bg-warning text-dark hover-glow">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="mb-2">Next Payment Due</p>
                                        <h4 class="font-weight-bold mb-0">10 Nov 2025</h4>
                                    </div>
                                    <i class="mdi mdi-calendar-clock fs-30"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Charts Section --}}
                <div class="row">
                    <div class="col-md-6 grid-margin stretch-card" data-aos="fade-up">
                        <div class="card shadow-sm border-0 rounded-lg">
                            <div class="card-body">
                                <h5 class="card-title mb-3 text-primary">
                                    <i class="mdi mdi-chart-line"></i> Payment History
                                </h5>
                                <canvas id="paymentHistoryChart" height="200"></canvas>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 grid-margin stretch-card" data-aos="fade-up" data-aos-delay="150">
                        <div class="card shadow-sm border-0 rounded-lg">
                            <div class="card-body">
                                <h5 class="card-title mb-3 text-success">
                                    <i class="mdi mdi-timeline-clock"></i> Agreement Timeline
                                </h5>
                                <div class="timeline">
                                    <div class="timeline-item mb-3"><strong>01 Sep 2025</strong> – Agreement Started</div>
                                    <div class="timeline-item mb-3"><strong>01 Oct 2025</strong> – 25% paid</div>
                                    <div class="timeline-item mb-3"><strong>01 Nov 2025</strong> – 60% paid</div>
                                    <div class="timeline-item"><strong>31 Dec 2025</strong> – Target Completion</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Tables Section --}}
                <div class="row">
                    <div class="col-md-6 grid-margin stretch-card" data-aos="fade-right">
                        <div class="card shadow-sm border-0 rounded-lg">
                            <div class="card-body">
                                <h5 class="card-title mb-3 text-primary">
                                    <i class="mdi mdi-cash-multiple"></i> Recent Payments
                                </h5>
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover align-middle">
                                        <thead class="bg-light">
                                        <tr>
                                            <th>Reference</th>
                                            <th>Amount</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>#PAY-1001</td>
                                            <td class="font-weight-bold">TZS 120,000</td>
                                            <td>02 Nov 2025</td>
                                            <td><span class="badge badge-success">Paid</span></td>
                                        </tr>
                                        <tr>
                                            <td>#PAY-1002</td>
                                            <td class="font-weight-bold">TZS 100,000</td>
                                            <td>05 Nov 2025</td>
                                            <td><span class="badge badge-warning">Pending</span></td>
                                        </tr>
                                        <tr>
                                            <td>#PAY-1003</td>
                                            <td class="font-weight-bold">TZS 80,000</td>
                                            <td>08 Nov 2025</td>
                                            <td><span class="badge badge-danger">Failed</span></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 grid-margin stretch-card" data-aos="fade-left">
                        <div class="card shadow-sm border-0 rounded-lg">
                            <div class="card-body">
                                <h5 class="card-title mb-3 text-success">
                                    <i class="mdi mdi-file-document-outline"></i> Agreement Details
                                </h5>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex justify-content-between"><span>Total Value:</span> <strong>TZS 4,000,000</strong></li>
                                    <li class="list-group-item d-flex justify-content-between"><span>Payment Frequency:</span> <strong>Weekly</strong></li>
                                    <li class="list-group-item d-flex justify-content-between"><span>Per Payment:</span> <strong>TZS 120,000</strong></li>
                                    <li class="list-group-item d-flex justify-content-between"><span>Start Date:</span> <strong>01 Sep 2025</strong></li>
                                    <li class="list-group-item d-flex justify-content-between"><span>End Date:</span> <strong>31 Dec 2025</strong></li>
                                    <li class="list-group-item d-flex justify-content-between"><span>Status:</span> <span class="badge badge-success">Active</span></li>
                                </ul>
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
    @if(session('success'))
    toastr.success("{{ session('success') }}");
    @endif
</script>


<!-- Include Animation + Chart Libraries -->
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    // Initialize AOS Animations
    AOS.init({ duration: 1000, once: true });

    // Chart.js Payment History with Gradient + Animation
    const ctx = document.getElementById('paymentHistoryChart').getContext('2d');
    const gradient = ctx.createLinearGradient(0, 0, 0, 400);
    gradient.addColorStop(0, 'rgba(0,123,255,0.6)');
    gradient.addColorStop(1, 'rgba(0,123,255,0)');

    new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [{
                label: 'Payments (TZS)',
                data: [400000, 800000, 1500000, 2000000],
                borderColor: '#007bff',
                backgroundColor: gradient,
                fill: true,
                tension: 0.4,
                pointBackgroundColor: '#fff',
                pointBorderColor: '#007bff',
                pointHoverRadius: 7,
                pointRadius: 5,
                borderWidth: 3,
            }]
        },
        options: {
            responsive: true,
            animation: {
                duration: 2000,
                easing: 'easeInOutQuart'
            },
            plugins: {
                legend: { display: false },
                tooltip: {
                    backgroundColor: '#007bff',
                    titleFont: { size: 14 },
                    bodyFont: { size: 13 },
                    padding: 10
                }
            },
            scales: {
                x: { grid: { display: false } },
                y: { beginAtZero: true, grid: { color: '#f0f0f0' } }
            }
        }
    });
</script>

