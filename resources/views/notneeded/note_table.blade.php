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
            <a href="/Listing" class="nav-link">
              <i class="material-icons">post_add</i>
              Post Your Advert
            </a>
          </li>
          <li class="active nav-item dropdown">
            <a href="/View_list" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="material-icons">view_list</i>
              View Your Advert
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="/View_list_book"> <i class="material-icons" style=" margin-right: 10px;">menu_book</i> Books</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#"><i class="material-icons" style=" margin-right: 10px;">notes</i>Notes</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="/View_list_tutor"><i class="material-icons" style=" margin-right: 10px;">school</i>Tutor</a>
            </div>
          </li>
         
          <li class="nav-item">
            <a href="javascript:;" class="nav-link">
              <i class="material-icons">account_circle</i>
              Profile
            </a>
          </li>
          <li class="nav-item">
            <a href="javascript:;" class="nav-link">
              <i class="material-icons">settings</i>
              Settings
            </a>
          </li>
        </ul>
      </div>
    </div>    
  </nav>
  <br><br><br><br><br>
  



  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <div class="card">
            <div class="card-header card-header-success card-header-icon">
              <div class="card-icon">
                <i class="material-icons">assignment</i>
              </div>
              <h4 class="card-title">Note Table</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th class="text-center">ID</th>
                      <th>Notes Name</th>
                      <th>Course ID</th>
                      <th>Year</th>
                      
                      <th class="text-right">Price</th>
                      <th class="text-right">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                      
                    
                    @foreach ($data as $row)
                        
                   
                    <tr>
                        <td class="text-center">{{$row->id}}</td>
                        <td>{{$row->note_name}}</td>
                        <td>{{$row->course_id}}</td>
                        <td>{{$row->year}}</td>
                        
                        <td class="text-right">Nok {{$row->price}}</td>
                        <td class="td-actions text-right">
                            <a href="/Edit_note" type="button" rel="tooltip" class="btn btn-info btn-link"><i class="material-icons">person</i></a>
                            <a href="/Edit_note" type="button" rel="tooltip" class="btn btn-success btn-link"><i class="material-icons">edit</i></a>
                            <a href="/Edit_note" type="button" rel="tooltip" class="btn btn-danger btn-link"><i class="material-icons">close</i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
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
