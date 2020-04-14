
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
  <link href="css/material-dashboard.css" rel="stylesheet" />
  
  

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>


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
      
  <!--Nav Bar-->
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
          <li class="active nav-item">
            <a href="/Listing" class="nav-link text-info">
              <i class="material-icons">post_add</i>
              Post Your Advert
            </a>
          </li>
          <li class="active nav-item">
            <a href="/allpost" class="nav-link">
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
  <!--End Navbar-->
  <!--Intro-->
  <div class="content">
    <div class="container-fluid">
      <br><br><br><br><br>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body" style="text-align: center;">
              <div class="profile-head" style="display: inline-block; letter-spacing: 2px;">
                  <h5 class="display-1" style="display: inline-block;">Hello!</h5>
                  <h6 class="display-2" style="display: inline-block; color:#00bcd4;">
                      <br>{{ Auth::user()->first_name }} 
                  </h6>
                  <p>This is your Listing Page, where you create your Listing and Post it to your School Mates.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-8">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="nav-center">
                <ul class="nav nav-pills nav-pills-icons-info nav-pills-info justify-content-center"  role="tablist">
                  <!--Books-->
                  @if( old('product_type')==2 or old('product_type')==3 or old('house_type')==1 or old('house_type')==2  )
                    <li class="nav-item"><a class="nav-link " href="#Books" role="tab" data-toggle="tab"><i class="material-icons">menu_book</i>Books</a></li>
                  @else
                    <li class="nav-item"><a class="nav-link active" href="#Books" role="tab" data-toggle="tab"><i class="material-icons">menu_book</i>Books</a></li>
                  @endif

                  <!---Notes-->
                  @if(old('product_type')==2)
                    <li class="nav-item"><a class="nav-link active" href="#Notes" role="tab" data-toggle="tab"><i class="material-icons">notes</i>Notes</a></li>
                  @else
                    <li class="nav-item"><a class="nav-link" href="#Notes" role="tab" data-toggle="tab"><i class="material-icons">notes</i>Notes</a></li>
                  @endif


                  <!--Tutor-->
                  @if(old('product_type')==3)
                    <li class="nav-item pull-right"><a class="nav-link active" href="#Tutor" role="tab" data-toggle="tab"><i class="material-icons">school</i>Be a Tutor</a></li>
                  @else
                    <li class="nav-item pull-right"><a class="nav-link" href="#Tutor" role="tab" data-toggle="tab"><i class="material-icons">school</i>Be a Tutor</a></li>
                  @endif

                  <!--House-->
                  @if(old('house_type')==1 or old('house_type')==2)
                    <li class="nav-item"><a class="nav-link active " href="#House" role="tab" data-toggle="tab"><i class="material-icons">house</i>House</a></li> 
                  @else
                    <li class="nav-item"><a class="nav-link " href="#House" role="tab" data-toggle="tab"><i class="material-icons">house</i>House</a></li> 
                  @endif
                </ul>
                </div>
                @if(Session::has('success'))
                <h6  style="text-align: center; color: green;" >
                  <b>{{ Session::get('success')}}</b>
                </h6>
                @endif
                @if (count($errors) > 0)
                @foreach ($errors->all() as $error)
                  <h6  style="text-align: center; color: red;" >
                  <b>{{ $error }} </b>
                  </h6>
                @endforeach
                @endif
                <div class="tab-content tab-space">
                  @if(old('product_type')==2 or old('product_type')==3 or old('house_type')==1 or old('house_type')==2  )
                  <div class="tab-pane" id="Books"> 
                  @else 
                  <div class="tab-pane active " id="Books"> 
                  @endif
                    <h2 class=" text-center"> <i class="material-icons" style="font-size: 30px">menu_book</i> List Your Book</h2>
                    <div class="row">
                      <div class="col-md-2"></div>
                      <div class="col-md-8">
                        <form method="POST" action= "{{route('listing_book.store')}}" class="form-horizontal" enctype="multipart/form-data" id="list" >
                          @csrf  
                          <input name="s_id" type="hidden" value=" {{ Auth::user()->id}} ">
                          <input name="product_type" type="hidden" value="1">
                          <h3>Book Info Section</h3>
                          <hr>
                          <!--Book Name-->
                          <div class="row">
                            <label class="col-sm-2 col-form-label text-center" for="name" ><i class="fa fa-book" style="margin-left:-10px"></i> Book Name</label>
                            <div class="col-sm-7">
                              <div class="form-group label-floating has-success">
                                <input class="form-control" input type="text"  name="name" id="name" placeholder="Book Name"  />
                                <small id="passwordHelpBlock" class="form-text text-muted">
                                  Please write the name of the book according to the name given on the book.  
                                </small>
                              </div>
                            </div>
                          </div>

                          <!--Author Name-->
                          <div class="row">
                            <label class="col-sm-2 col-form-label text-center" for="author"><i class="fa fa-pencil"></i> Author's Name</label>
                            <div class="col-sm-7">
                              <div class="form-group label-floating has-success">
                                <input class="form-control" name="author" id="author" type="text" placeholder="Author's Name"  />
                                <small id="passwordHelpBlock" class="form-text text-muted">
                                  Please type the Author's name. If there are more than one author, then write their name with comma. 
                                </small>
                              </div>
                            </div>
                          </div>
                          
                          <!--Edition-->
                          <div class="row">
                            <label class="col-sm-2 col-form-label text-center" for="edition"> <i class="fa fa-pencil-square-o"></i> Edition</label>
                            <div class="col-sm-4">
                              <div class="form-group label-floating has-success">
                                <input class="form-control" name="edition" id="edition" type="text" placeholder="Edition "  />
                                <small id="passwordHelpBlock" class="form-text text-muted">
                                  Please write the book edition. e.g. 1st, 2nd, 3rd.
                                </small>
                              </div>
                            </div>
                          </div>

                          <!--ISBN-->
                          <div class="row">
                            <label class="col-sm-2 col-form-label text-center" for="isbn"> <i class="fa fa-barcode"></i> ISBN</label>
                            <div class="col-sm-7">
                              <div class="form-group label-floating has-success">
                                <input class="form-control" name="isbn" id="isbn" type="text" placeholder="ISBN "  />
                                <small id="passwordHelpBlock" class="form-text text-muted">
                                  ISBN is a 13 digit number (formerly 10 digit) to recognize a specific book. Please type the <b>13 digit ISBN</b> without any space or character
                                </small>
                              </div>
                            </div>
                          </div>
                          
                          <h3>More Book Info Section</h3>
                          <hr>

                          <!--Price-->
                          <div class="row">
                            <label class="col-sm-2 col-form-label text-center" for="price" ><i class="fa fa-money"></i> Price</label>
                            <div class="col-sm-4">
                              <div class="form-group label-floating has-success">
                                <input class="form-control" name="price"  id="price" type="text" placeholder="Price in Nok "  />
                                <small class="form-text text-muted">
                                  Input the Price in Nok.
                                </small>
                              </div>
                            </div>
                            <div class="col-sm-4">
                              <label style="vertical-align:-20px; ">Nok</label>
                            </div>
                          </div>

                          <!--Book Type-->
                          <div class="row">
                            <label class="col-sm-2 col-form-label text-center"for="b_type"><i class="fa fa-exclamation-circle"></i> Book Type</label>
                            <div class="col-sm-10">
                              <div class="form-group label-floating has-success ">
                                <div class="radio">
                                  <label>
                                    <input type="radio" value="1" name="b_type"> 
                                    TextBook 
                                    <small class="form-text text-muted">
                                      Select if the book is course required book.
                                    </small>
                                  </label>
                                </div>
                                <div class="radio">
                                  <label>
                                    <input type="radio" value="2" name="b_type">
                                    Supplementary Book
                                    <small class="form-text text-muted">
                                      Select if the book is additional to course required book.
                                    </small>
                                  </label>
                                </div>
                              </div>
                            </div>
                          </div>
                          
                          <!--Book Description-->
                          <div class="row">
                            <label class="col-sm-2 col-form-label text-center" for="description"><i class="fa fa-info"></i> Product Info</label>
                            <div class="col-sm-10">
                              <div class="form-group label-floating has-success">
                                <textarea class="form-control" name="description" id="description" rows="5"  form="list" ></textarea>
                                <small class="form-text text-muted">
                                  Describe about your book. <u>Such as:</u> Condition of the book.
                                </small>
                              </div>
                            </div>
                          </div>

                        
                          <h3>Course Info Section</h3>
                          <hr>

                          <!--Course ID-->
                          <div class="row">
                            <label class="col-sm-2 col-form-label text-center" for="course_id"><i class="fa fa-text-width"></i> Course ID</label>
                            <div class="col-sm-4">
                              <div class="form-group label-floating has-success">
                                <input class="form-control" name="course_id" id="course_id" type="text" placeholder="Course ID "  />
                                <small class="form-text text-muted">
                                  Write your <i><b>Course ID</b></i> accordingly. <b><u>Do Not</u></b> put any space or character in between.  It's very <b><u>important</u></b> to find out your book.
                                </small>
                              </div>
                            </div>
                          </div>

                          <!--Course Name-->
                          <div class="row">
                            <label class="col-sm-2 col-form-label text-center" for="course_name"><i class="fa fa-pencil-square-o"></i> Course Name</label>
                            <div class="col-sm-7">
                              <div class="form-group label-floating has-success">
                                <input class="form-control" name="course_name" id="course_name"  type="text" placeholder="Course Name "  />
                                <small class="form-text text-muted">
                                  Write your <i><b>Course Name</b></i> accordingly. It's very <b><u>important</u></b> to find out your book.
                                </small>
                              </div>
                            </div>
                          </div>


                          <h3>Book Picture Section</h3>
                          <hr>
                          <br>
                          <div class="row">
                            <label class="col-sm-2 col-form-label text-center"><i class="fa fa-picture-o"></i> Picture <small class="form-text text-muted">
                              Upload your book's picture.
                            </small></label>
                            <div class="col-sm-2">
                              <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                <div class="fileinput-new thumbnail">
                                  <img src="https://material-dashboard-pro-laravel.creative-tim.com/material/img/image_placeholder.jpg" alt="...">
                                </div>
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
                                  <img src="https://material-dashboard-pro-laravel.creative-tim.com/material/img/image_placeholder.jpg" alt="...">
                                </div>
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
                                  <img src="https://material-dashboard-pro-laravel.creative-tim.com/material/img/image_placeholder.jpg" alt="...">
                                </div>
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
                            <div class="col-sm-2"></div>
                            <div class="col-sm-2">
                              <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                <div class="fileinput-new thumbnail">
                                  <img src="https://material-dashboard-pro-laravel.creative-tim.com/material/img/image_placeholder.jpg" alt="...">
                                </div>
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
                                  <img src="https://material-dashboard-pro-laravel.creative-tim.com/material/img/image_placeholder.jpg" alt="...">
                                </div>
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
                                  <img src="https://material-dashboard-pro-laravel.creative-tim.com/material/img/image_placeholder.jpg" alt="...">
                                </div>
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
                          
                          <button type="submit" value="Update" class="btn btn-info pull-right">Post It</button>
                          <div class="clearfix"></div>
                        </form>
                      </div>
                    </div>
                  </div>
                  @if(old('product_type')==2)
                    <div class="tab-pane active" id="Notes">
                  @else 
                  <div class="tab-pane" id="Notes">
                  @endif
                    <h2 class="text-center"><i class="material-icons" style="font-size: 30px">notes</i> List Your Notes</h2>
                    <div class="row">
                      <div class="col-md-2"></div>
                      <div class="col-md-8">
                        <form method="POST" action= "{{route('listing_book.store')}}" class="form-horizontal" enctype="multipart/form-data" id="note" >
                          @csrf
                          <input name="s_id" type="hidden" value=" {{ Auth::user()->id}} ">
                          <input name="product_type" type="hidden" value="2">

                          <h3>Note Info Section</h3>
                          <hr>
                          <!--Note Name-->
                          <div class="row">
                            <label class="col-sm-2 col-form-label text-center" for="name"><i class="fa fa-book" style="margin-left:-10px"></i> Note Name</label>
                            <div class="col-sm-7">
                              <div class="form-group label-floating has-success">
                                <input class="form-control" input type="text"  name="name" id="name" placeholder="Note Name"  />
                                <small class="form-text text-muted">
                                  Please write your Note's name. 
                                </small>
                              </div>
                            </div>
                          </div>

                          <!--Note Author-->
                          <div class="row">
                            <label class="col-sm-2 col-form-label text-center" for="author"><i class="fa fa-pencil"></i> Author's Name</label>
                            <div class="col-sm-7">
                              <div class="form-group label-floating has-success">
                                <input class="form-control" name="author" id="author"  type="text" placeholder="Author's Name"  />
                                <small class="form-text text-muted">
                                  Please write the name of the author of the Note. <i>e.g. You. </i>
                                </small>
                              </div>
                            </div>
                          </div>

                          <!--Year-->
                          <div class="row">
                            <label class="col-sm-2 col-form-label text-center" for="author"><i class="fa fa-calendar-plus-o"></i> Year</label>
                            <div class="col-sm-7">
                              <div class="form-group label-floating has-success">
                                <input class="form-control" name="year" id="year"  type="text" placeholder="Year"  />
                                <small class="form-text text-muted">
                                  Please write the year it was written. <i>e.g. 2020. </i>
                                </small>
                              </div>
                            </div>
                          </div>

                          <h3>More Note Info Section</h3>
                          <hr>

                          <!--Note Price-->
                          <div class="row">
                            <label class="col-sm-2 col-form-label text-center" for="price"><i class="fa fa-money"></i> Price</label>
                            <div class="col-sm-4">
                              <div class="form-group label-floating has-success">
                                <input class="form-control" name="price"  id="price" type="text" placeholder="Price in Nok "  />
                                <small class="form-text text-muted">
                                  Input the Price in Nok.
                                </small>
                              </div>
                            </div>
                            <div class="col-sm-4">
                              <label style="vertical-align:-20px; ">Nok</label>
                            </div>
                          </div>

                          <!--Note Description-->
                          <div class="row">
                            <label class="col-sm-2 col-form-label text-center" for="description"><i class="fa fa-info"></i> Product Info</label>
                            <div class="col-sm-10">
                              <div class="form-group label-floating has-success">
                                <textarea class="form-control" name="description" id="description" rows="5"  form="note" ></textarea>
                                <small class="form-text text-muted">
                                  Please describe about your note. <i>Such as: Content of the note, medium of the note: Soft Copy, Hard Copy, Photocopy, Original.</i>
                                </small>
                              </div>
                            </div>
                          </div>

                          <h3>Course Info Section</h3>
                          <hr>

                          <!--Course ID-->
                          <div class="row">
                            <label class="col-sm-2 col-form-label text-center" for="course_id"><i class="fa fa-text-width"></i> Course ID</label>
                            <div class="col-sm-4">
                              <div class="form-group label-floating has-success">
                                <input class="form-control" name="course_id" id="course_id" type="text" placeholder="Course ID "  />
                                <small class="form-text text-muted">
                                  Write your <i><b>Course ID</b></i> accordingly. <b><u>Do Not</u></b> put any space or character in between. It's very <b><u>important</u></b> to find out your book.
                                </small>
                              </div>
                            </div>
                          </div>
              
                          <!--Course Name-->
                          <div class="row">
                            <label class="col-sm-2 col-form-label text-center" for="course_name"><i class="fa fa-pencil-square-o"></i> Course Name</label>
                            <div class="col-sm-7">
                              <div class="form-group label-floating has-success">
                                <input class="form-control" name="course_name" id="course_name" type="text" placeholder="Course Name "  />
                                <small class="form-text text-muted">
                                  Write your <i><b>Course Name</b></i> accordingly. It's very <b><u>important</u></b> to find out your book.
                                </small>
                              </div>
                            </div>
                          </div>
                          <br>
                          <div class="row">
                            <label class="col-sm-2 col-form-label text-center"><i class="fa fa-picture-o"></i> Picture <small class="form-text text-muted">
                              Upload your book's picture.
                            </small></label>
                            <div class="col-sm-2">
                              <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                <div class="fileinput-new thumbnail">
                                  <img src="https://material-dashboard-pro-laravel.creative-tim.com/material/img/image_placeholder.jpg" alt="...">
                                </div>
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
                                  <img src="https://material-dashboard-pro-laravel.creative-tim.com/material/img/image_placeholder.jpg" alt="...">
                                </div>
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
                                  <img src="https://material-dashboard-pro-laravel.creative-tim.com/material/img/image_placeholder.jpg" alt="...">
                                </div>
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
                          <div class="col-sm-2"></div>
                          <div class="col-sm-2">
                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                              <div class="fileinput-new thumbnail">
                                <img src="https://material-dashboard-pro-laravel.creative-tim.com/material/img/image_placeholder.jpg" alt="...">
                              </div>
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
                                <img src="https://material-dashboard-pro-laravel.creative-tim.com/material/img/image_placeholder.jpg" alt="...">
                              </div>
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
                                <img src="https://material-dashboard-pro-laravel.creative-tim.com/material/img/image_placeholder.jpg" alt="...">
                              </div>
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
                        <button type="submit" value="Update" class="btn btn-info pull-right">Post It</button>
                        <div class="clearfix"></div>
                      </form>
                    </div>
                    </div>
                  </div>
                  @if(old('product_type')==3)
                    <div class="tab-pane active" id="Tutor">
                  @else 
                    <div class="tab-pane " id="Tutor">
                  @endif
                    <div class="row">
                      <div class="col-md-2"></div>
                      <div class="col-md-8">
                        <h2 class=" text-center"> <i class="material-icons"style="font-size: 30px">school</i> Enlist to be a Tutor</h2>
                        <form method="POST" action= "{{route('listing_book.store')}}" enctype="multipart/form-data" class="form-horizontal" id="tutor">
                          @csrf  
                          <input name="product_type" type="hidden" value="3">
                          <input name="s_id" type="hidden" value=" {{ Auth::user()->id}} ">
                          <h3>About You Info Section</h3>
                          <hr>

                          <!--Bio-->
                          <div class="row">
                            <label class="col-sm-2 col-form-label text-center" for="description"><i class="fa fa-user"></i> Your Bio</label>
                            <div class="col-sm-10">
                              <div class="form-group label-floating has-success">
                                <textarea class="form-control" name="description"  rows="5"   id="tutor" ></textarea>
                                <small class="form-text text-muted">
                                  Describe about yourself, your educational background. Write about your teaching procedure. The area you will be helping, <i>e.g. lecture, assignment, past exam paper, etc. </i>Why are you better at teaching this course? Maybe the grade that you obtained in this course.
                                </small>
                              </div>
                            </div>
                          </div>

                          <h3>Course Info Section</h3>
                          <hr>
                          <!--Course ID-->
                          <div class="row">
                            <label class="col-sm-2 col-form-label text-center" for="course_id"><i class="fa fa-text-width"></i> Course ID</label>
                            <div class="col-sm-7">
                              <div class="form-group label-floating has-success">
                                <input class="form-control" name="course_id" id="course_id"  type="text" placeholder="Course ID "  />
                                <small class="form-text text-muted">
                                  Write your <i><b>Course ID</b></i> accordingly. <b><u>Do Not</u></b> put any space or character in between. It's very <b><u>important</u></b> to find out your book.
                                </small>
                              </div>
                            </div>
                          </div>

                          <!--Course Name-->
                          <div class="row">
                            <label class="col-sm-2 col-form-label text-center" for="course_name"><i class="fa fa-pencil-square-o"></i> Course Name</label>
                            <div class="col-sm-7">
                              <div class="form-group label-floating has-success">
                                <input class="form-control" name="course_name" id="course_name"  type="text" placeholder="Course Name "  />
                                <small class="form-text text-muted">
                                  Write your <i><b>Course Name</b></i> accordingly. <b><u>Do Not</u></b> put any space or character in between. It's very <b><u>important</u></b> to find out your book.
                                </small>
                              </div>
                            </div>
                          </div>
                          <br><br>
                          
                          <!--Course Description-->
                          <div class="row">
                            <label class="col-sm-2 col-form-label text-center" for="course_description"><i class="fa fa-pencil-square"></i> Course Description</label>
                            <div class="col-sm-10">
                              <div class="form-group label-floating has-success">
                                <textarea class="form-control" name="course_description" id="course_description" rows="5" type="text" form="tutor"/></textarea>
                                <small class="form-text text-muted">
                                  Write about the <b>course content</b> in here and the contents you want to cover.
                                </small>
                              </div>
                            </div>
                          </div>

                          <h3>Hourly Rate Info Section</h3>
                          <hr>
                          <!--Hourly Rate-->
                          <div class="row">
                            <label class="col-sm-2 col-form-label text-center" for="price"><i class="fa fa-money"></i> Hourly Rate</label>
                            <div class="col-sm-7">
                              <div class="form-group label-floating has-success">
                                <input class="form-control" name="price"  id="price" type="text" placeholder="Price in Nok per Hour "  />
                                <small class="form-text text-muted">
                                  Write your <i><b>hourly rate</b></i> you are going to charge. 
                                </small>
                              </div>
                            </div>
                          </div>

                          <h3>Scedule Section</h3>
                          <hr>
                          <br>

                          <!--Schedule-->
                          <div class="row">
                            <label class="col-sm-2 col-form-label text-center" for="price"><i class="fa fa-calendar"></i>Availability</label>
                            <small class="form-text text-muted">Check the boxes of the time you are available to tutor.</small>
                            <table class="table">
                              <thead class="table-warning-bordered">
                                <tr style="margin-top:; text-align: center;">
                                  <th scope="col"> </th> <th scope="col">
                                    <h6> Morning </h6><small>06:00—12:00</small>
                                </th><th scope="col"><h6>Noon</h6><small>12:00—18:00</small></th><th scope="col"><h6>Evening</h6><small>18:00—24:00</small></th>
                                </tr>
                              </thead>
                              <tbody style="margin-top:; text-align: center;">
                                <tr>
                                  <th scope="row">Sun</th>
                                  <td style="vertical-align: sub;"><input class="form-check-input" type="checkbox" value="00" id="available"
                                  name="available[]"></td>
                                  <td style="vertical-align: sub;"><input class="form-check-input" type="checkbox" value="01" id="available"
                                  name="available[]"></td>
                                  <td style="vertical-align: sub;"><input class="form-check-input" type="checkbox" value="02" id="available"
                                  name="available[]"></td>
                                </tr>
                                <tr>
                                  <th scope="row">Mon</th>
                                  <td style="vertical-align: sub;"><input class="form-check-input" type="checkbox" value="10" id="available"
                                  name="available[]"></td>
                                  <td style="vertical-align: sub;"><input class="form-check-input" type="checkbox" value="11" id="available"
                                  name="available[]"></td>
                                  <td style="vertical-align: sub;"><input class="form-check-input" type="checkbox" value="12" id="available"
                                  name="available[]"></td>
                                </tr>
                                <tr>
                                  <th scope="row">Tue</th>
                                  <td style="vertical-align: sub;"><input class="form-check-input" type="checkbox" value="20" id="available"
                                  name="available[]"></td>
                                  <td style="vertical-align: sub;"><input class="form-check-input" type="checkbox" value="21" id="available"
                                  name="available[]"></td>
                                  <td style="vertical-align: sub;"><input class="form-check-input" type="checkbox" value="22" id="available"
                                  name="available[]"></td>
                                </tr>
                                <tr>
                                  <th scope="row">Wed</th>
                                  <td style="vertical-align: sub;"><input class="form-check-input" type="checkbox" value="30" id="available"
                                  name="available[]"></td>
                                  <td style="vertical-align: sub;"><input class="form-check-input" type="checkbox" value="31" id="available"
                                  name="available[]"></td>
                                  <td style="vertical-align: sub;"><input class="form-check-input" type="checkbox" value="32" id="available"
                                  name="available[]"></td>
                                </tr>
                                <tr>
                                  <th scope="row">Thu</th>
                                  <td style="vertical-align: sub;"><input class="form-check-input" type="checkbox" value="40" id="available"
                                  name="available[]"></td>
                                  <td style="vertical-align: sub;"><input class="form-check-input" type="checkbox" value="41" id="available"
                                  name="available[]"></td>
                                  <td style="vertical-align: sub;"><input class="form-check-input" type="checkbox" value="42" id="available"
                                  name="available[]"></td>
                                </tr>
                                <tr>
                                  <th scope="row">Fri</th>
                                  <td style="vertical-align: sub;"><input class="form-check-input" type="checkbox" value="50" id="available"
                                  name="available[]"></td>
                                  <td style="vertical-align: sub;"><input class="form-check-input" type="checkbox" value="51" id="available"
                                  name="available[]"></td>
                                  <td style="vertical-align: sub;"><input class="form-check-input" type="checkbox" value="52" id="available"
                                  name="available[]"></td>
                                </tr>
                                <tr>
                                  <th scope="row">Sat</th>
                                  <td style="vertical-align: sub;"><input class="form-check-input" type="checkbox" value="60" id="available"
                                  name="available[]"></td>
                                  <td style="vertical-align: sub;"><input class="form-check-input" type="checkbox" value="61" id="available"
                                  name="available[]"></td>
                                  <td style="vertical-align: sub;"><input class="form-check-input" type="checkbox" value="62" id="available"
                                  name="available[]"></td>
                                </tr>
                              </tbody >
                            </table>
                          </div>
                          
                          <input name="s_id" type="hidden" value=" {{ Auth::user()->id}} ">
                          <button type="submit" value="Update" class="btn btn-info pull-right">Post It</button>
                          <div class="clearfix"></div>
                        </form> 
                      </div>
                    </div>
                  </div> 
                
                  @if(old('house_type')==1 or old('house_type')==2)
                    <div class="tab-pane active" id="House">
                  @else 
                  <div class="tab-pane" id="House">
                  @endif
                      <div class="row">
                      <div class="col-md-4"></div>
                      <div class="col-md-6">
                        <ul class="nav nav-pills nav-pills-rose">
                          @if(old('house_type')==2)
                            <li class="nav-item"><a class="nav-link" href="#flatmate" data-toggle="tab"><span class="material-icons">king_bed</span>FlatMate</a></li>
                          @else 
                            <li class="nav-item"><a class="nav-link active " href="#flatmate" data-toggle="tab"><span class="material-icons">king_bed</span>FlatMate</a></li>
                          @endif

                          @if(old('house_type')==2)
                            <li class="nav-item"><a class="nav-link active" href="#buddyup" data-toggle="tab"><span class="material-icons">emoji_people</span>Buddy Up</a></li>
                          @else  
                            <li class="nav-item"><a class="nav-link" href="#buddyup" data-toggle="tab"><span class="material-icons">emoji_people</span>Buddy Up</a></li>
                          @endif
                          </ul>
                      </div>
                      <div class="col-md-3"></div>
                      <div class="col-md-8">
                        <div class="tab-content">
                          @if(old('house_type')==2)
                            <div class="tab-pane active " id="buddyup">  
                          @else 
                            <div class="tab-pane " id="buddyup">
                          @endif
                            <form method="POST" action= "{{route('listing_book.store')}}"  class="form-horizontal" id="buddyup">
                              @csrf  
                              <input name="house_type" type="hidden" value="2">
                              <input name="user_id" type="hidden" value=" {{ Auth::user()->id}} ">

                              <h2 class="text-center"> Buddy Up </h2>
                              <p class="text-center">This is where you post yourself and try to find a new buddy to hunt a new house/apartment together</p>
                              <h3>About You Section</h3>
                              <hr>
                              <div class="row">
                                <label style="display: inline;" class="col-sm-2 col-form-label" for="description"> <i class="material-icons">mood</i> Your Description</label>
                                <div class="col-sm-10">
                                  <div class="form-group label-floating has-success">
                                    <textarea class="form-control" name="describe_me" id="buddyup" rows="5" placeholder="Description About Yourself"></textarea> 
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <label class="col-sm-2 col-form-label" for="house_description"><span class="material-icons">location_city</span>Preferred Flat Description  </label>
                                <div class="col-sm-10">
                                  <div class="form-group label-floating has-success">
                                    <textarea class="form-control" name="house_description" id="buddyup" rows="5" placeholder="Description About the Preferred Accomodation"></textarea> 
                                  </div>
                                </div>
                              </div>
                              <h3>Budget Section</h3>
                              <hr>
                              <div class="row">
                                <label class="col-sm-2 col-form-label" for="budget"><span class="material-icons">attach_money</span>Preferred Rent</label>
                                <div class="col-sm-10">
                                  <div class="form-group label-floating has-success">
                                    <input class="form-control" name="rent" id="rent" placeholder=" NOK per Month">
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <label class="col-sm-2 col-form-label" for="bond"><span class="material-icons">assignment</span>Bond</label>
                                <div class="col-sm-10">
                                  <div class="form-group label-floating has-success">
                                    <input class="form-control" name="bond" id="bond" placeholder="No. of months">
                                  </div>
                                </div>
                              </div>
                              <h3>Buddy Section</h3>
                              <hr>
                              <div class="row">
                                <label class="col-sm-2 col-form-label" for="describe_others"><span class="material-icons">child_care</span>Preferred Mate  </label>
                                <div class="col-sm-10">
                                  <div class="form-group label-floating has-success">
                                    <textarea class="form-control" name="describe_others" id="buddyup" rows="5" placeholder="Description About the Preferred Buddy"></textarea> 
                                  </div>
                                </div>
                              </div>
                              <label for="preference" style="margin-left: ">Preference</label>
                              <hr>
                              <div class="row" >
                                <label class="col-sm-3 col-form-label text-center" for="room_type"><span class="material-icons">sentiment_very_satisfied</span>Preferred Gender
                                </label>
                                <div class="col-sm-2">
                                  <label class="radio-inline"><input type="radio" name="gender" value="Male" >Male </label>
                                </div>
                                <div class="col-sm-2">
                                  <label class="radio-inline"><input type="radio" name="gender" value="Female">Female</label>
                                </div>
                                <div class="col-sm-2">
                                  <label class="radio-inline"><input type="radio" name="gender" value="Any Gender">Any Gender</label>
                                </div>
                              </div>
                              <div class="row" style="margin-top:20px;">
                                <label class="form-check-label" style="margin-left:180px">
                                  <input class="form-check-input" name="smoking" type="checkbox" value="1"><span class="material-icons">smoking_rooms</span>
                                  Smoker Allowed
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                                <label class="form-check-label" style="margin-left: 30px">
                                  <input class="form-check-input" name ="pet" type="checkbox" value="1"><span class="material-icons">pets</span>
                                  Pet Allowed
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                                
                              </div>
                              <button type="submit" value="insert" class="btn btn-info pull-right">Post It</button>
                            </form>
                          </div>
                          @if(old('house_type') == 2)
                            <div class="tab-pane" id="flatmate">
                          @else
                            <div class="tab-pane active" id="flatmate">
                          @endif
                            <form method="POST" action= "{{route('listing_book.store')}}" enctype="multipart/form-data" class="form-horizontal" id="flatmate">
                              @csrf  
                              <input name="house_type" type="hidden" value="1">
                              <input name="user_id" type="hidden" value="{{ Auth::user()->id}}">

                              <h2 class="text-center"> Enlist the Room to Rent </h2>
                              <p class="text-center">This is where you enlist the room in your house/apartment to rent</p>

                                <h3>Title Section</h3>
                                <hr>
                                <div class="row">
                                  <label class="col-sm-2 col-form-label text-center" for="title"><span class="material-icons">title</span>Title</label>
                                  <div class="col-sm-10">
                                    <div class="form-group label-floating has-success">
                                      <input class="form-control" name="title" id="title"  type="text" placeholder="Title of your Ad"  />
                                      <small class="form-text text-muted">Insert Title of your Ad, max character 60. </small>
                                    </div>
                                  </div>
                                </div>


                                <h3>Room Section</h3>
                                <hr>

                                <!--No of mates-->
                                <div class="row">
                                  <label class="col-sm-2 col-form-label text-center" for="accomodate"><span class="material-icons">group</span>No. of Mates</label>
                                  <div class="col-sm-7">
                                    <div class="form-group label-floating has-success">
                                      <input class="form-control" name="accomodate" id="accomodate" type="text" placeholder="No. of Accomodate"  />
                                      <small class="form-text text-muted">Write down the number of flatmates in the house</small>
                                    </div>
                                  </div>
                                </div>

                                <!--Room Type-->
                                <div class="row">
                                  <label class="col-sm-3 col-form-label text-center" for="room_type"><span class="material-icons">meeting_room</span>Room Type<small class="form-text text-muted">Choose the right room type.</small>
                                  </label>
                                  <div class="col-sm-2">
                                    <label class="radio-inline"><input type="radio" name="room_type" value="1" >Furnished <small class="form-text text-muted"><i>The room with bed, table, wardrobe and others.</i></small></label>
                                  </div>
                                  <div class="col-sm-2">
                                    <label class="radio-inline"><input type="radio" name="room_type" value="2">Semi-Furnished <small class="form-text text-muted"><i>The room  with only bed.</i></small></label>
                                  </div>
                                  <div class="col-sm-2">
                                    <label class="radio-inline"><input type="radio" name="room_type" value="3">Unfurnished <small class="form-text text-muted"><i>The room which is barely empty.</i></small></label>
                                  </div>
                                </div>

                                <!--Bath Type-->
                                <div class="row">
                                  <label class="col-sm-3 col-form-label text-center" for= "bath_type"><span class="material-icons">bathtub</span>Bathroom Type <small class="form-text text-muted">Choose the right Bathrooom type.</small></label>
                                  <div class="col-sm-2" style="margin-top: 10px">
                                    <label class="radio-inline">
                                      <input type="radio" name="bath_type" value="1" >Private <small class="form-text text-muted"><i>The bathroom will only be used by the flatmate. </i></b></small>
                                    </label>
                                  </div>
                                  <div class="col-sm-2" style="margin-top: 10px">
                                    <label class="radio-inline">
                                      <input type="radio" name="bath_type" value="2">Shared <small><i>The bathroom will be used by more than one flatmate. </i></b></small>
                                    </label>
                                  </div>
                                </div>

                                <br><br>
                                <h3>Address Section</h3>
                                <hr>
                                
                                <!--Address-->
                                <div class="form-group label-floating has-success">
                                  <label for="address" class="text-center"><span class="material-icons">map</span>Address</label>
                                  <input type="text" class="form-control" name="address" id="address" placeholder="1234 Main St">
                                  <small> The address of the estate you want to rent out</small>
                                </div>

                                <!--City and PostCode-->
                                <div class="form-row form-group label-floating has-success">
                                  <div class="form-group col-md-6">
                                    <label for="city" class="text-center"> <span class="material-icons">emoji_transportation</span>City</label>
                                    <input type="text" class="form-control" name="city" id="city">
                                  </div>
                                  
                                  <div class="form-group label-floating has-success col-md-4 ml-auto">
                                    <label for="postcode" class="text-center"><span class="material-icons">location_on</span>PostCode</label>
                                    <input type="text" class="form-control" name="postcode" id="postcode">
                                  </div>
                                </div>

                                <h3>Rent Section</h3>
                                <hr>

                                <!--Rent and Bond-->
                                <div class="form-row form-group label-floating has-success">
                                  <div class="form-group col-md-7">
                                    <label for="rent" class="text-center"><span class="material-icons">attach_money</span>Rent</label>
                                    <input type="text" class="form-control" name="rent" id="rent" placeholder="Rent per Month">
                                    <small> The rent the new faltmate has to pay every month</small>
                                    <br>
                                    <div class="row">
                                      <label class="form-check-label">
                                          <input class="form-check-input" type="checkbox" name="internet" value="1" class="text-center"><i class="material-icons">signal_wifi_4_bar</i>Internet included
                                          <span class="form-check-sign"><span class="check"></span>
                                          </span>
                                      </label>
                                      <label class="form-check-label" style="margin-left: 30px">
                                          <input class="form-check-input" type="checkbox" name="electricity" value="1"><span class="material-icons">show_chart</span>Electricity included 
                                          <span class="form-check-sign">
                                            <span class="check"></span>
                                          </span>
                                      </label>
                                      <small> Check these boxes if internet or electricity is included in the rent</small>
                                    </div>
                                  </div>
                                  <div class="form-group label-floating has-success col-md-4 ml-auto">
                                    <label for="bond"><span class="material-icons">assignment</span>Bond</label>
                                    <input type="text" class="form-control" id="bond" name="bond" placeholder="No of Month">
                                    <small> The number of month's rent has to be payed upfront before moving in.</small>
                                  </div>
                                </div>

                                <h3>More Info Section</h3>
                                <hr>

                                <!--Your description-->
                                <div class="row">
                                  <label class="col-sm-2 col-form-label" for="description"><i class="material-icons">mood</i> Your Description</label>
                                  <div class="col-sm-10">
                                    <div class="form-group label-floating has-success">
                                      <textarea class="form-control" name="describe_me" id="flatmate" rows="5" placeholder="Description About Yourself/Other Flatmates/House"></textarea> 
                                      <small> Generally brief about your house. e.g. if the estate is newly built or if it's close to the school, grocerry store, etc. And summarize about the flatmates live there. e.g. Flatmates are friendly or quiet, etc.</small>
                                    </div>
                                  </div>
                                </div>
                                <br>

                                <!--Preferred Mate-->
                                <div class="row">
                                  <label class="col-sm-2 col-form-label" for="looking_for"><span class="material-icons">child_care</span>Preferred Mate  </label></label>
                                  <div class="col-sm-10">
                                    <div class="form-group label-floating has-success">
                                      <textarea class="form-control" name="describe_others" id="flatmate" rows="5" placeholder="Describer About the person you want to rent out. "></textarea> 
                                      <small> Briefly describe about the flatmate you are looking for.<b>e.g. <i>Neat and clean, Quiet, Music Lover, Pay rent on time, etc. </b></small>
                                    </div>
                                  </div>
                                </div>
                                <br>

                                <!--Preferrence-->
                                <label for="preference" style="font-style:normal;margin-left: ">Preference</label>
                                <hr>
                                <div class="row" style="font-style:normal" >
                                  <label class="col-sm-3 col-form-label text-center" for="room_type"><span class="material-icons">sentiment_very_satisfied</span>Preferred Gender
                                  </label>
                                  <div class="col-sm-2">
                                    <label class="radio-inline"><input type="radio" name="gender" value="Male" >Male </label>
                                  </div>
                                  <div class="col-sm-2">
                                    <label class="radio-inline"><input type="radio" name="gender" value="Female">Female</label>
                                  </div>
                                  <div class="col-sm-2">
                                    <label class="radio-inline"><input type="radio" name="gender" value="Any Gender">Any Gender</label>
                                  </div>
                                </div>
                                <div class="row" style="font-style:normal;margin-top:20px;">
                                  <label class="form-check-label" style="margin-left:180px">
                                    <input class="form-check-input" name="smoking" type="checkbox" value="1"><span class="material-icons">smoking_rooms</span>
                                    Smoker Allowed
                                    <span class="form-check-sign">
                                      <span class="check"></span>
                                    </span>
                                  </label>
                                  <label class="form-check-label" style="margin-left: 30px">
                                    <input class="form-check-input" name ="pet" type="checkbox" value="1"><span class="material-icons">pets</span>
                                    Pet Allowed
                                    <span class="form-check-sign">
                                      <span class="check"></span>
                                    </span>
                                  </label>
                                </div>

                                <h3>Picture Section</h3>
                                <hr>
                                <div class="row" style="font-style:normal">
                                  <label class="col-sm-2 col-form-label text-center"><i class="fa fa-picture-o"></i> Picture <small class="form-text text-muted">
                                    Upload the picture of the <b> room , kitchen, bathroom, living space, etc. </b>
                                  </small></label>
                                  
                                  <div class="col-sm-2">
                                    <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                      <div class="fileinput-new thumbnail">
                                        <img src="https://material-dashboard-pro-laravel.creative-tim.com/material/img/image_placeholder.jpg" alt="...">
                                      </div>
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
                                        <img src="https://material-dashboard-pro-laravel.creative-tim.com/material/img/image_placeholder.jpg" alt="...">
                                      </div>
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
                                        <img src="https://material-dashboard-pro-laravel.creative-tim.com/material/img/image_placeholder.jpg" alt="...">
                                      </div>
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
                                        <img src="https://material-dashboard-pro-laravel.creative-tim.com/material/img/image_placeholder.jpg" alt="...">
                                      </div>
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
                                        <img src="https://material-dashboard-pro-laravel.creative-tim.com/material/img/image_placeholder.jpg" alt="...">
                                      </div>
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
                                        <img src="https://material-dashboard-pro-laravel.creative-tim.com/material/img/image_placeholder.jpg" alt="...">
                                      </div>
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

                                <input name="user_id" type="hidden" value=" {{ Auth::user()->id}} ">
                                <button type="submit" value="Update" class="btn btn-info pull-right">Post It</button>
                                
                                <div class="clearfix"></div>
                              </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
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
                  <h6  style="font-style: normal; color:#28B463;display: inline-block"><strong> Verified Student  </strong></h6>
                </div>
                @endif
                <div class="card-body" style="font-style: normal;">
                  <div class="card-category text-gray" style="margin-top:-20px">
                    <h4 class="card-title"  >{{ Auth::user()->first_name }} {{ Auth::user()->last_name }} </h4>
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
        </div>
      </div>

    @else
    <script>
  
      
      window.location = "/login";
      alert('Successfully Updated');
    </script>
    @endif
    @endauth
    @guest
    <script>
      alert('Successfully Updated'); 
    window.location = "./login";
    
    </script>
    @endguest

  <!-- Forms Validations Plugin -->
  <script src="https://material-dashboard-pro-laravel.creative-tim.com/material/js/plugins/jquery.validate.min.js"></script>

  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="https://material-dashboard-pro-laravel.creative-tim.com/material/js/plugins/jasny-bootstrap.min.js"></script>
 
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
