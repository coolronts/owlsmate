
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="icon" href="{{ URL::asset('/img/icon/favicon-32x32.png') }}" type="image/x-icon"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <title> OwlsMate </title>
        <link rel="icon" href="{!! asset('img/icon/favicon-32x32.png') !!}"/>
        
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
       <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
       <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
       <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@700&display=swap" rel="stylesheet">
        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

        <!-- CSS Files -->
        <link href="css/bootstrap.min.css" rel="stylesheet" />
        <link href="https://demos.creative-tim.com/marketplace/now-ui-kit-pro/assets/css/now-ui-kit.css?v=1.2.0" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
        <link href="css/material-dashboard.css" rel="stylesheet" />
        
        <!-- CSS Files -->
        <link href="css/material-kit.min.css?v=2.0.7" rel="stylesheet" />
        <link href="css/material-bootstrap-wizard.css" rel="stylesheet" />
        
       
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

    <body class="product-page" >
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg bg-white fixed-top ">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <div class="navbar-wrapper">
                      <img class="navbar-brand" style="height:60px; width: 240px; margin-left:5px;" src="{{asset('img/logopng1.png')}}">
                   </div>
                </div>
                @guest
                <div class="pull-right">
                    <a onMouseOver="this.style.opacity='1'" onMouseOver="this.style.background-color='rgba(0,0,0,0.5)'"onMouseOut="this.style.color='#00bcd4'"  onMouseOut="this.style.opacity='0.4'" href="/Login" style="color: #00bcd4;background-color: transparent;border-color: #00bcd4; border: 1px solid #00bcd4; margin-top: 0;padding-top: 8px;padding-right: 25px; padding-bottom: 8px;padding-left: 25px;margin-bottom: 0; " title="Signin" class="btn btn-outline-info " > <i class="material-icons" style="font-size:20px; margin-bottom:10px">fingerprint</i> <b style="font-size:12px; font-weight:normal">SIGN IN</b></a>
                    <a onMouseOver="this.style.opacity='1'" onMouseOver="this.style.background-color='rgba(0,0,0,0.5)'"onMouseOut="this.style.color='#00bcd4'"  onMouseOut="this.style.opacity='0.4'" href="/Register" title="Signup" class="btn btn-outline-info" style="color: #00bcd4;background-color: transparent;border-color: #00bcd4; border: 1px solid #00bcd4; margin-top: 0;padding-top: 8px;padding-right: 25px; padding-bottom: 8px;padding-left: 25px;margin-bottom: 0;  " > <i class="material-icons" style="font-size:20px; margin-bottom:10px">person_add</i><b style="font-size:12px; font-weight:normal" >SIGN UP </b> </a>
                </div>
            @endguest
            </div>    
        </nav>
        <!-- End Navbar -->
        <div class="wrapper" style="margin-top:-40px; margin-bottom:40px">
            <div class="page-header page-header-mini">
                <div class="page-header-image" data-parallax="true" style=" height: 300px; background-image: url('{{ asset('img/back.png') }}')  ;">
                </div>
            </div>
            <div class="section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5" style="margin-top: -50px">
                            <div class="p-2 bd-highlight">
                                <div class="card card-profile">
                                    <div class="card-avatar" style="margin: -50px auto 0;height: 100%; width:500%;border-radius: 50%;overflow: hidden; height: auto;padding: 0;box-shadow: 0 16px 38px -12px rgba(0, 0, 0, 0.56), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);">
                                        <a style="" href="#pablo">
                                        <img class="img" style=" box-shadow: 0 40px 60px 0 rgba(0, 0, 0, 0.2), 0 6px 80px 0 rgba(0, 0, 0, 0.19);" src="{{asset('storage/'. $user_data->image)}}" />
                                        </a>
                                    </div>
                                    @if($user_data->verified==1)
                                    <div class="row"  >
                                        <span class="material-icons" style=" color:#28B463; text-shadow: 0 0 3px #28B463; display: inline-block">verified_user
                                        </span>
                                        <h6  style=" color:#28B463;display: inline-block"><strong> Verified Student  </strong></h6>                     
                                    </div>
                                    @endif
                                        
                                        <div class="card-body">
                                            <div class="card-category text-gray">

                                                <div style="font-family: 'Roboto Slab', serif; line-height: 25px; font-weight: 700; color: #3c4858; font-size: 18px">{{ $user_data->first_name }} {{ $user_data->last_name }}  </div>
                                                <br>
                                                <p style="font-family: 'Roboto', sans-serif; font-size:13px; line-height: 19px; color:#999999;text-transform: uppercase;"> 
                                                student at <strong>{{ $user_data->university }} </strong>
                                                </p>
                                                <p style="font-family: 'Roboto', sans-serif; font-size:13px; line-height: 19px; color:#999999; text-transform: uppercase;">
                                            STUDYING <strong>ELECTRICAL ENGINEERING </strong> IN <strong>3RD YEAR </strong> </p> 
                                            <br><img src="https://img.icons8.com/android/24/000000/coins.png"/> <h4 style="display: inline;  margin-left: 10px;">  Hourly Rate: </h4> <h3 style="display: inline; margin-left: 10px;">{{ $data->price}} <small>NOK/HR </small></h3> 
                                            <br><br><br>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <h1 class="blockquote blockquote-primary" style="margin-top: -50px; box-shadow: 0 40px 60px 0 rgba(0, 0, 0, 0.2), 0 6px 80px 0 rgba(0, 0, 0, 0.19);">
                                <small class="text-center">Contact Me:</small><br>
                                <i class="material-icons">email</i> Email: {{ $user_data->email}} <br>
                                <i class="material-icons">smartphone</i>Phone: {{$user_data->phone}}
                            </h1>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-6 ml-auto mr-auto" style="">
                            <h4 style="text-align: center;"> {{$data->course_name}} <u>{{$data->course_id}}</u> Tutor</h4>

                            <h3 style="font-size:24px;font-weight:400;text-transform:uppercase;margin-bottom:20px;letter-spacing:2px;color:#797979; float: left;">Hey There !</h3>
                            <br><h1 style="float:left;text-transform: uppercase;color:#05364d;margin-top:20px;font-size:50px;font-weight:500;line-height:60px; ">I am </h1> <br>
                            <h1 style="float:left;text-transform: uppercase;margin-top:-20px;font-size:60px;font-weight:500;line-height:60px;color:#00bcd4;  ">  {{ $user_data->first_name}}  {{ $user_data->last_name}}</h1>
              
                            <div id="accordion" role="tablist" aria-multiselectable="true" class="card-collapse">
                                <div class="card card-plain">
                                    <div class="card-header" role="tab" id="headingOne">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                           My Bio<i class="now-ui-icons arrows-1_minimal-down"></i>
                                        </a>
                                    </div>

                                    <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="card-body">
                                            <p>{!! nl2br(e($data->description)) !!} </p>


                                        </div>
                                    </div>
                                </div>
                                <div class="card card-plain">
                                    <div class="card-header" role="tab" id="headingTwo">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Course Information<i class="now-ui-icons arrows-1_minimal-down"></i>
                                        </a>
                                    </div>
                                    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="card-body" style="text-align: center"><h6 style="">Course ID:</h6><h5> {{$data->course_id}}</h5>
                                            <h6 style="">Course Name: </h6><h5 style="display: inline;"> {{$data->course_name}}</h5>
                                            <p style="text-align: left;"> <b><u>Course Description</u></b> </p>
                                            <p style="text-align: justify;">{!! nl2br(e($data->course_description)) !!}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-plain">
                                    <div class="card-header" role="tab" id="headingThree">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">My Schedule<i class="now-ui-icons arrows-1_minimal-down"></i>
                                        </a>
                                    </div>
                                    <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                                        <div class="card-body">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-10">
                                           <table class="table">
                                                <thead class="table-warning-bordered">
                                                    <tr style="margin-top:; text-align: center;">
                                                        <th scope="col"> </th> 
                                                        <th scope="col">
                                                            <h6> Morning </h6>
                                                            <small>06:00—12:00</small>
                                                        </th>
                                                        <th scope="col">
                                                            <h6>Noon</h6>
                                                            <small>12:00—18:00</small>
                                                        </th>
                                                        <th scope="col">
                                                            <h6>Evening</h6>
                                                            <small>18:00—24:00</small>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody style="margin-top:; text-align: center;">
                                                    <tr>
                                                    <th scope="row">Sun</th>
                                                    <td style="text-align: center;">
                                                        @if(strpos ($data->available,'00') !== false )
                                                        
                                                        <span class="material-icons" style=" color:#28B463; display: inline-block">done</span>
                                                        @endif
                                                    </td>
                                
                                                    <td style="text-align: center;">
                                                        @if(strpos ($data->available,'01') !== false )
                                                        
                                                        <span class="material-icons" style=" color:#28B463; display: inline-block">done</span>
                                                        @endif
                                                    </td>

                                                    <td style="text-align: center;">
                                                        @if(strpos ($data->available,'02') !== false )
                                                        
                                                        <span class="material-icons" style=" color:#28B463; display: inline-block">done</span>
                                                        @endif
                                                    </td>
                                                        
                                                </tr>

                                                <tr>
                                                <th scope="row">Mon</th>
                                                 <td style="text-align: center;">
                                                    @if(strpos ($data->available,'10') !== false )
                                                    
                                                    <span class="material-icons" style=" color:#28B463; display: inline-block">done</span>
                                                    @endif
                                                </td>
                                                <td style="text-align: center;">
                                                    @if(strpos ($data->available,'11') !== false )
                                                    
                                                    <span class="material-icons" style=" color:#28B463; display: inline-block">done</span>
                                                    @endif
                                                </td>
                                                <td style="text-align: center;">
                                                    @if(strpos ($data->available,'12') !== false )
                                                    
                                                    <span class="material-icons" style=" color:#28B463; display: inline-block">done</span>
                                                    @endif
                                                </td>
                                                        
                                            </tr>

                                            <tr>
                                                <th scope="row">Tue</th>
                                                <td style="text-align: center;">
                                                    @if(strpos ($data->available,'20') !== false )
                                                    
                                                    <span class="material-icons" style=" color:#28B463; display: inline-block">done</span>
                                                    @endif
                                                </td>
                                                <td style="text-align: center;">
                                                    @if(strpos ($data->available,'21') !== false )
                                                    
                                                    <span class="material-icons" style=" color:#28B463; display: inline-block">done</span>
                                                    @endif
                                                </td>
                                                <td style="text-align: center;">
                                                    @if(strpos ($data->available,'23') !== false )
                                                    
                                                    <span class="material-icons" style=" color:#28B463; display: inline-block">done</span>
                                                    @endif
                                                </td>
                                                        
                                              </tr>

                                              <tr>
                                                <th scope="row">Wed</th>
                                                <td style="text-align: center;">
                                                    @if(strpos ($data->available,'30') !== false )
                                                    
                                                    <span class="material-icons" style=" color:#28B463; display: inline-block">done</span>
                                                    @endif
                                                </td>
                                                <td style="text-align: center;">
                                                    @if(strpos ($data->available,'31') !== false )
                                                    
                                                    <span class="material-icons" style=" color:#28B463; display: inline-block">done</span>
                                                    @endif
                                                </td>
                                                <td style="text-align: center;">
                                                    @if(strpos ($data->available,'32') !== false )
                                                    
                                                    <span class="material-icons" style=" color:#28B463; display: inline-block">done</span>
                                                    @endif
                                                </td>
                                                        
                                              </tr>

                                              <tr>
                                                <th scope="row">Thu</th>
                                                <td style="text-align: center;">
                                                    @if(strpos ($data->available,'40') !== false )
                                                    
                                                    <span class="material-icons" style=" color:#28B463; display: inline-block">done</span>
                                                    @endif
                                                </td>
                                                <td style="text-align: center;">
                                                    @if(strpos ($data->available,'41') !== false )
                                                    
                                                    <span class="material-icons" style=" color:#28B463; display: inline-block">done</span>
                                                    @endif
                                                </td>
                                                <td style="text-align: center;">
                                                    @if(strpos ($data->available,'42') !== false )
                                                    
                                                    <span class="material-icons" style=" color:#28B463; display: inline-block">done</span>
                                                    @endif
                                                </td>
                                                        
                                              </tr>

                                              <tr>
                                                <th scope="row">Fri</th>
                                                <td style="text-align: center;">
                                                    @if(strpos ($data->available,'50') !== false )
                                                    
                                                    <span class="material-icons" style=" color:#28B463; display: inline-block">done</span>
                                                    @endif
                                                </td>
                                                <td style="text-align: center;">
                                                    @if(strpos ($data->available,'51') !== false )
                                                    
                                                    <span class="material-icons" style=" color:#28B463; display: inline-block">done</span>
                                                    @endif
                                                </td>
                                                <td style="text-align: center;">
                                                    @if(strpos ($data->available,'52') !== false )
                                                    
                                                    <span class="material-icons" style=" color:#28B463; display: inline-block">done</span>
                                                    @endif
                                                </td>
                                                        
                                              </tr>

                                              <tr>
                                                <th scope="row">Sat</th>
                                                <td style="text-align: center;">
                                                    @if(strpos ($data->available,'60') !== false )
                                                    
                                                    <span class="material-icons" style=" color:#28B463; display: inline-block">done</span>
                                                    @endif
                                                </td>
                                                <td style="text-align: center;">
                                                    @if(strpos ($data->available,'61') !== false )
                                                    
                                                    <span class="material-icons" style=" color:#28B463; display: inline-block">done</span>
                                                    @endif
                                                </td>
                                                <td style="text-align: center;">
                                                    @if(strpos ($data->available,'62') !== false )
                                                    
                                                    <span class="material-icons" style=" color:#28B463; display: inline-block">done</span>
                                                    @endif
                                                </td>       
                                              </tr>
                                              </tbody >
                                            </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="features-4">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card card-background card-raised" data-background-color style="background-image: url('../assets/img/bg24.jpg')">
                                        <div class="info">
                                            <div class="icon icon-white">
                                                <img src="https://img.icons8.com/carbon-copy/100/000000/missed-call.png"/>
                                            </div>
                                            <div class="description">
                                                <h4 class="info-title">Call or Email</h4>
                                                <p>Contact them to know more about them and their study procedure.</p>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="card card-background card-raised" data-background-color style="background-image: url('../assets/img/bg28.jpg')">
                                        <div class="info">
                                            <div class="icon icon-white">
                                                <img src="https://img.icons8.com/ios/100/000000/collaboration.png"/>
                                            </div>
                                            <div class="description">
                                                <h4 class="info-title">Talk and Negotiate</h4>
                                                <p>Negotiate and settle a place to meet at your convenience .</p>
                              
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="card card-background card-raised" data-background-color style="background-image: url('../assets/img/bg25.jpg')">
                                        <div class="info">

                                            <div class="icon">
                                                <img src="https://img.icons8.com/ios-filled/100/000000/group-foreground-selected.png"/>
                                            </div>
                                            <div class="description">
                                                <h4 class="info-title">Meet and Learn</h4>
                                                <p>Meet at the right place to sit together and study.</p>
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
        
    </body>

    <!--   Core JS Files   -->
