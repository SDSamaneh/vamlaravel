<nav class="navbar-light navbar-sticky header-static border-bottom navbar-dashboard">
      <!-- Logo Nav START -->
      <nav class="navbar navbar-expand-xl">
            <div class="container">
                  <!-- Logo START -->
                  <a class="navbar-brand me-3" href="{{route('index')}}">
                        <img class="navbar-brand-item light-mode-item" src="{{Vite::image('logo.png')}}" alt="logo">
                        <img class="navbar-brand-item dark-mode-item" src="{{Vite::image('logo.png')}}" alt="logo">
                  </a>
                  <!-- Logo END -->

                  <!-- Responsive navbar toggler -->
                  <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="text-body h6 d-none d-sm-inline-block">منو</span>
                        <span class="navbar-toggler-icon"></span>
                  </button>

                  <!-- Main navbar START -->
                  <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav navbar-nav-scroll mx-auto">

                              <!-- Nav item 1 Demos -->
                              <li class="nav-item"><a class="nav-link" href="{{route('index')}}"><i class="bi bi-house-door me-1"></i>وبسایت</a></li>
                              @if(auth()->user()->role === 'admin')

                              <!-- Nav item 2 Post -->
                              <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="postMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="bi bi-pencil me-1"></i>مدیریت وام ها</a>
                                    <ul class="dropdown-menu" aria-labelledby="postMenu">
                                          <!-- dropdown submenu -->
                                          <li> <a class="dropdown-item" href="{{route('vam.index')}}">همه درخواست ها</a> </li>
                                          <li> <a class="dropdown-item" href="{{route('vam.create')}}">افزودن درخواست وام</a> </li>
                                    </ul>
                              </li>

                              <li class="nav-item"><a class="nav-link" href="{{route('category.index')}}"><i class="bi bi-chat-dots me-1"></i>افزودن دسته بندی</a></li>
                              <li class="nav-item"><a class="nav-link" href="{{route('supervisor.index')}}"><i class="bi bi-chat-dots me-1"></i>افزودن مدیرواحد</a></li>
                              <li class="nav-item"><a class="nav-link" href="{{route('departman.index')}}"><i class="bi bi-chat-dots me-1"></i>افزودن دپارتمان</a></li>
                              <li class=" nav-item"><a class="nav-link" href="{{route('users.index')}}"><i class="bi bi-people me-1 fs-5"></i>مدیریت کاربران</a></li>
                              @endif
                        </ul>
                  </div>
                  <!-- Main navbar END -->
                  <div class="nav flex-nowrap align-items-center">
                        <div class="nav-item ms-2 ms-md-3 dropdown">
                              <a class="avatar avatar-sm p-0" href="{{route('profile.edit')}}">
                                    <img class="avatar-img rounded-circle shadow" src="{{Vite::image('avatar/avatar.png')}}" alt="avatar">
                              </a>
                        </div>
                  </div>
            </div>
      </nav>
      <!-- Logo Nav END -->
</nav>