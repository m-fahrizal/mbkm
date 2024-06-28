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
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap"
        rel="stylesheet" />
    <!-- script -->
    <script src="https://kit.fontawesome.com/012be70293.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <!-- header section -->

            @include('components.mahasiswa-navbar')

            <!-- menu items -->
            @include('components.mahasiswa-sidebar')

        </div>

        <div class="main-background min-h-screen">
            <!-- content  -->
            <main>
                {{ $slot }}
            </main>
            <!-- footer -->
            <footer>
                <p>&#169; Copyright 2024 FIK UPN Veteran Jakarta</p>
            </footer>
        </div>
    </div>
    @include('sweetalert::alert')


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            // Jquery for expand and collapse the sidebar
            // $('.menu-btn').click(function(){
            //     $('.sidebar').addClass('active');
            //     $('.menu-btn').css("visibility", "hidden");
            // });
            // $('.close-btn').click(function(){
            //     $('.sidebar').removeClass('active');
            //     $('.menu-btn').css("visibility", "visible");
            // });

            // Jquery for toggle sub menus
            $('.sub-btn').click(function() {
                $(this).next('.sub-menu').slideToggle();
                $(this).find('.dropdown').toggleClass('rotate');
            });
        })
    </script>
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
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
</body>

</html>
