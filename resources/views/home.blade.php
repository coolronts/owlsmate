
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="icon" href="{{ URL::asset('/img/icon/favicon-32x32.png') }}" sizes="32x32"  type="image/x-icon"/>
  <link rel="icon" sizes="32x32"  href="{!! asset('img/icon/favicon-32x32.png') !!}"/>
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>    OwlsMate </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <link href="css/material-bootstrap-wizard.css" rel="stylesheet" />
 
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
  @if (Auth::check())
  <nav class="navbar navbar-expand-lg navbar-light navbar-absolute fixed-top ">
    <div class="container-fluid">
      <div class="navbar-wrapper">
        <div class="navbar-wrapper">
          <a href= "/home"><img class="navbar-brand" style="height:70px; width: 200px" src="{{asset('img/logopng1.png')}}"></a>
       </div>
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
            <a href="/home" class="nav-link text-info">
              <span class="material-icons">
                dashboard
                </span>
              Dashboard
            </a>
          </li>
          <li class="active nav-item">
            <a href="/Listing" class="nav-link">
              <i class="material-icons">post_add</i>
              Post Your Advert
            </a>
          </li>
          <li class="active nav-item">
            <a href="/allpost" class="nav-link">
              <i class="material-icons">view_list</i>
              View Your Post
            </a>
          </li>
          <li class="active nav-item dropdown">
            <a href="/View_list" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              @if (Auth::user()->image != null)
                <img src="{{asset('storage/'. Auth::user()->image)}}" style="vertical-align: middle; width: 30px;height: 30px; border-radius: 50%;"/>
              @else
              <img src="{{asset('img/default-avatar.png')}}" style="vertical-align: middle; width: 30px;height: 30px; border-radius: 50%;"/>
              @endif
                Log Out
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"> {{ __('Logout') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
          </li>
        </ul>
      </div>
    </div>    
  </nav>
  
  <div class="content">
   
    <div class="container-fluid">
      <br><br><br><br><br>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            
            @if(session('success'))
            <div class="row">
              <div class="col-md-5"></div>
              <div class="alert col-md-2" style="max-height:2px" role="alert" id="alert" name="alert">
                <button style="max-height:2px;" type="button" class="close col-md-2" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><span style="color:black; margin-left:-30px;" >&times;</span></span></button>
                <strong style="max-height:2px" class="text-success">{{session('success')}}</strong> 
              </div>
            </div>
            @endif
            @if(session('error'))
            <div class="row">
              <div class="col-md-5"></div>
              <div class="alert col-md-2" style="max-height:2px" role="alert" id="alert" name="alert">
                <button style="max-height:2px;" type="button" class="close col-md-2" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><span style="color:black; margin-left:-30px;" >&times;</span></span></button>
                <strong style="max-height:2px" class="text-danger">{{session('error')}}</strong> 
              </div>
            </div>
            @endif
            @if ($errors->any())
            <div class="row">
              <div class="col-md-5"></div>
              <div class="alert col-md-4" style="max-height:2px" role="alert" id="alert" name="alert">
                <button style="max-height:2px;" type="button" class="close col-md-2" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><span style="color:black" >&times;</span></span></button>
                <ul>
                  @foreach ($errors->all() as $error)
                      <li><strong style="max-height:2px" class="text-danger">{{ $error }}</strong> </li>
                  @endforeach
                </ul>
              </div>
            </div>
            @endif
            
            <div class="card-body" style="text-align: center;">
              <div class="profile-head" style="display: inline-block; letter-spacing: 2px;">
                <h5 class="display-1" style="display: inline-block;">Hello!</h5>
                <h6 class="display-2" style="display: inline-block; color:#00bcd4;">
                    <br>{{ Auth::user()->first_name }} 
                </h6>
                <p>This is your User Profile, where you can update your information</p>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-md-7">
          <div class="Wizard-container">
            <div class="card wizard-card" data-color="blue" id="wizardProfile">
              <div class="card-header card-header-icon card-header-info">
                <div class="card-icon">
                  <i class="material-icons">perm_identity</i>
                </div>
                <h4 class="card-title">Edit Profile</h4>
              </div>
              <div class="card-body">
                <form method="POST" enctype="multipart/form-data" action="{{route('user.update','Auth::user()->id')}}" autocomplete="off" class="form-horizontal">
                  @csrf  
                  @method('PUT')
                  <div class="row">
                    <div class="col-sm-4 col-sm-offset-1">
                      
                  </div>
                  </div>
                  <div class="row">
                    <label class="col-sm-2 col-form-label">Profile photo</label>
                    <div class="picture-container" style="margin-left:10px;">
                      <div class="picture">
                        @if (Auth::user()->image != null)
                        <img src="{{asset('storage/'. Auth::user()->image)}}" class="picture-src" id="wizardPicturePreview" title=""/>
                        <input type="file" name="image" id="image">
                        @else 
                        <img src="{{asset('img/default-avatar.png')}}" class="picture-src" id="wizardPicturePreview" title=""/>
                        <input type="file" name="image" id="image">
                        @endif
                      </div>
                      <h6><strong>Choose Picture to change Picture</strong></h6>
                    </div>
                  </div>
                  <div class="row">
                    <label class="col-sm-2 col-form-label">First Name</label>
                    <div class="col-sm-4">
                      <div class="form-group label-floating has-success">
                        <input class="form-control" name="first_name" id="first_name" type="text" placeholder="First Name" value="{{ Auth::user()->first_name }}"/>
                        
                      </div>
                    </div>
                    <label class="col-sm-2 col-form-label">Last Name</label>
                    <div class="col-sm-4">
                      <div class="form-group label-floating has-success">
                        <input class="form-control @error('last_name') is-invalid @enderror" name="last_name" id="last_name" type="text" placeholder="Last Name" value="{{ Auth::user()->last_name }}"/>
                      </div>
                      </div>
                  </div>
                  <div class="row">
                    <label class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <input class="form-control" name="email" id="email" type="email" placeholder="Email" value="{{ Auth::user()->email }}" disabled/>
                      </div>
                    </div>
                    <label class="col-sm-2 col-form-label">Phone</label>
                    <div class="col-sm-4">
                      <div class="form-group label-floating has-success">
                        <input class="form-control" name="phone" id="phone" type="phone" placeholder="Phone" value="{{ Auth::user()->phone }}"/>
                      </div>
                    </div>
                  </div>
                  
                  <button type="Submit"  class="btn btn-info pull-right">Update Profile</button>
                  <div class="clearfix"></div>
                </form>
              </div>
            </div>
          </div>
         
          <br>
          <div class="card">
            <div class="card-header card-header-icon card-header-info">
              <div class="card-icon">
                <i class="material-icons">school</i>
              </div>
              <h4 class="card-title">Change Educational Information</h4>
            </div>
            <div class="card-body">
              <form method="POST" action= "{{route('user.update','Auth::user()->id')}}" class="form-horizontal">
                @csrf  
                @method('PUT')
                <div class="row">
                  <label class="col-sm-2 col-form-label" for="university">University</label>
                  <div class="col-sm-7">
                    <div class="form-group label-floating has-success">
                      <input class="form-control" input type="text" name="university" id="university" placeholder="{{ Auth::user()->university }}"  />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label" for="input-program">Program</label>
                  <div class="col-sm-7">
                    <div class="form-group label-floating has-success">
                      <input class="form-control" name="program" id="program" type="text" placeholder="{{ Auth::user()->program }}"  />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label" for="year">Year</label>
                  <div class="col-sm-7">
                    <div class="form-group label-floating has-success">
                      <select class="form-control mdb-select md-form"  name="year" id="year" >
                        <option value="" disabled selected>Choose your study year</option>
                        <option value="1st Year">1st Year</option>
                        <option value="2nd Year"> 2nd Year</option>
                        <option value="3rd Year"> 3rd Year</option>
                        <option value="4th Year"> 4th Year</option>
                        <option value="5th Year">5th Year</option>
                        <option value="Alumini">Alumini</option>
                      </select>
                    </div>
                  </div>
                </div>
                <button type="submit" value="Update" class="btn btn-info pull-right">Change Info</button>
                <div class="clearfix"></div>
              </form>
            </div>
          </div>
        </div>
        <div class="d-flex flex-column bd-highlight mb-2">
          <div class="p-2 bd-highlight">
            <div class="card card-profile">
              <div class="card-avatar">
                @if (Auth::user()->image != null)
                <a href="#pablo">
                  <img class="img" src="{{asset('storage/'. Auth::user()->image)}} " />
                </a>
                @else
                <a href="#pablo">
                  <img class="img" src="{{asset('img/default-avatar.png')}} " />
                </a>
                @endif
              </div>
              @if (Auth::user()->verified == 1)
              <div class="container" style=" text-align: center; ">
                <span class="material-icons" style=" color:#28B463; text-shadow: 0 0 3px #28B463; display: inline-block">verified_user</span>
                <h6  style=" color:#28B463;display: inline-block"><strong> Verified Student  </strong></h6>
              </div>
              @endif
              <div class="card-body">
                <div class="card-category text-gray">
                  <h4 class="card-title">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }} </h4>
                  <h6>Student at <strong>Universitetet i Sørøst-Norge</strong></h6>
                  <h6>Studying <strong>{{ Auth::user()->program}}</strong> in <strong> {{ Auth::user()->year}} </strong></h6>
                  
                  <div class="card-description"> 
                      <div class="inline-block pull-left">
                        <i class="material-icons">email</i>Email:  {{ Auth::user()->email}}
                      </div>
                      <div class="inline-block pull-right">
                        <i class="material-icons">smartphone</i>Phone: {{ Auth::user()->phone}}
                      </div>
                      <br><br><p>Joined in: {{ Auth::user()->created_at}}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <br><br><br><br>
          <div class="p-2 bd-highlight">
            <div class="card">
              <div class="card-header card-header-icon card-header-info">
                <div class="card-icon">
                  <i class="material-icons">lock</i>
                </div>
                <h4 class="card-title">Change password</h4>
              </div>
              <div class="card-body">
                <form method="POST" action="{{route('user.update','Auth::user()->id')}}" class="form-horizontal">
                  @csrf  
                  @method('PUT')
                  <div class="row">
                    <label class="col-sm-4 col-form-label" for="current-password">Current Password</label>
                    <div class="col-sm-8">
                      <div class="form-group">
                        <input class="form-control" input type="password" name="old_password" id="current-password" placeholder="Current Password" value=""  />
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <label class="col-sm-4 col-form-label" for="input-password">New Password</label>
                    <div class="col-sm-8">
                      <div class="form-group">
                        <input class="form-control" name="password" id="password" type="password" placeholder="New Password" value="" required />
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <label class="col-sm-4 col-form-label" for="password_confirmation">Confirm New Password</label>
                    <div class="col-sm-8">
                      <div class="form-group">
                        <input class="form-control" name="password_confirmation" id="password-confirmation" type="password" placeholder="Confirm New Password" value="" required />
                      </div>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-info pull-right">Change password</button>
                  <div class="clearfix"></div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
	
  @else
  <script>
    window.location = "/login";
  </script>
  @endif
  @endauth
  @guest
  <script>
    window.location = "./login";
</script>
  @endguest
<script src="https://material-dashboard-pro-laravel.creative-tim.com/material/js/plugins/bootstrap-selectpicker.js"></script>
<script src="https://material-dashboard-pro-laravel.creative-tim.com/material/js/plugins/jasny-bootstrap.min.js"></script>
<!--   Core JS Files   -->
<script src="js/jquery-2.2.4.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/jquery.bootstrap.js" type="text/javascript"></script>

<!--  Plugin for the Wizard -->
<script src="js/material-bootstrap-wizard.js"></script>

<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
<script src="js/jquery.validate.min.js"></script>


</body>
</html>
