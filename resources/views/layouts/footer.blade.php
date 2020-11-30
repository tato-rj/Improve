<footer class="container">
    <div class="row border-top py-4">
        <div class="col-12 text-muted text-center">
        	<div class="mb-2">
                <a class="link-primary" href="" onclick="event.preventDefault(); document.getElementById('lang-en').submit();">
                  <form id="lang-en" action="{{route('set-language', 'en')}}" method="POST" style="display: none;">@csrf</form>English</a> 
                
                &middot;
                
                <a class="link-primary" href="" onclick="event.preventDefault(); document.getElementById('lang-sq').submit();">
                  <form id="lang-sq" action="{{route('set-language', 'sq')}}" method="POST" style="display: none;">@csrf</form>Albanian</a>
              </div>
            © {{config('app.name')}}
        </div>
    </div>
</footer>