<div class="offcanvas offcanvas-end  border-light" tabindex="-1" id="offcanvasMenu">
      <div class="offcanvas-header justify-content-end">
            <button type="button" onclick="closedSidebar()" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body d-flex flex-column pt-0">
            <div>
                  <img class="light-mode-item w-25" src="{{Vite::image('logo.png')}}" alt="logo">
                  <img class="dark-mode-item w-25" src="{{Vite::image('logo.png')}}" alt="logo">
                  <div class="d-flex flex-column justify-content-center align-items-center">
                        <img class="offcanvas-avatar avatar-img p-1 mb-2" src="{{Vite::image('avatar/avatar.png')}}" alt="">
                  </div>
                  <div class="my-4">
                        <ul class="nav d-flex flex-column offcanvas-dash-nav">

                              <li class="nav-item my-1 bg-light"><a class="nav-link" style="font-size: 17px;" href="{{route('dashboard')}}"><i class="bi bi-house-door me-1"></i>داشبورد</a></li>

                              <li class="nav-item my-1 bg-light"><a class="nav-link" style="font-size: 17px;" href="{{route('profile.edit')}}"><i class="bi bi-person fa-fw me-2"></i>پروفایل</a></li>

                              <form method="post" action="{{route('logout')}}">
                                    @csrf
                                    <li class="nav-item my-1 bg-light"><button type="submit" class="bg-transparent border-0 text-danger">خروج</button></li>
                              </form>

                        </ul>
                  </div>
            </div>
      </div>
</div>