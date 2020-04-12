
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="https://material-dashboard-pro-laravel.creative-tim.com/material/img/apple-icon.png">
    <link rel="icon" type="image/png" href="https://material-dashboard-pro-laravel.creative-tim.com/material/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
      Material Dashboard Pro Laravel by Creative Tim & UPDIVISION
    </title>

    <!-- CSS Files -->
    <link href="https://material-dashboard-pro-laravel.creative-tim.com/material/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    
  </head>
  <body>
      
                    <div class="wrapper ">
                        
  

  <div class="main-panel"> 
   
<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
    <div class="container-fluid">
      <div class="navbar-wrapper">
        <div class="navbar-minimize">
          <button id="minimizeSidebar" class="btn btn-just-icon btn-white btn-fab btn-round">
            <i class="material-icons text_align-center visible-on-sidebar-regular">more_vert</i>
            <i class="material-icons design_bullet-list-67 visible-on-sidebar-mini">view_list</i>
          </button>
        </div>
        <a class="navbar-brand" href="#pablo">User Profile</a>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
        <span class="sr-only">Toggle navigation</span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end">
        <form class="navbar-form">
          <div class="input-group no-border">
            <input type="text" value="" class="form-control" placeholder="Search...">
            <button type="submit" class="btn btn-white btn-round btn-just-icon">
              <i class="material-icons">search</i>
              <div class="ripple-container"></div>
            </button>
          </div>
        </form>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="https://material-dashboard-pro-laravel.creative-tim.com/dashboard">
              <i class="material-icons">dashboard</i>
              <p class="d-lg-none d-md-block">
                Stats
              </p>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="material-icons">notifications</i>
              <span class="notification">5</span>
              <p class="d-lg-none d-md-block">
                Some Actions
              </p>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">Mike John responded to your email</a>
              <a class="dropdown-item" href="#">You have 5 new tasks</a>
              <a class="dropdown-item" href="#">You&#039;re now friend with Andrew</a>
              <a class="dropdown-item" href="#">Another Notification</a>
              <a class="dropdown-item" href="#">Another One</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="material-icons">person</i>
              <p class="d-lg-none d-md-block">
                  Account
              </p>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                <a class="dropdown-item" href="https://material-dashboard-pro-laravel.creative-tim.com/profile">Profile</a>
                <a class="dropdown-item" href="#">Settings</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="https://material-dashboard-pro-laravel.creative-tim.com/logout" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Log out</a>
            </div>
          </li>
        </ul>
      </div>
        </div>
    </nav>
  <!-- End Navbar -->
    <div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header card-header-icon card-header-rose">
            <div class="card-icon">
              <i class="material-icons">perm_identity</i>
            </div>
            <h4 class="card-title">Edit Profile</h4>
          </div>
          <div class="card-body">
            <form method="post" enctype="multipart/form-data" action="https://material-dashboard-pro-laravel.creative-tim.com/profile" autocomplete="off" class="form-horizontal">
              <input type="hidden" name="_token" value="gmGihZBc07yagz0xeKpH17xRamsTdPmfstaisdbA">              <input type="hidden" name="_method" value="put">
              <div class="row">
                <label class="col-sm-2 col-form-label">Profile photo</label>
                <div class="col-sm-7">
                  <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                    <div class="fileinput-new thumbnail img-circle">
                                              <img src="https://material-dashboard-pro-laravel.creative-tim.com/material/img/placeholder.jpg" alt="...">
                                          </div>
                    <div class="fileinput-preview fileinput-exists thumbnail img-circle"></div>
                    <div>
                      <span class="btn btn-rose btn-file">
                        <span class="fileinput-new">Select image</span>
                        <span class="fileinput-exists">Change</span>
                        <input type="file" name="photo" id = "input-picture" />
                      </span>
                        <a href="#pablo" class="btn btn-danger fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                    </div>
                                      </div>
                </div>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-7">
                  <div class="form-group">
                    <input class="form-control" name="name" id="input-name" type="text" placeholder="Name" value="Admin" required="true" aria-required="true"/>
                                      </div>
                </div>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-7">
                  <div class="form-group">
                    <input class="form-control" name="email" id="input-email" type="email" placeholder="Email" value="admin@material.com" required />
                                      </div>
                </div>
              </div>
              <button type="submit" class="btn btn-rose pull-right">Update Profile</button>
              <div class="clearfix"></div>
            </form>
          </div>
        </div>

        <div class="card">
          <div class="card-header card-header-icon card-header-rose">
            <div class="card-icon">
              <i class="material-icons">lock</i>
            </div>
            <h4 class="card-title">Change password</h4>
          </div>
          <div class="card-body">
            <form method="post" action="https://material-dashboard-pro-laravel.creative-tim.com/profile/password" class="form-horizontal">
              <input type="hidden" name="_token" value="gmGihZBc07yagz0xeKpH17xRamsTdPmfstaisdbA">              <input type="hidden" name="_method" value="put">
              <div class="row">
                <label class="col-sm-2 col-form-label" for="input-current-password">Current Password</label>
                <div class="col-sm-7">
                  <div class="form-group">
                    <input class="form-control" input type="password" name="old_password" id="input-current-password" placeholder="Current Password" value="" required />
                                      </div>
                </div>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label" for="input-password">New Password</label>
                <div class="col-sm-7">
                  <div class="form-group">
                    <input class="form-control" name="password" id="input-password" type="password" placeholder="New Password" value="" required />
                                      </div>
                </div>
              </div>
              <div class="row">
                <label class="col-sm-2 col-form-label" for="input-password-confirmation">Confirm New Password</label>
                <div class="col-sm-7">
                  <div class="form-group">
                    <input class="form-control" name="password_confirmation" id="input-password-confirmation" type="password" placeholder="Confirm New Password" value="" required />
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-rose pull-right">Change password</button>
              <div class="clearfix"></div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-profile">
          <div class="card-avatar">
            <a href="#pablo">
              <img class="img" src="http://i.pravatar.cc/200" />
            </a>
          </div>
          <div class="card-body">
            <h6 class="card-category text-gray">CEO / Co-Founder</h6>
            <h4 class="card-title">Alec Thompson</h4>
            <p class="card-description">
              Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
            </p>
            <a href="#pablo" class="btn btn-rose btn-round">Follow</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
      </div>
