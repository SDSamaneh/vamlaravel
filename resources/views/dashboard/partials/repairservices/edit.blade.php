<section class="py-4">
      <div class="container">
            <div class="row pb-4">
                  <div class="col-12">
                        <h1 class="mb-0 h3">درخواست وام</h1>
                  </div>
            </div>
            <div class="row">
                  <div class="col-12">
                        <!-- <div class="card border">
                              <div class="card-body">
                                    <form action="{{route('vam.store')}}" method="post" enctype="multipart/form-data">
                                          @csrf
                                          <div class="row">
                                                <div class="col-6">
                                                      <div class="mb-3">
                                                            <label class="form-label">نام و نام خانوادگی</label>
                                                            <input name="name" type="text" class="form-control" value="">
                                                            @error('name')
                                                            <small class="mt-2 d-inline-block text-danger">{{$message}}</small>
                                                            @enderror
                                                      </div>
                                                </div>
                                                <div class="col-6">
                                                      <div class="mb-3">
                                                            <label class="form-label">کدملی</label>
                                                            <input name="idCard" type="text" class="form-control" value="">
                                                            @error('idCard')
                                                            <small class="mt-2 d-inline-block text-danger">{{$message}}</small>
                                                            @enderror
                                                      </div>
                                                </div>
                                                <div class="col-6">
                                                      <div class="mb-3">
                                                            <label class="form-label">شماره همراه</label>
                                                            <input name="phone" type="text" class="form-control" value="">
                                                            @error('phone')
                                                            <small class="mt-2 d-inline-block text-danger">{{$message}}</small>
                                                            @enderror
                                                      </div>
                                                </div>
                                                <div class="col-6">
                                                      <div class="mb-3">
                                                            <label class="form-label">مبلغ درخواستی</label>
                                                            <input name="price" type="text" class="form-control" value="">
                                                            @error('price')
                                                            <small class="mt-2 d-inline-block text-danger">{{$message}}</small>
                                                            @enderror
                                                      </div>
                                                </div>
                                                <div class="col-md-6">
                                                      <div class="mb-3">
                                                            <label class="form-label">توضیحات</label>
                                                            <textarea class="form-control" name="description" rows="3"></textarea>
                                                            @error('description')
                                                            <small class="mt-2 d-inline-block text-danger">{{$message}}</small>
                                                            @enderror
                                                      </div>
                                                </div>
                                                <div class="col-md-3">
                                                      <!-- Message -->
                                                      <div class="mb-3">
                                                            <label class="form-label">نوع درخواست</label>
                                                            <select class="form-select" name="category_id" aria-label="Default select example">
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


                                                <div class="col-md-4">
                                                      <!-- Tags -->
                                                      <div class="mb-3">
                                                            <label class="form-label">دلیل درخواست</label>
                                                            <select class="form-select" name="resone" aria-label="Default select example">
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


                                                <div class="col-md-12">
                                                      <div class="form-check mb-3">
                                                            <input class="form-check-input" type="checkbox" name="status" value="" id="postCheck">
                                                            <label class="form-check-label" for="postCheck">
                                                                  این راهنما منتشر شود؟
                                                            </label>
                                                      </div>
                                                </div>
                                                <div class="col-12 mt-3">
                                                      <button class="btn btn-success w-100" type="submit">ثبت درخواست</button>
                                                </div>
                                          </div>
                                    </form>
                              </div>
                        </div> -->
                  </div>
            </div>
      </div>
</section>