<section class="py-4">
      <div class="container">
            <div class="row pb-4">
                  <div class="col-12 border rounded-3">
                        <!-- Title -->
                        <div class="d-sm-flex justify-content-sm-center mb-3 mt-3 align-items-center">
                              <h1 class="mb-2 mb-sm-0 h3">دسته بندی ها <span class="badge bg-primary bg-opacity-10 text-primary">07</span></h1>
                        </div>
                        <!-- Blog list table START -->
                        <div class="card bg-transparent ">
                              <!-- Card body START -->
                              <div class="card-body p-3">
                                    <!-- Search and select START -->
                                    <div class="row g-3 align-items-center justify-content-between mb-3">
                                          <!-- Search -->
                                          <div class="col-md-6">
                                                <form class="rounded position-relative">
                                                      <input class="form-control pe-5 bg-transparent" type="search" placeholder="جستجو" aria-label="Search">
                                                      <button class="btn bg-transparent border-0 px-2 py-0 position-absolute top-50 end-0 translate-middle-y" type="submit"><i class="fas fa-search fs-6 "></i></button>
                                                </form>
                                          </div>
                                    </div>
                                    <!-- Search and select END -->
                              </div>
                        </div>
                        <!-- Blog list table END -->
                  </div>



            </div>
            <div class="row pb-4 bg-light p-3 mb-4 rounded">
                  <form action="{{route('categoryNews.index')}}" method="post">
                        @csrf
                        <div class="row">
                              <div class="col-sm-12 col-md-4">
                                    <label for="" class="form-label">نام دسته بندی</label>
                                    <input type="text" name="name" class="form-control" value="">
                                    @error('name')
                                    <small class="mt-2 d-inline-block text-danger">{{$message}}</small>
                                    @enderror
                              </div>
                              <div class="col-sm-12 col-md-4">
                                    <label for="" class="form-label">نامک</label>
                                    <input type="text" name="slug" class="form-control" value="">
                                    @error('slug')

                                    <small class="mt-2 d-inline-block text-danger">{{$message}}</small>
                                    @enderror

                              </div>
                              <div class="col-sm-12 col-md-4">
                                    <label for="" class="form-label">توضیحات</label>
                                    <textarea name="description" id="" class="form-control"></textarea>

                              </div>
                              <div class="col-sm-12 col-mb-2 d-flex align-items-center mt-4">
                                    <input type="submit" value="ثبت" class="btn btn-success w-100 m-0">
                              </div>
                        </div>
                  </form>
            </div>
            <div class="row g-4">
                  @if($categories)

                  @foreach($categories as $category)
                  <div class="col-md-6 col-xl-4">
                        <!-- Category item START -->
                        <div class="card border h-100">
                              <!-- Card header -->
                              <div class="card-header border-bottom p-3">
                                    <div class="d-flex align-items-center">
                                          <div class="icon-lg shadow bg-body rounded-circle">icon</div>
                                          <h4 class="mb-0 ms-3">{{$category->name}}</h4>
                                    </div>
                              </div>

                              <!-- Card body START -->
                              <div class="card-body p-3">
                                    <p>{{$category->description}}</p>

                                    <!-- Followers and Post -->
                                    <div class="d-flex justify-content-between">
                                          <!-- Total post -->
                                          <div>
                                                <h5 class="mb-0">846</h5>
                                                <h6 class="mb-0 fw-light">کل اخبار</h6>
                                          </div>
                                          <!-- Avatar group -->
                                          <ul class="avatar-group mb-0">
                                                <li class="avatar avatar-xs">
                                                      <img class="avatar-img rounded-circle" src="assets/images/avatar/01.jpg" alt="avatar">
                                                </li>
                                                <li class="avatar avatar-xs">
                                                      <div class="avatar-img rounded-circle bg-primary"><i class="fas fa-plus text-white position-absolute top-50 start-50 translate-middle"></i></div>
                                                </li>
                                          </ul>
                                    </div>

                              </div>
                              <!-- Card body END -->

                              <!-- Card footer -->
                              <div class="card-footer border-top text-center p-3">
                                    <a href="#" class="btn btn-primary-soft w-100 mb-0">مشاهده اخبار</a>
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