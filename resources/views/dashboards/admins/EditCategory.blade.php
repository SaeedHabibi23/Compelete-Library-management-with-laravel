

@extends('layout.main')

@section('content')


<main class="bmd-layout-content">
    <!-- Container Started -->
    <div class="container-fluid">
       <div class="row d-flex justify-content-center mt-3">
            <div class="col-8  grid-margin">
             <!-- general form elements -->
             <div class="bg-dark text-white d-flex mb-1">
                 <h4 class="ml-3">فورم تغیر آوردن برای یک کتگوری</h4>
             </div>
            <div class="card card-primary text-dark bg-white">
              <div class="card-header card-tools d-flex">
                
                <h3 class="card-title">  ثبت اطلاعات  </h3>
              </div>
              <!-- /.card-header -->
                  
            <!-- Started form to change the information -->
              <form action="{{route('admin.UpdateAnyOtherCategory')}}" method="post" enctype="multipart/form-data">            
              <input type="hidden" class="form-control" name="cat_id" value="{{$category->cat_id}}">
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
                  <div class="col-lg-12">
                        @error('CategoryName')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    <label for=""> نام کتگوری </label>
                    <input type="text" class="form-control" name="CategoryName" value="{{$category->CategoryName}}">
                  </div>
                  <div class="col-lg-12">
                        @error('CategoryDescription')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    <label for=""> توضیحات کتگوری </label>
                    <input type="text" class="form-control" name="CategoryDescription" value="{{$category->CategoryDescription}}">        
                  </div>
                </div>
                    <div class="ml-4">
                      <input type="submit" class="btn btn-success" value="ذخیره کردن تغیرات">
                </div>  
            <!-- /.card -->
                </div>
                </form>
                <!-- Finish form of changing information -->
                </div>
            </div>
            <!-- Container Finished -->
        </main>
    </div>

    </div>

@endsection