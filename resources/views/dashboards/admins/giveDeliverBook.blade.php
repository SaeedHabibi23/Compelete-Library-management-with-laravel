
@extends('layout.main')

@section('content')



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
              
            
              <form action="giveDeliverToPerson" method="post">
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
                    <input type="text" class="form-control" name="personName" placeholder="مثلا یونس"
                    data-bs-toggle="tooltip" data-bs-placement="bottom" title=" این فیلد لازمی است ">
                  </div>
                  




                  <div class="col-lg-6 mb-3 mt-2">
               
                    <label for=""> نام  کتاب  </label>
                     <select name="book_id" id="databooks" style="width: 100%;">
                        
                     @foreach($data['books'] as $book)
                        <option value="{{$book->book_id}}"> {{$book->BookName}} </option>
                       @endforeach
                     </select>
                 </div>

                  <div class="col-lg-6">
                        @error('MountMoney')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    <label for="">  مقدار پولی که شخص امانت داده است  </label>
                    <input type="number" class="form-control" name="MountMoney" placeholder="مثلا 500"
                    data-bs-toggle="tooltip" data-bs-placement="bottom" title=" این فیلد لازمی است ">
                  </div>

                  <div class="col-lg-6">
                        @error('date_lend')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    <label for="">  تاریخ امانت دهی  </label>
                    <input type="date" class="form-control" name="date_lend"
                    data-bs-toggle="tooltip" data-bs-placement="bottom" title=" این فیلد لازمی است ">
                  </div>

                  <div class="col-lg-6">
                        @error('date_delivery')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    <label for="">  تاریخ تحویل گیری  </label>
                    <input type="date" class="form-control" name="date_delivery" >
                  </div>

                  <div class="col-lg-12 mt-1">
                    <label for="">  توضیحات شخص  </label>
                     <textarea class="form-control" placeholder=" مثلا این شخص محصل بر حال پوهنتون هرات در فاکولته انجنیری است " 
                     name="lend_description" id="" cols="30" rows="4"
                     data-bs-toggle="tooltip" data-bs-placement="bottom" title=" این فیلد لازمی نیست "></textarea>
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


    @endsection