<script src="js/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="js/core/popper.min.js" type="text/javascript"></script>
<script src="js/plugins/bootstrap.min.js" type="text/javascript"></script>
<script src="https://demos.creative-tim.com/marketplace/now-ui-kit-pro/assets/js/plugins/moment.min.js"></script>

<!--  Plugin for Switches, full documentation here: https://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="https://demos.creative-tim.com/marketplace/now-ui-kit-pro/assets/js/plugins/bootstrap-switch.js"></script>

<!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="../assets/js/plugins/bootstrap-tagsinput.js"></script>

<!--	Plugin for Select, full documentation here: https://silviomoreto.github.io/bootstrap-select -->
<script src="https://demos.creative-tim.com/marketplace/now-ui-kit-pro/assets/js/plugins/bootstrap-selectpicker.js" type="text/javascript"></script>

<!--  Google Maps Plugin    -->
<!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGat1sgDZ-3y6fFe6HD7QUziVC6jlJNog"></script> -->

<!--	Plugin for Fileupload, full documentation here: https://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="../assets/js/plugins/jasny-bootstrap.min.js"></script>

<!--  Plugin for the Sliders, full documentation here: https://refreshless.com/nouislider/ -->
<script src="https://demos.creative-tim.com/marketplace/now-ui-kit-pro/assets/js/plugins/nouislider.min.js" type="text/javascript"></script>

<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="../assets/js/plugins/bootstrap-datetimepicker.min.js" type="text/javascript"></script>

<!-- Plugins for Presentation Page -->

<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="https://demos.creative-tim.com/marketplace/now-ui-kit-pro/assets/js/now-ui-kit.js?v=1.2.0" type="text/javascript"></script>


</html>
