<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Ateeqa - Admin Login</title>

  <!-- Custom fonts for this template-->
  <link href="/dashhboard/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="/dashhboard/css/sb-admin-2.min.css" rel="stylesheet">

</head>


<body class="bg-gradient-primary">

  <div class="container">
   
    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-6 col-lg-12 col-md-6">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              {{-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> --}}
              <div class="col-lg-12 ">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Ateeqa Admin!</h1>
                  </div>
                  <form class="user"  method="post" action="/admin/login" id="theForm">
                     <div style="margin-top: 40px;">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>

                        <div style="margin-top: 40px;">
                            @if( Session::has('flash') )
                                <div class="alert alert-danger">
                                    {{ Session::get('flash') }}
                                </div>
                            @endif
                        </div>

                        {{ csrf_field() }}
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="txtusername" id="" aria-describedby="" placeholder="Enter Email Address...">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="" name="txtpassword" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                    <input type="submit" class="btn btn-primary btn-user btn-block" value="Login">
                     
                    
                    {{-- <hr> --}}
                   {{--  <a href="index.html" class="btn btn-google btn-user btn-block">
                      <i class="fab fa-google fa-fw"></i> Login with Google
                    </a>
                    <a href="index.html" class="btn btn-facebook btn-user btn-block">
                      <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                    </a> --}}
                  </form>
                  {{-- <hr> --}}
                 {{--  <div class="text-center">
                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="register.html">Create an Account!</a>
                  </div> --}}
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="/dashhboard/vendor/jquery/jquery.min.js"></script>
  <script src="/dashhboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="/dashhboard/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="/dashhboard/js/sb-admin-2.min.js"></script>

</body>

</html>

