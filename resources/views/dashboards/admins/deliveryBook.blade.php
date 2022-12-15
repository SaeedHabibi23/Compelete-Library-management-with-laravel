
@extends('layout.main')

@section('content')



 <main class="bmd-layout-content">
            <div class="container-fluid ">
             
                <h3 class="text-center text-danger"> به تعداد {{$lendingBooks->count()}} کتاب به قرض داده شده است </h3>
                <div class="d-flex mb-2">
                     
                       <form action="findPersonWhoGivesTheBookDonnotBack" method="get" class="d-flex">
                         <input type="search" name="namePersondontgivebook" style="width:280px; height:40px; border-radius:10px; outline:none;" required placeholder="  نام شخص  ">
                          <button type="submit" style="height:40px; margin-top:28px;" class="btn btn-info ml-3 align-items-center"> جستجو کنید </button>
                        </form>
                      
                          <a href="exportIntoExcelMoney" style="height:40px; margin-top:28px;" class="btn btn-info align-items-center mr-auto"> پشتیبانی گرفتن </a>

                          </div>
         

            <div class="row mt-4">
              @foreach($lendingBooks as $lendingBook)
               <div class="col-lg-4 col-md-6 grid-margin mb-3">
                     <!-- general form elements -->
             <div class="bg-dark text-white d-flex mb-1 p-2">
                 <h5> تاریخ تحویل کتاب </h5>
                 <h4 class="ml-2"> {{$lendingBook->date_delivery}}</h4>
             </div>
            <div class="card card-primary text-dark bg-white">
              <div class="card-header card-tools d-flex">
                
                <p style="font-size:bold;" class="card-title">نام کتاب : {{$lendingBook->BookName}} </p>
                <button class="mr-auto btn btn-tool" data-widget="chat-pane-toggle">  <i class="fas fa-minus"></i> </button>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
            
                <div class="card-body" id="demo">
                  
                  <div class="d-flex">
                    <h5> نام شخص: </h5>
                    <h5 class="ml-3"> {{$lendingBook->personName}} </h5>
                  </div>
                  <div class="d-flex">
                    <h5> پول پرداختی </h5>
                    <h5 class="ml-3"> {{$lendingBook->MountMoney}} افغانی</h5>
                  </div>
                  <div class="mt-3">
                    <table class="" border="1px" style="width: 100%;">
                      <tr>
                        <td style="width: 50%;"> <h6>  تاریخ امانت دهی  </h6> </td>
                        <td style="width: 50%;"> <h6>  تاریخ تحویل گیری  </h6> </td>  
                      </tr>
                    </table>
                  </div>
                  <div class="mt-2">
                    <table class="" border="1px" style="width: 100%;">
                      <tr>
                      <td style="width: 50%;"> <h5> {{$lendingBook->date_lend}} </h5></td>
                      <td style="width: 50%;"> <h5> {{$lendingBook->date_delivery}} </h5></td> 
                      </tr>
                    </table>
                  </div>
                  <div class="mt-2">
                    <h6> توضیحات : </h6>
                    <h6 class="ml-2"> {{$lendingBook->lend_description}}  </h6>
                  </div>
                </div>
                <div class="card-fotter d-flex" id="demo">
                    <div>
                      <form action="role-update/{{$lendingBook->lending_id}}" method="post"
                      onsubmit="return confirm('آیا مطمِن هستید کتاب تحویل داده شده است')">
            
                         @csrf
                    
                      <button type="submit" class="btn btn-success ml-3"> تحویل گیری </button>
                      </form>
                    </div>
                  <div>
                  <form action="role-updateLending/{{$lendingBook->lending_id}}" method="post"
                    >
            
                         @csrf
                    
                      <button type="submit" class="btn btn-warning ml-3">  بدیل کتاب  </button>
                      </form>
                      
                  </div>
                </div>
            <!-- /.card -->

                    </div>
                    </div>
                    @endforeach
                    




            </div>
            <div class="mt-2">
            {{$lendingBooks->links()}}
            </div>
            <div class="container-fluid ">
                <div class="row">
                    <div class="col-12 grid-margin">
                      <div class="card mt-5">
                        <div class="card-body">
                          <h4 class="card-title mt-3 mb-3">  لیست کتاب های آورده شده  </h4>
                          
                          <div class="table-responsive">
                            <div class="row">
                             
                              <div class="col-6 ml-auto">
                                <form action="findPersonWhoGivesTheBook" method="get">
                                <input type="search" name="namePerson" style="width:70%; height:37px; border-radius:10px; outline:none;" required placeholder="  نام شخص  ">
                                    <button class="btn btn-success" style="width:23%;"  type="submit"> جستجو کنید </button>
                                </form>
                              </div>
                              </div>
                            <table class="table">
                              <thead style="background: black;">
                                <tr class="text-center">
                                  <th> شماره </th>
                                  <th> نام شخص  </th>
                                  <th> نام کتاب </th>
                                  <th> مقدار پول </th>
                                  <th> تاریخ بردن کتاب </th>
                                  <th> تاریخ رسید کتاب </th>
                                  <th>  مشخصات شخص    </th>
                                  <th> عمل </th>
                                  
                                </tr>
                              </thead>
                              <tbody>
                              <?php $num=1;?>
                                @foreach($lendingBooksTable as $lendingBooksTab)
                                <tr class="text-center">                           
                                  <td>{{$num}}</td>
                                  <td>{{$lendingBooksTab->personName}}</td>
                                  <td>{{$lendingBooksTab->BookName}}</td>
                                  <td>{{$lendingBooksTab->MountMoney}}</td>
                                  <td>{{$lendingBooksTab->date_lend}}</td>
                                  <td>{{$lendingBooksTab->date_delivery}}</td>
                                  <td>{{$lendingBooksTab->lend_description}}</td>
                                  <td> 
                                  <form action="delete-lending/{{$lendingBooksTab->lending_id }}" method="post"
                                    onsubmit="return confirm('آیا مطمین هستید میخواهید پاک کنید')">
                                      @method('delete')
                                      @csrf
                                      <button class="btn ml-3 mt-2">
                                    <i class="fas fa-trash fa-lg text-danger"></i>
                                    </button>
                                    </form>  
                                  </td>
                                </tr>
                                @endforeach
                              </tbody>
                            </table>
                            {{$lendingBooksTable->links()}}
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </main>
    </div>

    </div>


    @endsection