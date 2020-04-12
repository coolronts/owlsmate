<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <link rel="icon" href="{{ URL::asset('/img/icon/favicon-32x32.png') }}" sizes="32x32"  type="image/x-icon"/>
  	<link rel="icon" sizes="32x32"  href="{!! asset('img/icon/favicon-32x32.png') !!}"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>    OwlsMate  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <link href="{{asset('css/material-dashboard.css')}}" rel="stylesheet" />
  
  <!-- CSS Files -->
  <link href="{{asset('css/material-kit.min.css?v=2.0.7')}}" rel="stylesheet" />
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script type="text/javascript">
      window.alert = function(){};
      var defaultCSS = document.getElementById('bootstrap-css');
      function changeCSS(css){
          if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
          else $('head > link').filter(':first').replaceWith(defaultCSS); 
      }
      $( document ).ready(function() {
        var iframe_height = parseInt($('html').height()); 
        window.parent.postMessage( iframe_height, 'https://bootsnipp.com');
      });
  </script>
</head>

<body class="login-page sidebar-collapse">
    
        
        
    
            @yield('content')
      
</body>




      
   
    
</html>
