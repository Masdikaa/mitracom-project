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
    <!-- CSS Files -->
    <link id="pagestyle" href="dashboard-master/assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
    <!-- Nepcha Analytics (nepcha.com) -->
    <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
    <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>

</head>

<body class="g-sidenav-show bg-gray-200">

    @include('partials.sidebar')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        @include('partials.navbar')
    </main>
    <div class="container-fluid py-4">
        {{-- Konten --}}
        <h1 class="ms-3">Ini diisi apa ygy</h1>
        @include('partials.footer')
    </div>





    {{-- JS --}}
    <!--   Core JS Files   -->
    <script src="dashboard-master/assets/js/core/popper.min.js"></script>
    <script src="dashboard-master/assets/js/core/bootstrap.min.js"></script>
    <script src="dashboard-master/assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="dashboard-master/assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="dashboard-master/assets/js/plugins/chartjs.min.js"></script>

</body>

</html>
