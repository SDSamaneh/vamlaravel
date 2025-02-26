<section class="py-4">
      <div class="container">
            <div class="row pb-4">
                  <div class="col-12">
                        <h1 class="mb-0 h3">ایجاد خبر جدید</h1>
                  </div>
            </div>
            <div class="row">
                  <div class="col-12">
                        <div class="card border">
                              <div class="card-body">
                                    <form action="{{route('article.store')}}" method="post">
                                          @csrf
                                          <div class="row">
                                                <div class="col-12">
                                                      <div class="mb-3">
                                                            <label class="form-label">عنوان</label>
                                                            <input id="con-name" name="title" type="text" class="form-control" placeholder="عنوان خبر" value="">
                                                            @error('title')
                                                            <small class="mt-2 d-inline-block text-danger">{{$message}}</small>
                                                            @enderror
                                                      </div>
                                                </div>
                                                <!-- Post type START -->
                                                <div class="col-12">
                                                      <div class="mb-3">
                                                            <label class="form-label">نوع</label>
                                                            <div class="d-flex flex-wrap gap-3">
                                                                  <!-- Post type item -->
                                                                  <div class="flex-fill">
                                                                        <input type="radio" class="btn-check" name="type" id="option">
                                                                        <label class="btn btn-outline-light w-100" for="option">
                                                                              <i class="bi bi-chat-left-text fs-1"></i>
                                                                              <span class="d-block"> فوری</span>
                                                                        </label>
                                                                  </div>
                                                                  <!-- Post type item -->
                                                                  <div class="flex-fill">
                                                                        <input type="radio" class="btn-check" name="type" id="option2">
                                                                        <label class="btn btn-outline-light w-100" for="option2">
                                                                              <i class="bi bi-patch-question fs-1"></i>
                                                                              <span class="d-block"> حوادث </span>
                                                                        </label>
                                                                  </div>
                                                                  <!-- Post type item -->
                                                                  <div class="flex-fill">
                                                                        <input type="radio" class="btn-check" name="type" id="option3">
                                                                        <label class="btn btn-outline-light w-100" for="option3">
                                                                              <i class="bi bi-chat-right-dots fs-1"></i>
                                                                              <span class="d-block"> خبری </span>
                                                                        </label>
                                                                  </div>
                                                                  <!-- Post type item -->
                                                                  <div class="flex-fill">
                                                                        <input type="radio" class="btn-check" name="type" id="option4">
                                                                        <label class="btn btn-outline-light w-100" for="option4">
                                                                              <i class="bi bi-ui-checks-grid fs-1"></i>
                                                                              <span class="d-block"> متنی </span>
                                                                        </label>
                                                                  </div>

                                                                  <!-- Post type item -->
                                                                  <div class="flex-fill">
                                                                        <input type="radio" class="btn-check" name="type" id="option6">
                                                                        <label class="btn btn-outline-light w-100" for="option6">
                                                                              <i class="bi bi-chat-square fs-1"></i>
                                                                              <span class="d-block"> سایر </span>
                                                                        </label>
                                                                  </div>
                                                                  <!-- Post type item -->
                                                            </div>
                                                            @error('type')
                                                            <small class="mt-2 d-inline-block text-danger">{{$message}}</small>
                                                            @enderror
                                                      </div>
                                                </div>
                                                <!-- Post type END -->
                                                <div class="col-md-6">
                                                      <div class="mb-3">
                                                            <label class="form-label">توضیح مختصر</label>
                                                            <textarea class="form-control" name="shortDescription" rows="3" placeholder="توضیح مختصری را درباره خبر بنویسید..."></textarea>
                                                            @error('shortDescription')
                                                            <small class="mt-2 d-inline-block text-danger">{{$message}}</small>
                                                            @enderror
                                                      </div>
                                                </div>
                                                <div class="col-md-6">
                                                      <!-- Tags -->
                                                      <div class="mb-3">
                                                            <label class="form-label">برچسب</label>
                                                            <input type="text" name="slug" class="form-control" value="">
                                                            @error('slug')
                                                            <small class="mt-2 d-inline-block text-danger">{{$message}}</small>
                                                            @enderror
                                                      </div>
                                                </div>
                                                <div class="col-md-12">
                                                      <div class="mb-3">
                                                            <label class="form-label">متن خبر</label>
                                                            <textarea name="longDescription" class="form-control"></textarea>
                                                            @error('longDescription')
                                                            <small class="mt-2 d-inline-block text-danger">{{$message}}</small>
                                                            @enderror
                                                      </div>
                                                </div>
                                                <div class="col-6">
                                                      <div class="mb-3">
                                                            <div class="position-relative">
                                                                  <h6 class="my-2">آپلود تصویر</h6>
                                                                  <label class="w-100" style="cursor:pointer;">
                                                                        <div class="input-group flex-row-reverse">
                                                                              <input type="text" class="form-control upload-name" />
                                                                              <span class="btn btn-custom cursor-pointer upload-button">آپلود فایل</span>
                                                                        </div>
                                                                        <input class="form-control stretched-link d-none hidden-upload" type="file" name="image" accept="image/gif, image/jpeg, image/png" />
                                                                  </label>

                                                            </div>
                                                            @error('image')
                                                            <small class="mt-2 d-inline-block text-danger">{{$message}}</small>
                                                            @enderror
                                                            <!-- <p class="small mb-0 mt-2"><b>نکته:</b> فرمت های مجاز: JPG، JPEG و PNG و ابعاد پیشنهادی ما 600px * 450px است. تصاویر بزرگتر به اندازه 4:3 برش داده می شود تا با تصاویر کوچک/پیش نمایش ما مطابقت داشته باشد.</p> -->
                                                      </div>
                                                </div>
                                                <div class="col-md-6">
                                                      <!-- Message -->
                                                      <div class="mb-3">
                                                            <label class="form-label">دسته بندی</label>
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
                                                <div class="col-12">
                                                      <div class="form-check mb-3">
                                                            <input class="form-check-input" type="checkbox" name="status" value="" id="postCheck">
                                                            <label class="form-check-label" for="postCheck">
                                                                  این خبر منتشر شود؟
                                                            </label>
                                                      </div>
                                                </div>
                                                <div class="col-md-12 text-start">
                                                      <button class="btn btn-primary w-100" type="submit">ایجاد خبر</button>
                                                </div>
                                          </div>
                                    </form>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
</section>