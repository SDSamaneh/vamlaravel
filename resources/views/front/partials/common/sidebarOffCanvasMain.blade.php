<div class="offcanvas offcanvas-end  border-light" tabindex="-1" id="offcanvasMenu">
      <div class="offcanvas-header justify-content-end">
            <button type="button" onclick="closedSidebar()" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body d-flex flex-column pt-0">
            <div>
                  <img class="light-mode-item w-25" src="{{Vite::image('logo.png')}}" alt="logo">
                  <img class="dark-mode-item w-25" src="{{Vite::image('logo.png')}}" alt="logo">
                  <!-- Nav START -->
                  <!-- <ul class="nav d-block flex-column my-4">
				<li class="nav-item h5">
					<a class="nav-link" href="index.html">ورود</a>
				<li class="nav-item h5">
					<a class="nav-link" href="about-us.html">ثبت نام</a>
				</li>
			</ul> -->
                  <!-- Nav END -->
                  <p class="text-center">پروفایل</p>
                  <div class="d-flex flex-column justify-content-center align-items-center">
                        <img class="offcanvas-avatar avatar-img p-1 mb-2" src="{{Vite::image('avatar/avatar.png')}}" alt="">
                        <p class="fw-bold" style="font-size: 17px;">وحید صالحی</p>

                  </div>
                  <div class="my-4">
                        <ul class="nav d-flex flex-column offcanvas-dash-nav">
                              <li class="nav-item my-1 bg-light"><a class="nav-link" style="font-size: 17px;" href="" data-bs-toggle="offcanvas" data-bs-target="#offcanvas‌Profile">پروفایل</a></li>

                              <li class="nav-item my-1 bg-light"><a class="nav-link" style="font-size: 17px;" href="{{route('News')}}">همه اخبار</a></li>
                              <li class="nav-item my-1 bg-light"><a class="nav-link" style="font-size: 17px;" href="{{route('index')}}">داشبورد</a></li>

                              <form method="post" action="{{route('logout')}}">
                                    @csrf
                                    <li class="nav-item my-1 bg-light"><button type="submit" class="bg-transparent border-0 text-danger">خروج</button></li>
                              </form>

                        </ul>
                  </div>
            </div>
      </div>
</div>