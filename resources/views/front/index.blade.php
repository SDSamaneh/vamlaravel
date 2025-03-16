@extends('layouts.front.master')
@section('content')
<main>
      <section class="my-4">
            <div class="container">
                  <div class="d-flex justify-content-between align-items-baseline mb-4">
                        <p class="fw-bold mb-3 fs-5 position-relative news-section-title">دسته بندی <span class="fw-normal fs-6">درخواست ها
                              </span>
                        </p>
                        <div class="border-bottom border-primary border-2 opacity-1" style="width: 75%;">

                        </div>
                  </div>
                  <div class="row">
                        <div class="swiper-cats" dir="rtl">
                              <!-- Additional required wrapper -->
                              <div class="swiper-wrapper">
                                    <div class="swiper-slide ">
                                          <div class=""><a href="{{route('vam.create')}}" class=" py-3 px-1 d-block btn btn-light" style="border-radius:.7rem;">درخواست وام کمیته رفاهی</a></div>
                                    </div>
                                    <div class="swiper-slide ">
                                          <div class=""><a href="" class=" py-3 px-1 d-block btn btn-light" style="border-radius:.7rem;">درخواست محصولات کویر</a></div>
                                    </div>
                                    <div class="swiper-slide ">
                                          <div class=""><a href="" class=" py-3 px-1 d-block btn btn-light" style="border-radius:.7rem;">درخواست خدمات تعمیرگاهی</a></div>
                                    </div>
                                    <div class="swiper-slide ">
                                          <div class=""><a href="" class=" py-3 px-1 d-block btn btn-light" style="border-radius:.7rem;">درخواست خرید از مادیران</a></div>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </section>    
</main>
@endsection