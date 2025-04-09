<section class="py-4">
      <div class="container">
            <div class="row pb-4">
                  <div class="col-12">
                        <!-- Title -->
                        <div class="d-sm-flex justify-content-sm-between align-items-center">
                              <h1 class="mb-2 mb-sm-0 h3">درخواست تعمیرگاه ها
                                    <span class="badge bg-primary bg-opacity-10 text-primary">{{$serviceCount}}</span>
                              </h1>
                              <a href="{{route('service.create')}}" class="btn btn-sm btn-primary mb-0"><i class="fas fa-plus me-2"></i>ثبت درخواست</a>
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
                                                            <th scope="col" class="border-0">مبلغ درخواستی</th>
                                                            <th scope="col" class="border-0">جزئیات</th>


                                                      </tr>
                                                </thead>
                                                <tbody class="border-top-0">

                                                      @if($services)

                                                      @foreach($services as $service)
                                                      <tr>
                                                            <td>
                                                                  <h6 class="course-title mt-2 mt-md-0 mb-0"><a href="#">{{$service->name}}</a></h6>
                                                            </td>
                                                            <td>
                                                                  <h6 class="course-title mt-2 mt-md-0 mb-0"><a href="#">{{$service->idCard}}</a></h6>
                                                            </td>
                                                            <td>
                                                                  <h6 class="course-title mt-2 mt-md-0 mb-0"><a href="#">{{$service->departmans->name}}</a></h6>
                                                            </td>
                                                            <td>
                                                                  <h6 class="course-title mt-2 mt-md-0 mb-0"><a href="#">{{$service->supervisors->name}}</a></h6>
                                                            </td>
                                                            <td>
                                                                  <h6 class="course-title mt-2 mt-md-0 mb-0"><a href="#">{{$service->price}}</a></h6>
                                                            </td>
                                                            @if ($role === 'author' || $role === 'admin' || $role==='manager')
                                                            <td>
                                                                  <h6><a href="{{route('service.edit',$service->id)}}" class="text-success mb-0 me-2"><i class="fas fa-edit"></i></a></h6>
                                                            </td>
                                                            @endif

                                                            @if($service->status=== 'Yes')
                                                            <td>
                                                                  <h6 class="">
                                                                        <a href="{{route('service.edit',$service->id)}}" class="badge text-bg-success mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>اعتبارسنجی توسط منابع انسانی</a>
                                                                  </h6>
                                                            </td>
                                                            @else
                                                            <td>
                                                                  <h6>
                                                                        <a href="{{route('service.edit',$service->id)}}" class="badge text-bg-danger mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>عدم اعتبارسنجی</a>
                                                                  </h6>
                                                            </td>
                                                            @endif
                                                            @if ($role === 'admin' ||$role === 'author')
                                                            <td>
                                                                  <div class="d-flex justify-align-content-between align-items-center">
                                                                        <form action="{{route('service.destroy',$service->id)}}" method="post">
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