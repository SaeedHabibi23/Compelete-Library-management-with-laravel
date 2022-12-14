
@extends('layout.main')

@section('content')



 <main class="bmd-layout-content">
            <div class="container-fluid ">
                <div class="row">
                    <div class="col-12 grid-margin">
                      <div class="card mt-5">
                        <div class="card-body">
                          <h4 class="card-title mt-3 mb-3">  صفحه  کتاب ها  </h4>

                          
                          <div class="table-responsive">
                            <div class="row">
                           
                               <div class="col-lg-12 row">
                               <form action="search" type="get" >
                                    @csrf 
                               
                              <div class="col-lg-12 row mb-4">     
                                    
                                    <div class="col-lg-3">
                                    
                                      <label for=""> نام کتاب </label>
                                      <input type="text" class="form-control" name="searchFromName" type="search" >
                                     
                                    </div>
                                    
                                    <div class="col-lg-3">
                                      <label for=""> نام نویسنده </label>
                                      <input type="text" class="form-control" name="searchFromWritter">
                                    </div>
                                    <div class="col-lg-3">
                                    <label for=""> نام مترجم </label>
                                      <input type="text" class="form-control" name="searchFromtranslator">
                                    </div>
                                    <div class="col-lg-3" style="margin-top:1.8rem;">
                                  
                                    <button type="submit" class="btn btn-success">
                                                جستجو کنید
                                      </button>
                                    </div>
                                    </form>
                                    </div>
                                    
                                  
                              </div>
                              <a href="exportIntoExcel" class="btn btn-info col-lg-2  justify-content-center mb-2"> پشتیبانی گرفتن </a>

                                <button type="button" class="btn btn-lg btn-info mx-3" data-toggle="modal" data-target="#modelId">اضافه کردن کتاب</button>
                              <!-- Modal -->
                              <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">اضافه کردن  کتاب   </h5><br>
                                            
                                                <button type="button" class="close text-danger" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                        </div>
                                        <form action="AdminStoreBook" method="post" enctype="multipart/form-data">
                                          @csrf
                                        <div class="modal-body col-lg-12 mx-auto row">
                                        <div class="col-lg-12 mb-2">
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
                                             <div class="col-lg-4 mb-2">
                                              <label for="">  نام کتاب  </label>
                                            <input type="text" class="form-control" name="BookName" placeholder="مثلا سیرت"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom" title=" این فیلد لازمی است ">
                                            </div>


                                            
                                            <div class="col-lg-4 mb-2">
                                          
                                              <label for=""> نام کتگوری  </label>
                                            <select name="cat_id" id="databooks" style="width:100%;">
                                              @foreach($data['categories'] as $category)
                                              <option value="{{$category->cat_id}}">{{$category->CategoryName}}</option>
                                              @endforeach
                                            </select>
                                            </div>




                                            <div class="col-lg-4 mb-2">
                                            @error('NOPage')
                                                    <span class="text-danger">{{$message}}</span>
                                              @enderror
                                              <label for="">  تعداد صفحات  </label>
                                            <input type="number" class="form-control" name="NOPage" placeholder="مثلا 120"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom" title=" این فیلد لازمی است " required>
                                            </div>

                                            <div class="col-lg-4 mb-2">
                                            @error('BookLanguage')
                                                    <span class="text-danger">{{$message}}</span>
                                              @enderror
                                              <label for="">  زبان کتاب   </label>
                                            <input type="text" class="form-control" name="BookLanguage" placeholder="مثلا فارسی"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom" title=" این فیلد لازمی است ">
                                            </div>



                                            <div class="col-lg-4 mb-2">
                                            @error('Author1')
                                                    <span class="text-danger">{{$message}}</span>
                                              @enderror
                                              <label for="">  نویسنده اول  </label>
                                            <input type="text" class="form-control" name="Author1" placeholder="مثلا سعید"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom" title=" این فیلد لازمی است ">
                                            </div>



                                            <div class="col-lg-4 mb-2">
                                            @error('Author2')
                                                    <span class="text-danger">{{$message}}</span>
                                              @enderror
                                              <label for=""> نویسنده دوم </label>
                                            <input type="text" class="form-control" name="Author2" placeholder="مثلا امیر"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom" title=" این فیلد لازمی نیست ">
                                            </div>



                                            <div class="col-lg-4 mb-2">
                                            @error('Author3')
                                                    <span class="text-danger">{{$message}}</span>
                                              @enderror
                                              <label for=""> نویسنده سوم </label>
                                            <input type="text" class="form-control" name="Author3" placeholder="مثلا رامز"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom" title=" این فیلد لازمی نیست ">
                                            </div>

                                            <div class="col-lg-4 mb-2">
                                            @error('BookQuantity')
                                                    <span class="text-danger">{{$message}}</span>
                                              @enderror
                                              <label for=""> مقدار کتاب </label>
                                            <input type="number" class="form-control" name="BookQuantity" placeholder="مثلا 10"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom" title=" این فیلد لازمی است ">
                                            </div>


                                            <div class="col-lg-4 mb-2">
                                            @error('Jeld')
                                                    <span class="text-danger">{{$message}}</span>
                                              @enderror
                                              <label for="">جلد</label>
                                            <input type="number" class="form-control" name="Jeld" placeholder="مثلا 1"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom" title=" این فیلد لازمی نیست ">
                                            </div>


                                            <div class="col-lg-4 mb-2">
                                            @error('Print_Year')
                                                    <span class="text-danger">{{$message}}</span>
                                              @enderror
                                              <label for=""> سال چاپ </label>
                                            <input type="number" class="form-control" name="Print_Year" placeholder="مثلا 1390"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom" title=" این فیلد لازمی نیست ">
                                            </div>
                                            
                                            

                                            <div class="col-lg-4 mb-2">
                                            @error('BookTranslator')
                                                    <span class="text-danger">{{$message}}</span>
                                              @enderror
                                              <label for="">  ترجمان کتاب   </label>
                                            <input type="text" class="form-control" name="BookTranslator" placeholder="مثلا احسان"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom" title=" این فیلد لازمی نیست ">
                                            </div>


                                            <div class="col-lg-4 mb-2">
                                            @error('BookPlace')
                                                    <span class="text-danger">{{$message}}</span>
                                              @enderror
                                              <label for=""> موقعیت کتاب  </label>
                                            <input type="text" class="form-control" name="BookPlace" placeholder="مثلا Ab"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom" title=" این فیلد لازمی است ">
                                            </div>
                                            


                                            <div class="col-lg-4 mb-2">
                                            @error('BookNumberAsPlace')
                                                    <span class="text-danger">{{$message}}</span>
                                              @enderror
                                              <label for="">   شماره کتاب  </label>
                                            <input type="text" class="form-control" name="BookNumberAsPlace" placeholder="مثلا A12"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom" title=" این فیلد لازمی است " required>
                                            </div>

                                            <div class="text-center mt-4 me-4">
                                            <input type="submit" class="form-control btn btn-success" value="اضافه کردن کتاب">
                                            </div>
                                            </form>
                                    </div>
                                </div>
                              </div>
                              <div class="col-4 mr-auto">
                                <input type="search" class="form-control" placeholder="جستجو کنید">
                              </div>
                              </div>
                            <table class="table">
                              <thead style="background: black;">
                                <tr class="text-center">
                                  <th> شماره </th>
                                  
                                  <th> نام کتاب </th>
                                  <th> نام کتگوری  </th>
                                  <th> نویسنده ها </th>
                                  <th>  سال چاپ  </th>
                                  <th>  زبان  </th>
                                  <th>  تعداد صفحات  </th>
                                  <th>   ترجمان کتاب  </th>
                                  <th>  موقعیت کتاب  </th>
                                  <th>   عمل   </th>
                                  
                                </tr>
                              </thead>
                              <tbody>
                              <?php $num=1;?>
                                @foreach($data['books'] as $book)
                                <tr class="text-center">
                                
                                  <td>{{$num}}</td>
                                                   
                                  
                                
                                  <td>{{$book->BookName}}</td>
                                  <td>{{$book->CategoryName}}</td>
                                  <td>{{$book->Author1}}</td>
                                  <td>{{$book->Print_Year}}</td>
                                  <td>{{$book->BookLanguage}}</td>
                                  <td>{{$book->NOPage}}</td>
                                  <td>{{$book->BookTranslator}}</td>
                                  <td>{{$book->BookPlace}}  , {{$book->BookNumberAsPlace}}</td>
                                 
                              
                                  
                                 
                               
                                  <td class="d-flex justify-content-center align-items-center" style="height:60px">
                      
                                     
                                      <form action="delete-book/{{$book->book_id}}" method="post"
                                      onsubmit="return confirm('آیا مطمین هستید میخواهید پاک کنید')">
                                        @method('delete')
                                        @csrf
                                        <button class="btn ml-3 mt-2">
                                      <i class="fas fa-trash fa-lg text-danger"></i>
                                      </button>
                                      </form>

                                 

                                  <form action="edit-book/{{$book->book_id}}" method="post">
                                          @csrf
                                          <button class="btn mt-2">
                                      <i class="fas fa-edit fa-lg text-success"></i>
                                      </button>
                                      </form>
                                    
                              
                                  </td>
                                </tr>
                                <?php $num++;?>
                                @endforeach
                              </tbody>
                            </table>
                            {{$data['books']->links()}}
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