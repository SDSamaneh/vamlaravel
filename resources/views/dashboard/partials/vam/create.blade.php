<section class="py-4">
      <div class="container">
            <div class="row">
                  <div class="col-12">
                        <div class="card border">
                              <div class="col-12 text-center mb-3 mt-3">
                                    <h1 class="mb-0 h3">درخواست وام</h1>
                              </div>
                              <div class="card-body">
                                    <form action="{{route('vam.store')}}" method="post">
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
                                                <div class="col-md-3">
                                                      <div class="mb-3">
                                                            <label class="form-label">نام و نام خانوادگی</label>
                                                            <input name="name" type="text" class="form-control" value="{{ old('name') }}">
                                                            @error('name')
                                                            <small class="mt-2 d-inline-block text-danger">{{$message}}</small>
                                                            @enderror
                                                      </div>
                                                </div>
                                                <div class="col-md-3">
                                                      <div class="mb-3">
                                                            <label class="form-label">کدملی</label>
                                                            <input name="idCard" type="text" class="form-control" value="">
                                                            @error('idCard')
                                                            <small class="mt-2 d-inline-block text-danger">{{$message}}</small>
                                                            @enderror
                                                      </div>
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
                                                <div class="col-md-3">
                                                      <div class="mb-3">
                                                            <label class="form-label">مبلغ درخواستی (تومان)</label>
                                                            <input name="price" type="text" class="form-control" value="">
                                                            @error('price')
                                                            <small class="mt-2 d-inline-block text-danger">{{$message}}</small>
                                                            @enderror
                                                      </div>
                                                </div>
                                                <div class="col-md-3">
                                                      <div class="mb-3">
                                                            <label class="form-label">نوع درخواست</label>
                                                            <select class="form-select" name="category_id" aria-label="Default select example">
                                                                  <option value="" disabled selected>لطفاً انتخاب کنید</option>
                                                                  @forelse($categories as $category)
                                                                  <option value="{{$category->id}}">{{$category->name}}</option>
                                                                  @empty
                                                                  <option>دسته بندی پیدا نشد</option>
                                                                  @endforelse
                                                            </select>
                                                            @error('category_id')
                                                            <small class="mt-2 d-inline-block text-danger">{{$message}}</small>
                                                            @enderror
                                                      </div>
                                                </div>
                                                <div class="col-md-3">
                                                      <div class="mb-3">
                                                            <label class="form-label">دلیل درخواست</label>
                                                            <select class="form-select" name="resone" aria-label="Default select example">
                                                                  <option value="" disabled selected>لطفاً انتخاب کنید</option>
                                                                  <option value="Education">تحصیل</option>
                                                                  <option value="Marriage">ازدواج</option>
                                                                  <option value="Dowry">جهیزیه</option>
                                                                  <option value="Medication">درمان</option>
                                                                  <option value="Accident">تصادف</option>
                                                                  <option value="Insurance">بیمه</option>
                                                                  <option value="Death">فوت اقوام</option>
                                                                  <option value="Other">سایر</option>
                                                            </select>
                                                            @error('resone')
                                                            <small class="mt-2 d-inline-block text-danger">{{$message}}</small>
                                                            @enderror
                                                      </div>
                                                </div>
                                                <div class="col-md-3 mt-5">
                                                      <div class="form-check mb-3">
                                                            <input class="form-check-input" type="checkbox" name="member" value="" id="postCheck">
                                                            <label class="form-check-label" for="postCheck">
                                                                  عضو صندوق رفاهی هستم
                                                            </label>
                                                      </div>
                                                </div>
                                                <div class="col-md-6">
                                                      <div class="mb-3">
                                                            <label class="form-label">توضیحات</label>
                                                            <textarea class="form-control" name="description1" rows="3"></textarea>
                                                            @error('description')
                                                            <small class="mt-2 d-inline-block text-danger">{{$message}}</small>
                                                            @enderror
                                                      </div>
                                                </div>
                                                @if ($role === 'author' || $role === 'admin')
                                                <hr />
                                                <div class="col-md-12 text-center mt-3">
                                                      <h2 class="mb-0 font-bold">تاییدیه مدیر واحد</h2>
                                                </div>
                                                <div class="col-md-6 mt-5">
                                                      <div class="form-check mb-3">
                                                            <input class="form-check-input" type="checkbox" name="status" value="" id="modirCheck">
                                                            <label class="form-check-label" for="modirCheck">
                                                                  درخواست توسط مدیر واحد مورد تایید میباشد.
                                                            </label>
                                                      </div>
                                                </div>
                                                @endif
                                                <hr />
                                                @if ($role === 'humanResources' || $role === 'admin')
                                                <div class="col-md-12 text-center mt-3">
                                                      <h2 class="mb-3">اعتبارسنجی</h2>
                                                </div>
                                                <div class="col-md-4">
                                                      <div class="mb-3">
                                                            <label class="form-label">تاریخ عضویت در صندوق</label>
                                                            <input name="memberDate" type="text" class="form-control" value="">
                                                            @error('memberDate')
                                                            <small class="mt-2 d-inline-block text-danger">{{$message}}</small>
                                                            @enderror
                                                      </div>
                                                </div>
                                                <div class="col-md-4">
                                                      <div class="mb-3">
                                                            <label class="form-label">مبلغ سرمایه گذاری در صندوق</label>
                                                            <input name="memberPrice" type="text" class="form-control" value="">
                                                            @error('memberPrice')
                                                            <small class="mt-2 d-inline-block text-danger">{{$message}}</small>
                                                            @enderror
                                                      </div>
                                                </div>
                                                <div class="col-md-4">
                                                      <div class="mb-3">
                                                            <label class="form-label">میزان بدهی در زمان بهره برداری از امکانات رفاهی</label>
                                                            <input name="debt" type="text" class="form-control" value="">
                                                            @error('debt')
                                                            <small class="mt-2 d-inline-block text-danger">{{$message}}</small>
                                                            @enderror
                                                      </div>
                                                </div>
                                                <div class="col-md-3">
                                                      <div class="mb-3">
                                                            <label class="form-label">آخرین حقوق دریافتی</label>
                                                            <input name="lastSalary" type="text" class="form-control" value="">
                                                            @error('lastSalary')
                                                            <small class="mt-2 d-inline-block text-danger">{{$message}}</small>
                                                            @enderror
                                                      </div>
                                                </div>
                                                <div class="col-md-3">
                                                      <div class="mb-3">
                                                            <label class="form-label">سقف مجاز بهره برداری از امکانات رفاهی</label>
                                                            <input name="maxVam" type="text" class="form-control" value="">
                                                            @error('maxVam')
                                                            <small class="mt-2 d-inline-block text-danger">{{$message}}</small>
                                                            @enderror
                                                      </div>
                                                </div>
                                                <div class="col-md-3">
                                                      <div class="mb-3">
                                                            <label class="form-label">تعداد در صف انتظار</label>
                                                            <input name="number" type="text" class="form-control" value="">
                                                            @error('number')
                                                            <small class="mt-2 d-inline-block text-danger">{{$message}}</small>
                                                            @enderror
                                                      </div>
                                                </div>
                                                <div class="col-md-3">
                                                      <div class="mb-3">
                                                            <label class="form-label">تاریخ اعتبار سنجی</label>
                                                            <input name="date" type="text" class="form-control" value="">
                                                            @error('date')
                                                            <small class="mt-2 d-inline-block text-danger">{{$message}}</small>
                                                            @enderror
                                                      </div>
                                                </div>
                                                <div class="col-md-6">
                                                      <label class="form-label">توضیحات</label>
                                                      <textarea name="description2" class="form-control"></textarea>
                                                </div>
                                                <div class="col-md-6 mt-3">
                                                      <div class="form-check mb-3">
                                                            <input class="form-check-input" type="checkbox" name="validationvams" value="" id="humanCheck">
                                                            <label class="form-check-label" for="humanCheck">اعتبارسنجی از طرف منابع انسانی صورت گرفت</label>
                                                      </div>
                                                </div>
                                                @endif
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