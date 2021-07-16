<a href="mailto:{{email()}}" class="link-none">
<div class="bg-primary text-white text-center p-3">
	<h6 class="m-0 text-uppercase font-weight-bold" style="letter-spacing: .75px">@lang('We are open for testing! Schedule your Metabolic Efficiency Test now!')</h6>
</div>
</a>
<section class="container-fluid" id="menu">
  <div class="row">
    <div class="col-11 mx-auto position-relative">
      <nav class="navbar font-primary navbar-light navbar-expand-lg bg-white w-100 py-4 animate__animated" style="z-index: 10">
        <a class="navbar-brand" href="{{route('home')}}"><img data-mobile="{{asset('images/brand/logo-notext.svg')}}" src="{{asset('images/brand/logo-nosub.svg')}}" style="width: 120px"></a>
        <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <div class="animated-icon2"><span></span><span></span><span></span><span></span></div>
          {{-- <span class="navbar-toggler-icon"></span> --}}
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto mt-3">
            <li class="nav-item px-3">
              <a class="nav-link" href="{{route('home')}}">@lang('Home')e</a>
            </li>
            <li class="nav-item dropdown px-3">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">@lang('What we do')</a>
              <div class="dropdown-menu w-100 rounded-0 border-0 animate__animated animate__fadeInUp animate__faster p-2">
                <a class="nav-link m-0 pt-1" href="{{route('what-we-do.performance')}}">@lang('Performance')</a>
                <a class="nav-link m-0" href="{{route('what-we-do.health')}}">@lang('Health')</a>
                <a class="nav-link m-0" href="{{route('what-we-do.development')}}">@lang('Athletic development')</a>
              </div>
            </li>
            <li class="nav-item px-3">
              <a class="nav-link" href="{{route('products.index')}}">@lang('Sports nutrition')</a>
            </li>
            <li class="nav-item px-3">
              <a class="nav-link" href="{{route('contact')}}">@lang('Contact')</a>
            </li>
            @auth
            <li class="nav-item dropdown px-3">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">@fa(['icon' => 'user'])Admin</a>
              <div class="dropdown-menu w-100 rounded-0 border-0 animate__animated animate__fadeInUp animate__faster p-2">
                <a class="nav-link m-0 pt-1" href="{{route('admin')}}">Dashboard</a>
                <a class="nav-link" href="" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>Logout</i>
                </a>
              </div>
            </li>
            @endauth
            <li class="nav-item px-2 d-flex">
              <div class="mr-2">
                <a class="nav-link px-0" title="Albanian" href="" onclick="event.preventDefault(); document.getElementById('lang-sq').submit();">
                  <form id="lang-sq" action="{{route('set-language', 'sq')}}" method="POST" style="display: none;">@csrf</form>
                  <span class="rounded flag-icon flag-icon-xk"></span>
                </a>
              </div>
              <div>
                <a class="nav-link px-0" title="English" href="" onclick="event.preventDefault(); document.getElementById('lang-en').submit();">
                  <form id="lang-en" action="{{route('set-language', 'en')}}" method="POST" style="display: none;">@csrf</form>
                  <span class="rounded flag-icon flag-icon-us"></span>
                </a> 
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
</section>
