<section class="py-4">
      <div class="container">
            <div class="row g-4">
                  <!-- Profile cover and info START -->
                  <div class="col-12">
                        <div class="card mb-4 position-relative z-index-9">
                              <!-- Cover image -->
                              <div class="py-5 h-200 rounded" style="background-image:url(assets/images/blog/16by9/big/07.jpg); background-position: center bottom; background-size: cover; background-repeat: no-repeat;">
                              </div>
                              <div class="card-body pt-3 pb-0">
                                    <div class="row d-flex justify-content-between">
                                          <!-- Avatar -->
                                          <div class="col-sm-12 col-md-auto text-center text-md-start">
                                                <div class="avatar avatar-xxl mt-n5">
                                                      <img class="avatar-img rounded-circle border border-white border-3 shadow" src="{{Vite::image('avatar/avatar.png')}}" alt="">
                                                </div>
                                          </div>
                                          <!-- Profile info -->
                                          <div class="col-sm-12 col-md text-center text-md-start d-md-flex justify-content-between align-items-center">
                                                <div>
                                                      <h4 class="my-2">مهدی علیزاده <i class="bi bi-patch-check-fill text-info small"></i></h4>
                                                      <ul class="list-inline">
                                                            <li class="list-inline-item"><i class="bi bi-calendar2-plus me-1"></i> تاریخ عضویت 5 بهمن 1400</li>
                                                      </ul>
                                                      <p class="m-0"></p>
                                                </div>

                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
                  <!-- Profile info END -->
            </div>

            <div class="row g-4">
                  <div class="col-lg-7 col-xxl-8">
                        <div class="card border mb-4">
                              <div class="card-header border-bottom p-3">
                                    <h4 class="card-header-title mb-0">حساب کاربری</h4>
                              </div>
                              <div class="row card-body">
                                    <form action="{{ route('users.update') }}" method="POST">
                                          @csrf
                                          <!-- Full name -->
                                          <div class="col-md-6 mb-3">
                                                <label class="form-label">نام و نام خانوادگی</label>
                                                <input type="text" name="name" class="form-control" value="">
                                          </div>
                                          <div class="col-md-6 mb-3">
                                                <label class="form-label">شماره همراه</label>
                                                <input type="text" name="phone_number" class="form-control" value="">

                                          </div>
                                          <div class="col-md-6 mb-3">
                                                <label class="form-label">کد ملی</label>
                                                <input type="text" name="idCard" class="form-control" value="">

                                          </div>
                                          <!-- Username -->
                                          <div class="col-md-6 mb-3">
                                                <label class="form-label">ایمیل</label>
                                                <div class="input-group">
                                                      <span class="input-group-text">gmail.com</span>
                                                      <input type="text" class="form-control" value="example@752">
                                                </div>
                                          </div>
                                          <div class="mb-3">
                                                <label for="password" class="form-label">رمز عبور جدید</label>
                                                <input type="password" name="password" class="form-control">
                                                @error('password')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                          </div>
                                          <div class="mb-3">
                                                <label for="password_confirmation" class="form-label">تایید رمز عبور</label>
                                                <input type="password" name="password_confirmation" class="form-control">
                                          </div>

                                          <!-- Save button -->
                                          <div class="d-flex justify-content-end mt-4">
                                                <a href="{{route('index')}}" class="btn text-secondary border-0 me-2">لغو</a>
                                                <button type="submit" class="btn btn-primary">ذخیره تغییرات</button>
                                          </div>
                                    </form>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
</section>