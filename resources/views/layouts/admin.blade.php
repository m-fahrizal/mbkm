<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body  id="page-top">
    <div  id="wrapper">
        @include('components.admin-sidebar')

        <div id="content-wrapper" class="d-flex flex-column">

            @include('components.admin-navbar')
            <!-- Main Content -->
            <div id="content">
                <div class="container-fluid">
                    <!-- Page Heading -->
                    {{ $slot }}
                </div>
            </div>

            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>&copy; Copyright 2024 FIK UPN Veteran Jakarta</span>
                    </div>
                </div>
            </footer>

            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>
        </div>
    </div>
    @include('sweetalert::alert')


    <script>
        function confirmLogout(event) {
            event.preventDefault(); // Mencegah submit langsung

            Swal.fire({
                title: 'Yakin ingin logout?',
                text: "Anda akan keluar dari sesi ini!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, logout!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('logout-form').submit(); // Submit form jika dikonfirmasi
                }
            });
        }
    </script>

    <!-- Bootstrap core JavaScript-->
    <script src="/jquery/jquery.min.js"></script>
    <script src="/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="/js/demo/chart-area-demo.js"></script>
    <script src="/js/demo/chart-pie-demo.js"></script>

    <!-- Page level plugins -->
    <script src="/datatables/jquery.dataTables.min.js"></script>
    <script src="/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="/js/demo/datatables-demo.js"></script>

    <!-- Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
</body>

</html>
