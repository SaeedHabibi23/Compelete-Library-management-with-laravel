
@extends('layout.main')

@section('content')



 <main class="bmd-layout-content">

        <!-- Container Started -->
            <div class="container-fluid ">
              <!-- Row Started -->
                <div class="row">
                  <!-- Col of Row started -->
                    <div class="col-12 grid-margin">
                      <!-- Card Started -->
                      <div class="card mt-5">
                        <!-- Caed Body Started -->
                        <div class="card-body">   
                          <h4 class="card-title mt-3 mb-3">  صفحه کتگوری کتاب ها  </h4>
                          <div class="table-responsive">
                            <div class="row">
                                <button type="button" class="btn btn-lg btn-info mx-3" data-toggle="modal" data-target="#modelId">اضافه کردن کتگوری</button>
                              <!-- Modal -->
                              <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">اضافه کردن کتگوری کتاب   </h5><br>
                                                <button type="button" class="close text-danger" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                <!-- The Form of insert informayion started -->
                                <form action="AdminStoreCategoryBook" method="post" enctype="multipart/form-data">
                                  @csrf
                                  <!-- Modal Started -->
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
                                    <div class="col-lg-12 mb-2">
                                    @error('CategoryName')
                                            <span class="text-danger">{{$message}}</span>
                                      @enderror
                                      <label for="">  نام کتگوری  </label>
                                    <input type="text" class="form-control" name="CategoryName" 
                                    data-bs-toggle="tooltip" data-bs-placement="bottom" title=" این فیلد لازمی است ">
                                    </div>
                                    <div class="col-lg-12 mb-2">
                                    @error('CategoryDescription')
                                            <span class="text-danger">{{$message}}</span>
                                      @enderror
                                      <label for="">  توضیحات کتاب   </label>
                                      <textarea name="CategoryDescription" id="" class="form-control" cols="30" rows="5"
                                      data-bs-toggle="tooltip" data-bs-placement="bottom" title=" این فیلد لازمی نیست ">
                                      </textarea>
                                    </div>
                                    <div class="text-center mt-4 me-4">
                                    <input type="submit" class="form-control btn btn-success" value="اضافه کردن کتگوری">
                                    </div>
                                    </form>
                                    <!-- The Form of insert informayion finished -->
                                    </div>
                                    <!-- Modal Finished -->
                                </div>
                              </div>
                              <!--The Form of search informayion started --> 
                              <div class="col-4 mr-auto">
                                <input type="search" class="form-control" placeholder="جستجو کنید">
                              </div>
                              </div>
                              <!--The Form of search informayion finished -->
                              <!-- Table Started -->
                            <table class="table">
                              <!-- thead to shoe the header of table -->
                              <thead style="background: black;">
                                <tr class="text-center">
                                  <th> شماره </th>
                                  <th> نام کتگوری  </th>
                                  <th> توضیحات </th>
                                  <th> عمل </th>           
                                </tr>
                              </thead>
                              <!-- End thead -->
                              <tbody>
                              <?php $num=1;?>
                              <!-- For each  to give all of the information category -->
                                @foreach($categories as $category)
                                <tr class="text-center"> 
                                  <td>{{$num}}</td>
                                  <td>{{$category->CategoryName}}</td>
                                  <td>{{$category->CategoryDescription}}</td>
                              <!-- Started column for action -->
                               <td class="d-flex justify-content-center align-items-center" style="height:60px">
                              <!-- This Form is for delete any categor -->
                               <form action="delete-category/{{$category->cat_id}}" method="post"
                              onsubmit="return confirm('آیا مطمین هستید میخواهید پاک کنید')">
                                @method('delete')
                                @csrf
                                <button class="btn ml-3 mt-2">
                              <i class="fas fa-trash fa-lg text-danger"></i>
                              </button>
                              </form>
                              <!-- Finished For for delete category -->
                                <!-- This form is for update any category -->
                              <form action="edit-category/{{$category->cat_id}}" method="post">
                                      @csrf
                                      <button class="btn mt-2">
                                  <i class="fas fa-edit fa-lg text-success"></i>
                                  </button>
                                  </form>
                                  <!-- finished for for update any category -->
                                 </td>
                                 <!-- Finished column for action -->
                                </tr>
                                <?php $num++;?>
                                @endforeach
                                <!-- End foreach  -->
                              </tbody>
                            </table>
                            <!-- End of Table -->
                            <!-- To See the pages of paginition -->
                            {{$categories->links()}} 
                          </div>
                        </div>
                        <!-- Card Bode Finished -->
                      </div>
                      <!-- End of the card -->
                    </div>
                    <!-- Col of Row finished -->
                  </div>
                  <!-- Row Finished -->
            </div>
            <!-- Container Finished -->
        </main>
    </div>

    </div>


    @endsection