<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Stellar Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/vendor/stellar/assets/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="/vendor/stellar/assets/vendors/flag-icon-css/css/flag-icons.min.css">
    <link rel="stylesheet" href="/vendor/stellar/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="/vendor/stellar/assets/css/vertical-light-layout/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="/vendor/stellar/assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
                @if(session('info'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        {{ session('info') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="auth-form-light text-left p-5">
                    <div class="brand-logo">
                    <img src="/images/logo.png" style="width: 100px !important;">
                    </div>
                    <h4>Admin <span class="fw-bold">OCEAN'S GRAND</span></h4>
                    <h6 class="font-weight-light">Login untuk melanjutkan.</h6>
                    <form class="pt-3" action="/login" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg" id="username" name="username" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Password">
                        </div>
                        <div class="my-3 d-grid">
                            <button type="submit" class="btn d-grid btn-primary btn-lg font-weight-medium auth-form-btn">LOGIN</button>
                        </div>
                    </form>
                    <a href="/loginuser" class="text-decoration-none">Login Sebagai Pelanggan</a>
                </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="/vendor/stellar/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="/vendor/stellar/assets/js/off-canvas.js"></script>
    <script src="/vendor/stellar/assets/js/hoverable-collapse.js"></script>
    <script src="/vendor/stellar/assets/js/misc.js"></script>
    <script src="/vendor/stellar/assets/js/settings.js"></script>
    <script src="/vendor/stellar/assets/js/todolist.js"></script>
    <!-- endinject -->
  </body>
</html>
