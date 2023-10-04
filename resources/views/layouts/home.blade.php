<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

    {{-- CSS --}}
    <link rel="apple-touch-icon" sizes="76x76" href="dashboard-master/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="dashboard-master/assets/img/favicon.png">
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="dashboard-master/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="dashboard-master/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    {{-- `ICON  --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    {{-- https://fonts.google.com/icons?selected=Material+Symbols+Outlined:add_box:FILL@0;wght@400;GRAD@0;opsz@24 --}}
    <!-- CSS Files -->
    <link id="pagestyle" href="dashboard-master/assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
    <!-- Nepcha Analytics (nepcha.com) -->
    <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
    <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>

    {{-- DATATABLES JS --}}
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

</head>

<body class="g-sidenav-show bg-gray-200">

    @include('partials.sidebar')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        @include('partials.navbar')
    </main>
    <div class="container-fluid py-4">
        {{-- Konten --}}
        @yield('content')
        @include('partials.footer')
    </div>


    {{-- JS --}}
    <!--   Core JS Files   -->
    <script src="dashboard-master/assets/js/core/popper.min.js"></script>
    <script src="dashboard-master/assets/js/core/bootstrap.min.js"></script>
    <script src="dashboard-master/assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="dashboard-master/assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="dashboard-master/assets/js/plugins/chartjs.min.js"></script>

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>
        // new DataTable('#example');
        $(document).ready(function() {
            $('#example').DataTable({
                "language": {
                    "lengthMenu": "Menampilkan _MENU_ catatan",
                    "zeroRecords": "Data tidak ditemukan",
                    "info": "Halaman _PAGE_ dari _PAGES_",
                    "infoEmpty": "Tidak ditemukan data",
                    "infoFiltered": "(filtered from _MAX_ total records)",
                    "search": "Cari",
                    "paginate": {
                        "previous": "Sebelumnya", // Mengubah teks "Previous" menjadi "Sebelumnya"
                        "next": "Selanjutnya" // Mengubah teks "Next" menjadi "Selanjutnya"
                    }
                },
                "select": true, // Aktifkan fitur Selectbox
                columnDefs: [{
                    "width": "6%",
                    "targets": [0],
                }], // Mengecilkan kolom "no"
            });
        });
    </script>

</body>

</html>
