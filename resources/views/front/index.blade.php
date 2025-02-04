@extends('layouts.front.master')
@section('content')
<main>
      @include('front.partials.index.trandigNews')
      @include('front.partials.index.dailyNews')
      @include('front.partials.index.newsCats')
      @include('front.partials.index.hotNews')
      @include('front.partials.index.videoNews')
      @include('front.partials.index.techNews')
      @include('front.partials.index.sportNews')
      @include('front.partials.index.editorNews')


</main>
@endsection