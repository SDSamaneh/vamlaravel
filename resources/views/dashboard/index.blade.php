@extends('layouts.dashboard.master')
@section('content')
<main>
      <!-- Main contain START -->
      <section class="py-4">
            <div class="container">
                  <div class="row g-4">
                        @if(auth()->user()->role === 'admin')

                        @include('dashboard.partials.index.statistics')
                        @include('dashboard.partials.index.chart')
                        @include('dashboard.partials.index.viewsStatistics')
                        @endif
                  </div>
            </div>
      </section>
      <!--Main contain END -->
</main>
@endsection