<section class="py-4">
      <div class="container">
            <div class="row">
                  <div class="col-12">
                        <div class="card border">
                              <div class="col-12 text-center mb-3 mt-3">
                                    <h1 class="mb-0 h3">ثبت درخواست تعمیرگاه</h1>
                              </div>
                              <div class="card-body">
                                    <form action="{{route('service.store')}}" method="post" enctype="multipart/form-data">
                                          @csrf
                                          <div class="row">
                                                <div class="col-md-6">
                                                      @if (session('success'))
                                                      <div class="alert alert-success">
                                                            {{ session('success') }}
                                                      </div>
                                                      @endif

                                                      @if (session('error'))
                                                      <div class="alert alert-danger">
                                                            {{ session('error') }}
                                                      </div>
                                                      @endif
                                                </div>
                                          </div>
                                          <div class="row">
                                                <div class="col-md-3 mb-3">

                                                      <label class="form-label">نام و نام خانوادگی</label>
                                                      <input name="name" type="text" class="form-control" value="">
                                                      @error('name')
                                                      <small class="mt-2 d-inline-block text-danger">{{$message}}</small>
                                                      @enderror

                                                </div>
                                                <div class="col-md-3 mb-3">

                                                      <label class="form-label">کدملی</label>
                                                      <input name="idCard" type="text" class="form-control" value="">
                                                      @error('idCard')
                                                      <small class="mt-2 d-inline-block text-danger">{{$message}}</small>
                                                      @enderror
                                                </div>

                                                <div class="col-md-3">
                                                      <div class="mb-3">
                                                            <label class="form-label">سرپرست واحد</label>
                                                            <select class="form-select" name="supervisors_id" aria-label="Default select example">
                                                                  <option value="" disabled selected>لطفاً انتخاب کنید</option>
                                                                  @forelse($supervisors as $supervisor)
                                                                  <option value="{{$supervisor->id}}">{{$supervisor->name}}</option>
                                                                  @empty
                                                                  <option>سرپرست یافت نشد</option>

                                                                  @endforelse
                                                            </select>
                                                            @error('supervisors_id')
                                                            <small class="mt-2 d-inline-block text-danger">{{$message}}</small>
                                                            @enderror
                                                      </div>
                                                </div>
                                                <div class="col-md-3">
                                                      <div class="mb-3">
                                                            <label class="form-label">دپارتمان</label>
                                                            <select class="form-select" name="departmans_id" aria-label="Default select example">
                                                                  <option value="" disabled selected>لطفاً انتخاب کنید</option>
                                                                  @forelse($departmans as $departman)
                                                                  <option value="{{$departman->id}}">{{$departman->name}}</option>
                                                                  @empty
                                                                  <option>دپارتمان یافت نشد</option>

                                                                  @endforelse
                                                            </select>
                                                            @error('departmans_id')
                                                            <small class="mt-2 d-inline-block text-danger">{{$message}}</small>
                                                            @enderror
                                                      </div>
                                                </div>

                                                <div class="col-md-3 mb-3">
                                                      <label class="form-label">مبلغ درخواستی</label>
                                                      <input name="price" type="text" class="form-control" value="">
                                                      @error('price')
                                                      <small class="mt-2 d-inline-block text-danger">{{$message}}</small>
                                                      @enderror
                                                </div>
                                                <div class="col-md-3 mb-3">

                                                      <label class="form-label">توضیحات</label>
                                                      <textarea class="form-control" name="description" rows="3"></textarea>
                                                      @error('description')
                                                      <small class="mt-2 d-inline-block text-danger">{{$message}}</small>
                                                      @enderror
                                                </div>

                                                <div class="col-md-12 mt-3 text-end">
                                                      <button class="btn btn-primary" type="submit">ثبت درخواست</button>
                                                </div>
                                          </div>
                                    </form>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
</section>