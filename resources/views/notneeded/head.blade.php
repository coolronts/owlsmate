<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="img/icon.png">
  <link rel="icon" type="image/png" href="img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>    OWLMATE-Login  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!-- Extra details for Live View on GitHub Pages -->
  <!-- Canonical SEO -->
  <link rel="canonical" href="https://www.creative-tim.com/product/material-kit" />
 
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <link href="css/material-dashboard.css" rel="stylesheet" />
  
  <!-- CSS Files -->
  <link href="css/material-kit.min.css?v=2.0.7" rel="stylesheet" />
  
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
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
<body>
    @yield('content')

</body>
</html>