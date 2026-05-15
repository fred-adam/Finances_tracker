<!doctype html>

<html
  lang="en"
  class="layout-menu-fixed layout-compact"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

            <title>{{ config('app.name', 'Finances-Tracker') }}</title>


    <meta name="description" content="" />

    <!-- Favicon -->
   <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon/iconn.png') }}"/>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('vendor/css-vendor/iconify-icons.css') }}" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <!-- Core CSS -->
    <!-- build:css assets/vendor/css/theme.css  -->

    <link rel="stylesheet" href="{{ asset('vendor/css-vendor/core.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/css-vendor/demo.css') }}"/>

    <!-- Vendors CSS -->

    <link rel="stylesheet" href="{{ asset('vendor/css-vendor/perfect-scrollbar.css') }}" />

    <!-- endbuild -->

    <link rel="stylesheet" href="{{ asset('vendor/css-vendor/apex-charts.css') }}" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{ asset('vendor/js-vendor/helpers.js') }}"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->

    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->

    <script src="{{ asset('vendor/js-vendor/config.js') }}"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])

  </head>
 <body>
  
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      
      <!-- 1. Sidebar -->
      @include('layouts.sidebar')

      <div class="layout-page">
        
        <!-- 2. Navbar -->
        @include('layouts.navbar')

         <div class="content-wrapper">
          <!-- 3. Main Content -->
            @yield('content')
          </div>

          <!-- 4. Footer -->
          
        </div>
      </div>
    </div>
  </div>
  <!-- Keep all your scripts below here -->
      <script src="{{ asset('vendor/js-vendor/jquery.js') }}"></script>

    <script src="{{ asset('vendor/js-vendor/popper.js') }}"></script>
    <script src="{{ asset('vendor/js-vendor/bootstrap.js') }}"></script>

    <script src="{{ asset('vendor/js-vendor/perfect-scrollbar.js') }}"></script>

    <script src="{{ asset('vendor/js-vendor/menu.js') }}"></script>
      <!-- Vendors JS -->
    <script src="{{ asset('vendor/js-vendor/apexcharts.js') }}"></script>

    <!-- Main JS -->

    <script src="{{ asset('vendor/js-vendor/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('vendor/js-vendor//dashboards-analytics.js') }}"></script>

     <!-- Place this tag before closing body tag for github widget button. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>
</html>
