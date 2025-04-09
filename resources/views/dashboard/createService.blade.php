@extends('layouts.dashboard.master')
@section('content')
<main>
      <!-- Main contain START -->
      <section class="py-4">
            <div class="container">
                  <div class="row g-4">
                        @if ($role === 'author' || $role === 'admin' || $role === 'manager')

                        @include('dashboard.partials.service.create')

                        @endif

                  </div>
            </div>
      </section>
      <!--Main contain END -->
</main>
@endsection