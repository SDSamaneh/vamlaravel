@extends('layouts.front.master')
@section('content')
<main>
      <section class="my-4">
            <div class="container">
                  <div class="d-flex justify-content-between align-items-baseline mb-4">
                        <div class="col-12">
                              <!-- Blog list table START -->
                              <div class="card border bg-transparent rounded-3">
                                    <!-- Card header START -->
                                    <div class="card-header bg-transparent border-bottom p-3">
                                          <div class="d-sm-flex justify-content-between align-items-center">
                                                <h5 class="mb-2 mb-sm-0">لیست اخبار <span class="badge bg-primary bg-opacity-10 text-primary">105</span></h5>
                                          </div>
                                    </div>
                                    <!-- Card header END -->

                                    <!-- Card body START -->
                                    <div class="card-body">
                                          <!-- Search and select START -->
                                          <div class="row g-3 align-items-center justify-content-between mb-3">
                                                <!-- Search -->
                                                <div class="col-md-8">
                                                      <form class="rounded position-relative">
                                                            <input class="form-control pe-5 bg-transparent" type="search" placeholder="جستجو" aria-label="Search">
                                                            <button class="btn bg-transparent border-0 px-2 py-0 position-absolute top-50 end-0 translate-middle-y" type="submit"><i class="fas fa-search fs-6 "></i></button>
                                                      </form>
                                                </div>                                             
                                          </div>
                                          <!-- Search and select END -->
                                          <!-- Blog list table START -->
                                          <div class="table-responsive border-0">
                                                <table class="table align-middle p-4 mb-0 table-hover table-shrink">
                                                      <!-- Table head -->
                                                      <thead class="table-dark">
                                                            <tr>
                                                                  <th scope="col" class="border-0 rounded-start">عنوان خبر</th>
                                                                  <th scope="col" class="border-0">تاریخ انتشار</th>
                                                                  <th scope="col" class="border-0">دسته بندی</th>
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
                                                                  <td>22 آذر، 1403</td>
                                                                  <!-- Table data -->
                                                                  <td>
                                                                        <a href="#" class="badge text-bg-warning mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>فناوری اطلاعات</a>
                                                                  </td>
                                                             
                                                            </tr>

                                                       

                                                      </tbody>
                                                      <!-- Table body END -->
                                                </table>
                                          </div>
                                          <!-- Blog list table END -->
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
                              <!-- Blog list table END -->
                        </div>
                  </div>

            </div>
      </section>
</main>
@endsection