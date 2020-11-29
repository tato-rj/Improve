<div class="bg-primary text-white text-center p-3">
	<h6 class="m-0 text-uppercase font-weight-bold" style="letter-spacing: .75px">We are open for testing! Schedule your Metabolic Efficiency Test now!</h6>
</div>
<section class="container-fluid">
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
              <a class="nav-link" href="{{route('home')}}">Home</a>
            </li>
            <li class="nav-item dropdown px-3">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">What we do</a>
              <div class="dropdown-menu w-100 rounded-0 border-0 animate__animated animate__fadeInUp animate__faster p-2">
                <a class="nav-link m-0 pt-1" href="{{route('home')}}">Testing</a>
                <a class="nav-link m-0" href="{{route('home')}}">Services</a>
              </div>
            </li>
            <li class="nav-item px-3">
              <a class="nav-link" href="{{route('products.index')}}">Products</a>
            </li>
            <li class="nav-item px-3">
              <a class="nav-link" href="{{route('home')}}">Contact</a>
            </li>
            @auth
            <li class="nav-item">
              <a class="nav-link" href="" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>@fa(['icon' => 'sign-out-alt', 'mr' => 0, 'color' => 'primary'])</i>
              </a>
            </li>
            @endauth
          </ul>
        </div>
      </nav>
    </div>
  </div>
</section>
