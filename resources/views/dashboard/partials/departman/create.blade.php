<section class="py-4">
      <div class="container">
            <div class="row pb-4">
                  <div class="col-12">
                        <h1 class="mb-0 h3">افزودن دپارتمان</h1>
                  </div>
            </div>

            <div class="row pb-4 bg-light p-3 mb-4 rounded">
                  <div class="col-md-12">
                        <div class="card border">
                              <div class="card-body">
                                    <form action="{{route('departman.store')}}" method="post" enctype="multipart/form-data">
                                          @csrf
                                          <div class="row">
                                                <div class="col-md-6">
                                                      <div class="mb-3">
                                                            <label class="form-label">عنوان</label>
                                                            <input name="name" type="text" class="form-control" value="">
                                                            @error('name')
                                                            <small class="mt-2 d-inline-block text-danger">{{$message}}</small>
                                                            @enderror
                                                      </div>
                                                </div>

                                                <div class="col-sm-12">
                                                      <button class="btn btn-success" type="submit">ثبت درخواست</button>
                                                </div>
                                          </div>
                                    </form>
                              </div>
                        </div>
                  </div>
            </div>
            <div class="row g-4">
                  @if($departmans)

                  @foreach($departmans as $departman)
                  <div class="col-md-6 col-xl-4">
                        <!-- Category item START -->
                        <div class="card border h-100">
                              <!-- Card header -->
                              <div class="card-header border-bottom p-3">
                                    <div class="d-flex align-items-center justify-content-between">

                                          <h4 class=" mb-0 ms-3 flex-grow-1">{{$departman->name}}</h4>
                                          <div class="d-flex justify-align-content-between align-items-center">
                                                <a href="{{route('departman.edit',$departman->id)}}" class="text-success mb-0 me-2"><i class="fas fa-edit"></i></a>

                                                <form action="{{route('departman.destroy',$departman->id)}}" method="post">
                                                      @csrf
                                                      @method('DELETE')
                                                      <button type="submit" class="border-0 bg-transparent"><i class="fas fa-times-circle text-danger"></i></button>

                                                </form>
                                          </div>
                                    </div>
                              </div>


                        </div>
                        <!-- Category item END -->
                  </div>
                  @endforeach
                  @else
                  <div class="alert alert-info">
                        تا این لحظه دسته بندی ثبت نشده است !
                  </div>
                  @endif
            </div>

      </div>
</section>