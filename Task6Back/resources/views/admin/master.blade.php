<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Panel</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{  asset('admin/assets/vendors/mdi/css/materialdesignicons.min.css')  }}">
    <!-- <link rel="stylesheet" href="{{  asset('admin/assets/vendors/css/vendor.bundle.base.css')  }}"> -->
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- <link rel="stylesheet" href="{{  asset('admin/assets/vendors/jvectormap/jquery-jvectormap.css')  }}">
    <link rel="stylesheet" href="{{  asset('admin/assets/vendors/flag-icon-css/css/flag-icon.min.css')  }}">
    <link rel="stylesheet" href="{{  asset('admin/assets/vendors/owl-carousel-2/owl.carousel.min.css')  }}">
    <link rel="stylesheet" href="{{  asset('admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css')  }}"> -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{  asset('admin/assets/css/style.css')  }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{  asset('admin/assets/images/favicon.png') }} }}" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          {{--  <a class="sidebar-brand brand-logo" href="index.html"><img src="assets/images/logo.svg" alt="logo" /></a>  --}}
          {{--  <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>  --}}
        </div>
        @include('admin.sidebar');
      </nav>
      <!-- partial -->
      @yield('dynamic')
      <!-- page-body-wrapper ends -->
    </div>
  </body>
</html>
