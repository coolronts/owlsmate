
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="icon" href="{{ URL::asset('/img/icon/favicon-32x32.png') }}" type="image/x-icon"/>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
        <link rel="icon" type="image/png" href="../assets/img/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <title> OWLSMATE </title>

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
                        @guest
                            <a href= "/"><img class="navbar-brand" style="height:60px; width: 240px; margin-left:5px;" src="{{asset('img/logopng1.png')}}"></a>
                        @endguest
                        @auth
                            <a href= "/home"><img class="navbar-brand" style="height:60px; width: 240px; margin-left:5px;" src="{{asset('img/logopng1.png')}}"></a>
                        @endauth
                      
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
            <!--Flatmate Starts--->
            @if($data->house_type==1)
            <div class="section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div id="myCarousel" role="listbox" class="carousel slide" data-ride="carousel" style="  box-shadow: 0 40px 60px 0 rgba(0, 0, 0, 0.2), 0 6px 80px 0 rgba(0, 0, 0, 0.19);">
                            <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    
                                   
                                        @if ($data->image_1 != null)
                                            <li data-target="#myCarousel" data-slide-to="0"></li>
                                        @endif
                                        @if ($data->image_2 != null)
                                            <li data-target="#myCarousel" data-slide-to="1"></li>
                                        @endif
                                        @if ($data->image_3 != null)
                                            <li data-target="#myCarousel" data-slide-to="2"></li>
                                        @endif
                                        @if ($data->image_4 != null)
                                            <li data-target="#myCarousel" data-slide-to="3"></li>
                                        @endif
                                        @if ($data->image_5 != null)
                                            <li data-target="#myCarousel" data-slide-to="4"></li>
                                        @endif
                                        @if ($data->image_6 != null)
                                            <li data-target="#myCarousel" data-slide-to="5" class="active"></li>
                                        @endif
                                        
                                   
                                </ol>
                            
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox" style=" width:100%; height: 300px !important;">
                                    @if ($data->image_1 == null  and $data->image_2 == null and $data->image_3 == null and $data->image_4 == null and $data->image_5 == null and $data->image_6 == null)
                                    <div class="item active" >
                                        <img src="{{ asset('img/no image available.png') }} " alt="" style="width:100%;">
                                    </div>
                                @endif 
                                @if ($data->image_1 != null)
                                    <div class="item active">
                                        <img src="{{asset('storage/'.$data->image_1)}}" alt="Image 1" style="width:100%;">
                                    </div>

                                    @if ($data->image_2 != null)
                                        <div class="item ">
                                            <img src="{{asset('storage/'.$data->image_2)}}" alt="Image 2" style="width:100%;">
                                        </div>
                                    @endif

                                    @if ($data->image_3 != null)
                                        <div class="item ">
                                            <img src="{{asset('storage/'.$data->image_3)}}" alt="Image 2" style="width:100%;">
                                        </div>
                                    @endif

                                    @if ($data->image_4 != null)
                                        <div class="item ">
                                            <img src="{{asset('storage/'.$data->image_4)}}" alt="Image 2" style="width:100%;">
                                        </div>
                                    @endif

                                    @if ($data->image_5 != null)
                                        <div class="item ">
                                            <img src="{{asset('storage/'.$data->image_5)}}" alt="Image 2" style="width:100%;">
                                        </div>
                                    @endif

                                    @if ($data->image_6 != null)
                                        <div class="item ">
                                            <img src="{{asset('storage/'.$data->image_6)}}" alt="Image 2" style="width:100%;">
                                        </div>
                                    @endif
                                

                                @elseif ($data->image_2 != null and $data->image_1 == null )
                                    <div class="item active ">
                                        <img src="{{asset('storage/'.$data->image_2)}}" alt="Image 2" style="width:100%;">
                                    </div>
                                    @if ($data->image_3 != null)
                                        <div class="item ">
                                            <img src="{{asset('storage/'.$data->image_3)}}" alt="Image 2" style="width:100%;">
                                        </div>
                                    @endif

                                    @if ($data->image_4 != null)
                                        <div class="item ">
                                            <img src="{{asset('storage/'.$data->image_4)}}" alt="Image 2" style="width:100%;">
                                        </div>
                                    @endif

                                    @if ($data->image_5 != null)
                                        <div class="item ">
                                            <img src="{{asset('storage/'.$data->image_5)}}" alt="Image 2" style="width:100%;">
                                        </div>
                                    @endif

                                    @if ($data->image_6 != null)
                                        <div class="item ">
                                            <img src="{{asset('storage/'.$data->image_6)}}" alt="Image 2" style="width:100%;">
                                        </div>
                                    @endif
                                
                                @elseif ($data->image_3 != null and $data->image_2 == null and $data->image_1 == null )
                                    <div class="item ">
                                        <img src="{{asset('storage/'.$data->image_3)}}" alt="Image 3" style="width:100%;">
                                    </div>

                                    @if ($data->image_4 != null)
                                        <div class="item ">
                                            <img src="{{asset('storage/'.$data->image_4)}}" alt="Image 2" style="width:100%;">
                                        </div>
                                    @endif

                                    @if ($data->image_5 != null)
                                        <div class="item ">
                                            <img src="{{asset('storage/'.$data->image_5)}}" alt="Image 2" style="width:100%;">
                                        </div>
                                    @endif

                                    @if ($data->image_6 != null)
                                        <div class="item ">
                                            <img src="{{asset('storage/'.$data->image_6)}}" alt="Image 2" style="width:100%;">
                                        </div>
                                    @endif
                                @elseif ($data->image_4 != null and $data->image_3 == null and $data->image_2 == null and $data->image_1 == null)
                                    <div class="item active ">
                                        <img src="{{asset('storage/'.$data->image_4)}}" alt="Image 4" style="width:100%;">
                                    </div>
                                    @if ($data->image_5 != null)
                                        <div class="item ">
                                            <img src="{{asset('storage/'.$data->image_5)}}" alt="Image 2" style="width:100%;">
                                        </div>
                                    @endif

                                    @if ($data->image_6 != null)
                                        <div class="item ">
                                            <img src="{{asset('storage/'.$data->image_6)}}" alt="Image 2" style="width:100%;">
                                        </div>
                                    @endif
                                
                                @elseif ($data->image_5 != null and $data->image_3 == null and $data->image_2 == null and $data->image_1 == null and $data->image_4 == null )
                                    <div class="item active ">
                                        <img src="{{asset('storage/'.$data->image_5)}}" alt="Image 5" style="width:100%;">
                                    </div>
                                    @if ($data->image_6 != null)
                                        <div class="item ">
                                            <img src="{{asset('storage/'.$data->image_6)}}" alt="Image 2" style="width:100%;">
                                        </div>
                                    @endif
                               
                                @elseif ($data->image_6 != null)
                                <div class="item active " >
                                    <img src=" {{asset('storage/'.$data->image_6)}} " alt=" Image " style="width:100%;">
                                </div>
                                @endif
                            </div>
                            
                                <!-- Left and right controls -->
                                
                                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                            
                            <div class="p-2 bd-highlight" style="margin-top: 40px">
                                <div class="card card-profile">
                                    <div class="card-avatar">
                                        <a href="#pablo">
                                        <img class="img" style="box-shadow: 0 40px 60px 0 rgba(0, 0, 0, 0.2), 0 6px 80px 0 rgba(0, 0, 0, 0.19);" src="{{asset('storage/'. $user_data->image)}}" />
                                        </a>
                                        @if ($user_data->verified == 1)
                                        <div class="row" style=" text-align: center; ">
                                            <span class="material-icons" style=" color:#28B463; text-shadow: 0 0 3px #28B463; display: inline-block">verified_user</span>
                                            <h6  style=" color:#28B463;display: inline-block"><strong> Verified Student  </strong></h6>
                                        </div>
                                        @endif
                                    </div>
                                    @if ($user_data->verified == 1)
                                    <br><br>
                                    @endif
                                    
                                    <div class="card-body">
                                         <div class="card-category text-gray">

                                            <div style="font-family: 'Roboto Slab', serif; line-height: 25px; font-weight: 700; color: #3c4858; font-size: 18px">{{ $user_data->first_name }} {{ $user_data->last_name }}  </div>
                                             <br>
                                            <p style="font-family: 'Roboto', sans-serif; font-size:13px; line-height: 19px; color:#999999;text-transform: uppercase;"> 
                                               student at <strong>{{ $user_data->university }} </strong>
                                            </p>
                                            <p style="font-family: 'Roboto', sans-serif; font-size:13px; line-height: 19px; color:#999999; text-transform: uppercase;">
                                           STUDYING <strong>ELECTRICAL ENGINEERING </strong> IN <strong>3RD YEAR </strong> </p> <br><br><br>
                                           
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
                        <div class="col-md-6 ml-auto mr-auto">
                            @if ($data->product_type==1)
                            <h2 style="color: #e03471">
                                <i class="fa fa-book" aria-hidden="true"></i> Book
                            </h2>
                            @elseif ($data->product_type==2)
                            <h2 style="color: #54a958">
                                 <i class="fa fa-sticky-note-o" aria-hidden="true"></i> Note
                            </h2>
                            @endif
                            <h2 class="title"> Fabulous Room in Upscale Block </h2>
                            <h5 class="category">in {{$data->address}}</h5><h5 class="category">{{$data->city}}, {{$data->postcode}}</h5>
                            <h2 class="main-price" style="display:inline-block"> {{$data->rent}} </h2>
                            <h5 style="display:inline-block" >  NOK/month </h5>

                            <div id="accordion" role="tablist" aria-multiselectable="true" class="card-collapse">
                                <div class="card card-plain">
                                    <div class="card-header" role="tab" id="headingOne">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                           Flat Information<i class="now-ui-icons arrows-1_minimal-down"></i>
                                        </a>
                                    </div>

                                    <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="card-body">
                                            <i class="material-icons" >group</i>
                                            <p  style="display:inline; margin-right:10px " >Number of FlatMates: </p> <h6 style="display:inline">  {{$data->accomodate}} Mate</h6> 
                                            <br>
                                            @if( $data->room_type == 1)
                                            <i class="material-icons" style="display:inline">meeting_room</i>
                                            <p  style="display:inline" >Room Type: </p> <h6 style="display:inline"> Furnished</h6> 
                                            @elseif ( $data->room_type == 2)
                                            <i class="material-icons" style="display:inline">meeting_room</i>
                                            <p  style="display:inline" >Room Type: </p> <h6 style="display:inline"> Semi-Furnished</h6> 
                                            @else
                                            <i class="material-icons" style="display:inline">meeting_room</i>
                                            <p  style="display:inline" >Room Type: </p> <h6 style="display:inline"> UnFurnished</h6> 
                                            @endif
                                            <br>

                                            @if( $data->bath_type == 1)
                                            <i class="material-icons" style="display:inline">bathtub</i>
                                            <p  style="display:inline" >Bath Type: </p> <h6 style="display:inline"> Private</h6> 
                                         
                                            @elseif ( $data->bath_type == 2)
                                            <i class="material-icons" style="display:inline">bathtub</i>
                                            <p  style="display:inline" >Bath Type: </p> <h6 style="display:inline"> Shared</h6> 
                                            @endif
                                            <br>
                                            @if ($data->pet == 0)
                                            <i class="material-icons" style="display:inline">pets</i>
                                            <p style="display:inline; margin-top:80px"> Pet:</p> <h6 style="display:inline"> Not Allowed </h6>
                                            @else 
                                            <i class="material-icons" style="display:inline">pets</i>
                                            <p style="display:inline"> Pet:</p> <h6 style="display:inline">  Allowed </h6>
                                            @endif
                                            <br>
                                            @if ($data->smoking == 0)
                                            <i class="material-icons" style="display:inline">smoking_rooms</i>
                                            <p style="display:inline; margin-top:80px"> Smoking:</p> <h6 style="display:inline"> Not Allowed </h6>
                                            @else 
                                            <i class="material-icons" style="display:inline">smoking_rooms</i>
                                            <p style="display:inline"> Smoking:</p> <h6 style="display:inline">  Allowed </h6>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-plain">
                                    <div class="card-header" role="tab" id="headingTwo">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                           Rent Information

                                            <i class="now-ui-icons arrows-1_minimal-down"></i>
                                        </a>
                                    </div>
                                    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="card-body">
                                            <i class="material-icons">attach_money</i>
                                            <p style="display:inline"> Rent:</p> <h5 style="display:inline">   {{$data->rent}}   <small>Nok/month</small> </h5>
                                            <br>
                                            @if ($data->internet == 0)
                                            <i class="material-icons">wifi</i>
                                            <p style="display:inline; margin-top:80px"> Internet:</p> <h6 style="display:inline">  Not Included </h6>
                                            @else 
                                            <i class="material-icons">wifi</i>
                                            <p style="display:inline"> Internet:</p> <h6 style="display:inline">  Included </h6>
                                            @endif
                                            <br>
                                            @if ($data->electricity == 0)
                                            <span class="material-icons">show_chart</span><p  style="display:inline" >Electricity: </p> <h6 style="display:inline"> Not Included</h6> 
                                            @else 
                                            <span class="material-icons">show_chart</span><p  style="display:inline" >Electricity: </p> <h6 style="display:inline"> Included</h6> 
                                           
                                            @endif
                                            <br>
                                            @if ($data->bond == 0)
                                            <span class="material-icons">assignment</span><p  style="display:inline" >Bond: </p> <h6 style="display:inline"> Not Required </h6> <small> Bond that has to be paid upfront before moving in as a security. </small>
                                            @else
                                            <span class="material-icons">assignment</span><p  style="display:inline" >Bond: </p> <h6 style="display:inline"> {{$data->bond}} Months </h6> <small> Bond that has to be paid upfront before moving in as a security. </small>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-plain">
                                    <div class="card-header" role="tab" id="headingThree">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            House Description <i class="now-ui-icons arrows-1_minimal-down"></i>
                                        </a>
                                    </div>
                                    <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                                        <div class="card-body">
                                            <p>{!! nl2br(e($data->describe_me)) !!}</p>
                                        </div>
                                    </div>
                                   
                                </div>
                                <div class="card card-plain">
                                    <div class="card-header" role="tab" id="headingFour">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            Looking For<i class="now-ui-icons arrows-1_minimal-down"></i>
                                        </a>
                                    </div>
                                    <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour">
                                        <div class="card-body">
                                            <p>{!! nl2br(e($data->describe_others)) !!}</p>

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
                                                <p>Contact them to know more about the flat and them.</p>
                                                
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
                                                <p>Negotiate and settle a time to visit the flat at your convenience .</p>
                              
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="card card-background card-raised" data-background-color style="background-image: url('../assets/img/bg25.jpg')">
                                        <div class="info">

                                            <div class="icon">
                                                <img src="https://img.icons8.com/ios/100/000000/transfer-between-users.png"/>
                                            </div>
                                            <div class="description">
                                                <h4 class="info-title">Visit </h4>
                                                <p>Visit the flat to look and know more about the flat.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            <!---Flatmate Ends--->

            <!--Buddy Up Starts--->
            @if($data->house_type==2)
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
                                            <br><img src="https://img.icons8.com/android/24/000000/coins.png"/> <h4 style="display: inline;  margin-left: 10px;">  Budget: </h4> <h3 style="display: inline; margin-left: 10px;">{{ $data->rent}} <small>NOK </small></h3> 
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
                            <h2 class="text-danger" style="text-align: center;"> <u><b> <span class="material-icons" style="font-size:32px" >emoji_people</span>Buddy Up</b> </u></h2>

                            <h3 style="font-size:24px;font-weight:400;text-transform:uppercase;margin-bottom:20px;letter-spacing:2px;color:#797979; float: left;">Hey There !</h3>
                            <br><h1 style="float:left;text-transform: uppercase;color:#05364d;margin-top:20px;font-size:50px;font-weight:500;line-height:60px; ">I am </h1> <br>
                            <h1 style="float:left;text-transform: uppercase;margin-top:-20px;font-size:60px;font-weight:500;line-height:60px;color:#00bcd4;  ">  {{ $user_data->first_name}}  {{ $user_data->last_name}}</h1>
              
                            <div id="accordion" role="tablist" aria-multiselectable="true" class="card-collapse">
                                <div class="card card-plain">
                                    <div class="card-header" role="tab" id="headingOne">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                           About Me<i class="now-ui-icons arrows-1_minimal-down"></i>
                                        </a>
                                    </div>

                                    <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="card-body" >
                                            <p>{!! nl2br(e($data->describe_me)) !!} </p>


                                        </div>
                                    </div>
                                </div>
                                <div class="card card-plain">
                                    <div class="card-header" role="tab" id="headingTwo">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Preferred Accomodation<i class="now-ui-icons arrows-1_minimal-down"></i>
                                        </a>
                                    </div>
                                    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="card-body" >
                                            <p style="text-align: justify;text-justify: inter-word;" >{!! nl2br(e($data->house_description)) !!} </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-plain">
                                    <div class="card-header" role="tab" id="headingThree">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Preferred Buddy<i class="now-ui-icons arrows-1_minimal-down"></i>
                                        </a>
                                    </div>
                                    <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                                        <div class="card-body" >
                                            <p>{!! nl2br(e($data->describe_others)) !!} </p>
                                            <br>
                                            <div style="display:inline; border-left: 6px solid green;height: 40px;">
                                                <i class="material-icons" style="display:inline">people_alt</i>
                                                <p style="display:inline"> {{$data->gender}}</p> <h6 style="display:inline">  Allowed </h6>
                                            </div>
                                            <div style="display:inline; border-left: 6px solid green;height: 40px;">
                                                @if ($data->pet == 0)
                                                <i class="material-icons" style="display:inline">pets</i>
                                                <p style="display:inline; margin-top:80px"> Pet:</p> <h6 style="display:inline"> Not Allowed </h6>
                                                @else 
                                                <i class="material-icons" style="display:inline">pets</i>
                                                <p style="display:inline"> Pet:</p> <h6 style="display:inline">  Allowed </h6>
                                                @endif
                                            </div>
                                            <div style="display:inline; border-left: 6px solid green;height: 40px;">
                                                @if ($data->smoking == 0)
                                                <i class="material-icons" style="display:inline">smoking_rooms</i>
                                                <p style="display:inline; margin-top:80px"> Smoking:</p> <h6 style="display:inline"> Not Allowed </h6>
                                                @else 
                                                <i class="material-icons" style="display:inline">smoking_rooms</i>
                                                <p style="display:inline"> Smoking:</p> <h6 style="display:inline">  Allowed </h6>
                                                @endif
                                            </div>
                                            <div style="display:inline; border-left: 6px solid green;height: 40px;">
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
                                                <p>Contact them to know more about them and their choice.</p>
                                                
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
                                                <h4 class="info-title">Talk and Learn</h4>
                                                <p>Talk to each other more openly and settle with each other about the choice of house</p>
                              
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
                                                <h4 class="info-title">Meet and Hunt</h4>
                                                <p>Venture together to hunt for a new place to stay.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            


            @endif
            <!--Buddy Up Ends--->

            
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

<script type="text/javascript">
  // Facebook Pixel Code Don't Delete
  !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
  n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
  document,'script','//connect.facebook.net/en_US/fbevents.js');

  try{
    fbq('init', '111649226022273');
    fbq('track', "PageView");

  }catch(err) {
    console.log('Facebook Track Error:', err);
  }
</script>

</html>
