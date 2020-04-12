
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
  @auth
  <nav class="navbar navbar-expand-lg navbar-light navbar-absolute fixed-top ">
    <div class="container-fluid">
      <div class="navbar-wrapper">
        <a class="navbar-brand" href="#pablo">User Profile</a>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
        <span class="sr-only">Toggle navigation</span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
      </button>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          <li class="active nav-item">
            <a href="/Listing" class="nav-link"><i class="material-icons">post_add</i>Post Your Advert</a>
          </li>
          <li class="nav-item">
            <a href="javascript:;" class="nav-link"><i class="material-icons">account_circle</i>Profile</a>
          </li>
          <li class="nav-item">
            <a href="javascript:;" class="nav-link"><i class="material-icons">settings</i></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="content">
    <div class="container-fluid">
      <br><br><br><br><br>
      <div class="row">
        <div class="d-flex flex-row bd-highlight mb-2">
          <div class="p-2 bd-highlight">
            <div class="card card-profile">
              <div class="card-avatar">
                <a href="#pablo"><img class="img" src="http://i.pravatar.cc/200" /></a>
              </div>
              <div class="card-body">
                <div class="card-category text-gray">
                  <h4 class="card-title">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }} </h4>
                  <h6><strong>{{ Auth::user()->year}}</strong> Year Student</h6>
                  <h6>studying <strong><u>{{ Auth::user()->program}}</u></strong>  </h6>
                  <h6> at Universitetet i Sørøst-Norge-Porsgrunn </h6>    
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-md-8">
          <div class="card">
            <div class="card-body">
              <h3 style="font-size:16px;font-weight:400;text-transform:uppercase;margin-bottom:20px;letter-spacing:2px;color:#797979; float: left;">Hey There !</h3>
              <br><h1 style="float:left;text-transform: uppercase;color:#05364d;margin-top:20px;font-size:60px;font-weight:500;line-height:60px; ">I am </h1> 
              <h1 style="float:left;text-transform: uppercase;color:#05364d;margin-top:20px;font-size:60px;font-weight:500;line-height:60px;color:#00bcd4; margin-left: 25px ">  {{ Auth::user()->first_name}}  {{ Auth::user()->last_name}}</h1>
              <div class="profile-head" style="display: inline-block; letter-spacing: 2px;">
                <h6 class="text-muted"style="text-align:justify">I enjoy teaching beginners, intermediate levels and also I can greatly 
                  improve your Czech skills through communication and correction if you are advanced speaker. Let me know your language 
                  goals, and I will help you reach them. I am an easy going tutor who always put in the time and effort 
                  for all my students.</h6>
              </div>
            </div>
          </div>
        </div>
        <div class="row" style="margin-top:-20px; margin-right:10px;">
          <div class="d-flex flex-column bd-highlight mb-2">
            <div class="p-2 bd-highlight">
              <div class="card card-profile">
                <div class="card-header card-header-icon card-header-info">
                  <div class="card-icon"><i class="material-icons">info</i></div>
                  <h4 class="card-title" style="float:left">Contact Info and Rate</h4>
                </div>
                <div class="card-body">
                  <div class="card-category">
                    <h4 class="card-title "><i class="material-icons">email</i> Email: {{ Auth::user()->email}} </h4>
                    <h4 class="card-title" style="text-align:left"><i class="material-icons">smartphone</i> Phone: {{ Auth::user()->phone}}</h4>
                    <h4 class="card-title"  style="text-align:left"><i class="material-icons"> account_balance_wallet</i> Rate: Nok 160  per hour</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-8"style="margin-top:-10px">
         
            
              <div class="card card-profile" >
                <div class="card-header card-header-icon card-header-info">
                  <div class="card-icon"><i class="material-icons">info</i></div>
                  <h4 class="card-title" style="float:left">Meeting Place and Availability</h4>
                </div>
                <div class="card-body">
                  <div class="card-category">
                    <div class="row mx-md-n5">
                      <div class="col px-md-5">
                        
                      <div class="table-responsive">
                        <table class="table" style="text-align:left">
                          <thead class=" text-success" >
                            <th><strong> Days </strong></th><th><strong> Available Time </strong></th>
                          </thead>
                          <tbody >
                            <tr class="table-info">
                              <td>Monday</td><td>Dakota Rice</td>
                            </tr>
                            <tr>
                              <td>Tuesday</td><td>Minerva Hooper</td>
                            </tr>
                            <tr class="table-info">
                              <td>Wednesday</td><td>Sage Rodriguez</td>
                            </tr>
                            <tr>
                              <td>Thursday</td><td>Philip Chaney</td>
                            </tr>
                            <tr class="table-info">
                              <td>Friday</td> <td>Doris Greene</td>
                            </tr>
                            <tr>
                              <td>Saturday</td><td>Mason Porter</td>
                            </tr>
                            <tr class="table-info">
                              <td>Sunday</td><td>Mason Porter</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="col px-md-5">
                      <div class="p-3 border bg-light">
                        Meeting Place
                      </div>
                    </div>
                    </div>
                  </div>
                </div>
              
            </div>
          
        </div>
      </div>
    </div>
  </div>
</div>
	
  @endauth
</body>
</html>
