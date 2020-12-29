<footer class="">
    <div class="row w-100 no-gutters">
      <div class="col-lg-6 col-md-6 col-12">
        @include('layouts.map')
      </div>
      <div class="col-lg-6 col-md-6 col-12 d-flex flex-center bg-light text-center py-6">
        <div>
          <div class="mb-4">
            <h4>@lang('Visit us on social media')</h4>
            <a href="{{improve()->socialLink('facebook')}}" target="_blank" style="font-size: 120%" class="m-1">@fa(['fa_type' => 'b', 'icon' => 'facebook', 'size' => 'lg', 'classes' => 'facebook'])</a>
            <a href="{{improve()->socialLink('instagram')}}" target="_blank" style="font-size: 120%" class="m-1">@fa(['fa_type' => 'b', 'icon' => 'instagram', 'size' => 'lg', 'classes' => 'instagram'])</a>
          </div>

          <div class="mb-4 text-center">
              <div class="mb-2">+383 46222225</div>
              <div>
                <div>@lang('Isa Boletini street, no. 24')</div>
                <div>@lang('10000 Prishtina, Republic of Kosovo')</div>
              </div>
          </div>

          <div class="text-muted">
            <p class="m-0"><small>@lang('Select your preferred language below')</small></p>
          	<div class="">
                  <a class="link-primary" href="" onclick="event.preventDefault(); document.getElementById('lang-en').submit();">
                    <form id="lang-en" action="{{route('set-language', 'en')}}" method="POST" style="display: none;">@csrf</form>English</a> 
                  
                  &middot;
                  
                  <a class="link-primary" href="" onclick="event.preventDefault(); document.getElementById('lang-sq').submit();">
                    <form id="lang-sq" action="{{route('set-language', 'sq')}}" method="POST" style="display: none;">@csrf</form>Albanian</a>
                </div>
          </div>
        </div>
      </div>
    </div>
</footer>
<div class="container-fluid bg-dark py-2 px-3 text-center text-white">
  <div class="opacity-8 mb-1"><small>© {{config('app.name')}}</small></div>
</div>