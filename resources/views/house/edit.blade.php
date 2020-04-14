<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8" />
    <link rel="icon" href="{{ URL::asset('/img/icon/favicon-32x32.png') }}" sizes="32x32"  type="image/x-icon"/>
    <link rel="icon" sizes="32x32"  href="{!! asset('img/icon/favicon-32x32.png') !!}"/>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>    OwlsMate </title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    
    
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link href="{{asset('css/material-dashboard.css')}}" rel="stylesheet" />
    
    <!-- CSS Files -->
    <link href="{{asset('css/material-kit.min.css?v=2.0.7')}}" rel="stylesheet" />
    
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
          <a href= "/home"><img class="navbar-brand" style="height:70px; width: 220px; margin-left:5px;" src="{{asset('img/logopng1.png')}}"></a>
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
            <a href="/home" class="nav-link">
              <span class="material-icons">
                dashboard
                </span>
              Dashboard
            </a>
          <li class="active nav-item">
            <a href="/Listing" class="nav-link ">
              <i class="material-icons">post_add</i>
              Post Your Advert
            </a>
          </li>
          <li class="active nav-item">
            <a href="/allpost" class="nav-link text-info">
              <i class="material-icons">view_list</i>
              View Your Advert
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
  <br><br><br><br><br>
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-6">
          @if(Session::has('success'))
          <h6  style="text-align: center; color: green;" >
            <b>{{ Session::get('success')}}</b>
          </h6>
          @endif
          @if (count($errors) > 0)
                @foreach ($errors->all() as $error)
              <h6  style="text-align: center; color: red;" >
              <b>{{ $error }}</b>
              </h6>
            </li>
            @endforeach
          @endif
          @if ($house->house_type == 1)
          <form method="POST" action= "{{route('house.update',$house->id)}}" enctype="multipart/form-data" class="form-horizontal">
          @csrf  
          @method('PUT') 
            <h2 class="text-center text-danger"><span class="material-icons">king_bed</span> FlatMate Ad ID: {{$house->id}} </h2>
            <p class="text-center"><b><u>Edit your Post and Re-Post It</u></b></p>
            <div class="row">
              <div class="col-md-12 text-left">
                <a href="/allpost" class="btn btn-sm btn-rose">Back</a>
              </div>
            </div>
            <h3>Title Section</h3>
              <hr>
              <div class="row">
                <label class="col-sm-3 col-form-label text-center" for="title"><span class="material-icons">group</span>No. of Mates</label>
                <div class="col-sm-7">
                  <div class="form-group label-floating has-success">
                    <input class="form-control" name="title" id="title" value="{{$house->title}}" type="text"  />
                    <small class="form-text text-muted">Insert Title of your Ad, min. of </small>
                  </div>
                </div>
              </div>
              <h3>Room Section</h3>
              <hr>
              <div class="row">
                <label class="col-sm-3 col-form-label text-center" for="accomodate"><span class="material-icons">group</span>No. of Mates</label>
                <div class="col-sm-7">
                  <div class="form-group label-floating has-success">
                    <input class="form-control" name="accomodate" id="accomodate" value="{{$house->accomodate}}" type="text" placeholder="No. of Accomodate"  />
                    <small class="form-text text-muted">Write down the number of flatmates in the house</small>
                  </div>
                </div>
              </div>

              <div class="row">
                <label class="col-sm-3 col-form-label text-center" for="room_type"><span class="material-icons">meeting_room</span>Room Type</label>
                <div class="col-sm-2">
                  @if($house->room_type == 1)
                  <label class="radio-inline"><input type="radio" name="room_type" value="1" checked>Furnished <small class="form-text text-muted"><i>The room with bed, table, wardrobe and others.</i></small></label>
                  @else 
                  <label class="radio-inline"><input type="radio" name="room_type" value="1">Furnished <small class="form-text text-muted"><i>The room that comes with bed, table, wardrobe and others.</i></small></label>
                  @endif
                </div>
                <div class="col-sm-2">
                  @if($house->room_type == 2)
                  <label class="radio-inline"><input type="radio" name="room_type" value="2" checked>Semi-Furnished<small class="form-text text-muted"><i> The room with only bed.</i></small></label>
                  @else
                  <label class="radio-inline"><input type="radio" name="room_type" value="2" >Semi-Furnished<small class="form-text text-muted"><i> The room with only bed.</i></small></label>
                  @endif
                </div>
                <div class="col-sm-2">
                  @if($house->room_type == 3)
                  <label class="radio-inline"><input type="radio" name="room_type" value="3" checked>Unfurnished <small class="form-text text-muted"><i>The room which is barely empty.</i></small></label>
                  @else
                  <label class="radio-inline"><input type="radio" name="room_type" value="3" >Unfurnished <small class="form-text text-muted"><i>The room which is barely empty.</i></small></label>
                  @endif
                </div>
              </div>

              <div class="row">
                <label class="col-sm-3 col-form-label text-center" for= "bath_type"><span class="material-icons">bathtub</span>Bathroom Type<small class="form-text text-muted">Choose the right Bathrooom type.</small></label>
                <div class="col-sm-2" style="margin-top: 10px">
                  <label class="radio-inline">
                    @if($house->bath_type == 1)
                    <input type="radio" name="bath_type" value="1" checked>Private<small class="form-text text-muted"><i>The bathroom will only be used by the flatmate. </i></small>
                    @else
                    <input type="radio" name="bath_type" value="1" >Private<small class="form-text text-muted"><i>The bathroom will only be used by the flatmate. </i></small>
                    @endif
                  </label>
                </div>
                <div class="col-sm-2" style="margin-top: 10px">
                  <label class="radio-inline">
                    @if($house->bath_type == 2)
                    <input type="radio" name="bath_type" value="2" checked>Shared<small><i>The bathroom will be used by more than one flatmate. </i></b></small>
                    @else
                    <input type="radio" name="bath_type" value="2">Shared<small><i>The bathroom will be used by more than one flatmate. </i></b></small>
                    @endif
                    
                  </label>
                </div>
              </div>

              <br><br>
              <h3>Address Section</h3>
              <hr>

              <div class="form-group label-floating has-success">
                <label for="address" class="text-center"><span class="material-icons">map</span>Address</label>
                <input type="text" class="form-control" name="address" id="address" value=" {{$house->address}} " placeholder="1234 Main St">
                <small> The address of the estate you want to rent out</small>
              </div>

              <div class="form-row form-group label-floating has-success">
                <div class="form-group col-md-6">
                  <label for="city" class="text-center"> <span class="material-icons">emoji_transportation</span>City</label>
                  <input type="text" class="form-control" value=" {{$house->city}} "  name="city" id="city">
                </div>
                
                <div class="form-group label-floating has-success col-md-4 ml-auto">
                  <label for="postcode" class="text-center"><span class="material-icons">location_on</span>PostCode</label>
                  <input type="text" class="form-control" value=" {{$house->postcode}} "  name="postcode" id="postcode">
                </div>
              </div>

              <h3>Rent Section</h3>
              <hr>

              <div class="form-row form-group label-floating has-success">
                <div class="form-group col-md-7">
                  <label for="price" class="text-center"><span class="material-icons">attach_money</span>Rent</label>
                  <input type="text" class="form-control" value=" {{$house->rent}} "  name="rent" id="rent" placeholder="Rent per Month"> <br>
                  <small> The rent the new faltmate has to pay every month</small>
                  <div class="row">
                    <label class="form-check-label" style="margin-left:10px">
                      @if ($house->internet==0)
                      <input class="form-check-input" type="checkbox" name="internet" value="1" class="text-center"><i class="material-icons">signal_wifi_4_bar</i>Internet included
                      @else
                      <input class="form-check-input" type="checkbox" name="internet" value="1" checked><span class="material-icons">show_chart</span>Electricity included
                      @endif
                      <span class="form-check-sign"><span class="check"></span>
                      </span>
                    </label>
                    <label class="form-check-label" style="margin-left: 30px">
                      @if ($house->electricity==0)
                        <input class="form-check-input" type="checkbox" name="electricity" value="1"><span class="material-icons">show_chart</span>Electricity included
                      @else
                      <input class="form-check-input" type="checkbox" name="electricity" value="1" checked><span class="material-icons">show_chart</span>Electricity included
                      @endif
                        <span class="form-check-sign">
                          <span class="check"></span>
                        </span>
                    </label>
                    <small> Check these boxes if internet or electricity is included in the rent</small>
                  </div>
                </div>
                <div class="form-group label-floating has-success col-md-4 ml-auto">
                  <label for="bond"><span class="material-icons">assignment</span>Bond</label>
                  <input type="text" class="form-control" value=" {{$house->bond}} "  id="bond" name="bond" placeholder="No of Month">
                  <small>  The number of month's rent has to be payed upfront before moving in.</small>
                </div>
              </div>

              <h3>More Info Section</h3>
              <hr>

              <div class="row">
                <label class="col-sm-2 col-form-label" for="description"><i class="material-icons">mood</i> Your Description</label>
                <div class="col-sm-10">
                  <div class="form-group label-floating has-success">
                    <textarea class="form-control" name="describe_me" id="describe_me" rows="5" placeholder="{{$house->describe_me}}" ></textarea> 
                    <small> Generally brief about your house. e.g. if the estate is newly built or if it's close to the school, grocerry store, etc. And summarize about the flatmates live there. e.g. Flatmates are friendly or quiet, etc.</small>
                  </div>
                </div>
              </div>
              <br>

              <div class="row">
                <label class="col-sm-2 col-form-label" for="looking_for"><span class="material-icons">child_care</span>Preferred Mate  </label></label>
                <div class="col-sm-10">
                  <div class="form-group label-floating has-success">
                    <textarea class="form-control" name="describe_others" id="describe_others" rows="5" placeholder="{{$house->describe_others}} "></textarea> 
                    
                  </div>
                </div>
              </div>
              <br>
              <h3>Preffered Mate Section</h3>
              <hr>
              <div class="row" >
                <label class="col-sm-3 col-form-label text-center" for="room_type"><span class="material-icons">sentiment_very_satisfied</span>Preferred Gender
                </label>
                <div class="col-sm-2" style="margin-top:20px;">
                  @if ($house->gender == 'Male')
                    <label class="radio-inline"><input type="radio" name="gender" value="Male" checked> <i class="fa fa-male" style="font-size:20px"></i> Male </label>
                  @else
                    <label class="radio-inline"><input type="radio" name="gender" value="Male"> <i class="fa fa-male" style="font-size:20px"></i> Male </label>
                  @endif
                </div>
  
                <div class="col-sm-2"  style="margin-left:20px;margin-right:20px ;margin-top:20px">
                  @if ($house->gender == 'Female')
                    <label class="radio-inline"><input type="radio" name="gender" value="Female" checked> <span class="fa fa-female" style="font-size:20px"></span>Female</label>
                  @else 
                    <label class="radio-inline"><input type="radio" name="gender" value="Female"> <span class="fa fa-female" style="font-size:20px"></span>Female</label>
                  @endif
                </div>
                <div class="col-sm-4"  style="margin-top:20px">
                  @if ($house->gender == 'Any Gender')
                    <label class="radio-inline"><input type="radio" name="gender" value="Any Gender" checked> <i class="fa fa-users" style="font-size:20px"></i> Any Gender</label>
                  @else
                    <label class="radio-inline"><input type="radio" name="gender" value="Any Gender"> <i class="fa fa-users" style="font-size:20px"></i> Any Gender</label>
                  @endif
                </div>
              </div>
              <div class="row">
                
                <label class="form-check-label" style="margin-left: 200px">
                  @if ($house->smoking ==1)
                  <input class="form-check-input" type="checkbox" name="smoking" value="1" checked><span class="material-icons">smoking_rooms</span>Smoker
                  @else
                  <input class="form-check-input" type="checkbox" name="smoking" value="1" ><span class="material-icons">smoking_rooms</span>Smoker 
                  @endif
                  <span class="form-check-sign">
                    <span class="check"></span>
                  </span>
                </label>
                
                <label class="form-check-label" style="margin-left: 30px">
                  @if ($house->pet ==1)
                  <input class="form-check-input" type="checkbox" name="pet" value="1" checked><span class="material-icons">pets</span>Pet Allowed
                  @else
                  <input class="form-check-input" type="checkbox" name="pet" value="1" ><span class="material-icons">pets</span>Pet Allowed
                  @endif
                  <span class="form-check-sign">
                    <span class="check"></span>
                  </span>
                </label> 
                <small style="margin-left:170px"> Check these boxes if you prefer flatmate, who smokes or have pets.</small>
              </div>
                
                              
            
              <h3>Picture Section</h3>
              <hr>

              <div class="row">
                <label class="col-sm-2 col-form-label text-center"><i class="fa fa-picture-o"></i> Picture</label>
                <div class="col-sm-2">
                  <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                    <div class="fileinput-new thumbnail">
                      @if ($house->image_1 !=null)
                      <img src="{{asset('storage/'.$house->image_1)}}" alt="...">
                      @else
                      <img src="{{ asset('img/no image.png') }}" alt="...">
                      @endif
                    </div>
                    <input class="form-check-input" type="checkbox" value="1" id="delete_img_1" name="delete_img_1">
                    <label class="form-check-label" for="delete_img_1">
                      Delete
                    </label>
                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                    <div>
                      <span class="btn btn-rose btn-file">
                        <span class="fileinput-new">Select image</span>
                        <span class="fileinput-exists">Change</span>
                        <input type="file" name="image_1" id = "input-picture" />
                        <div>{{ $errors->first('image_1')}}</div>
                      </span>
                      <a href="#pablo" class="btn btn-danger fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                    </div>
                  </div>
                </div>

                <div class="col-sm-2"></div>
                <div class="col-sm-2">
                  <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                    <div class="fileinput-new thumbnail">
                      @if ($house->image_2 !=null)
                      <img src="{{asset('storage/'.$house->image_2)}}" alt="...">
                      @else
                      <img src="{{ asset('img/no image.png') }}" alt="...">
                      @endif  
                    </div>
                    <input class="form-check-input" type="checkbox" value="1" id="delete_img_2" name="delete_img_2">
                    <label class="form-check-label" for="delete_img_2">
                      Delete
                    </label>
                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                    <div>
                      <span class="btn btn-rose btn-file">
                        <span class="fileinput-new">Select image</span>
                        <span class="fileinput-exists">Change</span>
                        <input type="file" name="image_2" id = "input-picture" />
                        <div>{{ $errors->first('image_2')}}</div>
                      </span>
                      <a href="#pablo" class="btn btn-danger fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                    </div>
                  </div>
                </div>

                <div class="col-sm-2"></div>
                <div class="col-sm-2">
                  <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                    <div class="fileinput-new thumbnail">
                      @if ($house->image_3 !=null)
                      <img src="{{asset('storage/'.$house->image_3)}}" alt="...">
                      @else
                      <img src="{{ asset('img/no image.png') }}" alt="...">
                      @endif  
                    </div>
                    <input class="form-check-input" type="checkbox" value="1" id="delete_img_3" name="delete_img_3">
                    <label class="form-check-label" for="delete_img_3">
                      Delete
                    </label>
                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                    <div>
                      <span class="btn btn-rose btn-file">
                        <span class="fileinput-new">Select image</span>
                        <span class="fileinput-exists">Change</span>
                        <input type="file" name="image_3" id = "input-picture" />
                        <div>{{ $errors->first('image_3')}}</div>
                      </span>
                      <a href="#pablo" class="btn btn-danger fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <label class="col-sm-2 col-form-label"></label>
                <div class="col-sm-2">
                  <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                    <div class="fileinput-new thumbnail">
                      @if ($house->image_4 !=null)
                      <img src="{{asset('storage/'.$house->image_4)}}" alt="...">
                      @else
                      <img src="{{ asset('img/no image.png') }}" alt="...">
                      @endif  
                    </div>
                    <input class="form-check-input" type="checkbox" value="1" id="delete_img_4" name="delete_img_4">
                    <label class="form-check-label" for="delete_img_4">
                      Delete
                    </label>
                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                    <div>
                      <span class="btn btn-rose btn-file">
                        <span class="fileinput-new">Select image</span>
                        <span class="fileinput-exists">Change</span>
                        <input type="file" name="image_4" id = "input-picture" />
                        <div>{{ $errors->first('image_4')}}</div>
                      </span>
                      <a href="#pablo" class="btn btn-danger fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                    </div>
                  </div>
                </div>

                <div class="col-sm-2"></div>
                <div class="col-sm-2">
                  <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                    <div class="fileinput-new thumbnail">
                      @if ($house->image_5 !=null)
                      <img src="{{asset('storage/'.$house->image_5)}}" alt="...">
                      @else
                      <img src="{{ asset('img/no image.png') }}" alt="...">
                      @endif  
                    </div>
                    <input class="form-check-input" type="checkbox" value="1" id="delete_img_5"
                    name="delete_img_5">
                    <label class="form-check-label" for="delete_img_5">
                      Delete
                    </label>
                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                    <div>
                      <span class="btn btn-rose btn-file">
                        <span class="fileinput-new">Select image</span>
                        <span class="fileinput-exists">Change</span>
                        <input type="file" name="image_5" id = "input-picture" />
                        <div>{{ $errors->first('image_5')}}</div>
                      </span>
                      <a href="#pablo" class="btn btn-danger fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                    </div>
                  </div>
                </div>

                <div class="col-sm-2"></div>
                <div class="col-sm-2">
                  <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                    
                    <div class="fileinput-new thumbnail">
                      @if ($house->image_1 !=null)
                      <img src="{{asset('storage/'.$house->image_6)}}" alt="...">
                      @else
                      <img src="{{ asset('img/no image.png') }}" alt="...">
                      @endif  
                    </div>
                    <input class="form-check-input" type="checkbox" value="1" id="delete_img_6"name="delete_img_6">
                    <label class="form-check-label" for="delete_img_6">
                      Delete
                    </label>
                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                    <div>
                      <span class="btn btn-rose btn-file">
                        <span class="fileinput-new">Select image</span>
                        <span class="fileinput-exists">Change</span>
                        <input type="file" name="image_6" id = "input-picture" />
                        <div>{{ $errors->first('image_6')}}</div>
                      </span>
                      <a href="#pablo" class="btn btn-danger fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                    </div>
                  </div>
                </div>
              </div>
              <button type="submit" value="Update" class="btn btn-info pull-right">RePost It</button>
              <div class="clearfix"></div>
            </form>
          </div>
          <div class="col-md-4">
            <br><br><br><br><br>
            <div class="d-flex flex-column bd-highlight mb-2">
            <div class="p-2 bd-highlight">
              <div class="card card-profile" style="box-shadow: 0 40px 60px 0 rgba(0, 0, 0, 0.2), 0 6px 80px 0 rgba(0, 0, 0, 0.19);">
                <div class="card-avatar">
                  <a href="#pablo">
                    <img class="img" style="box-shadow: 0 40px 60px 0 rgba(0, 0, 0, 0.2), 0 6px 80px 0 rgba(0, 0, 0, 0.19);" src="{{asset('storage/'.Auth::user()->image)}}" />
                  </a>
                </div>
                @if(Auth::user()->verified == 1)
                  <div class="row" style="margin-left: 110px;" >
                    <span class="material-icons" style=" color:#28B463; text-shadow: 0 0 3px #28B463; display: inline-block">verified_user
                    </span>
                    <h6  style=" color:#28B463;display: inline-block"><strong> Verified Student  </strong></h6>                     
                  </div>
                @endif
                <div class="card-body" style="margin-top: -20px">
                  <div class="card-category text-gray">
                      <h4 class="card-title">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }} </h4>
                      <h6>Student at Universitetet i Sørøst-Norge</h6>
                      <h6>Studying {{ Auth::user()->program}} in {{ Auth::user()->year}} year</h6>
                      
                      <div class="card-description"> 
                        <div class="inline-block pull-left">
                          <i class="material-icons">email</i> {{ Auth::user()->email}}
                        </div>
                        <div class="inline-block pull-right">
                          <i class="material-icons">smartphone</i> {{ Auth::user()->phone}}
                        </div>
                        <br><br><p>Joined in: {{ Auth::user()->created_at}}</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      @elseif ($house->house_type==2)
      <form method="POST" action= "{{route('house.update',$house->id)}}" enctype="multipart/form-data" class="form-horizontal">
            @csrf  
            @method('PUT')
            <h2 class="text-center text-danger text-shadow"><span class="material-icons">emoji_people</span> Buddy Up AD ID: {{$house->id}}</h2>
            <p class="text-center"><b><u>Edit Your POST and RE-Post It</u></b></p>
            <div class="row">
              <div class="col-md-12 text-left">
                <a href="/allpost" class="btn btn-sm btn-rose">Back</a>
              </div>
            </div>
            <h3>About You Section</h3>
            <hr>

            <!--About Me Description-->
            <div class="row">
              <label style="display: inline;" class="col-sm-2 col-form-label" for="description"> <i class="material-icons">mood</i> Your Description</label>
              <div class="col-sm-10">
                <div class="form-group label-floating has-success">
                  <textarea class="form-control" name="describe_me" id="describe_me" rows="5" placeholder="{{$house->describe_me}}"></textarea> 
                </div>
              </div>
            </div>
            <br><br>
            <!--Preferred House Description-->
            <div class="row">
              <label class="col-sm-2 col-form-label" for="house_description"><span class="material-icons">location_city</span>Preferred Flat Description  </label>
              <div class="col-sm-10">
                <div class="form-group label-floating has-success">
                  <textarea class="form-control" name="house_description" id="house_description" rows="5" placeholder="{{$house->house_description}}"></textarea> 
                </div>
              </div>
            </div>

            <h3>Budget Section</h3>
            <hr>

            <!--Preferred Rent Description-->
            <div class="row">
              <label class="col-sm-2 col-form-label" for="budget"><span class="material-icons">attach_money</span>Preferred Rent</label>
              <div class="col-sm-4">
                <div class="form-group label-floating has-success">
                  <input class="form-control"  name="price" id="price" value="{{$house->rent}}" placeholder=" NOK per Month">
                </div>
              </div>
              <div class="col-sm-4">
                <label style="vertical-align:-20px; ">Nok/month</label>
              </div>
            </div>

            <!--Preferred Bond -->
            <div class="row">
              <label class="col-sm-2 col-form-label" for="bond"><span class="material-icons">assignment</span>Bond</label>
              <div class="col-sm-4">
                <div class="form-group label-floating has-success">
                  <input class="form-control" name="bond" id="bond" value="{{$house->bond}}" placeholder="No. of months">
                  <small> The number of month's rent has to be payed upfront before moving in.</small>
                </div>
              </div>
              <div class="col-sm-4">
                <label style="vertical-align:-20px; ">number of months</label>
              </div>
            </div>

            <h3>Buddy Section</h3>
            <hr>

            <!--Preferred Mate Description-->
            <div class="row">
              <label class="col-sm-2 col-form-label" for="describe_others"><span class="material-icons">child_care</span>Preferred Mate  </label>
              <div class="col-sm-10">
                <div class="form-group label-floating has-success">
                  <textarea class="form-control" name="describe_others" id="describe_others" rows="5" placeholder="{{$house->describe_others}}"></textarea> 
                </div>
              </div>
            </div>

            
            <div class="row" >
              <label class="col-sm-3 col-form-label text-center" for="room_type"><span class="material-icons">sentiment_very_satisfied</span>Preferred Gender
              </label>
              <div class="col-sm-2" style="margin-top:20px;">
                @if ($house->gender == 'Male')
                  <label class="radio-inline"><input type="radio" name="gender" value="Male" checked> <i class="fa fa-male" style="font-size:20px"></i> Male </label>
                @else
                  <label class="radio-inline"><input type="radio" name="gender" value="Male"> <i class="fa fa-male" style="font-size:20px"></i> Male </label>
                @endif
              </div>

              <div class="col-sm-2"  style="margin-left:20px;margin-right:20px ;margin-top:20px">
                @if ($house->gender == 'Female')
                  <label class="radio-inline"><input type="radio" name="gender" value="Female" checked> <span class="fa fa-female" style="font-size:20px"></span>Female</label>
                @else 
                  <label class="radio-inline"><input type="radio" name="gender" value="Female"> <span class="fa fa-female" style="font-size:20px"></span>Female</label>
                @endif
              </div>
              <div class="col-sm-4"  style="margin-top:20px">
                @if ($house->gender == 'Any Gender')
                  <label class="radio-inline"><input type="radio" name="gender" value="Any Gender" checked> <i class="fa fa-users" style="font-size:20px"></i> Any Gender</label>
                @else
                  <label class="radio-inline"><input type="radio" name="gender" value="Any Gender"> <i class="fa fa-users" style="font-size:20px"></i> Any Gender</label>
                @endif
              </div>
            </div>
            <div class="row">
              
              <label class="form-check-label" style="margin-left: 200px">
                @if ($house->smoking ==1)
                <input class="form-check-input" type="checkbox" name="smoking" value="1" checked><span class="material-icons">smoking_rooms</span>Smoker
                @else
                <input class="form-check-input" type="checkbox" name="smoking" value="1" ><span class="material-icons">smoking_rooms</span>Smoker 
                @endif
                <span class="form-check-sign">
                  <span class="check"></span>
                </span>
              </label>
              
              <label class="form-check-label" style="margin-left: 30px">
                @if ($house->pet ==1)
                <input class="form-check-input" type="checkbox" name="pet" value="1" checked><span class="material-icons">pets</span>Pet Allowed
                @else
                <input class="form-check-input" type="checkbox" name="pet" value="1" ><span class="material-icons">pets</span>Pet Allowed
                @endif
                <span class="form-check-sign">
                  <span class="check"></span>
                </span>
              </label> 
            </div>

            
            <button type="submit" value="insert" class="btn btn-info pull-right">Post It</button>
          </form>
        </div>
        <div class="col-md-4">
          <br><br><br><br><br>
         
          <div class="p-2 bd-highlight">
            <div class="card card-profile" style="box-shadow: 0 40px 60px 0 rgba(0, 0, 0, 0.2), 0 6px 80px 0 rgba(0, 0, 0, 0.19);">
              <div class="card-avatar">
                <a href="#pablo">
                  <img class="img" style="box-shadow: 0 40px 60px 0 rgba(0, 0, 0, 0.2), 0 6px 80px 0 rgba(0, 0, 0, 0.19);" src="{{asset('storage/'.Auth::user()->image)}}" />
                </a>
              </div>
              <div class="row" style="margin-left: 110px;" >
                <span class="material-icons" style=" color:#28B463; text-shadow: 0 0 3px #28B463; display: inline-block">verified_user
                </span>
                <h6  style=" color:#28B463;display: inline-block"><strong> Verified Student  </strong></h6>                     
              </div>
              <div class="card-body" style="margin-top: -20px">
                <div class="card-category text-gray">
                    <h4 class="card-title">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }} </h4>
                    <h6>Student at Universitetet i Sørøst-Norge</h6>
                    <h6>Studying {{ Auth::user()->program}} in {{ Auth::user()->year}} year</h6>
                    
                    <div class="card-description"> 
                      <div class="inline-block pull-left">
                        <i class="material-icons">email</i> {{ Auth::user()->email}}
                      </div>
                      <div class="inline-block pull-right">
                        <i class="material-icons">smartphone</i> {{ Auth::user()->phone}}
                      </div>
                      <br><br><p>Joined in: {{ Auth::user()->created_at}}</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      
    
            
            
        @endif
        
            

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

     <!-- Forms Validations Plugin -->
  
  
  
     <script src="https://material-dashboard-pro-laravel.creative-tim.com/material/js/plugins/jquery.validate.min.js"></script>

  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="https://material-dashboard-pro-laravel.creative-tim.com/material/js/plugins/jasny-bootstrap.min.js"></script>
 
  
    <script src="https://cdn.jsdelivr.net/npm/material-dashboard@2.1.0/assets/js/material-dashboard.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/material-dashboard@2.1.0/assets/js/material-dashboard.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/material-dashboard@2.1.0/assets/js/core/bootstrap-material-design.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/material-dashboard@2.1.0/assets/js/core/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/material-dashboard@2.1.0/assets/js/core/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/material-dashboard@2.1.0/assets/js/plugins/bootstrap-notify.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/material-dashboard@2.1.0/assets/js/plugins/chartist.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/material-dashboard@2.1.0/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<script>

$('.form-file-multiple .inputFileVisible, .form-file-multiple .input-group-btn').click(function() {
      $(this).parent().parent().find('.inputFileHidden').trigger('click');
      $(this).parent().parent().addClass('is-focused');
    });

    $('.form-file-multiple .inputFileHidden').change(function() {
      var names = '';
      for (var i = 0; i < $(this).get(0).files.length; ++i) {
        if (i < $(this).get(0).files.length - 1) {
          names += $(this).get(0).files.item(i).name + ',';
        } else {
          names += $(this).get(0).files.item(i).name;
        }
      }
      $(this).siblings('.input-group').find('.inputFileVisible').val(names);
    });

    $('.form-file-multiple .btn').on('focus', function() {
      $(this).parent().siblings().trigger('focus');
    });

    $('.form-file-multiple .btn').on('focusout', function() {
      $(this).parent().siblings().trigger('focusout');
    });
  </script>
  </script>
 
</body>
</html>
