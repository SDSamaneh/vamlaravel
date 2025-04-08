<footer class="bg-dark d-none d-lg-block">
      <div class="container pt-5 ">


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