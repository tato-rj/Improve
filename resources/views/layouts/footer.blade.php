<footer class="container border-top py-5">
    <div class="row">
      <div class="col-12 mb-2 text-center">
        <h4>Visit us on social media</h4>
        <a href="{{improve()->socialLink('facebook')}}" target="_blank" style="font-size: 120%" class="m-1">@fa(['fa_type' => 'b', 'icon' => 'facebook', 'size' => 'lg', 'classes' => 'facebook'])</a>
        <a href="{{improve()->socialLink('instagram')}}" target="_blank" style="font-size: 120%" class="m-1">@fa(['fa_type' => 'b', 'icon' => 'instagram', 'size' => 'lg', 'classes' => 'instagram'])</a>
      </div>
      <div class="col-12 text-muted text-center">
        <p class="m-0"><small>Select your preferred language below</small></p>
      	<div class="">
              <a class="link-primary" href="" onclick="event.preventDefault(); document.getElementById('lang-en').submit();">
                <form id="lang-en" action="{{route('set-language', 'en')}}" method="POST" style="display: none;">@csrf</form>English</a> 
              
              &middot;
              
              <a class="link-primary" href="" onclick="event.preventDefault(); document.getElementById('lang-sq').submit();">
                <form id="lang-sq" action="{{route('set-language', 'sq')}}" method="POST" style="display: none;">@csrf</form>Albanian</a>
            </div>
      </div>
    </div>
</footer>
<div class="container-fluid bg-light py-2 px-3 text-center text-muted">
  <div><small>© {{config('app.name')}}</small></div>
</div>