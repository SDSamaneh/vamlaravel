<section class="py-4">
      <div class="container">
            <h1 class="mb-4">ویرایش دسته بندی</h1>
            <div class="row pb-4 bg-light p-3 mb-4 rounded">
                  <form action="{{ route('category.update', $category->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="row">
                              <div class="col-sm-12 col-md-4">
                                    <label for="" class="form-label">نام دسته بندی</label>
                                    <input type="text" name="name" class="form-control" value="{{$category->name}}">
                                    @error('name')
                                    <small class="mt-2 d-inline-block text-danger">{{$message}}</small>
                                    @enderror
                              </div>
                              <div class="col-sm-12 col-md-4">
                                    <label for="" class="form-label">نامک</label>
                                    <input type="text" name="slug" class="form-control" value="{{$category->slug}}">
                                    @error('slug')

                                    <small class="mt-2 d-inline-block text-danger">{{$message}}</small>
                                    @enderror

                              </div>
                              <div class="col-sm-12 col-md-4">
                                    <label for="" class="form-label">توضیحات</label>
                                    <textarea name="description" id="" class="form-control">{{$category->description}}</textarea>

                              </div>
                              <div class="col-sm-12 col-mb-2 d-flex align-items-center mt-4">
                                    <input type="submit" value="ثبت" class="btn btn-success w-100 m-0">
                              </div>
                        </div>
                  </form>
            </div>
      </div>
</section>