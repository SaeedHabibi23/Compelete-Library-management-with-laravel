@extends('layout.main')

@section('content')


<main class="bmd-layout-content">
            <div class="container-fluid" style="position:relative;">

                <!-- content -->
                <!-- breadcrumb -->

                <div class="row  m-1 pb-4 mb-3 ">
                    <div class="col-xs-12  col-sm-12  col-md-12  col-lg-12 p-2">
                        <div class="page-header breadcrumb-header ">
                            <div class="row align-items-end ">
                                <div class="col-lg-8">
                                    <div class="page-header-title text-left-rtl">
                                        <div class="d-inline">
                                            <h3 class="lite-text ">داشبورد</h3>
                                            <span class="lite-text ">گزارش ها و آمار</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <ol class="breadcrumb float-sm-right">
                                        <li class="breadcrumb-item "><a href="#"><i class="fas fa-home"></i></a></li>
                                        <li class="breadcrumb-item active">داشبورد</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             
                <!-- widget -->
                <div class="row m-1 mb-2">
                    <div class="col-xl-3 col-md-6 col-sm-6 p-2">
                        <div class="box-card text-right mini animate__animated animate__flipInY"><i
                                class="fas fa-plus b-first" aria-hidden="true"></i>
                            <span class="mb-1 c-first"> تعداد کتگوری های موجود. </span>
                            <span>2</span>
                            <p class="mt-3 mb-1 text-right"><i class="fas fa-plus mr-1 c-first"></i>  
                            </p>
                        </div>
                    </div>
                        <div class="col-xl-3 col-md-6 col-sm-6 p-2">
                            <div class="box-card text-right mini animate__animated animate__flipInY"><i
                                    class="fas fa-book b-first" aria-hidden="true"></i>
                                <span class="mb-1 c-first">  تعداد کتاب های موجود </span>
                                <span>4</span>
                                <p class="mt-3 mb-1 text-right"><i class="fas fa-book mr-1 c-first"></i>  
                                </p>
                            </div>
                        </div>
                    <div class="col-xl-3 col-md-6 col-sm-6 p-2">
                        <div class="box-card text-right mini animate__animated animate__flipInY    "><i
                                class="fab far fa-clock b-second" aria-hidden="true"></i>
                            <span class="mb-1 c-second"> کتاب های قرض داده شده  </span>
                            <span>5</span>
                            <p class="mt-3 mb-1 text-right"><i class="fas fa-clock mr-1 c-second"></i>
                            </p>
                        </div>
                    </div>



                    <div class="col-xl-3 col-md-6 col-sm-6 p-2">
                        <div class="box-card text-right mini animate__animated animate__flipInY    "><i
                                class="fas fa-users b-second" aria-hidden="true"></i>
                            <span class="mb-1 c-second"> تعداد کاربران </span>
                            <span>6</span>
                            <p class="mt-3 mb-1 text-right"><i class="fas fa-users mr-1 c-second"></i>
                            </p>
                        </div>
                    </div>
                   
                  
                 



                </div>
            


                <div class="container" style="position:absolute; bottom:0;">
                <div class="row">
                    <div class="col-lg-12 bg-dark text-white mx-auto text-center">
                       Developed By &copy; Arta Coding <br>
                       Number Telephone : 0791526826
                    </div>
                </div>
            </div>



            </div>
          
        </main>


    </div>

    </div>


@endsection