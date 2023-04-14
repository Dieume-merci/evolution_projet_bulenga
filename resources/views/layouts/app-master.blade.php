<!DOCTYPE html>
<html lang="fr">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="PROIS SARL">
    <meta name="generator" content="e10">
    <title>HMS</title>
    <link href="{!! url('assets/img/favicon.png') !!}" rel="icon">
    <link href="{!! url('assets/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">
    <link href="{!! url('assets/vendor/bootstrap-icons/bootstrap-icons.css') !!}" rel="stylesheet">
    <link href="{!! url('assets/css/style.css') !!}" rel="stylesheet">
    <link href="{!! url('assets/bootstrap/css/mon_style_propre.css') !!}" rel="stylesheet">
    <link href="{!! url('assets/css/app.css') !!}" rel="stylesheet">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .float-right {
        float: right;
      }
    </style>
</head>
<body>
    @include('layouts.partials._navbar')
    @include('layouts.partials._sidebar')
    <main id="main" class="main">
        @include('layouts.partials._messages')
        <div class="pagetitle">
            <h1> Admin</h1>
            <x-breadcumbs />
        </div><!-- End Page Title -->
        <section class="section">
            @yield('content')
        </section>
    </main><!-- End #main -->
    @include('layouts.partials._footer')
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <script src="{!! url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>
    <script src="{!! url('assets/js/main.js') !!}"></script>
    <script src="{!! url('assets/js/sweet_alert.js') !!}"></script>
    <script src="{!! url('assets/js/my_files.js') !!}"></script>
    @show
</body>
</html>
