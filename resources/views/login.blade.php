<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="icon" href="{{ URL::asset('/img/icon/favicon-32x32.png') }}" sizes="32x32"  type="image/x-icon"/>
  <link rel="icon" sizes="32x32"  href="{!! asset('img/icon/favicon-32x32.png') !!}"/>

  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>   OwlsMate  </title>



  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="css/material-kit.min.css?v=2.0.7" rel="stylesheet" />


</head>

<body class="login-page sidebar-collapse">
  <div class="page-header header-filter" style="background-image: url('{{asset('img/Background.png')}}'); background-size: cover; background-position: top center;">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 ml-auto mr-auto">
          <div class="card card-login">
            <form class="form has-info"method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
              @csrf
              
              <div class="card-header card-header-info text-center">
                <h4 class="card-title"> <i class="material-icons">fingerprint</i>Login Here</h4>

              </div>
              @if (count($errors) > 0)
              @foreach ($errors->all() as $error)
              <h6  style="text-align: center; color: red;" >
              <b>{{ $error }}</b>
              </h6>
              @endforeach
              @endif
              <h3 class="description text-center text-warning">Welcome to</h3>
              <img  src="{{asset('img/default-avatar.png')}}" style="margin-left:40px;height:70px;width:50px; display:inline">
              <h2 style=" display:inline; color:#20bed2" class="description text-center"><b>OwlsMate</b></h2>
              <div class="card-body">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">mail</i>
                    </span>
                  </div>
                  <input type="email" class="form-control" name ="email" placeholder="Email...">
                </div>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">lock_outline</i>
                    </span>
                  </div>
                  <input type="password" name="password" class="form-control" placeholder="Password...">
                </div>
              </div>
              <div class="footer text-center">
                <button type="submit" class="btn btn-info btn-link btn-wd btn-lg">
                  {{ __('Login') }}
              </button>

              <a class="btn btn-link" href="{{ route('password.request') }}">
                  {{ __('Forgot Your Password?') }}
              </a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="js/core/jquery.min.js" type="text/javascript"></script>
  <script src="js/core/popper.min.js" type="text/javascript"></script>
  <script src="js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="js/plugins/moment.min.js"></script>
  <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="js/material-kit.min.js?v=2.0.7" type="text/javascript"></script>
  <script>
    // Facebook Pixel Code Don't Delete
    ! function(f, b, e, v, n, t, s) {
      if (f.fbq) return;
      n = f.fbq = function() {
        n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = '2.0';
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window,
      document, 'script', '//connect.facebook.net/en_US/fbevents.js');

    try {
      fbq('init', '111649226022273');
      fbq('track', "PageView");

    } catch (err) {
      console.log('Facebook Track Error:', err);
    }
  </script>
  <noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=111649226022273&ev=PageView&noscript=1" />
  </noscript>
</body>

</html>