</div>
                
        <div class="fixed-plugin">
          <div class="dropdown show-dropdown">
            <a href="#" data-toggle="dropdown">
              <i class="fa fa-cog fa-2x"> </i>
            </a>
            <ul class="dropdown-menu">
              <li class="header-title"> Sidebar Filters</li>
              <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger active-color">
                  <div class="badge-colors ml-auto mr-auto">
                    <span class="badge filter badge-purple" data-color="purple"></span>
                    <span class="badge filter badge-azure" data-color="azure"></span>
                    <span class="badge filter badge-green" data-color="green"></span>
                    <span class="badge filter badge-warning" data-color="orange"></span>
                    <span class="badge filter badge-danger" data-color="danger"></span>
                    <span class="badge filter badge-rose active" data-color="rose"></span>
                  </div>
                  <div class="clearfix"></div>
                </a>
              </li>
              <li class="header-title">Sidebar Background</li>
              <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger background-color">
                  <div class="ml-auto mr-auto">
                    <span class="badge filter badge-black active" data-background-color="black"></span>
                    <span class="badge filter badge-white" data-background-color="white"></span>
                    <span class="badge filter badge-red" data-background-color="red"></span>
                  </div>
                  <div class="clearfix"></div>
                </a>
              </li>
              <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger">
                  <p>Sidebar Mini</p>
                  <label class="ml-auto">
                    <div class="togglebutton switch-sidebar-mini">
                      <label>
                        <input type="checkbox">
                        <span class="toggle"></span>
                      </label>
                    </div>
                  </label>
                  <div class="clearfix"></div>
                </a>
              </li>
              <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger">
                  <p>Sidebar Images</p>
                  <label class="switch-mini ml-auto">
                    <div class="togglebutton switch-sidebar-image">
                      <label>
                        <input type="checkbox" checked="">
                        <span class="toggle"></span>
                      </label>
                    </div>
                  </label>
                  <div class="clearfix"></div>
                </a>
              </li>
              <li class="header-title">Images</li>
              <li class="active">
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                  <img src="https://material-dashboard-pro-laravel.creative-tim.com/material/img/sidebar-1.jpg" alt="">
                </a>
              </li>
              <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                  <img src="https://material-dashboard-pro-laravel.creative-tim.com/material/img/sidebar-2.jpg" alt="">
                </a>
              </li>
              <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                  <img src="https://material-dashboard-pro-laravel.creative-tim.com/material/img/sidebar-3.jpg" alt="">
                </a>
              </li>
              <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                  <img src="https://material-dashboard-pro-laravel.creative-tim.com/material/img/sidebar-4.jpg" alt="">
                </a>
              </li>
              <li class="button-container">
                <a href="https://www.creative-tim.com/product/material-dashboard-pro-laravel" target="_blank" class="btn btn-rose btn-block btn-fill">Buy Now</a>
                <a href="https://material-dashboard-pro-laravel.creative-tim.com/docs/getting-started/laravel-setup.html" target="_blank" class="btn btn-default btn-block">
                  Documentation
                </a>
                <a href="https://www.creative-tim.com/product/material-dashboard-laravel" target="_blank" class="btn btn-info btn-block">
                  Get Free Demo!
                </a>
              </li>
              <li class="button-container github-star">
                <a class="github-button" style="display: inline;" href="https://github.com/creativetimofficial/ct-material-dashboard-pro-laravel" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star ntkme/github-buttons on GitHub">Star</a>
              </li>
              <li class="header-title">Thank you for 95 shares!</li>
              <li class="button-container text-center">
                <button id="twitter" class="btn btn-round btn-twitter sharrre"><i class="fa fa-twitter"></i> &middot; 45</button>
                <button id="facebook" class="btn btn-round btn-facebook sharrre"><i class="fa fa-facebook-f"></i> &middot; 50</button>
                <br>
                <br>
              </li>
            </ul>
          </div>
        </div>
        <!--   Core JS Files   -->
        <script src="https://material-dashboard-pro-laravel.creative-tim.com/material/js/core/jquery.min.js"></script>
        <script src="https://material-dashboard-pro-laravel.creative-tim.com/material/js/core/popper.min.js"></script>
        <script src="https://material-dashboard-pro-laravel.creative-tim.com/material/js/core/bootstrap-material-design.min.js"></script>
        <script src="https://material-dashboard-pro-laravel.creative-tim.com/material/js/plugins/perfect-scrollbar.jquery.min.js"></script>
        <!-- Plugin for the momentJs  -->
        <script src="https://material-dashboard-pro-laravel.creative-tim.com/material/js/plugins/moment.min.js"></script>
        <!--  Plugin for Sweet Alert -->
        <script src="https://material-dashboard-pro-laravel.creative-tim.com/material/js/plugins/sweetalert2.js"></script>
        <!-- Forms Validations Plugin -->
        <script src="https://material-dashboard-pro-laravel.creative-tim.com/material/js/plugins/jquery.validate.min.js"></script>
        <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
        <script src="https://material-dashboard-pro-laravel.creative-tim.com/material/js/plugins/jquery.bootstrap-wizard.js"></script>
        <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
        <script src="https://material-dashboard-pro-laravel.creative-tim.com/material/js/plugins/bootstrap-selectpicker.js"></script>
        <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
        <script src="https://material-dashboard-pro-laravel.creative-tim.com/material/js/plugins/bootstrap-datetimepicker.min.js"></script>
        <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
        <script src="https://material-dashboard-pro-laravel.creative-tim.com/material/js/plugins/jquery.dataTables.min.js"></script>
        <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
        <script src="https://material-dashboard-pro-laravel.creative-tim.com/material/js/plugins/bootstrap-tagsinput.js"></script>
        <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
        <script src="https://material-dashboard-pro-laravel.creative-tim.com/material/js/plugins/jasny-bootstrap.min.js"></script>
        <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
        <script src="https://material-dashboard-pro-laravel.creative-tim.com/material/js/plugins/fullcalendar.min.js"></script>
        <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
        <script src="https://material-dashboard-pro-laravel.creative-tim.com/material/js/plugins/jquery-jvectormap.js"></script>
        <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
        <script src="https://material-dashboard-pro-laravel.creative-tim.com/material/js/plugins/nouislider.min.js"></script>
        <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
        <!-- Library for adding dinamically elements -->
        <script src="https://material-dashboard-pro-laravel.creative-tim.com/material/js/plugins/arrive.min.js"></script>
        <!--  Google Maps Plugin    -->
        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
        <!-- Chartist JS -->
        <script src="https://material-dashboard-pro-laravel.creative-tim.com/material/js/plugins/chartist.min.js"></script>
        <!--  Notifications Plugin    -->
        <script src="https://material-dashboard-pro-laravel.creative-tim.com/material/js/plugins/bootstrap-notify.js"></script>
        <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="https://material-dashboard-pro-laravel.creative-tim.com/material/js/material-dashboard.js?v=2.1.0" type="text/javascript"></script>
        <!-- Material Dashboard DEMO methods, don't include it in your project! -->
        <script src="https://material-dashboard-pro-laravel.creative-tim.com/material/demo/demo.js"></script>
        <script src="https://material-dashboard-pro-laravel.creative-tim.com/material/js/application.js"></script>
        <script src="https://material-dashboard-pro-laravel.creative-tim.com/material/demo/jquery.sharrre.js"></script>
        <script>
          $(document).ready(function () {
            
            
            $('#facebook').sharrre({
              share: {
                facebook: true
              },
              enableHover: false,
              enableTracking: false,
              enableCounter: false,
              click: function(api, options) {
                api.simulateClick();
                api.openPopup('facebook');
              },
              template: '<i class="fab fa-facebook-f"></i> Facebook',
              url: 'https://material-dashboard-pro-laravel.creative-tim.com/login'
            });

            $('#google').sharrre({
              share: {
                googlePlus: true
              },
              enableCounter: false,
              enableHover: false,
              enableTracking: true,
              click: function(api, options) {
                api.simulateClick();
                api.openPopup('googlePlus');
              },
              template: '<i class="fab fa-google-plus"></i> Google',
              url: 'https://material-dashboard-pro-laravel.creative-tim.com/login'
            });

            $('#twitter').sharrre({
              share: {
                twitter: true
              },
              enableHover: false,
              enableTracking: false,
              enableCounter: false,
              buttons: {
                twitter: {
                  via: 'CreativeTim'
                }
              },
              click: function(api, options) {
                api.simulateClick();
                api.openPopup('twitter');
              },
              template: '<i class="fab fa-twitter"></i> Twitter',
              url: 'https://material-dashboard-pro-laravel.creative-tim.com/login'
            });

          });
        </script>
        <script>
  $(document).ready(function () {
      });
</script>
        
</body>

</html>
