<section class="py-4">
      <div class="container">
            <div class="row pb-4">
                  <div class="col-12">
                        <!-- Title -->
                        <div class="d-sm-flex justify-content-sm-between align-items-center">
                              <h1 class="mb-2 mb-sm-0 h3">لیست اخبار <span class="badge bg-primary bg-opacity-10 text-primary">110</span></h1>
                              <a href="#" class="btn btn-sm btn-primary mb-0"><i class="fas fa-plus me-2"></i>ثبت خبر جدید</a>
                        </div>
                  </div>
            </div>
            <div class="row">
                  <div class="col-12">
                        <div class="row g-4 mb-4">
                              <div class="col-sm-12 col-lg-6">
                                    <!-- Card START -->
                                    <div class="card card-body border h-100">
                                          <!-- Icon -->
                                          <div class="fs-3 text-start text-success">
                                                <i class="bi bi-file-earmark-text"></i>
                                          </div>
                                          <!-- Content -->
                                          <div class="ms-0">
                                                <h3 class="mb-0">305</h3>
                                                <h6 class="mb-0">فایل متنی</h6>
                                          </div>
                                    </div>
                                    <!-- Card END -->
                              </div>
                              <div class="col-sm-12 col-lg-6">
                                    <!-- Card START -->
                                    <div class="card card-body border h-100">
                                          <!-- Icon -->
                                          <div class="fs-3 text-start text-success">
                                                <i class="bi bi-camera-reels"></i>
                                          </div>
                                          <!-- Content -->
                                          <div class="ms-0">
                                                <h3 class="mb-0">120</h3>
                                                <h6 class="mb-0">چندرسانه ای</h6>
                                          </div>
                                    </div>
                                    <!-- Card END -->
                              </div>
                        </div>
                        <!-- Post list table START -->
                        <div class="card border bg-transparent rounded-3">

                              <!-- Card body START -->
                              <div class="card-body p-3">

                                    <!-- Search and select START -->
                                    <div class="row g-3 align-items-center justify-content-between mb-3">
                                          <!-- Search -->
                                          <div class="col-md-8">
                                                <form class="rounded position-relative">
                                                      <input class="form-control pe-5 bg-transparent" type="search" placeholder="جستجو" aria-label="Search">
                                                      <button class="btn bg-transparent border-0 px-2 py-0 position-absolute top-50 end-0 translate-middle-y" type="submit"><i class="fas fa-search fs-6 "></i></button>
                                                </form>
                                          </div>

                                          <!-- Select option -->
                                          <div class="col-md-3">
                                                <!-- Short by filter -->
                                                <form>
                                                      <select class="form-select z-index-9 bg-transparent" aria-label=".form-select-sm">
                                                            <option value="">مرتب سازی</option>
                                                            <option>محبوب ترین</option>
                                                            <option>جدیدترین</option>
                                                            <option>قدیمی ترین</option>
                                                      </select>
                                                </form>
                                          </div>
                                    </div>
                                    <!-- Search and select END -->

                                    <!-- Post list table START -->
                                    <div class="table-responsive border-0">
                                          <table class="table align-middle p-4 mb-0 table-hover table-shrink">
                                                <!-- Table head -->
                                                <thead class="table-dark">
                                                      <tr>
                                                            <th scope="col" class="border-0 rounded-start">عنوان خبر</th>
                                                            <th scope="col" class="border-0">نام نویسنده</th>
                                                            <th scope="col" class="border-0">تاریخ انتشار</th>
                                                            <th scope="col" class="border-0">دسته بندی</th>
                                                            <th scope="col" class="border-0">وضعیت</th>
                                                            <th scope="col" class="border-0">لایک</th>
                                                            <th scope="col" class="border-0 rounded-end">فعالیت</th>
                                                      </tr>
                                                </thead>

                                                <!-- Table body START -->
                                                <tbody class="border-top-0">
                                                      <!-- Table item -->
                                                      <tr>
                                                            <!-- Table data -->
                                                            <td>
                                                                  <h6 class="course-title mt-2 mt-md-0 mb-0"><a href="#">حضور ایرانسل در رویداد فناورانه خودروهای آینده</a></h6>
                                                            </td>
                                                            <!-- Table data -->
                                                            <td>
                                                                  <h6 class="mb-0"><a href="#">مریم ترابی</a></h6>
                                                            </td>
                                                            <!-- Table data -->
                                                            <td>22 آذر، 1400</td>
                                                            <!-- Table data -->
                                                            <td>
                                                                  <a href="#" class="badge text-bg-warning mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>تکنولوژی</a>
                                                            </td>
                                                            <!-- Table data -->
                                                            <td>
                                                                  <span class="badge bg-success bg-opacity-10 text-success mb-2">فعال</span>
                                                            </td>
                                                            <!-- Table data -->
                                                            <td>
                                                                  <span class="badge bg-danger mb-2">244</span>
                                                            </td>
                                                            <!-- Table data -->
                                                            <td>
                                                                  <div class="d-flex gap-2">
                                                                        @if(auth()->user()->role==='admin' || (auth()->user()->role==='author' && auth()->id()===$article->user_id))
                                                                        <a href="#" class="btn btn-light btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="حذف"><i class="bi bi-trash"></i></a>

                                                                        <a href="dashboard-post-edit.html" class="btn btn-light btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="ویرایش"><i class="bi bi-pencil-square"></i></a>
                                                                        @endif
                                                                  </div>
                                                            </td>
                                                      </tr>




                                                </tbody>
                                                <!-- Table body END -->
                                          </table>
                                    </div>
                                    <!-- Post list table END -->

                                    <!-- Pagination START -->
                                    <div class="d-sm-flex justify-content-sm-between align-items-sm-center mt-4 mt-sm-3">
                                          <!-- Content -->
                                          <p class="mb-sm-0 text-center text-sm-start">نمایش 1 تا 8 از 20</p>
                                          <!-- Pagination -->
                                          <nav class="mb-sm-0 d-flex justify-content-center" aria-label="navigation">
                                                <ul class="pagination pagination-sm pagination-bordered mb-0">
                                                      <li class="page-item disabled">
                                                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">قبل</a>
                                                      </li>
                                                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                      <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                                      <li class="page-item disabled"><a class="page-link" href="#">..</a></li>
                                                      <li class="page-item"><a class="page-link" href="#">15</a></li>
                                                      <li class="page-item">
                                                            <a class="page-link" href="#">بعد</a>
                                                      </li>
                                                </ul>
                                          </nav>
                                    </div>
                                    <!-- Pagination END -->
                              </div>
                        </div>
                        <!-- Post list table END -->
                  </div>
            </div>
      </div>
</section>