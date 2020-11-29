	<div class="row no-gutters py-4">
		<div class="col-lg-8 col-md-8 col-12 pr-4 mb-4 order-lg-1 order-md-1 order-2">
			<h3 class="accent-bottom mb-4"><strong>{{__($title)}}</strong></h3>
			<p class="text-muted">@lang('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat').</p>
			<p class="text-muted">@lang('Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur').</p>
			<a href="" class="btn btn-primary">@fa(['icon' => $button['icon']]){{__($button['label'])}}</a>
		</div>
		<div class="col-lg-4 col-md-4 col-12 mb-4 order-lg-2 order-md-2 order-1" id="{{$image}}-images" style="min-height: 240px">
			<div class="w-100 h-100 position-absolute" style="background-image: url({{asset('images/backgrounds/'.$image.'.jpg')}}); background-size: cover; background-position: top; top: 0; left: 0;"></div>
			<div class="w-100 h-100 position-absolute" style="background-image: url({{asset('images/backgrounds/'.$image.'2.jpg')}}); background-size: cover; background-position: top; top: 0; left: 0; display: none;"></div>
			<div class="w-100 h-100 position-absolute" style="background-image: url({{asset('images/backgrounds/'.$image.'3.jpg')}}); background-size: cover; background-position: top; top: 0; left: 0; display: none;"></div>
		</div>
	</div>