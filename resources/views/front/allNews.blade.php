@extends('layouts.front.master')
@section('content')
<main>
      <!-- Main contain START -->
      <section class="py-4">
            <div class="container">
                  <div class="row g-4">

                        @include('front.partials.news.allNews')

                  </div>
            </div>
      </section>
      <!--Main contain END -->
</main>
@endsection