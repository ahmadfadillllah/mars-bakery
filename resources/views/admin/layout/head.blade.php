<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>{{ config('app.name') }} - Dashboard</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700,800&display=swap" rel="stylesheet">
    <link href="{{ asset('admin') }}/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('admin') }}/assets/plugins/font-awesome/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('admin') }}/assets/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">
    <link href="{{ asset('admin') }}/assets/plugins/apexcharts/apexcharts.css" rel="stylesheet">


    <!-- Theme Styles -->
    <link href="{{ asset('admin') }}/assets/css/main.min.css" rel="stylesheet">
    <link href="{{ asset('admin') }}/assets/css/custom.css" rel="stylesheet">

    {{-- SweetAlert2 --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</head>

<body>

    <div class="page-container">
    @if (session('success'))
        <script>
            Swal.fire(
            'Woow!',
            '{{ session('success') }}',
            'success'
            )
        </script>
    @endif

    @if (session('info'))
        <script>
            Swal.fire(
            'Upps!',
            '{{ session('info') }}',
            'info'
            )
        </script>
    @endif


