<footer class="bg-dark d-none d-lg-block">
      <div class="container pt-5 ">
            <!-- Widgets START -->
            <div class="row pt-5">
                  <!-- Footer Widget -->
                  <div class="col-md-6 col-lg-3 mb-4">
                        <h5 class="mb-4 text-white">آخرین اخبار</h5>
                        <!-- Item -->
                        <div class="mb-4 position-relative">
                              <div><a href="#" class="badge text-bg-danger mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>گزارش</a></div>
                              <a href="post-single-3.html" class="btn-link text-white fw-normal">ساخت گزارش</a>
                              <ul class="nav nav-divider align-items-center small mt-2 text-body-secondary">
                                    <li class="nav-item position-relative">
                                          <div class="nav-link"><a href="#" class="stretched-link text-reset btn-link">حامد کرمانشاهی</a>
                                          </div>
                                    </li>
                                    <li class="nav-item">01 اسفند، 1403</li>
                              </ul>
                        </div>

                  </div>
                  <!-- Footer Widget -->
                  <div class="col-md-6 col-lg-3 mb-4">
                        <h5 class="mb-4 text-white">دسته بندی ها</h5>
                        <div class="row">
                              <div class="col-6">
                                    <ul class="nav flex-column text-primary-hover">
                                          <li class="nav-item"><a class="nav-link pt-0" href="#">اخبار</a></li>
                                          <li class="nav-item"><a class="nav-link" href="#">کویرموتور <span class="badge text-bg-danger ms-2">2</span></a></li>
                                          <li class="nav-item"><a class="nav-link" href="#">فناوری و اطلاعات</a></li>

                                    </ul>
                              </div>
                        </div>
                  </div>
                  <!-- Footer Widget -->
                  <div class="col-sm-6 col-lg-3 mb-4">
                        <h5 class="mb-4 text-white">تقویم روز</h5>
                        <p class="" style="color: #d0d4d9;">امروز : ۲۶ تیر ماه ۱۴۰۳</p>
                        <ul class="nav flex-column" style="color: #d0d4d9;">
                              <li class="nav-item mb-3">روز جهانی برنامه نویس</li>

                        </ul>
                  </div>
                  <!-- Footer Widget -->
                  <div class="col-sm-6 col-lg-3 mb-4">
                        <h5 class="mb-4 text-white">KAVIR MOTOR</h5>
                        <p class="text-body-secondary">KAVIR Manuals Report</p>
                        <div class="row g-2">
                              <div class="col">
                                    <a href="#"><img class="w-50" src="{{Vite::image('logo.png')}}" alt="app-store"></a>
                              </div>

                        </div>
                  </div>
            </div>
            <!-- Widgets END -->


      </div>
      <!-- Footer copyright START -->
      <div class="bg-dark-overlay-3 mt-5">
            <div class="container">
                  <div class="row align-items-center justify-content-md-between py-4">
                        <div class="col-12">
                              <div class="text-center fw-bold">تمامی حقوق محفوظ است</div>
                        </div>
                  </div>
            </div>
      </div>
      <!-- Footer copyright END -->
</footer>

<!-- Back to top -->
<div class="back-top"><i class="bi bi-arrow-up-short"></i></div>
<!-- script -->

@error('success')
@include('notifications.successMessage')
@enderror()

@if(session()->has('error'))
@include('notifications.errorMessage')
@endif
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/min/tiny-slider.js"></script>
</body>

</html>