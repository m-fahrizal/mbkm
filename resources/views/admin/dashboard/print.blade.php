<x-print-layout>
    <div id="content">
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Content Row -->
            <div class="row">

                <!-- Mahasiswa FIK -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Mahasiswa FIK</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $mhs }}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-school fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Informatika -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        S1 Informatika</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $mhsCount['S1 Informatika'] }}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-user-graduate fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sistem Informasi -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                        S1 Sistem Informasi
                                    </div>
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $mhsCount['S1 Sistem Informasi'] }}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-user-graduate fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- D3 Sistem Informasi -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                        D3 Sistem Informasi</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $mhsCount['D3 Sistem Informasi'] }}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-user-graduate fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content Row -->
            <div class="row">

                <!-- Content Column -->
                <div class="col-lg-12 mb-4">

                    <!-- Project Card Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Kegiatan MBKM</h6>
                        </div>
                        <div class="card-body">
                            @foreach ($barData as $key => $b)
                                <h4 class="small font-weight-bold">{{ $key }}<span
                                        class="float-right">{{ number_format($b['value'], 2, '.', '') }}%</span>
                                </h4>
                                <div class="progress mb-4">
                                    <div class="progress-bar {{ $b['bg'] }}" role="progressbar"
                                        style="width: {{ $b['value'] }}%" aria-valuenow="20" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            @endforeach
                        </div>
                    </div>


                </div>
            </div>

            <!-- Content Row -->

            <div class="row">

                <!-- Pie Chart -->
                <div class="col-xl-6 col-lg-6">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Magang MSIB</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="chart-pie pt-4 pb-2">
                                <canvas id="myPieChart1"></canvas>
                            </div>
                            <div class="mt-4 text-center small">
                                <span class="mr-2">
                                    <i class="fas fa-circle text-primary"></i> S1 IF
                                </span>
                                <span class="mr-2">
                                    <i class="fas fa-circle text-success"></i> S1 SI
                                </span>
                                <span class="mr-2">
                                    <i class="fas fa-circle text-info"></i> D3 SI
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Pie Chart -->
                <div class="col-xl-6 col-lg-6">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Studi Independen</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="chart-pie pt-4 pb-2">
                                <canvas id="myPieChart2"></canvas>
                            </div>
                            <div class="mt-4 text-center small">
                                <span class="mr-2">
                                    <i class="fas fa-circle text-primary"></i> S1 IF
                                </span>
                                <span class="mr-2">
                                    <i class="fas fa-circle text-success"></i> S1 SI
                                </span>
                                <span class="mr-2">
                                    <i class="fas fa-circle text-info"></i> D3 SI
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Pie Chart -->
                <div class="col-xl-6 col-lg-6">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Kampus Mengajar</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="chart-pie pt-4 pb-2">
                                <canvas id="myPieChart3"></canvas>
                            </div>
                            <div class="mt-4 text-center small">
                                <span class="mr-2">
                                    <i class="fas fa-circle text-primary"></i> S1 IF
                                </span>
                                <span class="mr-2">
                                    <i class="fas fa-circle text-success"></i> S1 SI
                                </span>
                                <span class="mr-2">
                                    <i class="fas fa-circle text-info"></i> D3 SI
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Pie Chart -->
                <div class="col-xl-6 col-lg-6">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Pertukaran Mahasiswa Merdeka (PMM)
                            </h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="chart-pie pt-4 pb-2">
                                <canvas id="myPieChart4"></canvas>
                            </div>
                            <div class="mt-4 text-center small">
                                <span class="mr-2">
                                    <i class="fas fa-circle text-primary"></i> S1 IF
                                </span>
                                <span class="mr-2">
                                    <i class="fas fa-circle text-success"></i> S1 SI
                                </span>
                                <span class="mr-2">
                                    <i class="fas fa-circle text-info"></i> D3 SI
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Pie Chart -->
                <div class="col-xl-6 col-lg-6">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Wirausaha Merdeka</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="chart-pie pt-4 pb-2">
                                <canvas id="myPieChart5"></canvas>
                            </div>
                            <div class="mt-4 text-center small">
                                <span class="mr-2">
                                    <i class="fas fa-circle text-primary"></i> S1 IF
                                </span>
                                <span class="mr-2">
                                    <i class="fas fa-circle text-success"></i> S1 SI
                                </span>
                                <span class="mr-2">
                                    <i class="fas fa-circle text-info"></i> D3 SI
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Pie Chart -->
                <div class="col-xl-6 col-lg-6">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Indonesian International Student
                                Mobility Awards (IISMA)</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="chart-pie pt-4 pb-2">
                                <canvas id="myPieChart6"></canvas>
                            </div>
                            <div class="mt-4 text-center small">
                                <span class="mr-2">
                                    <i class="fas fa-circle text-primary"></i> S1 IF
                                </span>
                                <span class="mr-2">
                                    <i class="fas fa-circle text-success"></i> S1 SI
                                </span>
                                <span class="mr-2">
                                    <i class="fas fa-circle text-info"></i> D3 SI
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Pie Chart -->
                <div class="col-xl-6 col-lg-6">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Bangkit</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="chart-pie pt-4 pb-2">
                                <canvas id="myPieChart7"></canvas>
                            </div>
                            <div class="mt-4 text-center small">
                                <span class="mr-2">
                                    <i class="fas fa-circle text-primary"></i> S1 IF
                                </span>
                                <span class="mr-2">
                                    <i class="fas fa-circle text-success"></i> S1 SI
                                </span>
                                <span class="mr-2">
                                    <i class="fas fa-circle text-info"></i> D3 SI
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Pie Chart -->
                <div class="col-xl-6 col-lg-6">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Magang Mandiri</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="chart-pie pt-4 pb-2">
                                <canvas id="myPieChart8"></canvas>
                            </div>
                            <div class="mt-4 text-center small">
                                <span class="mr-2">
                                    <i class="fas fa-circle text-primary"></i> S1 IF
                                </span>
                                <span class="mr-2">
                                    <i class="fas fa-circle text-success"></i> S1 SI
                                </span>
                                <span class="mr-2">
                                    <i class="fas fa-circle text-info"></i> D3 SI
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Pie Chart -->
                <div class="col-xl-6 col-lg-6">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Aktualisasi Bela Negara (ABN)</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="chart-pie pt-4 pb-2">
                                <canvas id="myPieChart9"></canvas>
                            </div>
                            <div class="mt-4 text-center small">
                                <span class="mr-2">
                                    <i class="fas fa-circle text-primary"></i> S1 IF
                                </span>
                                <span class="mr-2">
                                    <i class="fas fa-circle text-success"></i> S1 SI
                                </span>
                                <span class="mr-2">
                                    <i class="fas fa-circle text-info"></i> D3 SI
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="chart.js/Chart.min.js"></script>

    @foreach ($pieData as $key => $p)
        <script>
            var ctx = document.getElementById("myPieChart{{ $loop->iteration }}");
            var myPieChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: @json(array_keys($p)),
                    datasets: [{
                        data: @json(array_values($p)),
                        backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc', '#f6c23e', '#e74a3b', '#858796',
                            '#5a5c69'
                        ],
                        hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf', '#f4b619', '#e02d1b', '#6c757d',
                            '#4e5056'
                        ],
                        hoverBorderColor: "rgba(234, 236, 244, 1)",
                    }],
                },
                options: {
                    maintainAspectRatio: false,
                    tooltips: {
                        backgroundColor: "rgb(255,255,255)",
                        bodyFontColor: "#858796",
                        borderColor: '#dddfeb',
                        borderWidth: 1,
                        xPadding: 15,
                        yPadding: 15,
                        displayColors: false,
                        caretPadding: 10,
                    },
                    legend: {
                        display: false
                    },
                    cutoutPercentage: 80,
                },
            });
        </script>
    @endforeach
</x-print-layout>