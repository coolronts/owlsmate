<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="icon" href="{{ URL::asset('/img/icon/favicon-32x32.png') }}" type="image/x-icon"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>    OwlsMate  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <link href="css/material-dashboard.css" rel="stylesheet" />
  <link href="css/rotating-card.css" rel="stylesheet" />
 
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
            <a href="/home" class="nav-link">
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
            <a href="/allpost" class="nav-link text-info">
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
  <br><br><br><br><br>
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="container">
            <div class="title text-center">
              <div class="col-md-12">
                <div class="nav-center">
                  <ul class="nav nav-pills nav-pills-icons-info nav-pills-info justify-content-center"  role="tablist">
                    <li class="nav-item"><a class="nav-link active" href="#Books" role="tab" data-toggle="tab"><i class="material-icons">menu_book</i>Books</a></li>
                    <li class="nav-item"><a class="nav-link" href="#Notes" role="tab" data-toggle="tab"><i class="material-icons">notes</i>Notes</a></li>
                    <li class="nav-item pull-right"><a class="nav-link" href="#Tutor" role="tab" data-toggle="tab"><i class="material-icons">school</i>Tutor</a></li>
                    <li class="nav-item"><a class="nav-link " href="#House" role="tab" data-toggle="tab"><i class="material-icons">house</i>House</a>
                    </li> 
                  </ul>
              </div>
              <h2>Your Listed Items</h2>
              <h3>View, Edit, Delete</h3>
              <div class="tab-content tab-space">

                <!---Boook List--->
                <div class="tab-pane active" id="Books">
                  @if(count($data_book) < 1)
                  <h3 class="text-danger" style="text-align:center"> You have not posted any Books yet!</h3>
                  @else
                  <div class="row">
                    @foreach ($data_book as $row_book)
                    <div class="col-md-6 col-lg-4">
                      <br><br><br>
                      <div class="rotating-card-container" style="" >
                        <div class="card card-rotate" style="box-shadow: 0 40px 60px 0 rgba(0, 0, 0, 0.2), 0 6px 80px 0 rgba(0, 0, 0, 0.19);">
                          <div class="front">
                            <div class="card card-blog" style="margin-top:-20px" >
                              <div class="card-header card-header-image" style="margin-top:-70px; box-shadow: 0 40px 60px 0 rgba(0, 0, 0, 0.2), 0 6px 80px 0 rgba(0, 0, 0, 0.19);">
                                <a href="#pablo">
                                  @if ($row_book->image_1 != null )
                                    <img src="{{asset('storage/'.$row_book->image_1)}}" style=" width:100%; height: 200px !important;"alt="">
                                  @elseif ($row_book->image_2 != null)
                                    <img src="{{asset('storage/'.$row_book->image_2)}}" style=" width:100%; height: 200px !important;"alt="">
                                  @elseif ($row_book->image_3 != null)
                                    <img src="{{asset('storage/'.$row_book->image_3)}}" style=" width:100%; height: 200px !important;"alt="">
                                  @elseif ($row_book->image_4 != null)
                                    <img src="{{asset('storage/'.$row_book->image_4)}}" style=" width:100%; height: 200px !important;"alt="">
                                  @elseif ($row_book->image_5 != null)
                                    <img src="{{asset('storage/'.$row_book->image_5)}}" style=" width:100%; height: 200px !important;"alt="">
                                  @elseif ($row_book->image_6 != null)
                                    <img src="{{asset('storage/'.$row_book->image_6)}}" style=" width:100%; height: 200px !important;"alt="">
                                  @else
                                  <img src=" {{ asset('img/no image.png') }}" style=" width:100%; height: 200px !important;"alt="" >
                                  @endif
                                </a>
                              </div>
                            </div>
                            <div class="card-body " style="margin-top:-20px"> 
                              <h5 class="card-category card-category-social text-rose text-center">
                                <i class="fa fa-book" aria-hidden="true"></i> Book
                              </h5>
                              <h4 class="card-title" style="margin-top:-5px" >
                                <a href="#pablo">{{$row_book->name}}</a>
                              </h4>
                              <h5 class="text-center"  >
                                <small style="font-size:12px">written by</small> <strong>{{$row_book->author}}</strong>
                              </h5>
                              <br>
                              <div class="card-description" style="margin-top:-20px" >
                                <small style="font-size:12px;font-weight:lighter;margin-top:"><u><b>Course Name</b></u></small>
                                <h6 style="margin-top:-10px;" >
                                  <strong>{{$row_book->course_name}}</strong>
                                </h6>
                                <small style="font-size:12px;font-weight:lighter;margin-top:-100px"><u><b>Course ID</b></u></small>
                                <h6 style="margin-top:-30px" >
                                  <strong>{{$row_book->course_id}}</strong>
                                </h6>
                                <small style="font-size:12px;font-weight:lighter;margin-top:-100px"><u><b>ISBN</b></u></small>
                                <h6 style="margin-top:-20px;" >
                                  <strong>{{$row_book->isbn}}</strong>
                              </h6>
                              
                                
                               
                              </div>
                              
                              <div class="footer" style="margin-top:-10px">
                                <div class="rating">
                                  <img src="https://img.icons8.com/android/24/000000/coins.png"/> <h6 style="display: inline;  margin-left: 10px;"> Price: </h6> <h5 style="display: inline; margin-left: 10px;">{{ $row_book->price}} <small>NOK</small></h5>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="clear-fix"></div>
                          <div class="back">
                            <div class="card-body">
                              <h5 class="card-title"  style="position: absolute; top: 10px; left: 50%;  transform: translateX(-50%); ">
                                Description
                                <hr>
                              </h5>
                              <p class="card-description"  style="font-weight:lighter; line-height: 2em;width: 300px; overflow: hidden;position: relative; height: 16em;">
                                {{$row_book->description}}
                              </p>


                              <div class="footer" style="position: absolute; bottom: 0;left: 50%;transform: translateX(-50%); ">
                                <a href="{{action('NewBookController@show',$row_book->id)}}" target="_blank"  type="button" rel="tooltip" class="btn btn-success btn-round"> 
                                  <i class="fa fa-rocket" aria-hidden="true"></i> View Page
                                </a>
                                <a href="{{action('NewBookController@edit',$row_book->id)}}" type="button" rel="tooltip"  class="btn btn-info btn-round">
                                  <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                </a>
                                <form method="POST" action=" {{route('listing_book.destroy',$row_book->id) }}" class="delete_form">
                                  {{csrf_field()}}
                                   <input type="hidden" name="_method" value="DELETE"/>
                                   <button  type="submit" rel="tooltip" class="btn btn-just-icon btn-round btn-dribbble"><i class="fa fa-times" aria-hidden="true"></i> </button>
                                 </form>
                               
                              </div>

                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    @endforeach
                  </div>
                  @endif
                </div>

                <!---Notes List--->
                <div class="tab-pane" id="Notes">
                  @if(count($data_note) < 1)
                    <h3 class="text-danger" style="text-align:center"> You have not posted any Notes yet!</h3>
                  @else
                  <div class="row">
                    @foreach ($data_note as $row_book)
                    <div class="col-md-6 col-lg-4">
                      <br><br><br><br>
                      <div class="rotating-card-container" >
                        <div class="card card-rotate" style="box-shadow: 0 40px 60px 0 rgba(0, 0, 0, 0.2), 0 6px 80px 0 rgba(0, 0, 0, 0.19);">
                          <div class="front">
                            <div class="card card-blog" style="margin-top:-">
                              <div class="card-header card-header-image" style="margin-top:-100px; box-shadow: 0 40px 60px 0 rgba(0, 0, 0, 0.2), 0 6px 80px 0 rgba(0, 0, 0, 0.19);">
                                <a href="#pablo">
                                  @if ($row_book->image_1 != null )
                                    <img src="{{asset('storage/'.$row_book->image_1)}}" style=" width:100%; height: 200px !important;"alt="">
                                  @elseif ($row_book->image_2 != null)
                                    <img src="{{asset('storage/'.$row_book->image_2)}}" style=" width:100%; height: 200px !important;"alt="">
                                  @elseif ($row_book->image_3 != null)
                                    <img src="{{asset('storage/'.$row_book->image_3)}}" style=" width:100%; height: 200px !important;"alt="">
                                  @elseif ($row_book->image_4 != null)
                                    <img src="{{asset('storage/'.$row_book->image_4)}}" style=" width:100%; height: 200px !important;"alt="">
                                  @elseif ($row_book->image_5 != null)
                                    <img src="{{asset('storage/'.$row_book->image_5)}}" style=" width:100%; height: 200px !important;"alt="">
                                  @elseif ($row_book->image_6 != null)
                                    <img src="{{asset('storage/'.$row_book->image_6)}}" style=" width:100%; height: 200px !important;"alt="">
                                  @else
                                  <img src=" {{ asset('img/no image.png') }}" style=" width:100%; height: 200px !important;"alt="" >
                                  @endif
                                </a>
                              </div>
                            </div>
                            <div class="card-body"  style="margin-top:-30px"> 
                              <h5 class="card-category card-category-social text-success text-center">
                                <i class="fa fa-sticky-note-o" aria-hidden="true"></i> Note
                              </h5>
                              <h4 class="card-title text-center">
                                <a href="#pablo">{{$row_book->name}}</a>
                              </h4>
                              <h5 class="text-center">
                                <small style="font-size:12px">written by</small> <strong>{{$row_book->author}}</strong>
                              </h5>
                              <p class="card-description" style="text-align:left">
                                Course Name: <strong>{{$row_book->course_name }}</strong>
                                <br>
                                Course ID: <strong>{{$row_book->course_id}}</strong>
                                <br>
                              </p>
                              <div class="footer" style="margin-top:-10px">
                                <div class="rating">
                                  <img src="https://img.icons8.com/android/24/000000/coins.png"/> <h6 style="display: inline;  margin-left: 10px;">  Price: </h6> <h5 style="display: inline; margin-left: 10px;">{{ $row_book->price}} <small>NOK</small></h5>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="back">
                            <div class="card-body">
                              <h5 class="card-title" style="position: absolute; top: 0;left: 50%;transform: translateX(-50%); ">
                                Description<hr>
                              </h5>
                              
                              <p class="card-description"  style="width: 300px; overflow: hidden;position: relative; height: 16em;">
                                {{$row_book->description}}
                              </p>
                              <div class="footer text-center" style="position: absolute; bottom: 0;left: 50%;transform: translateX(-50%); ">
                                <a href="{{action('NoteController@show',$row_book->id)}}" target="_blank"  type="button" rel="tooltip" class="btn btn-success btn-round"> 
                                  <i class="fa fa-rocket" aria-hidden="true"></i> View Page
                                </a>
                                <a href="{{action('NoteController@edit',$row_book->id)}}" type="button" rel="tooltip"  class="btn btn-info btn-round">
                                  <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                </a>
                                <form method="POST" action=" {{route('listing_book.destroy',$row_book->id) }}" class="delete_form">
                                  {{csrf_field()}}
                                   <input type="hidden" name="_method" value="DELETE"/>
                                   <button  type="submit" rel="tooltip" class="btn btn-just-icon btn-round btn-dribbble"><i class="fa fa-times" aria-hidden="true"></i> </button>
                                 </form>
                                `<br>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    @endforeach
                  </div>
                  @endif
                </div>

                <!---Tutor List--->
                <div class="tab-pane" id="Tutor">
                  @if(count($data_tutor) < 1)
                    <h3 class="text-danger" style="text-align:center"> You have not enlsited yourself as Tutor yet!</h3>
                  @else
                  <div class="row">
                    @foreach ($data_tutor as $row)
                    <div class="col-md-6 col-lg-4" >
                      <div class="card-container"  >
                        
                        <div class="card" style="margin-top:125px">
                          <div class="front" style="box-shadow: 0 40px 60px 0 rgba(0, 0, 0, 0.2), 0 6px 80px 0 rgba(0, 0, 0, 0.19);">
                            <div class="user">
                                <img class="img-circle" style="border-radius: 50%;border: 3px solid #20bed2 ;box-shadow: 0 40px 60px 0 rgba(0, 0, 0, 0.2), 0 6px 80px 0 rgba(0, 0, 0, 0.19);" src="{{asset('storage/'. Auth::user()->image)}}"/>
                            </div>
                            @if(Auth::user()->verified == 1)
                              <i class="material-icons" style=" ; margin-top:-10px; color:#28B463; text-shadow: 0 0 3px #28B463; display: inline; ">verified_user</i>
                              <h6  style=" color:#28B463;display: inline; margin-top: -150px;"><strong> Verified Student  </strong></h6>  
                            @endif
                            <div class="content" >
                              <div class="main">
                                <div class="text-center" style="font-family: 'Roboto Slab', serif; line-height: 25px; font-weight: 700; color: #3c4858; font-size: 18px; margin-top: -5px">
                                  {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
                                </div>
                                <br>
                                <p class="text-center" style="font-family: 'Roboto', sans-serif; font-size:13px; line-height: 19px; color:#999999;; margin-top: -10px;text-transform: uppercase;"> 
                                  student at <strong> {{Auth::user()->university}} </strong>
                                </p>
                                <p class="text-center" style="font-family: 'Roboto', sans-serif; font-size:13px; line-height: 19px; color:#999999; text-transform: uppercase;">
                                  STUDYING <strong>{{ Auth::user()->program }} </strong> IN <strong>{{ Auth::user()->year }}</strong> 
                                </p> 
                                <hr>
                                <h3 class="card-category card-category-social text-warning text-center"><i class="fa fa-graduation-cap"></i>Tutor</h3>
                                <h5 class="card-description" style="text-align:left">
                                  Course Name: <strong>{{$row->course_name}}</strong>
                                  Course ID: <strong>{{$row->course_id}}</strong>
                                </h5>
                              </div>
                              <hr>
                              <div class="footer" style="margin-top:-10px">
                                <div class="rating">
                                  <img src="https://img.icons8.com/android/24/000000/coins.png"/> <h6 style="display: inline;  margin-left: 10px;">  Hourly Rate: </h6> <h5 style="display: inline; margin-left: 10px;">{{ $row->price}} <small>NOK/HR </small></h5>
                                </div>
                              </div>
                            </div>
                          </div> 
                          <!-- end front panel -->
                          <div class="back">
                            <div class="header">
                              <h3 class="text-center"> <b> About Me </b></h3>
                              <hr>
                            </div>
                            
                            <div class="content">
                              <div class="main">
                                <p class="text-center" style="width: 300px; overflow: hidden;position: relative; height: 16em; line-height:2em; font-weight:lighter">{{$row->description}}</p>
                              </div>
                              <div class="footer text-center">
                                <a  href="{{action('TutorController@show',$row->id)}}" target="_blank" type="button" rel="tooltip" class="btn btn-success btn-round"> 
                                  <i class="fa fa-rocket" aria-hidden="true"></i> View Page
                                </a>
                                <a href="{{action('TutorController@edit',$row->id)}}" type="button" rel="tooltip"  class="btn btn-info btn-round">
                                  <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                </a>
                                <form method="POST" action=" {{route('listing_book.destroy',$row->id) }}" class="delete_form">
                                  {{csrf_field()}}
                                   <input type="hidden" name="_method" value="DELETE"/>
                                   <button  type="submit" rel="tooltip" class="btn btn-just-icon btn-round btn-dribbble"><i class="fa fa-times" aria-hidden="true"></i> </button>
                                 </form>
                                
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    @endforeach
                  </div>
                  @endif
                </div>



                <!---House List--->
                <div class="tab-pane" id="House">
                  @if(count($data_house) < 1)
                    <h3 class="text-danger" style="text-align:center"> You have not posted any Flat or BuddyUp yet!</h3>
                  @else
                  <div class="row">
                    @foreach ($data_house as $row_house)
                    @if ($row_house->house_type==1)
                    <div class="col-md-6 col-lg-4">
                      <br><br>
                      <div class="rotating-card-container" >
                        <div class="card card-rotate" style="box-shadow: 0 40px 60px 0 rgba(0, 0, 0, 0.2), 0 6px 80px 0 rgba(0, 0, 0, 0.19);">
                          <div class="front">
                           `<div class="card card-blog">
                              <div class="card-header card-header-image" style="margin-top:-60px;box-shadow: 0 40px 60px 0 rgba(0, 0, 0, 0.2), 0 6px 80px 0 rgba(0, 0, 0, 0.19);">
                                <a href="#pablo">
                                  @if ($row_house->image_1 != null )
                                   <img src="{{asset('storage/'.$row_house->image_1)}}" style=" width:100%; height: 200px !important;"alt="">
                                  @elseif ($row_house->image_2 != null)
                                   <img src="{{asset('storage/'.$row_house->image_2)}}" style=" width:100%; height: 200px !important;"alt="">
                                  @elseif ($row_house->image_3 != null)
                                    <img src="{{asset('storage/'.$row_house->image_3)}}" style=" width:100%; height: 200px !important;"alt="">
                                  @elseif ($row_house->image_4 != null)
                                    <img src="{{asset('storage/'.$row_house->image_4)}}" style=" width:100%; height: 200px !important;"alt="">
                                  @elseif ($row_house->image_5 != null)
                                    <img src="{{asset('storage/'.$row_house->image_5)}}" style=" width:100%; height: 200px !important;"alt="">
                                  @elseif ($row_house->image_6 != null)
                                    <img src="{{asset('storage/'.$row_house->image_6)}}" style=" width:100%; height: 200px !important;"alt="">
                                  @else
                                  <img src=" {{ asset('img/no image.png') }}" style=" width:100%; height: 200px !important;"alt="" >
                                  @endif
                                </a>
                              </div>
                            </div>
                            <div class="card-body" style="margin-top:-30px" > 
                              <h5 class="card-category card-category-social text-danger">
                                <span class="material-icons">king_bed</span> FlatMate
                              </h5>
                              <h4 class="card-title" style="margin-top:-10px">
                                <a href="#pablo">{{$row_house->title}}</a>
                              </h4>
                              <small style="font-size:12px;font-weight:lighter;margin-top:-10px"><u><b>Address</b></u></small>
                              <h6 style="margin-top:-10px;" >
                                 <strong>{{$row_house->address}}</strong>
                              </h6>
                              <h6 style="margin-top:-10px;" >
                                <strong>{{$row_house->city}}</strong> <strong> , {{$row_house->postcode}}</strong>
                             </h6>
                              <p class="card-description" style="font-weight:lighter; margin-left:-30px">
                                <i class="material-icons">meeting_room</i>
                                    <strong style="font-size:12px;font-weight:lighter">
                                      @if($row_house->room_type == 1)
                                        Furnished
                                      @elseif($row_house->room_type == 2)
                                      Semi-Furnished
                                      @elseif($row_house->room_type == 3)
                                      Unfurnished
                                      @endif Room
                                    </strong>
                                    <strong style="font-size:12px;font-weight:lighter" ><i class="material-icons">bathtub</i>
                                      @if($row_house->bath_type == 1)
                                        Private Bath
                                      @else
                                        Shared Bath
                                      @endif
                                    </strong>
                                    <br> <i class="material-icons">people_alt</i> <strong style="margin-top:-200px;font-size:12px;font-weight:lighter" > {{$row_house->gender}}</strong>
                                    <br>

                                    @if($row_house->pet == 1)
                                      <i class="material-icons">pets</i><strong style="margin-top:-20px;font-size:12px;font-weight:lighter">Pets Allowed </strong>
                                    @else
                                      <i class="material-icons">pets</i><strong style="margin-top:-20px;font-size:12px;font-weight:lighter"> No Pets </strong>
                                    @endif

                                    @if($row_house->smoking == 1)
                                      <i class="material-icons">smoking_rooms</i><strong style="margin-top:-20px;font-size:12px;font-weight:lighter"> Smoker Allowed </strong>
                                    @else
                                      <i class="material-icons">smoke_free</i><strong style="margin-top:-20px;font-size:12px;font-weight:lighter"> Non-smoker </strong>
                                    @endif
                                  
                                  </p>
                                  <div class="footer" style="margin-top:-10px">
                                    <div class="rating">
                                      <img src="https://img.icons8.com/android/24/000000/coins.png"/> <h6 style="display: inline;  margin-left: 10px;">  Rent: </h6> <h5 style="display: inline; margin-left: 10px;">{{ $row_house->rent}} <small style="font-size:12px;font-weight:lighter">NOK per month </small></h5>
                                    </div>
                                  </div>
                                  <br><br>
                            </div>
                          </div>
                          <div class="back">
                            <div class="card-body">
                              <h5 class="card-title">
                                House Description
                              </h5>
                              <p class="card-description" style="width: 300px; overflow: hidden;position: relative; height: 16em;line-height:2em">
                                {{$row_house->describe_me}}
                              </p>
                              <div class="footer text-center">
                                <a href="{{action('HouseController@show',$row_house->id)}}" target="_blank" type="button" rel="tooltip" class="btn btn-success btn-round"> 
                                  <i class="fa fa-rocket" aria-hidden="true"></i> View
                                </a>
                                
                                <a href="{{action('HouseController@edit',$row_house->id)}}" type="button" rel="tooltip"  class="btn btn-info btn-round">
                                  <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit 
                                </a>
                                <form method="POST" action=" {{route('house.destroy',$row_house->id) }}" class="delete_form">
                                  {{csrf_field()}}
                                   <input type="hidden" name="_method" value="DELETE"/>
                                   <button  type="submit" rel="tooltip" class="btn btn-just-icon btn-round btn-dribbble" ><i class="fa fa-times" aria-hidden="true"></i> </button>
                                 </form>
                               `<br>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    @endif
                    @endforeach
                    @foreach ($data_house as $row_house)
                    @if ($row_house->house_type==2)
                    <div class="col-md-6 col-lg-4" >
                      <div class="card-container"  >
                        <div class="card" >
                          <div class="front" style="box-shadow: 0 40px 60px 0 rgba(0, 0, 0, 0.2), 0 6px 80px 0 rgba(0, 0, 0, 0.19);">
                            <div class="user">
                                <img class="img-circle" style="border-radius: 50%;border: 3px solid #20bed2 ;box-shadow: 0 40px 60px 0 rgba(0, 0, 0, 0.2), 0 6px 80px 0 rgba(0, 0, 0, 0.19);" src="{{asset('storage/'. Auth::user()->image)}}"/>
                            </div>
                            @if(Auth::user() ->verified == 1)
                              <i class="material-icons" style="  margin-top:-10px; color:#28B463; text-shadow: 0 0 3px #28B463; display: inline; ">verified_user</i>
                              <h6  style=" color:#28B463;display: inline; margin-top: -150px;"><strong> Verified Student  </strong></h6>  
                            @endif
                            <div class="content" >
                              <div class="main">
                                <div class="text-center" style="font-family: 'Roboto Slab', serif; line-height: 25px; font-weight: 700; color: #3c4858; font-size: 18px; margin-top: -5px">
                                  {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
                                </div>
                                <br>
                                <p class="text-center" style="font-family: 'Roboto', sans-serif; font-size:13px; line-height: 19px; color:#999999;; margin-top: -10px;text-transform: uppercase;"> 
                                  student at <strong>{{ Auth::user()->university }} </strong>
                                </p>
                                <p class="text-center" style="font-family: 'Roboto', sans-serif; font-size:13px; line-height: 19px; color:#999999; text-transform: uppercase;">
                                  STUDYING <strong>{{ Auth::user()->program }} </strong> IN <strong>{{ Auth::user()->year }}</strong> 
                                </p> 
                                <hr>
                                <h3 class="card-category card-category-social text-danger text-center"><span class="material-icons">emoji_people</span>Buddy Up</h3>
                                <p class="card-description" style="font-weight:lighter">
                                  <i class="material-icons">people_alt</i> <strong style="margin-top:-200px;font-size:12px;font-weight:lighter" > {{$row_house->gender}}</strong>
                                      <br>
  
                                      @if($row_house->pet == 1)
                                        <i class="material-icons">pets</i><strong style="margin-top:-20px;font-size:12px;font-weight:lighter">Pets Allowed </strong>
                                      @else
                                        <i class="material-icons">pets</i><strong style="margin-top:-20px;font-size:12px;font-weight:lighter"> No Pets </strong>
                                      @endif
  
                                      @if($row_house->smoking == 1)
                                        <i class="material-icons">smoking_rooms</i><strong style="margin-top:-20px;font-size:12px;font-weight:lighter"> Smoker Allowed </strong>
                                      @else
                                        <i class="material-icons">smoke_free</i><strong style="margin-top:-20px;font-size:12px;font-weight:lighter"> Non-smoker </strong>
                                      @endif
                                    
                                    </p>
                                    <div class="footer" style="margin-top:-10px">
                                      <div class="rating">
                                        <img src="https://img.icons8.com/android/24/000000/coins.png"/> <h6 style="display: inline;  margin-left: 10px;">  Rent: </h6> <h5 style="display: inline; margin-left: 10px;">{{ $row_house->rent}} <small style="font-size:12px;font-weight:lighter">NOK per month </small></h5>
                                      </div>
                                    </div>
                                    
                              </div>
                              
                            </div>
                          </div> 
                          <!-- end front panel -->
                          <div class="back">
                            <div class="header">
                              <h3 class="text-center"> <b> About Me </b></h3>
                              <hr>
                            </div>
                            
                            <div class="content">
                              <div class="main">
                                <div class="text-center" style="width: 300px; overflow: hidden;position: relative; height: 16em;line-height:2em">{{$row_house->describe_me}}</div>
                              </div>
                              <div class="footer" style="">
                                <a  href="{{action('HouseController@showBuddyUp',$row_house->id)}}" target="_blank" type="button" rel="tooltip" class="btn btn-success btn-round"> 
                                  <i class="fa fa-rocket" aria-hidden="true"></i> View
                                </a>  
                                <a href="{{action('HouseController@edit',$row_house->id)}}" type="button" rel="tooltip"  class="btn btn-info btn-round">
                                  <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit 
                                </a>
                                <form method="POST" action=" {{route('house.destroy',$row_house->id) }}" class="delete_form">
                                  {{csrf_field()}}
                                   <input type="hidden" name="_method" value="DELETE"/>
                                   <button  type="submit" rel="tooltip" class="btn btn-just-icon btn-round btn-dribbble" ><i class="fa fa-times" aria-hidden="true"></i> </button>
                                 </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    @endif
                    @endforeach
                  </div>
                  @endif
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<script>
$(document).ready(function(){
  $('.delete_form').on('submit',function(){
    if(confirm("Are you Sure You want to delete the record?"))
    {
      return true;
    }
    else{
      return false;
    }
  });
});
</script>

@endauth
@else
<script>

    
  window.location = "/login";
  
</script>

@endauth
@guest
<script>
 
window.location = "./login";

</script>
@endguest
</body>
</html>
