<section class="py-4">
      <div class="container">
            <div class="row">
                  <div class="col-md-6 col-xl-12">
                        <div class="card border bg-transparent rounded-3">
                              <div class="card-header">
                                    <div class="d-sm-flex justify-countent-sm-between align-items-center">
                                          <h1 class="mb-2 mb-sm-0 h3">لیست پرسنل
                                                <span class="badge bg-primary bg-opacity-10 text-primary">{{$userCount}}</span>
                                          </h1>
                                    </div>
                              </div>
                              <div class="card-body p-3">
                                    <div class="table-responsive border-0">
                                          <table class="table align-middle p-1 mb-0 table-hover table-shrink">
                                                <thead class="table-dark">
                                                      <tr>
                                                            <th scope="col" class="border-0 rounded-start">نام و نام خانوادگی</th>
                                                            <th scope="col" class="border-0">کدملی</th>
                                                            <th scope="col" class="border-0">شماره همراه</th>
                                                            <th scope="col" class="border-0">حذف</th>
                                                      </tr>
                                                </thead>
                                                <tbody class="border-top-0">
                                                      @if($users)
                                                      @foreach($users as $user)
                                                      <tr>
                                                            <td>
                                                                  <h6 class="course-title mt-2 mt-md-0 mb-0"><a href="#">{{$user->name}}</a></h6>
                                                            </td>
                                                            <td>
                                                                  <h6 class="course-title mt-2 mt-md-0 mb-0"><a href="#">{{$user->idCard}}</a></h6>
                                                            </td>
                                                            <td>
                                                                  <h6 class="course-title mt-2 mt-md-0 mb-0"><a href="#">{{$user->phone_number}}</a></h6>
                                                            </td>                                                          
                                                            <td>
                                                                  <div class="d-flex justify-align-content-between align-items-center">
                                                                        <form action="{{route('users.destroy',$user->id)}}" method="post">
                                                                              @csrf
                                                                              @method('DELETE')
                                                                              <button type="submit" class="border-0 bg-transparent"><i class="fas fa-trash text-danger"></i></button>
                                                                        </form>
                                                                  </div>
                                                            </td>
                                                      </tr>
                                                      @endforeach
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