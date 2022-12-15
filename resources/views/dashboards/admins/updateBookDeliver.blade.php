
<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Nozha admin panel</title>
	<meta name="description" content="nozha admin panel fully support rtl with complete dark mode css to use. ">
	<meta name=”robots” content="index, follow">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicon/apple-touch-icon.png') }}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon/favicon-32x32.png') }}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon/favicon-16x16.png') }}">
	<link rel="manifest" href="{{ asset('img/favicon/site.webmanifest') }}">
	<link rel="mask-icon" href="{{ asset('img/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#2b5797">
	<meta name="theme-color" content="#ffffff">
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link href="{{ asset('css/fontawsome/all.min.css') }}" rel="stylesheet">
    <link rel="stylesheet"
        href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css"
        integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="{{ asset('DropdownSearch.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
    
</head>

<body class="rtl persianumber">

    <div class="bmd-layout-container bmd-drawer-f-l avam-container animated bmd-drawer-in">
        <header class="bmd-layout-header ">
            <div class="navbar navbar-light bg-faded animate__animated animate__fadeInDown">
                <button class="navbar-toggler animate__animated animate__wobble animate__delay-2s" type="button"
                    data-toggle="drawer" data-target="#dw-s1">
                    <span class="navbar-toggler-icon"></span>
                    <!-- <i class="material-Animation">menu</i> -->
                </button>
                <div class="text-center text-info">
                    <h3> کتابخانه مولانا علامه فیضانی </h3>
                  </div>
                <ul class="nav navbar-nav p-0">
                    
                    <li class="nav-item"> <img src="{{ asset('public/img/user-profile.jpg') }}" alt="..."
                            class="rounded-circle screen-user-profile"></li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <button class="btn  dropdown-toggle m-0" type="button" id="dropdownMenu4"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                محمد یونس محمد
                            </button>
                            <div aria-labelledby="dropdownMenu4"
                                class="dropdown-menu  pl-3 dropdown-menu-right dropdown-menu dropdown-menu-right"
                                aria-labelledby="dropdownMenu2">
                                <a class="dropdown-item" href="../change_profile"><i
                                        class="far fa-user c-main fa-sm mr-2"></i>تغیر پروفایل </a>
                                <button onclick="dark()" class="dropdown-item" type="button"><i
                                        class="fas fa-moon fa-sm c-main mr-2"></i>حالت شب</button>
                                        <a class="dropdown-item" href="../ChangePassword"><i
                                        class="fas fa-cog c-main fa-sm mr-2"></i> تغیر دادن رمز </a>
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();"><i
                                        class="fas fa-sign-out-alt c-main fa-sm mr-2"></i>خروج</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                            </div>
                        </div>
                    </li>




                </ul>
            </div>
        </header>









        






        <div id="dw-s1" class="bmd-layout-drawer bg-faded ">

<div class="container-fluid side-bar-container ">
    <header class="pb-0">
        <a class="navbar-brand ">
            <object class="side-logo" data=".././svg/logo-8.svg" type="image/svg+xml">
            </object>
        </a>
    </header>
    <li class="side a-collapse short m-2 pr-1 pl-1">
        <a href="dashboard" class="side-item selected c-dark "><i class="fas fa-language  mr-1"></i>خانه</a>
    </li>
    <ul class="side a-collapse ">
        <a class="ul-text  fnt-mxs" href="../CategoryPage"><i class="fas fa-plus mr-1"></i>  ثبت کتگوری</a>
    </ul>
    <ul class="side a-collapse ">
        <a class="ul-text  fnt-mxs" href="../Books"><i class="fas fa-book mr-1"></i> ثبت کتاب </a>
    </ul>
    <ul class="side a-collapse short ">
        <a class="ul-text  fnt-mxs" href="../giveDeliverBook"><i class="fas fa-book mr-1"></i>  امانت دهی کتاب  </a>
    </ul>
 
    
    <ul class="side a-collapse short ">
        <a class="ul-text  fnt-mxs" href="../deliveryBook"><i class="fas fa-book mr-1"></i> تحویل گیری کتاب </a>
    </ul>
    <ul class="side a-collapse short ">
        <a class="ul-text  fnt-mxs" href="../earningsandSepnts"><i class="fas fa-map mr-1"></i>اضافه کردن عواید سالانه</a>
    </ul>

    <ul class="side a-collapse short ">
        <a class="ul-text  fnt-mxs" href="../SeeearningsandSepnts"><i class="fas fa-map mr-1"></i>دیدن عواید سالانه</a>
    </ul>

    <ul class="side a-collapse short ">
        <a class="ul-text  fnt-mxs" href="../UsersLists"><i class="fas fa-users mr-1"></i> لیست کاربر ها </a>
    </ul>
