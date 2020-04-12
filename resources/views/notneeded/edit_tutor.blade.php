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
          <li class="active nav-item">
            <a href="/View_list" class="nav-link">
              <i class="material-icons">view_list</i>
              View Your Advert
            </a>
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
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
            <div class="col-sm-2"><div class="row">
                <div class="col-md-12 text-left">
                    <a href="/View_list" class="btn btn-sm btn-rose">Back</a>
                </div>
              </div></div>
        <div class="card col-sm-8" style="">
                    <div class="card-header card-header-icon card-header-info">
                      <div class="card-icon">
                        <i class="material-icons">school</i>
                      </div>
                      <h4 class="card-title text-center">Enlist to be a Tutor</h4>
                    </div>
                    <div class="card-body">
                      <form method="POST" action= "{{route('tutor.store')}}" class="form-horizontal">
                        @csrf  
                          <div class="row">
                            <label class="col-sm-2 col-form-label" for="course_id">Course ID</label>
                            <div class="col-sm-7">
                              <div class="form-group">
                                <input class="form-control" input type="text" name="course_id" id="course_id" placeholder="Course ID"  />
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <label class="col-sm-2 col-form-label" for="author">Course Name</label>
                            <div class="col-sm-7">
                              <div class="form-group">
                                <input class="form-control" name="course_name" id="course_name" type="text" placeholder="Course Name"  />
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <label class="col-sm-2 col-form-label" for="edition">Description</label>
                            <div class="col-sm-7">
                              <div class="form-group">
                                <textarea class="form-control" name="description" id="description" placeholder="Description"></textarea> 
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <label class="col-sm-2 col-form-label" for="isbn">Price</label>
                            <div class="col-sm-7">
                              <div class="form-group">
                                <input class="form-control" name="price" id="price" type="text" placeholder="Price per Hour "  />
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <label class="col-sm-2 col-form-label" for="meeting">Meeting Place</label>
                            <div class="col-sm-7">
                              <div class="form-group">
                                <input class="form-control" name="meeting" id="meeting" type="text" placeholder="Meeting Place"  />
                              </div>
                            </div>
                          </div>
                          
                          <input name="user_id" type="hidden" value=" {{ Auth::user()->id}} ">
                          <input name="first_name" type="hidden" value=" {{ Auth::user()->first_name}} ">
                          <input name="last_name" type="hidden" value=" {{ Auth::user()->last_name}} ">
                          <input name="email" type="hidden" value=" {{ Auth::user()->email}} ">
                          <input name="phone" type="hidden" value=" {{ Auth::user()->phone}} ">
                          <input name="program" type="hidden" value=" {{ Auth::user()->program}} ">
                          <input name="year" type="hidden" value=" {{ Auth::user()->year}} ">
  
                          
                          <button type="submit" value="Update" class="btn btn-info pull-right">Post It</button>
                          <div class="clearfix"></div>
                        </form>
  
                    </div>
                  </div>
      </div>
    </div></div>
                  

@endauth
</body>
</html>
