<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="icon" href="{{ URL::asset('/img/icon/favicon-32x32.png') }}" type="image/x-icon"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>  OwlsMate </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <link href="{{asset('css/material-dashboard.css')}}" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="css/rotating-card.css" rel="stylesheet" />
  <link href="https://netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" />
  <link href="{{asset('css/material-kit.min.css?v=2.0.7')}}" rel="stylesheet" />
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
  
  <script type="text/javascript">
   
    $( document ).ready(function() {
      $(".search").(typeahead({
    hint: true,
    highlight: true,
    minLength: 1
  });, 
      });
  </script>
</head>

<body>

  <!--Nav Bar Starts--> 
  <nav class="navbar navbar-color-on-scroll navbar-white fixed-top navbar-expand-lg" color-on-scroll="50">
    <div class="container">
      <div class="navbar-translate">
        <div class="navbar-wrapper">
          <a href= "/home"><img class="navbar-brand" style="height:70px; width: 200px" src="{{asset('img/logopng1.png')}}"></a>
        </div>
      </div>
      <div class="pull-right">
        <a href="/Login" title="Signin" class="btn btn-outline-info "> <i class="material-icons">fingerprint</i> Sign In</a>
        <a href="/Register" title="Signup" class="btn btn-outline-info"><i class="material-icons">person_add</i> Sign Up</a>
      </div>
    </div>
  </nav>
  <!--Nav Bar Ends--> 
  <div class="page-header header-filter" data-parallax="true" style="background-image: url('img/Wallpaper.png')">
    <div class="container" style="top: -100px;">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto">
          <div class="brand text-center">
            <h1><strong></strong></h1>
            <h3 class="title text-center"></h3>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--Search Section Starts-->
  <section style="margin-top:-150px">
    <div class="main main-raised" >
      <div class="container">
        <!--Search--> 
        <div class="section ">
          <h2 class="title text-center" style="margin-top:-50px">Search Books, Notes, Tutor Here</h2>
          <div class="advance-search">
            <div class="container">
              <!--Search Input Box--> 
              <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12 align-content-center">
                  <form class="typeahead"  role="search" action="/" method="get">
                    <div class="form-row has-info">
                      <div class="form-group col-md-2"> </div>
                      <div class="form-group col-md-7">
                        <input type="search" autocomplete="off" class="form-control my-2 my-lg-1" name="search" id="search" placeholder="Search with your Course ID/ Course Name/ Book Name/ Author/ ISBN">
                      </div>
                      <div class="form-group col-md-2 align-self-center">
                        <button  type="submit" value="Search" class="btn btn-outline-info btn-lg"> Search Now</button>
                      </div>
                    </div>
                  </form> 
                </div>
              </div>
              
              <!--Search Results--> 
              
              
              <div class="row">
                @if ( $search->count() > '0' AND $d != null)
                  @foreach ($search as $row)

                    <!--Book Results--> 
                    @if($row->product_type==1)
                      <div class="col-md-6 col-lg-4">
                      ``<br><br><br><br><br>
                        <div class="rotating-card-container" >
                          <div class="card card-rotate" style="box-shadow: 0 40px 60px 0 rgba(0, 0, 0, 0.2), 0 6px 80px 0 rgba(0, 0, 0, 0.19);">
                            <div class="front">
                              <div class="card card-blog" style="margin-top:-20px" >
                                <div class="card-header card-header-image" style="margin-top:-70px; box-shadow: 0 40px 60px 0 rgba(0, 0, 0, 0.2), 0 6px 80px 0 rgba(0, 0, 0, 0.19);">
                                  <a href="#pablo">
                                    @if ($row->image_1 != null )
                                      <img src="{{asset('storage/'.$row->image_1)}}" style=" width:100%; height: 200px !important;"alt="">
                                    @elseif ($row->image_2 != null)
                                      <img src="{{asset('storage/'.$row->image_2)}}" style=" width:100%; height: 200px !important;"alt="">
                                    @elseif ($row->image_3 != null)
                                      <img src="{{asset('storage/'.$row->image_3)}}" style=" width:100%; height: 200px !important;"alt="">
                                    @elseif ($row->image_4 != null)
                                      <img src="{{asset('storage/'.$row->image_4)}}" style=" width:100%; height: 200px !important;"alt="">
                                    @elseif ($row->image_5 != null)
                                      <img src="{{asset('storage/'.$row->image_5)}}" style=" width:100%; height: 200px !important;"alt="">
                                    @elseif ($row->image_6 != null)
                                      <img src="{{asset('storage/'.$row->image_6)}}" style=" width:100%; height: 200px !important;"alt="">
                                    @else
                                    <img src=" {{ asset('img/no image.png') }}" style=" width:100%; height: 200px !important;"alt="" >
                                    @endif
                                  </a>
                                </div>
                              </div>
                              <div class="card-body " style="margin-top:-10px"> 
                                <h5 class="card-category card-category-social text-rose text-center" style="margin-top:-10px">
                                  <i class="fa fa-book" aria-hidden="true"></i> Book
                                </h5>
                                <h4 class="card-title text-center" >
                                  <a href="#pablo">{{$row->name}}</a>
                                </h4>
                                <h5 class="text-center"  >
                                  <small>written by</small> <strong>{{$row->author}}</strong>
                                </h5>
                                <br>
                                <p class="card-description " style="margin-top:-20px">
                                  Course Name: <strong>{{$row->course_name }}</strong>
                                  <br>
                                  Course ID: <strong>{{$row->course_id}}</strong>
                                  <br>
                                  ISBN: <strong>{{$row->isbn}}</strong>
                                  <br>
                                </p>
                                <div class="footer" style="margin-top:-10px">
                                <div class="rating">
                                  <img src="https://img.icons8.com/android/24/000000/coins.png"/> <h6 style="display: inline;  margin-left: 10px;"> Price: </h6> <h5 style="display: inline; margin-left: 10px;">{{ $row->price}} <small>NOK</small></h5>
                                </div>
                              </div>
                              </div>
                            </div>
                            
                            <div class="clear-fix"></div>
                            <div class="back">
                              <div class="card-body">
                                <h5 class="card-title" style="position: absolute; top: 10px; left: 50%;  transform: translateX(-50%); ">
                                  Description
                                </h5>
                                <p class="card-description"  style="width: 300px; overflow: hidden;position: relative; height: 16em;">
                                  {{$row->description}}
                                </p>
                                <div class="footer text-center" style="position: absolute;bottom: 10px; left: 50%;  transform: translateX(-50%); ">
                                  <a href="{{action('NewBookController@show',$row->id)}}" target="_blank" type="button"  rel="tooltip" class="btn btn-success btn-round"> 
                                    <i class="fa fa-rocket" aria-hidden="true"></i> View Page
                                  </a>
                                  <br>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    ``</div>
                    
                    <!-Note Results--> 
                    @elseif ($row->product_type==2)
                    <div class="col-md-6 col-lg-4">
                      <br><br><br><br>
                      <div class="rotating-card-container" >
                        <div class="card card-rotate" style="box-shadow: 0 40px 60px 0 rgba(0, 0, 0, 0.2), 0 6px 80px 0 rgba(0, 0, 0, 0.19);">
                          <div class="front">
                            <div class="card card-blog" style="margin-top:-">
                              <div class="card-header card-header-image" style="margin-top:-100px; box-shadow: 0 40px 60px 0 rgba(0, 0, 0, 0.2), 0 6px 80px 0 rgba(0, 0, 0, 0.19);">
                                <a href="#pablo">
                                  @if ($row->image_1 != null )
                                    <img src="{{asset('storage/'.$row->image_1)}}" style=" width:100%; height: 200px !important;"alt="">
                                  @elseif ($row->image_2 != null)
                                    <img src="{{asset('storage/'.$row->image_2)}}" style=" width:100%; height: 200px !important;"alt="">
                                  @elseif ($row->image_3 != null)
                                    <img src="{{asset('storage/'.$row->image_3)}}" style=" width:100%; height: 200px !important;"alt="">
                                  @elseif ($row->image_4 != null)
                                    <img src="{{asset('storage/'.$row->image_4)}}" style=" width:100%; height: 200px !important;"alt="">
                                  @elseif ($row->image_5 != null)
                                    <img src="{{asset('storage/'.$row->image_5)}}" style=" width:100%; height: 200px !important;"alt="">
                                  @elseif ($row->image_6 != null)
                                    <img src="{{asset('storage/'.$row->image_6)}}" style=" width:100%; height: 200px !important;"alt="">
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
                                <a href="#pablo">{{$row->name}}</a>
                              </h4>
                              <h5 class="text-center">
                                <small>written by</small> <strong>{{$row->author}}</strong>
                              </h5>
                              <p class="card-description">
                                Course Name: <strong>{{$row->course_name }}</strong>
                                <br>
                                Course ID: <strong>{{$row->course_id}}</strong>
                                <br>
                              </p>
                              <div class="container">
                                <hr>
                                <img src="https://img.icons8.com/android/24/000000/coins.png" style="height: 25px" /> 
                                <h5 style="margin-left: 10px;display: inline; ">  Price: </h5> 
                                <h4 style="margin-left: 10px; display: inline; ">{{ $row->price}} <small>NOK </small></h4> 
                              </div>
                            </div>
                          </div>
                          <div class="back">
                            <div class="card-body">
                              <h5 class="card-title" style="position: absolute; top: 0;left: 50%;transform: translateX(-50%); ">
                                Description
                              </h5>
                              <p class="card-description"  style="width: 300px; overflow: hidden;position: relative; height: 16em;">
                                {{$row->description}}
                              </p>
                              <div class="footer text-center"  style="position: absolute; bottom: 0;left: 50%;transform: translateX(-50%); ">
                                <a href="{{action('NoteController@show',$row->id)}}"target="_blank" type="button" rel="tooltip" class="btn btn-success btn-round"> 
                                  <i class="fa fa-rocket" aria-hidden="true"></i> View Page
                                </a>
                                `<br>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!--Tutor Results--> 
                    @elseif ($row->product_type==3)
                    
                    <div class="col-md-6 col-lg-4" >
                      <div class="card-container"  >
                        
                        <div class="card" style="margin-top:125px">
                          <div class="front" style="box-shadow: 0 40px 60px 0 rgba(0, 0, 0, 0.2), 0 6px 80px 0 rgba(0, 0, 0, 0.19);">
                            <div class="user">
                                <img class="img-circle" style="border-radius: 50%;border: 3px solid #20bed2 ;box-shadow: 0 40px 60px 0 rgba(0, 0, 0, 0.2), 0 6px 80px 0 rgba(0, 0, 0, 0.19);" src="{{asset('storage/'. $tutor_data->image)}}"/>
                            </div>
                            @if($user->verified == 1)
                              <i class="material-icons" style=" margin-left:90px; margin-top:-10px; color:#28B463; text-shadow: 0 0 3px #28B463; display: inline; ">verified_user</i>
                              <h6  style=" color:#28B463;display: inline; margin-top: -150px;"><strong> Verified Student  </strong></h6>  
                            @endif
                            <div class="content" >
                              <div class="main">
                                <div class="text-center" style="font-family: 'Roboto Slab', serif; line-height: 25px; font-weight: 700; color: #3c4858; font-size: 18px; margin-top: -5px">
                                  {{ $user->first_name }} {{ $user->last_name }}
                                </div>
                                <br>
                                <p class="text-center" style="font-family: 'Roboto', sans-serif; font-size:13px; line-height: 19px; color:#999999;; margin-top: -10px;text-transform: uppercase;"> 
                                  student at <strong>UNIVERSITETET I SØRØST-NORGE </strong>
                                </p>
                                <p class="text-center" style="font-family: 'Roboto', sans-serif; font-size:13px; line-height: 19px; color:#999999; text-transform: uppercase;">
                                  STUDYING <strong>{{ $user->program }} </strong> IN <strong>{{ $user->year }}</strong> 
                                </p> 
                                <hr>
                                <h3 class="card-category card-category-social text-warning text-center"><i class="fa fa-graduation-cap"></i>Tutor</h3>
                                <h5 class="card-description text-center">
                                  Course Name: <strong>{{$row->course_name}}</strong>
                                  <br><br>
                                  Course ID: <strong>{{$row->course_id}}</strong>
                                  <br>
                                </h5>
                              </div>
                              <div class="footer">
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
                                <p class="text-center" style="width: 300px; overflow: hidden;position: relative; height: 16em;">{{$row->description}}</p>
                              </div>
                              <div class="footer text-center">
                                <a style="margin-left:80px" href="{{action('TutorController@show',$row->id)}}" target="_blank" type="button" rel="tooltip" class="btn btn-success btn-round"> 
                                  <i class="fa fa-rocket" aria-hidden="true"></i> View My Page
                                </a>
                                
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    @endif

                @endforeach
                @endif
                <!--Search Card Ends-->
                <!--Search Results Null-->
                @if($data_book->count() == '0')
                <p class="text-center" style="align:center; margin-left:400px; font-size: x-large; font-weight:800">Sorry! No results are found.</p>
                @endif
                <!--Search Results Null Ends-->
              </div>
              <!--Search Results Ends-->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Search Section Ends-->

  <!--Recent Post Section Starts-->
  <section>
    <div class="container">
      <div class="section ">
        <h2 class="title text-center">Recent Post</h2><hr>
        <!--Recent Posts Nav-->
        <div class="nav-center text-align">
          <ul class="nav nav-pills nav-pills-icons-info nav-pills-info justify-content-center"  role="tablist">
            <li class="nav-item"><a class="nav-link active" href="#Books" role="tab" data-toggle="tab"><i class="material-icons">menu_book</i>Books</a></li>
            <li class="nav-item"><a class="nav-link" href="#Notes" role="tab" data-toggle="tab"><i class="material-icons">notes</i>Notes</a></li>
            <li class="nav-item pull-right"><a class="nav-link" href="#Tutor" role="tab" data-toggle="tab"><i class="material-icons">school</i>Tutor</a></li>
            <li class="nav-item"><a class="nav-link " href="#House" role="tab" data-toggle="tab"><i class="material-icons">house</i>House</a></li> 
          </ul>
        </div>
        <div class="advance-search">
          <div class="container">
            <div class="tab-content tab-space">


              <!--Books Section Starts-->


              <div class="tab-pane active" id="Books">
                @if(count($data_book) < 1)
                  <h3 class="text-danger" style="text-align:center"> No Book Post yet!</h3>
                @else
                  <div class="row">
                    @foreach ($data_book as $row_book)
                    
                      <div class="col-md-6 col-lg-4">
                        <br><br><br><br><br>
                        <div class="rotating-card-container" >
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
                              <div class="card-body " style="margin-top:-0px"> 
                                <h5 class="card-category card-category-social text-rose text-center">
                                  <i class="fa fa-book" aria-hidden="true"></i> Book
                                </h5>
                                <h4 class="card-title text-center" >
                                  <a href="#pablo">{{$row_book->name}}</a>
                                </h4>
                                <h5 class="text-center"  >
                                  <small>written by</small> <strong>{{$row_book->author}}</strong>
                                </h5>
                                <br>
                                <p class="card-description ">
                                  Course Name: <strong>{{$row_book->course_name }}</strong>
                                  <br>
                                  Course ID: <strong>{{$row_book->course_id}}</strong>
                                  <br>
                                  ISBN: <strong>{{$row_book->isbn}}</strong>
                                  <br>
                                </p>
                                
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
                                <p class="card-description"  style="width: 300px; overflow: hidden;position: relative; height: 16em;">
                                  {{$row_book->description}}
                                </p>
                                <div class="footer"  style="position: absolute;bottom: 10px; left: 50%;  transform: translateX(-50%); ">
                                  <a href="{{action('NewBookController@show',$row_book->id)}}" target="_blank" type="button" rel="tooltip" class="btn btn-success btn-round"> 
                                    <i class="fa fa-rocket" aria-hidden="true"></i> View Page
                                  </a>
                                  <br>
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
              <!--Books Section Ends-->


              <!--Notes Section Starts-->
              <div class="tab-pane" id="Notes">
                @if(count($data_note) < 1)
                  <h3 class="text-danger" style="text-align:center">No post yet!</h3>
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
                                  <small>written by</small> <strong>{{$row_book->author}}</strong>
                                </h5>
                                <p class="card-description">
                                  Course Name: <strong>{{$row_book->course_name }}</strong>
                                  <br>
                                  Course ID: <strong>{{$row_book->course_id}}</strong>
                                  <br>
                                </p>
                                <div class="container">
                                  <hr>
                                  <img src="https://img.icons8.com/android/24/000000/coins.png" style="height: 25px" /> 
                                  <h5 style="margin-left: 10px;display: inline; ">  Price: </h5> 
                                  <h4 style="margin-left: 10px; display: inline; ">{{ $row_book->price}} <small>NOK </small></h4> 
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
              <!--Notes Section Ends-->


              <!--Tutor Section Starts-->


              <div class="tab-pane" id="Tutor">
                @if(count($data_tutor) < 1)
                  <h3 class="text-danger" style="text-align:center"> No Tutors yet!</h3>
                @else
                  <div class="row" >
                    @foreach ($data_tutor as $row_book)
                      <div class="col-md-6 col-lg-4" >
                        <div class="card-container"  >
                          <div class="card" >
                            <div class="front" style="box-shadow: 0 40px 60px 0 rgba(0, 0, 0, 0.2), 0 6px 80px 0 rgba(0, 0, 0, 0.19);">
                              <div class="user">
                                  <img class="img-circle" style="border-radius: 50%;border: 3px solid #20bed2 ;box-shadow: 0 40px 60px 0 rgba(0, 0, 0, 0.2), 0 6px 80px 0 rgba(0, 0, 0, 0.19);" src="{{asset('storage/'. $tutor_data->image)}}"/>
                              </div>
                              @if($tutor_data->verified == 1)
                                <i class="material-icons" style=" margin-left:90px; margin-top:-10px; color:#28B463; text-shadow: 0 0 3px #28B463; display: inline; ">verified_user</i>
                                <h6  style=" color:#28B463;display: inline; margin-top: -150px;"><strong> Verified Student  </strong></h6>  
                              @endif
                              <div class="content" >
                                <div class="main">
                                  <div class="text-center" style="font-family: 'Roboto Slab', serif; line-height: 25px; font-weight: 700; color: #3c4858; font-size: 18px; margin-top: -5px">
                                    {{ $tutor_data->first_name }} {{ $tutor_data->last_name }}
                                  </div>
                                  <br>
                                  <p class="text-center" style="font-family: 'Roboto', sans-serif; font-size:13px; line-height: 19px; color:#999999;; margin-top: -10px;text-transform: uppercase;"> 
                                    student at <strong>{{$row_book->university}}</strong>
                                  </p>
                                  <p class="text-center" style="font-family: 'Roboto', sans-serif; font-size:13px; line-height: 19px; color:#999999; text-transform: uppercase;">
                                    STUDYING <strong>{{ $tutor_data->program }} </strong> IN <strong>{{ $tutor_data->year }}</strong> 
                                  </p> 
                                  <hr>
                                  <h3 class="card-category card-category-social text-warning text-center"><i class="fa fa-graduation-cap"></i>Tutor</h3>
                                  <h5 class="card-description text-center">
                                    Course Name: <strong>{{$row_book->course_name}}</strong>
                                    <br><br>
                                    Course ID: <strong>{{$row_book->course_id}}</strong>
                                    <br>
                                  </h5>
                                </div>
                                <div class="footer">
                                  <div class="rating">
                                    <img src="https://img.icons8.com/android/24/000000/coins.png"/> <h6 style="display: inline;  margin-left: 10px;">  Hourly Rate: </h6> <h5 style="display: inline; margin-left: 10px;">{{ $row_book->price}} <small>NOK/HR </small></h5>
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
                                  <p class="text-center"  style="width: 300px; overflow: hidden;position: relative; height: 16em;">{{$row_book->description}}</p>
                                </div>
                                <div class="footer text-center">
                                  <a style="margin-left:80px" href="{{action('TutorController@show',$row_book->id)}}" target="_blank" type="button" rel="tooltip" class="btn btn-success btn-round"> 
                                    <i class="fa fa-rocket" aria-hidden="true"></i> View My Page
                                  </a>
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


              <!--Tutor Section Ends-->


              <!--House Section Starts-->
              <div class="tab-pane" id="House">
                <!--House Navs-->

                <div class="row">
                  <div class="col-md-4"></div>
                  <div class="col-md-6">
                    <ul class="nav nav-pills nav-pills-rose">
                      <li class="nav-item"><a class="nav-link active" href="#pill1" data-toggle="tab"><span class="material-icons">king_bed</span>FlatMate</a></li>
                      <li class="nav-item"><a class="nav-link" href="#pill2" data-toggle="tab"><span class="material-icons">emoji_people</span>Buddy Up</a></li>
                    </ul>
                  </div>
                </div>

                <div class="tab-content tab-space">
                  <div class="tab-pane active" id="pill1">
                    <!--FlatMate Section Starts-->
                    @if(count($data_house) < 1)
                      <h3 class="text-danger" style="text-align:center"> No Posts yet!</h3>
                    @else
                      <div class="row">
                        @foreach ($data_house as $row_house)
                        @if ($row_house->house_type==1)
                          <div class="col-md-6 col-lg-4">
                            <br><br><br><br>
                            <div class="rotating-card-container">
                              <div class="card card-rotate" style="box-shadow: 0 40px 60px 0 rgba(0, 0, 0, 0.2), 0 6px 80px 0 rgba(0, 0, 0, 0.19);">
                                <div class="front">
                                ` <div class="card card-blog"  style="margin-top:-50px">
                                    <div class="card-header card-header-image" style="margin-top:-100px;box-shadow: 0 40px 60px 0 rgba(0, 0, 0, 0.2), 0 6px 80px 0 rgba(0, 0, 0, 0.19);">
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
                                  <div class="card-body" style="margin-top:-60px"> 

                                    <h5 class="card-category card-category-social text-danger text-center">
                                      <i class="material-icons">king_bed</i> FlatMate
                                    </h5>

                                    <h4 class="card-title text-center" style="margin-top:-5px;">
                                      <a href="#pablo">{{$row_house->title}}</a>
                                    </h4>
                                    
                                    <h5 class= "text-center">
                                      <strong>{{$row_house->address}}</strong>  <strong>{{$row_house->city}}</strong> <strong> , {{$row_house->postcode}}</strong>
                                    </h5>
                                    
                                    <p class="card-description text-center">
                                      <i class="material-icons">meeting_room</i>
                                      <strong style="margin-left:">
                                        @if($row_house->room_type == 1)
                                          Furnished
                                        @elseif($row_house->room_type == 2)
                                        Semi-Furnished
                                        @elseif($row_house->room_type == 3)
                                        Unfurnished
                                        @endif Room
                                      </strong>
                                      <strong ><i class="material-icons">bathtub</i>
                                        @if($row_house->bath_type == 1)
                                          Private Bath
                                        @else
                                          Shared Bath
                                        @endif
                                      </strong>
                                    
                                    </p>
                                    <p class="card-description text-center"><i class="material-icons">people_alt</i> <strong> {{$row_house->gender}} Preferred</strong></p>
                                    <p class="card-description text-center">
                                      @if($row_house->pet == 1)
                                        <i class="material-icons">pets</i>Pets Allowed
                                      @else
                                        <i class="material-icons">pets</i>No Pets
                                      @endif

                                      @if($row_house->smoking == 1)
                                        <i class="material-icons">smoking_rooms</i>Smoker Allowed
                                      @else
                                        <i class="material-icons">smoke_free</i>Non-Smoker
                                      @endif
                                    </p>
                                    
                                    <div class="container">
                                      <hr>
                                      <img src="https://img.icons8.com/android/24/000000/coins.png" style="height: 25px" /> 
                                      <h5 style="margin-left: 10px;display: inline; ">  Rent: </h5> 
                                      <h4 style="margin-left: 10px; display: inline; ">{{ $row_house->rent}} <small>NOK per month </small></h4> 
                                    </div>
                                  </div>
                                </div>
                                <div class="back">
                                  <div class="card-body">
                                    <h5 class="card-title">Description</h5>
                                    <p class="card-description" style="width: 300px; overflow: hidden;position: relative; height: 16em;">{{$row_house->describe_me}} </p>
                                    <div class="footer text-center" >
                                      <a href="{{action('HouseController@show',$row_house->id)}}" target="_blank" style="bottom: 0; left: 50%;  transform: translateX(-50%); " type="button" rel="tooltip" class="btn btn-success btn-round"> 
                                        <i class="fa fa-rocket" aria-hidden="true"></i> View Page
                                      </a>
                                      <br>
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
                  <!--FlatMate Section Ends-->
                  <!--Buddy Up Section Starts-->
                  <div class="tab-pane" id="pill2">
                    @if(count($data_house) < 1)
                      <h3 class="text-danger" style="text-align:center"> No Posts yet!</h3>
                    @else
                      <div class="row">
                        @foreach ($data_house as $row_house)
                        @if ($row_house->house_type==2)
                        <div class="col-md-6 col-lg-4" >
                          <div class="card-container"  >
                            <div class="card" >
                              <div class="front" style="box-shadow: 0 40px 60px 0 rgba(0, 0, 0, 0.2), 0 6px 80px 0 rgba(0, 0, 0, 0.19);">
                                <div class="user">
                                    <img class="img-circle" style="border-radius: 50%;border: 3px solid #20bed2 ;box-shadow: 0 40px 60px 0 rgba(0, 0, 0, 0.2), 0 6px 80px 0 rgba(0, 0, 0, 0.19);" src="{{asset('storage/'. $house_user->image)}}"/>
                                </div>
                                @if($house_user ->verified == 1)
                                  <i class="material-icons" style=" margin-left:90px; margin-top:-10px; color:#28B463; text-shadow: 0 0 3px #28B463; display: inline; ">verified_user</i>
                                  <h6  style=" color:#28B463;display: inline; margin-top: -150px;"><strong> Verified Student  </strong></h6>  
                                @endif
                                <div class="content" >
                                  <div class="main">
                                    <div class="text-center" style="font-family: 'Roboto Slab', serif; line-height: 25px; font-weight: 700; color: #3c4858; font-size: 18px; margin-top: -5px">
                                      {{ $house_user->first_name }} {{ $house_user->last_name }}
                                    </div>
                                    <br>
                                    <p class="text-center" style="font-family: 'Roboto', sans-serif; font-size:13px; line-height: 19px; color:#999999;; margin-top: -10px;text-transform: uppercase;"> 
                                      student at <strong>{{ $house_user->university }} </strong>
                                    </p>
                                    <p class="text-center" style="font-family: 'Roboto', sans-serif; font-size:13px; line-height: 19px; color:#999999; text-transform: uppercase;">
                                      STUDYING <strong>{{ $house_user->program }} </strong> IN <strong>{{ $house_user->year }}</strong> 
                                    </p> 
                                    <hr>
                                    <h3 class="card-category card-category-social text-danger text-center"><span class="material-icons">emoji_people</span>Buddy Up</h3>
                                    <p class="card-description text-center" style="font-weight:lighter">
                                      <i class="material-icons">people_alt</i> <strong style="margin-top:-200px;font-size:12px;font-weight:lighter" > {{$row_house->gender}}</strong>
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
                                  </div>
                                  <div class="footer text-center" >
                                        <div class="rating">
                                          <img src="https://img.icons8.com/android/24/000000/coins.png"/> <h6 style="display: inline;  margin-left: 10px;">  Rent: </h6> <h5 style="display: inline; margin-left: 10px;">{{ $row_house->rent}} <small style="font-size:12px;font-weight:lighter">NOK per month </small></h5>
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
                                    <p class="text-center" style="width: 300px; overflow: hidden;position: relative; height: 16em;">{{$row_house->describe_me}}</p>
                                  </div>
                                  <div class="footer text-center">
                                    <a style="margin-left:80px" href="{{action('HouseController@showBuddyUp',$row_house->id)}}" target="_blank" type="button" rel="tooltip" class="btn btn-success btn-round"> 
                                      <i class="fa fa-rocket" aria-hidden="true"></i> View My Page
                                    </a>  
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
              <!--House Section Ends-->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Recent Post Section Ends-->





  <!--Info Section Starts-->
  <section>
    <div class="main main-raised" style="margin-top:40px">
      <div class="container">
        <div class="section">
          <div class="container">
            <h2 class="title text-center">How It Works</h2><hr>
            <div class="row">
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
                            <p style="line-height: 1.61em; font-weight: 300;font-size: 1.2em;">Contact them to know more about the <br>product.</p>
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
                            <p style="line-height: 1.61em; font-weight: 300;font-size: 1.2em;">Negotiate and settle a place to meet at your convenience .</p>
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
                            <h4 class="info-title">Meet and Exchange</h4>
                            <p style="line-height: 1.61em; font-weight: 300;font-size: 1.2em;">Meet at the right place to exchange your product.</p>
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
    </div>
  </section>
  <!--Info Section Ends-->



       
  <footer class="footer footer-default">
    <div class="container">
      <div class="copyright float-left">
        <a>OwlsMate</a> <b> Founded by Z.H. Ronty </b>
        
      </div>
      <div class="copyright float-right">
        &copy;
        <script>
          document.write(new Date().getFullYear())
        </script> All rights reserved
        <a>OwlsMate</a> 
      </div>
    </div>
  </footer>
</body>

<script src="js/script.js"></script>
<script src="js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/hipster-cards.js"></script>
<script src="js/script.js"></script>
</html>
