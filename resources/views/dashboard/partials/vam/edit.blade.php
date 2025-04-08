<section class="py-4">
      <div class="container">
            <div class="row">
                  <div class="col-12">
                        <div class="card border">
                              <div class="col-12 text-center mb-3 mt-3">
                                    <h1 class="mb-0 h3">ویرایش وام</h1>
                              </div>
                              <div class="card-body">
                                    <form action="" method="post">
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
                                          @if ($role === 'manager')
                                          <div class="row ">
                                                <div class="col-md-3 mb-3">
                                                      <p class="form-control-plaintext">نام و نام خانوادگی : {{ $vam->name }}</p>
                                                </div>
                                                <div class="col-md-3 mb-3">
                                                      <p class="form-control-plaintext"> کد ملی : {{ $vam->idCard }}</p>
                                                </div>
                                                <div class="col-md-3 mb-3">
                                                      <p class="form-control-plaintext"> دپارتمان : {{$vam->departmans->name}}</p>
                                                </div>
                                                <div class="col-md-3 mb-3">
                                                      <p class="form-control-plaintext"> مدیر واحد : {{$vam->supervisors->name}}</p>
                                                </div>
                                                <div class="col-md-3 mb-3">
                                                      <p class="form-control-plaintext"> مبلغ وام : {{$vam->price}} تومان </p>
                                                </div>
                                                <div class="col-md-3 mb-3">
                                                      <p class="form-control-plaintext"> درخواست : {{$vam->category->name}}</p>
                                                </div>
                                                <div class="col-md-3 mb-3">
                                                      <p class="form-control-plaintext"> دلیل : {{$vam->resone}}</p>
                                                </div>
                                                <div class="col-md-3 mb-3">
                                                      <p class="form-control-plaintext">عضویت در صندوق : {{$vam->member}}</p>
                                                </div>
                                                <div class="col-md-9 mb-3">
                                                      <p class="form-control-plaintext">توضیحات درخواست کننده : {{$vam->description1}}</p>
                                                </div>
                                                <div class="col-md-3 mb-3">
                                                      <p class="form-control-plaintext">تایید توسط مدیر واحد : {{$vam->status}}</p>
                                                </div>
                                                <hr />
                                                <div class="col-md-12 text-center mt-3 mb-4">
                                                      <h4>اعتبارسنجی</h4>
                                                </div>
                                                <div class="col-md-3 mb-3">
                                                      <p class="form-control-plaintext"> تاریخ عضویت در صندوق : {{$vam->memberDate}}</p>
                                                </div>
                                                <div class="col-md-3 mb-3">
                                                      <p class="form-control-plaintext">مبلغ سرمایه گذاری در صندوق : {{$vam->memberPrice}}</p>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                      <p class="form-control-plaintext">میزان بدهی در زمان بهره برداری از امکانات رفاهی : {{$vam->debt}}</p>
                                                </div>
                                                <div class="col-md-3 mb-3">
                                                      <p class="form-control-plaintext">آخرین حقوق دریافتی : {{$vam->lastSalary}}</p>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                      <p class="form-control-plaintext">سقف مجاز بهره برداری از امکانات رفاهی : {{$vam->maxVam}}</p>
                                                </div>
                                                <div class="col-md-3 mb-3">
                                                      <p class="form-control-plaintext">تعداد در صف انتظار : {{$vam->number}}</p>
                                                </div>
                                                <div class="col-md-3 mb-3">
                                                      <p class="form-control-plaintext">تاریخ اعتبارسنجی : {{$vam->date}}</p>
                                                </div>
                                                <div class="col-md-9 mb-3">
                                                      <p class="form-control-plaintext">توضیحات منابع انسانی : {{$vam->description2}}</p>
                                                </div>
                                          </div>
                                          @else
                                          <div class="row">

                                                <div class="col-md-3 mb-3">
                                                      <label class="form-label">نام و نام خانوادگی</label>
                                                      <input name="name" type="text" class="form-control" value=" {{ $vam->name }}">
                                                      @error('name')
                                                      <small class="mt-2 d-inline-block text-danger">{{$message}}</small>
                                                      @enderror
                                                </div>
                                                <div class="col-md-3 mb-3">
                                                      <label class="form-label">کدملی</label>
                                                      <input name="idCard" type="text" class="form-control" value="{{ $vam->idCard }}">
                                                      @error('idCard')
                                                      <small class="mt-2 d-inline-block text-danger">{{$message}}</small>
                                                      @enderror
                                                </div>

                                                <div class="col-md-3 mb-3">
                                                      <label class="form-label">مبلغ درخواستی (تومان)</label>
                                                      <input name="price" type="text" class="form-control" value="{{ $vam->price }}">
                                                      @error('price')
                                                      <small class="mt-2 d-inline-block text-danger">{{$message}}</small>
                                                      @enderror
                                                </div>

                                          </div>
                                          @endif
                                          @if($role === 'manager')
                                          <hr />
                                          <div class="row">
                                                <div class="col-md-12 text-center mt-3 mb-5">
                                                      <h4>بررسی درخواست توسط مدیر مالی</h4>
                                                </div>

                                                <div class="col-md-6 d-flex gap-5">
                                                      <div class="form-check">
                                                            <input type="radio" class="form-check-input" name="manager_approval" value="approved" id="approve">
                                                            <label for="approve" class="form-check-label">تایید درخواست</label>
                                                      </div>
                                                      <div class="form-check">
                                                            <input type="radio" class="form-check-input" name="manager_approval" value="rejected" id="reject">
                                                            <label for="reject" class="form-check-label">عدم تایید درخواست</label>
                                                      </div>
                                                </div>

                                                <div class="col-md-6">
                                                      <label class="form-label">توضیحات مدیر</label>
                                                      <textarea name="manager_comment" class="form-control" rows="3"></textarea>
                                                </div>
                                          </div>
                                          @endif
                                          <div class="col-md-12 mt-4 text-end">
                                                <button class="btn btn-primary" type="submit">ذخیره تغییرات</button>
                                                <a href="{{route('vam.index')}}"> بازگشت</a>
                                          </div>
                                    </form>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
</section>