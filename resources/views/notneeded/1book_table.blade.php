<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="img/icon.png">
  <link rel="icon" type="image/png" href="img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>    OWLMATE-Login  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  
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
        <div class="navbar-wrapper">
          <img class="navbar-brand" style="height:70px; width: 200px" src="{{asset('img/logopng1.png')}}">
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
            <a href="/home" class="nav-link text-warning">
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
            <a href="/View_list_book" class="nav-link">
              <i class="material-icons">view_list</i>
              View Your Advert
            </a>
          </li>
          <li class="active nav-item dropdown">
            <a href="/View_list" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="material-icons">account_circle</i>
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
                      <li class="nav-item pull-right"><a class="nav-link" href="#Tutor" role="tab" data-toggle="tab"><i class="material-icons">school</i>Be a Tutor</a></li>
                      <li class="nav-item"><a class="nav-link " href="#House" role="tab" data-toggle="tab"><i class="material-icons">house</i>House</a>
                      </li> 
                    </div>
                  </div>
                  <h2>Your Listed Books</h2>
                    <h3>View, Edit, Delete</h3>
                  </div>
                  <div class="row">
                    @foreach ($data_book as $row_book)
                    <div class="col-md-6 col-lg-4">
                      <div class="rotating-card-container" >
                        <div class="card card-rotate" style="box-shadow: 0 40px 60px 0 rgba(0, 0, 0, 0.2), 0 6px 80px 0 rgba(0, 0, 0, 0.19);">
                          <div class="front">
                            @if ($row_book->product_type != 3)
                            <div class="card card-blog">
                              <div class="card-header card-header-image" style="box-shadow: 0 40px 60px 0 rgba(0, 0, 0, 0.2), 0 6px 80px 0 rgba(0, 0, 0, 0.19);">
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
                            @endif
                            <div class="card-body"> 
                              @if ($row_book->product_type==1)
                              <h5 class="card-category card-category-social text-rose">
                                <i class="fa fa-book" aria-hidden="true"></i> Book
                              </h5>
                              @elseif ($row_book->product_type==2)
                                <h5 class="card-category card-category-social text-success">
                                  <i class="fa fa-sticky-note-o" aria-hidden="true"></i> Note
                                </h5>
                              @else ($row_book->product_type)
                                <h5 class="card-category card-category-social text-warning">
                                  <i class="fa fa-graduation-cap"></i>Tutor
                              </h5>
                              @endif
                               @if ($row_book->product_type !=3)
                              <h4 class="card-title">
                                <a href="#pablo">{{$row_book->name}}</a>
                              </h4>
                             
                              <h5 style="margin-top:-10px;" >
                                <small>written by</small> <strong>{{$row_book->author}}</strong>
                              </h5>
                              @endif
                              <p class="card-description">
                                Course Name: <strong>{{$row_book->course_name }}</strong><br>
                                Course ID: <strong>{{$row_book->course_id}}</strong><br>

                                @if ($row_book->product_type==1)
                                ISBN: <strong>{{$row_book->isbn}}</strong><br>
                                @endif

                                @if ($row_book->product_type==1 | $row_book->product_type==2)
                                <div class="container" style="margin-left: -20px">
                                <img src="https://img.icons8.com/android/24/000000/coins.png" style="height: 25px" /> <h5 style="margin-left: 10px;display: inline; ">  Price: </h5> <h4 style="margin-left: 10px; display: inline; ">{{ $row_book->price}} <small>NOK </small></h4> </div>
                               
                                
                                @endif

                                @if ($row_book->product_type==3)
                               
                                <div class="card card-profile" style="line-height: ">
                                    <div class="card-avatar">
                                        <a style="" href="#pablo">
                                        <img class="img" style="box-shadow: 0 40px 60px 0 rgba(0, 0, 0, 0.2), 0 6px 80px 0 rgba(0, 0, 0, 0.19);" src="{{asset('storage/'. Auth::user()->image)}}" />
                                        </a>
                                    </div>
                                    
                                    <div class="card-body" style="margin-top: -10px;"> 
                                        <div class="card-category text-gray">
                                          <span class="material-icons" style=" color:#28B463; text-shadow: 0 0 3px #28B463; display: inline-block; ">verified_user</span>
                                          <h6  style=" color:#28B463;display: inline-block; margin-top: -150px;"><strong> Verified Student  </strong></h6>                     
                                            <div style="font-family: 'Roboto Slab', serif; line-height: 25px; font-weight: 700; color: #3c4858; font-size: 18px; margin-top: -5px">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</div>
                                             <br>
                                            <p style="font-family: 'Roboto', sans-serif; font-size:13px; line-height: 19px; color:#999999;; margin-top: -10px;text-transform: uppercase;"> 
                                               student at <strong>{{ Auth::user()->university }} </strong>
                                            </p>
                                            <p style="font-family: 'Roboto', sans-serif; font-size:13px; line-height: 19px; color:#999999; text-transform: uppercase;">
                                           STUDYING <strong>ELECTRICAL ENGINEERING </strong> IN <strong>3RD YEAR </strong> </p> 
                                           <img src="https://img.icons8.com/android/24/000000/coins.png"/> <h6 style="display: inline;  margin-left: 10px;">  Hourly Rate: </h6> <h5 style="display: inline; margin-left: 10px;">{{ $row_book->price}} <small>NOK/HR </small></h5> 
                                           <br><br><br>
                                        </div>
                                    </div>
                                </div>
                                @endif
                              </p>
                            </div>
                          </div>
                          <div class="back">
                            <div class="card-body">
                              <h5 class="card-title">
                                Description
                              </h5>
                              <p class="card-description">
                                {{$row_book->description}}
                              </p>
                              <div class="footer text-center">
                                <a href="{{action('BookController@show',$row_book->id)}}" type="button" rel="tooltip" class="btn btn-success btn-round"> 
                                  <i class="fa fa-rocket" aria-hidden="true"></i> View Page
                                </a>
                                
                                <a href="{{action('BookController@edit',$row_book->id)}}" type="button" rel="tooltip"  class="btn btn-info btn-round">
                                  <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit Info 
                                </a>
                                <form method="POST" action=" {{route('listing_book.destroy',$row_book->id) }}" class="delete_form">
                                  {{csrf_field()}}
                                   <input type="hidden" name="_method" value="DELETE"/>
                                   <button  type="submit" rel="tooltip" class="btn btn-just-icon btn-round btn-dribbble"><i class="fa fa-times" aria-hidden="true"></i> </button>
                                 </form>
                               
                                <br>

                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    @endforeach
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
</body>
</html>
