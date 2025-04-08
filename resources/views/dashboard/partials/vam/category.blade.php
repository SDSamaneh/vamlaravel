<section class="py-4">
      <div class="container">
            <div class="row pb-4">
                  <div class="col-12">
                        <div class=" d-sm-flex justify-content-sm-center mb-3 mt-3 align-items-center">
                              <h1 class="mb-2 mb-sm-0 h3">دسته بندی
                                    <span class="badge bg-primary bg-opacity-10 text-primary">{{$categoryCount}}</span>
                              </h1>
                        </div>
                  </div>
            </div>
            <div class="row pb-4 bg-light p-3 mb-4 rounded">
                  <div class="col-md-12">
                        <div class="card border">
                              <div class="card-body">
                                    <form action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
                                          @csrf
                                          <div class="row">
                                                <div class="col-sm-12 col-md-6">
                                                      <label for="" class="form-label">نام دسته بندی</label>
                                                      <input type="text" name="name" class="form-control" value="">
                                                      @error('name')
                                                      <small class="mt-2 d-inline-block text-danger">{{$message}}</small>
                                                      @enderror
                                                </div>
                                                <div class="col-sm-12 col-md-6">
                                                      <label for="" class="form-label">نامک</label>
                                                      <input type="text" name="slug" class="form-control" value="">
                                                      @error('slug')

                                                      <small class="mt-2 d-inline-block text-danger">{{$message}}</small>
                                                      @enderror

                                                </div>
                                                <div class="col-sm-12 col-md-6">
                                                      <label for="" class="form-label">توضیحات</label>
                                                      <textarea name="description" id="" class="form-control"></textarea>
                                                </div>
                                                <div class="col-sm-12 text-end">
                                                      <button class="btn btn-success" type="submit">ثبت</button>
                                                </div>
                                          </div>
                                    </form>
                              </div>
                        </div>
                  </div>
            </div>

            <div class="row g-4">
                  @if($categories)
                  @foreach($categories as $category)
                  <div class="col-md-6 col-xl-4">
                        <!-- Category item START -->
                        <div class="card border h-100">
                              <!-- Card header -->
                              <div class="card-header border-bottom p-3">
                                    <div class="d-flex align-items-center justify-content-between">

                                          <h4 class=" mb-0 ms-3 flex-grow-1">{{$category->name}}</h4>
                                          <div class="d-flex justify-align-content-between align-items-center">
                                                <a href="{{route('category.edit',$category->id)}}" class="text-success mb-0 me-2"><i class="fas fa-edit"></i></a>

                                                <form action="{{route('category.destroy',$category->id)}}" method="post">
                                                      @csrf
                                                      @method('DELETE')
                                                      <button type="submit" class="border-0 bg-transparent"><i class="fas fa-times-circle text-danger"></i></button>

                                                </form>
                                          </div>
                                    </div>
                              </div>

                              <!-- Card body START -->
                              <div class="card-body p-3">
                                    <p>{{$category->description}}</p>
                              </div>
                              <!-- Card body END -->
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