</div>

</div>












<main class="bmd-layout-content">
            <div class="container-fluid">
               

            <div class="row d-flex justify-content-center mt-3">
                    <div class="col-8  grid-margin">
                   
                     <!-- general form elements -->
             <div class="bg-dark text-white d-flex mb-1">
                 <h4 class="ml-3"> فورم امانت دهی کتاب </h4>
             </div>
            <div class="card card-primary text-dark bg-white">
              <div class="card-header card-tools d-flex">
                
                <h3 class="card-title">  ثبت اطلاعات  </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
            
              <form action="{{route('admin.updateDeliverToPerson')}}" method="post">

              <input type="hidden" class="form-control" name="lending_id" 
              value="{{$data['lendingBooks']->lending_id}}">

              @csrf
                <div class="card-body row" id="demo">
               
           
                
                    <div class="col-lg-12">
                    @if(session('status'))
                        <div class="alert alert-success text-center" rol="alert">
                            {{session('status')}}
                        </div>
                    
                        @elseif(session('error'))
                        <div class="alert alert-danger text-center" rol="alert">
                            {{session('error')}}
                        </div>
                        @endif
                        </div>
               


                  <div class="col-lg-6">
                        @error('personName')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    <label for=""> نام امانت گیرنده </label>
                    <input type="text" class="form-control" readonly name="personName" value="{{$data['lendingBooks']->personName}}">
                  </div>
                  




                  <div class="col-lg-6 mb-3 mt-2">
               
                    <label for=""> نام  کتاب  </label>
                     <select name="book_id" id="databooks" style="width: 100%;">
                        
                     @foreach($data['books'] as $book)
                        <option @if($data['lendingBooks']->book_id == $book->book_id) selected @endif
                         value="{{$book->book_id}}"> {{$book->BookName}} </option>
                       @endforeach
                     </select>
                 </div>

                  <div class="col-lg-6">
                        @error('MountMoney')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    <label for="">  مقدار پولی که شخص امانت داده است  </label>
                    <input type="number" class="form-control" name="MountMoney" value="{{$data['lendingBooks']->MountMoney}}">
                  </div>

                  <div class="col-lg-6">
                        @error('date_lend')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    <label for="">  تاریخ امانت دهی  </label>
                    <input type="date" class="form-control" name="date_lend" value="{{$data['lendingBooks']->date_lend}}">
                  </div>

                  <div class="col-lg-6">
                        @error('date_delivery')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    <label for="">  تاریخ تحویل گیری  </label>
                    <input type="date" class="form-control" name="date_delivery" value="{{$data['lendingBooks']->date_delivery}}">
                  </div>

                  <div class="col-lg-12 mt-1">
                    <label for="">  توضیحات شخص  </label>
                     <textarea  class="form-control" name="lend_description" id="" cols="30" rows="4" readonly>
                     {{$data['lendingBooks']->lend_description}}
                     </textarea>
                  </div>


                 


                </div>
            
                    <div class="ml-4">
                      <input type="submit" class="btn btn-success" value="ذخیره اطلاعات">
                 
                </div>
                
            <!-- /.card -->

                    </div>
                    </form>
                    </div>
















            </div>
        </main>
    </div>

    </div>


























    
    
    <script src="{{ asset('js/screiptSearch.js') }}"></script>
    <script src="{{ asset('js/vendor/modernizr.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="{{ asset("js/vendor/jquery-3.2.1.min.js") }}"><\/script>')
    </script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js"
        integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js"
        integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script src="{{ asset('js/persianumber.min.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.13/js/jquery.min.js"></script>

    <script type="text/javascript">
        $("#databooks").select2({
        
        });
    </script>

    
    
    <script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
    
    
    <script>
        $(document).ready(function () {
            $('body').bootstrapMaterialDesign();
            $('.persianumber').persiaNumber();

        });
    </script>
    <script>
        ! function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (!d.getElementById(id)) {
                js = d.createElement(s);
                js.id = id;
                js.src = 'https://weatherwidget.io/js/widget.min.js';
                fjs.parentNode.insertBefore(js, fjs);
            }
        }(document, 'script', 'weatherwidget-io-js');
    </script>
    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>