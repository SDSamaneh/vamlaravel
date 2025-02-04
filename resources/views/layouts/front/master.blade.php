<!-- Offcanvas START -->
@include('front.partials.common.sidebarOffCanvasMain')
<!-- Offcanvas END -->

<!-- ======Header START -->
@include('front.partials.common.header')
@include('front.partials.common.topNav')
<!-- Header END -->

@yield('content')

<!-- Footer START  -->
@include('front.partials.common.footer')
<!-- Footer END -->
<!-- bottom menu -->
@include('front.partials.common.bottomNav')
<!-- Bookmark  -->
@include('front.partials.common.bookmark')
<!-- Profile -->
@include('front.partials.common.profile')