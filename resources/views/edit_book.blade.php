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
       <a href= "/home"> <img class="navbar-brand" style="height:70px; width: 220px; margin-left:5px;" src="{{asset('img/logopng1.png')}}"> </a>
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
        
        <!--Book Edit Start -->
        @if($book->product_type == 1)
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
          <h2 class="text-center text-rose"><i class="material-icons" style="font-size: 35px">menu_book</i> Book Ad ID: {{$book->id}} </h2>
          <p class="text-center"><b><u>Edit your Post and Re-Post It</u></b></p>
          <div class="row">
            <div class="col-md-12 text-left">
              <a href="/allpost" class="btn btn-sm btn-rose">Back</a>
            </div>
          </div>
          <form method="POST" action= "{{route('listing_book.update',$book->id)}}" class="form-horizontal" enctype="multipart/form-data" id="list">
            @csrf  
            @method('PUT')
            <h3>Book Info Section</h3>
            <hr>

            <!--Book Name-->
            <div class="row">
              <label class="col-sm-2 col-form-label text-center" for="name" ><i class="fa fa-book" style="margin-left:-10px"></i> Book Name</label>
              <div class="col-sm-7">
                <div class="form-group label-floating has-success">
                  <input class="form-control" input type="text" value="{{$book->name}}" name="name" id="name" placeholder="Book Name"  />
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
                  <input class="form-control" name="author" id="author" value="{{$book->author}}" type="text" placeholder="Author's Name"  />
                  <small id="passwordHelpBlock" class="form-text text-muted">
                    Please type the Author's name. If there are more than one author, then write their name with space. 
                  </small>
                </div>
              </div>
            </div>
            
            <!--Edition-->
            <div class="row">
              <label class="col-sm-2 col-form-label text-center" for="edition"> <i class="fa fa-pencil-square-o"></i> Edition</label>
              <div class="col-sm-4">
                <div class="form-group label-floating has-success">
                  <input class="form-control" name="edition" value="{{$book->edition}}" id="edition" type="text" placeholder="Edition "  />
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
                  <input class="form-control" name="isbn" value="{{$book->isbn}}" id="isbn" type="text" placeholder="ISBN "  />
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
                  <input class="form-control" name="price" value="{{$book->price}}" id="price" type="text" placeholder="Price in Nok "  />
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
                      @if ($book->b_type == 1)
                      <input type="radio" value="1" name="b_type" checked>
                      @else
                      <input type="radio" value="1" name="b_type">
                      @endif
                      TextBook <small class="form-text text-muted">
                        Select if the book is course required book.
                      </small>
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      @if ($book->b_type == 2)
                      <input type="radio" value="2" name="b_type" checked>
                      @else
                      <input type="radio" value="2" name="b_type">
                      @endif
                      Supplementary Book<small class="form-text text-muted">
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
                  <textarea class="form-control" name="description" id="description" rows="5"  placeholder="{{$book->description}}" form="list" ></textarea>
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
                  <input class="form-control" name="course_id" id="course_id" value="{{$book->course_id}}" type="text" placeholder="Course ID "  />
                  <small class="form-text text-muted">
                    Write your <i><b>Course ID</b></i> accordingly. It's very <b><u>important</u></b> to find out your book.
                  </small>
                </div>
              </div>
            </div>

            <!--Course Name-->
            <div class="row">
              <label class="col-sm-2 col-form-label text-center" for="course_name"><i class="fa fa-pencil-square-o"></i> Course Name</label>
              <div class="col-sm-7">
                <div class="form-group label-floating has-success">
                  <input class="form-control" name="course_name" id="course_name" value="{{$book->course_name}}" type="text" placeholder="Course Name "  />
                  <small class="form-text text-muted">
                    Write your <i><b>Course Name</b></i> accordingly. It's very <b><u>important</u></b> to find out your book.
                  </small>
                </div>
              </div>
            </div>

            <h3>Book Picture Section</h3>
            <hr>
            <!--Picture-->
            <div class="row">
              <label class="col-sm-2 col-form-label text-center"><i class="fa fa-picture-o"></i> Picture <small class="form-text text-muted">
                Upload your book's picture.
              </small></label>
              
              <div class="col-sm-2">
                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                  <input class="form-check-input" type="checkbox" value="1" id="delete_img_1"
                  name="delete_img_1">
                  <label class="form-check-label" for="delete_img_1">
                    Delete
                  </label>
                  <div class="fileinput-new thumbnail">
                    @if ($book->image_1 != null)
                    <img src="{{asset('storage/'. $book->image_1)}}" alt="...">
                    @else
                    <img src="{{ asset('img/no image.png') }}" alt="...">
                    @endif
                  </div>
                  <div class="fileinput-preview fileinput-exists thumbnail"></div>
                  <div>
                    <span class="btn btn-rose btn-file">
                      <span class="fileinput-new">Select image</span>
                      <span class="fileinput-exists">Change</span>
                      <input type="file" name="image_1" id = "input-picture" />
                      
                    </span>
                      <a href="#pablo" class="btn btn-danger fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                  </div>
                </div>
              </div>

              <div class="col-sm-2"></div>
              <div class="col-sm-2">
                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                  <input class="form-check-input" type="checkbox" value="1" id="delete_img_2"
                  name="delete_img_2">
                  <label class="form-check-label" for="delete_img_2">
                    Delete
                  </label>
                  <div class="fileinput-new thumbnail">
                    @if ($book->image_2 != null)
                    <img src="{{asset('storage/'. $book->image_2)}}" alt="...">
                    @else
                    <img src="{{ asset('img/no image.png') }}" alt="...">
                    @endif
                  </div>
                  <div class="fileinput-preview fileinput-exists thumbnail"></div>
                  <div>
                    <span class="btn btn-rose btn-file">
                      <span class="fileinput-new">Select image</span>
                      <span class="fileinput-exists">Change</span>
                        <input type="file" name="image_2" id = "input-picture" />
                      </span>
                      <a class="btn btn-danger fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                  </div>
                </div>
              </div>

              <div class="col-sm-2"></div>
              <div class="col-sm-2">
                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                  <input class="form-check-input" type="checkbox" value="1" id="delete_img_3"
                  name="delete_img_3">
                  <label class="form-check-label" for="delete_img_3">
                    Delete
                  </label>
                  <div class="fileinput-new thumbnail">
                    @if ($book->image_3 != null)
                    <img src="{{asset('storage/'. $book->image_3)}}" alt="...">
                    @else
                    <img src="{{ asset('img/no image.png') }}" alt="...">
                    @endif
                  </div>
                  <div class="fileinput-preview fileinput-exists thumbnail"></div>
                  <div>
                    <span class="btn btn-rose btn-file">
                      <span class="fileinput-new">Select image</span>
                      <span class="fileinput-exists">Change</span>
                      <input type="file" name="image_3" id = "input-picture" />
                    
                    </span>
                      <a href="#pablo" class="btn btn-danger fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                  </div>
                </div>
              </div>
            </div>

            <!--Picture-->
            <div class="row">
              <label class="col-sm-2 col-form-label"></label>
              <div class="col-sm-2">
                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                  <input class="form-check-input" type="checkbox" value="1" id="delete_img_4"
                  name="delete_img_4">
                  <label class="form-check-label" for="delete_img_4">Delete</label>
                  <div class="fileinput-new thumbnail">
                    @if ($book->image_4 != null)
                    <img src="{{asset('storage/'. $book->image_4)}}" alt="...">
                    @else
                    <img src="{{ asset('img/no image.png') }}" alt="...">
                    @endif
                  </div>
                  <div class="fileinput-preview fileinput-exists thumbnail"></div>
                  <div>
                    <span class="btn btn-rose btn-file">
                      <span class="fileinput-new">Select image</span>
                      <span class="fileinput-exists">Change</span>
                      <input type="file" name="image_4" id = "input-picture" />
                    </span>
                    <a href="#pablo" class="btn btn-danger fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                  </div>
                </div>
              </div>

              <div class="col-sm-2"></div>
              <div class="col-sm-2">
                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                  <input class="form-check-input" type="checkbox" value="1" id="delete_img_5"
                  name="delete_img_5">
                  <label class="form-check-label" for="delete_img_5">
                    Delete
                  </label>
                  <div class="fileinput-new thumbnail">
                    @if ($book->image_5 != null)
                    <img src="{{asset('storage/'. $book->image_5)}}" alt="...">
                    @else
                    <img src="{{ asset('img/no image.png') }}" alt="...">
                    @endif
                  </div>
                  <div class="fileinput-preview fileinput-exists thumbnail"></div>
                  <div>
                    <span class="btn btn-rose btn-file">
                      <span class="fileinput-new">Select image</span>
                      <span class="fileinput-exists">Change</span>
                      <input type="file" name="image_5" id = "input-picture" />
                    </span>
                    <a href="#pablo" class="btn btn-danger fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                  </div>
                </div>
              </div>

              <div class="col-sm-2"></div>
              <div class="col-sm-2">
                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                  <input class="form-check-input" type="checkbox" value="1" id="delete_img_6"
                  name="delete_img_6">
                  <label class="form-check-label" for="delete_img_6">
                    Delete
                  </label>
                  <div class="fileinput-new thumbnail">
                    @if ($book->image_6 != null)
                    <img src="{{asset('storage/'. $book->image_6)}}" alt="...">
                    @else
                    <img src="{{ asset('img/no image.png') }}" alt="...">
                    @endif
                  </div>
                  <div class="fileinput-preview fileinput-exists thumbnail"></div>
                  <div>
                    <span class="btn btn-rose btn-file">
                      <span class="fileinput-new">Select image</span>
                      <span class="fileinput-exists">Change</span>
                      <input type="file" name="image_6" id = "input-picture" />
                    </span>
                    <a href="#pablo" class="btn btn-danger fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                </div>
                </div>
              </div>
            </div>
            
            <button type="submit" value="Update" class="btn btn-success pull-right">Post To Update It</button>
            <div class="clearfix"></div>
          </form>
        </div>
          @endif
        
        <!--Book Edit Finish -->

        <!--Note Edit Start -->
        @if ($book->product_type == 2)
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
          <h2 class="text-center text-success"> <span style="font-size: 30px" class="material-icons">note_add</span>Note Ad ID: {{$book->id}} </h2>
          <p class="text-center"><b><u>Edit your Post and Re-Post It</u></b></p>
          <div class="row">
            <div class="col-md-12 text-left">
              <a href="/allpost" class="btn btn-sm btn-rose">Back</a>
            </div>
          </div>
          <div class="card-body">
            <form method="POST" action= "{{route('listing_book.update',$book->id)}}" class="form-horizontal" enctype="multipart/form-data" id="list">
              @csrf  
              @method('PUT')

              <h3>Note Info Section</h3>
              <hr>

              <!--Note Name-->
              <div class="row">
                <label class="col-sm-2 col-form-label text-center" for="name"><i class="fa fa-book" style="margin-left:-10px"></i> Note Name</label>
                <div class="col-sm-7">
                  <div class="form-group label-floating has-success">
                    <input class="form-control" input type="text" value="{{$book->name}}" name="name" id="name" placeholder="Book Name"  />
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
                    <input class="form-control" name="author" id="author" value="{{$book->author}}" type="text" placeholder="Author's Name"  />
                    <small class="form-text text-muted">
                      Please write the name of the author of the Note. <i>e.g. You. </i>
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
                    <input class="form-control" name="price" value="{{$book->price}}" id="price" type="text" placeholder="Price in Nok "  />
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
                    <textarea class="form-control" name="description" id="description" rows="5"  placeholder="{{$book->description}}" form="list" ></textarea>
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
                    <input class="form-control" name="course_id" id="course_id" value="{{$book->course_id}}" type="text" placeholder="Course ID "  />
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
                    <input class="form-control" name="course_name" id="course_name" value="{{$book->course_name}}" type="text" placeholder="Course Name "  />
                    <small class="form-text text-muted">
                      Write your <i><b>Course Name</b></i> accordingly. It's very <b><u>important</u></b> to find out your book.
                    </small>
                  </div>
                </div>
              </div>
              <br><br>

              <!--Note Picture-->
              <div class="row">
                <label class="col-sm-2 col-form-label text-center"><i class="fa fa-picture-o"></i> Picture <small class="form-text text-muted">
                  Upload your book's picture.
                </small></label>
                <div class="col-sm-2">
                  <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                    <input class="form-check-input" type="checkbox" value="1" id="delete_img_1"
                    name="delete_img_1">
                    <label class="form-check-label" for="delete_img_1">
                      Delete
                    </label>
                    <div class="fileinput-new thumbnail">
                      @if ($book->image_1 != null)
                      <img src="{{asset('storage/'. $book->image_1)}}" alt="...">
                      @else
                      <img src="{{ asset('img/no image.png') }}" alt="...">
                      @endif
                    </div>
                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                    <div>
                      <span class="btn btn-rose btn-file">
                        <span class="fileinput-new">Select image</span>
                        <span class="fileinput-exists">Change</span>
                        <input type="file" name="image_1" id = "input-picture" />
                        
                      </span>
                        <a href="#pablo" class="btn btn-danger fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                    </div>
                  </div>
                </div>

                <div class="col-sm-1"></div>
                <div class="col-sm-2">
                  <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                    <input class="form-check-input" type="checkbox" value="1" id="delete_img_2"
                    name="delete_img_2">
                    <label class="form-check-label" for="delete_img_2">
                      Delete
                    </label>
                    <div class="fileinput-new thumbnail">
                      @if ($book->image_2 != null)
                      <img src="{{asset('storage/'. $book->image_2)}}" alt="...">
                      @else
                      <img src="{{ asset('img/no image.png') }}" alt="...">
                      @endif
                    </div>
                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                    <div>
                      <span class="btn btn-rose btn-file">
                        <span class="fileinput-new">Select image</span>
                        <span class="fileinput-exists">Change</span>
                        <input type="file" name="image_2" id = "input-picture" />
                        
                      </span>
                        <a class="btn btn-danger fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                    </div>
                  </div>
                </div>

                <div class="col-sm-1"></div>
                <div class="col-sm-2">
                  <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                    <input class="form-check-input" type="checkbox" value="1" id="delete_img_3"
                    name="delete_img_3">
                    <label class="form-check-label" for="delete_img_3">
                      Delete
                    </label>
                    <div class="fileinput-new thumbnail">
                      @if ($book->image_3 != null)
                      <img src="{{asset('storage/'. $book->image_3)}}" alt="...">
                      @else
                      <img src="{{ asset('img/no image.png') }}" alt="...">
                      @endif
                    </div>
                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                    <div>
                      <span class="btn btn-rose btn-file">
                        <span class="fileinput-new">Select image</span>
                        <span class="fileinput-exists">Change</span>
                        <input type="file" name="image_3" id = "input-picture" />
                      
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
                    <input class="form-check-input" type="checkbox" value="1" id="delete_img_4"
                    name="delete_img_4">
                    <label class="form-check-label" for="delete_img_4">
                      Delete
                    </label>
                    <div class="fileinput-new thumbnail">
                      @if ($book->image_4 != null)
                      <img src="{{asset('storage/'. $book->image_4)}}" alt="...">
                      @else
                      <img src="{{ asset('img/no image.png') }}" alt="...">
                      @endif
                    </div>
                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                    <div>
                      <span class="btn btn-rose btn-file">
                        <span class="fileinput-new">Select image</span>
                        <span class="fileinput-exists">Change</span>
                        <input type="file" name="image_4" id = "input-picture" />
                        
                      </span>
                        <a href="#pablo" class="btn btn-danger fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                    </div>
                  </div>
                </div>

                <div class="col-sm-1"></div>
                <div class="col-sm-2">
                  <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                    <input class="form-check-input" type="checkbox" value="1" id="delete_img_5"
                    name="delete_img_5">
                    <label class="form-check-label" for="delete_img_5">
                      Delete
                    </label>
                    <div class="fileinput-new thumbnail">
                      @if ($book->image_5 != null)
                      <img src="{{asset('storage/'. $book->image_5)}}" alt="...">
                      @else
                      <img src="{{ asset('img/no image.png') }}" alt="...">
                      @endif
                    </div>
                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                    <div>
                      <span class="btn btn-rose btn-file">
                        <span class="fileinput-new">Select image</span>
                        <span class="fileinput-exists">Change</span>
                        <input type="file" name="image_5" id = "input-picture" />
                        
                      </span>
                        <a href="#pablo" class="btn btn-danger fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                    </div>
                  </div>
                </div>

                <div class="col-sm-1"></div>
                <div class="col-sm-2">
                  <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                    <input class="form-check-input" type="checkbox" value="1" id="delete_img_6"
                    name="delete_img_6">
                    <label class="form-check-label" for="delete_img_6">
                      Delete
                    </label>
                    <div class="fileinput-new thumbnail">
                      @if ($book->image_6 != null)
                      <img src="{{asset('storage/'. $book->image_6)}}" alt="...">
                      @else
                      <img src="{{ asset('img/no image.png') }}" alt="...">
                      @endif
                    </div>
                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                    <div>
                      <span class="btn btn-rose btn-file">
                        <span class="fileinput-new">Select image</span>
                        <span class="fileinput-exists">Change</span>
                        <input type="file" name="image_6" id = "input-picture" />
                        
                      </span>
                        <a href="#pablo" class="btn btn-danger fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                    </div>
                  </div>
                </div>
              </div>
              <button type="submit" value="Update" class="btn btn-success pull-right">Post To Update It</button>
              <div class="clearfix"></div>
            </form>
          </div>
        </div>

        @endif
      
        <!--Note Edit Finish -->

        <!--Tutor Edit Start -->
        @if ($book->product_type == 3)
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
          <h2 class="text-center text-warning"> <i style="font-size: 30px"  class="fa fa-graduation-cap"></i>Tutor Ad ID: {{$book->id}} </h2>
          <p class="text-center"><b><u>Edit your Post and Re-Post It</u></b></p>
          <div class="row">
            <div class="col-md-12 text-left">
              <a href="/allpost" class="btn btn-sm btn-rose">Back</a>
            </div>
          </div>
          <form method="POST" action= "{{route('listing_book.update',$book->id)}}" class="form-horizontal"  id="list">
            @csrf  
            @method('PUT')

            <h3>About You Info Section</h3>
            <hr>

            <!--Bio-->
            <div class="row">
              <label class="col-sm-2 col-form-label text-center" for="description"><i class="fa fa-user"></i> Your Bio</label>
              <div class="col-sm-10">
                <div class="form-group label-floating has-success">
                  <textarea class="form-control" name="description" id="description" rows="5"  placeholder="{{$book->description}}" form="list" ></textarea>
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
                  <input class="form-control" name="course_id" id="course_id" value="{{$book->course_id}}" type="text" placeholder="Course ID "  />
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
                  <input class="form-control" name="course_name" id="course_name" value="{{$book->course_name}}" type="text" placeholder="Course Name "  />
                  <small class="form-text text-muted">
                    Write your <i><b>Course Name</b></i> accordingly. <b><u>Do Not</u></b> put any space or character in between. It's very <b><u>important</u></b> to find out your book.
                  </small>
                </div>
              </div>
            </div>
            <br><br>
            
            <!--Course Description-->
            <div class="row">
              <label class="col-sm-2 col-form-label text-center" for="price"><i class="fa fa-pencil-square"></i> Course Description</label>
              <div class="col-sm-10">
                <div class="form-group label-floating has-success">
                  <textarea class="form-control" name="course_description" placeholder="{{$book->course_description}}"  id="course_description" rows="5" type="text" form="list"/></textarea>
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
                  <input class="form-control" name="price" value="{{$book->price}}" id="price" type="text" placeholder="Price in Nok per Hour "  />
                  <small class="form-text text-muted">
                    Write your <i><b>hourly rate</b></i> you are going to charge. 
                  </small>
                </div>
              </div>
            </div>

            <h3>Scedule Section</h3>
            <hr>
            <!--Availability-->
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
                    @if(strpos ($book->available,'00') !== false )
                      <td style="vertical-align: sub;"><input class="form-check-input" type="checkbox" value="00" id="available"
                    name="available[]" checked></td>
                    @else
                    <td style="vertical-align: sub;"><input class="form-check-input" type="checkbox" value="00" id="available"
                      name="available[]"></td>
                    @endif

                    @if(strpos ($book->available,'01') !== false )
                      <td style="vertical-align: sub;"><input class="form-check-input" type="checkbox" value="01" id="available"
                    name="available[]" checked></td>
                    @else
                    <td style="vertical-align: sub;"><input class="form-check-input" type="checkbox" value="01" id="available"
                      name="available[]"></td>
                    @endif

                    @if(strpos ($book->available,'02') !== false )
                      <td style="vertical-align: sub;"><input class="form-check-input" type="checkbox" value="02" id="available"
                    name="available[]" checked></td>
                    @else
                    <td style="vertical-align: sub;"><input class="form-check-input" type="checkbox" value="02" id="available"
                      name="available[]"></td>
                    @endif
                  </tr>
                  <tr>
                    <th scope="row">Mon</th>
                       @if(strpos ($book->available,'10') !== false )
                      <td style="vertical-align: sub;"><input class="form-check-input" type="checkbox" value="10" id="available"
                    name="available[]" checked></td>
                    @else
                    <td style="vertical-align: sub;"><input class="form-check-input" type="checkbox" value="10" id="available"
                      name="available[]"></td>
                    @endif

                    @if(strpos ($book->available,'11') !== false )
                      <td style="vertical-align: sub;"><input class="form-check-input" type="checkbox" value="11" id="available"
                    name="available[]" checked></td>
                    @else
                    <td style="vertical-align: sub;"><input class="form-check-input" type="checkbox" value="11" id="available"
                      name="available[]"></td>
                    @endif

                    @if(strpos ($book->available,'12') !== false )
                      <td style="vertical-align: sub;"><input class="form-check-input" type="checkbox" value="12" id="available"
                    name="available[]" checked></td>
                    @else
                    <td style="vertical-align: sub;"><input class="form-check-input" type="checkbox" value="12" id="available"
                      name="available[]"></td>
                    @endif
                  </tr>
                  <tr>
                    <th scope="row">Tue</th>
                    @if(strpos ($book->available,'20') !== false )
                    <td style="vertical-align: sub;"><input class="form-check-input" type="checkbox" value="20" id="available"
                    name="available[]" checked></td>
                    @else
                    <td style="vertical-align: sub;"><input class="form-check-input" type="checkbox" value="20" id="available"
                      name="available[]"></td>
                    @endif

                    @if(strpos ($book->available,'21') !== false )
                      <td style="vertical-align: sub;"><input class="form-check-input" type="checkbox" value="21" id="available"
                    name="available[]" checked></td>
                    @else
                    <td style="vertical-align: sub;"><input class="form-check-input" type="checkbox" value="21" id="available"
                      name="available[]"></td>
                    @endif

                    @if(strpos ($book->available,'22') !== false )
                      <td style="vertical-align: sub;"><input class="form-check-input" type="checkbox" value="22" id="available"
                    name="available[]" checked></td>
                    @else
                    <td style="vertical-align: sub;"><input class="form-check-input" type="checkbox" value="22" id="available"
                      name="available[]"></td>
                    @endif
                  </tr>
                  <tr>
                    <th scope="row">Wed</th>
                    @if(strpos ($book->available,'30') !== false )
                    <td style="vertical-align: sub;"><input class="form-check-input" type="checkbox" value="30" id="available"
                  name="available[]" checked></td>
                  @else
                  <td style="vertical-align: sub;"><input class="form-check-input" type="checkbox" value="30" id="available"
                    name="available[]"></td>
                  @endif

                  @if(strpos ($book->available,'31') !== false )
                    <td style="vertical-align: sub;"><input class="form-check-input" type="checkbox" value="31" id="available"
                  name="available[]" checked></td>
                  @else
                  <td style="vertical-align: sub;"><input class="form-check-input" type="checkbox" value="31" id="available"
                    name="available[]"></td>
                  @endif

                  @if(strpos ($book->available,'32') !== false )
                    <td style="vertical-align: sub;"><input class="form-check-input" type="checkbox" value="32" id="available"
                  name="available[]" checked></td>
                  @else
                  <td style="vertical-align: sub;"><input class="form-check-input" type="checkbox" value="32" id="available"
                    name="available[]"></td>
                  @endif
                  </tr>
                  <tr>
                    <th scope="row">Thu</th>
                    @if(strpos ($book->available,'40') !== false )
                    <td style="vertical-align: sub;"><input class="form-check-input" type="checkbox" value="40" id="available"
                  name="available[]" checked></td>
                  @else
                  <td style="vertical-align: sub;"><input class="form-check-input" type="checkbox" value="40" id="available"
                    name="available[]"></td>
                  @endif

                  @if(strpos ($book->available,'41') !== false )
                    <td style="vertical-align: sub;"><input class="form-check-input" type="checkbox" value="41" id="available"
                  name="available[]" checked></td>
                  @else
                  <td style="vertical-align: sub;"><input class="form-check-input" type="checkbox" value="41" id="available"
                    name="available[]"></td>
                  @endif

                  @if(strpos ($book->available,'42') !== false )
                    <td style="vertical-align: sub;"><input class="form-check-input" type="checkbox" value="42" id="available"
                  name="available[]" checked></td>
                  @else
                  <td style="vertical-align: sub;"><input class="form-check-input" type="checkbox" value="42" id="available"
                    name="available[]"></td>
                  @endif
                  </tr>
                  <tr>
                    <th scope="row">Fri</th>
                    @if(strpos ($book->available,'50') !== false )
                    <td style="vertical-align: sub;"><input class="form-check-input" type="checkbox" value="50" id="available"
                  name="available[]" checked></td>
                  @else
                  <td style="vertical-align: sub;"><input class="form-check-input" type="checkbox" value="50" id="available"
                    name="available[]"></td>
                  @endif

                  @if(strpos ($book->available,'51') !== false )
                    <td style="vertical-align: sub;"><input class="form-check-input" type="checkbox" value="51" id="available"
                  name="available[]" checked></td>
                  @else
                  <td style="vertical-align: sub;"><input class="form-check-input" type="checkbox" value="51" id="available"
                    name="available[]"></td>
                  @endif

                  @if(strpos ($book->available,'52') !== false )
                    <td style="vertical-align: sub;"><input class="form-check-input" type="checkbox" value="52" id="available"
                  name="available[]" checked></td>
                  @else
                  <td style="vertical-align: sub;"><input class="form-check-input" type="checkbox" value="52" id="available"
                    name="available[]"></td>
                  @endif
                  </tr>
                  <tr>
                    <th scope="row">Sat</th>
                    @if(strpos ($book->available,'60') !== false )
                    <td style="vertical-align: sub;"><input class="form-check-input" type="checkbox" value="60" id="available"
                  name="available[]" checked></td>
                  @else
                  <td style="vertical-align: sub;"><input class="form-check-input" type="checkbox" value="60" id="available"
                    name="available[]"></td>
                  @endif

                  @if(strpos ($book->available,'61') !== false )
                    <td style="vertical-align: sub;"><input class="form-check-input" type="checkbox" value="61" id="available"
                  name="available[]" checked></td>
                  @else
                  <td style="vertical-align: sub;"><input class="form-check-input" type="checkbox" value="61" id="available"
                    name="available[]"></td>
                  @endif

                  @if(strpos ($book->available,'62') !== false )
                    <td style="vertical-align: sub;"><input class="form-check-input" type="checkbox" value="62" id="available"
                  name="available[]" checked></td>
                  @else
                  <td style="vertical-align: sub;"><input class="form-check-input" type="checkbox" value="62" id="available"
                    name="available[]"></td>
                  @endif
                  </tr>
                </tbody >
              </table>
            </div>

            <br><br>
            <button type="submit" value="Update" class="btn btn-success pull-right">Post To Update It</button>
            <div class="clearfix"></div>
          </form>
        </div>
        @endif
        
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
                <div class="row" style="margin-left: 120px;" >
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
