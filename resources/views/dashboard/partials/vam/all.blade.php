<section class="py-4">
      <div class="container">
            <div class="row pb-4">
                  <div class="col-12">
                        <!-- Title -->
                        <div class="d-sm-flex justify-content-sm-between align-items-center">
                              <h1 class="mb-2 mb-sm-0 h3">لیست درخواست ها <span class="badge bg-primary bg-opacity-10 text-primary">110</span></h1>
                              <a href="{{route('vam.create')}}" class="btn btn-sm btn-primary mb-0"><i class="fas fa-plus me-2"></i>ثبت درخواست وام جدید</a>
                        </div>
                  </div>
            </div>
            <div class="row">
                  <div class="col-md-6 col-xl-12">
                        <div class="card border bg-transparent rounded-3">
                              <!-- Card body START -->
                              <div class="card-body p-3">
                                    <!-- Post list table START -->
                                    <div class="table-responsive border-0">
                                          <table class="table align-middle p-1 mb-0 table-hover table-shrink">
                                                <!-- Table head -->
                                                <thead class="table-dark">
                                                      <tr>
                                                            <th scope="col" class="border-0 rounded-start">نام و نام خانوادگی</th>
                                                            <th scope="col" class="border-0">کدملی</th>
                                                            <th scope="col" class="border-0">دپارتمان</th>
                                                            <th scope="col" class="border-0">مدیرواحد</th>
                                                            <th scope="col" class="border-0">مبلغ وام</th>
                                                            <th scope="col" class="border-0">ویرایش</th>
                                                            <th scope="col" class="border-0">اعتبار سنجی</th>
                                                            <th scope="col" class="border-0"></th>


                                                      </tr>
                                                </thead>
                                                <tbody class="border-top-0">

                                                      @if($vams)

                                                      @foreach($vams as $vam)
                                                      <tr>
                                                            <td>
                                                                  <h6 class="course-title mt-2 mt-md-0 mb-0"><a href="#">{{$vam->name}}</a></h6>
                                                            </td>
                                                            <td>
                                                                  <h6 class="course-title mt-2 mt-md-0 mb-0"><a href="#">{{$vam->idCard}}</a></h6>
                                                            </td>
                                                            <td>
                                                                  <h6 class="course-title mt-2 mt-md-0 mb-0"><a href="#">{{$vam->departmans->name}}</a></h6>
                                                            </td>
                                                            <td>
                                                                  <h6 class="course-title mt-2 mt-md-0 mb-0"><a href="#">{{$vam->supervisors->name}}</a></h6>
                                                            </td>
                                                            <td>
                                                                  <h6 class="course-title mt-2 mt-md-0 mb-0"><a href="#">{{$vam->price}}</a></h6>
                                                            </td>
                                                            @if ($role === 'author' || $role === 'admin')
                                                            <td>
                                                                  <h6><a href="{{route('vam.edit',$vam->id)}}" class="text-success mb-0 me-2"><i class="fas fa-edit"></i></a></h6>
                                                            </td>
                                                            @endif

                                                            @if($vam->status=== 'Yes')
                                                            <td>
                                                                  <h6 class="">
                                                                        <a href="{{route('vam.edit',$vam->id)}}" class="badge text-bg-success mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>اعتبارسنجی توسط منابع انسانی</a>
                                                                  </h6>
                                                            </td>
                                                            @else
                                                            <td>
                                                                  <h6>
                                                                        <a href="{{route('vam.edit',$vam->id)}}" class="badge text-bg-danger mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>عدم اعتبارسنجی</a>
                                                                  </h6>
                                                            </td>
                                                            @endif
                                                            @if ($role === 'admin')
                                                            <td>
                                                                  <div class="d-flex justify-align-content-between align-items-center">
                                                                        <form action="{{route('vam.destroy',$vam->id)}}" method="post">
                                                                              @csrf
                                                                              @method('DELETE')
                                                                              <button type="submit" class="border-0 bg-transparent"><i class="fas fa-trash text-danger"></i></button>

                                                                        </form>
                                                                  </div>
                                                            </td>
                                                            @endif

                                                      </tr>
                                                      @endforeach
                                                      @else
                                                      <div class="alert alert-info">
                                                            تا این لحظه دسته بندی ثبت نشده است !
                                                      </div>
                                                      @endif


                                                </tbody>
                                          </table>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
</section>