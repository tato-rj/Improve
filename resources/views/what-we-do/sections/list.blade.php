@php($isFlipped = isset($flipped) && $flipped)

<div class="container mb-6">
	<div class="row">
		<div class="{{$isFlipped ? 'order-lg-2 order-md-2 order-1' : null}} col-lg-6 col-md-6 col-12 mb-4">
			<h4 class="accent-bottom"><strong>@lang($title)</strong></h4>
			<div>
				@isset($items)
				<ul class="p-3">
					@foreach($items as $item)
					<li class="mb-3 hover-primary noselect">@fa(['icon' => $icon, 'color' => 'dark', 'classes' => 'hover-target'])@lang($item)</li>
					@endforeach
				</ul>
				@endisset

				{{$slot ?? null}}

				<a href="mailto:{{email()}}" class="btn btn-outline-primary btn-lg border-1x text-uppercase">@lang('Let\'s get started')</a>
			</div>
		</div>

		<div class="{{$isFlipped ? 'order-lg-1 order-md-1 order-2' : null}} col-lg-6 col-md-6 col-12 p-3" style="min-height: 400px">
			<div class="bg-align-center h-100 w-100 shadow" style="background-image: url({{asset('images/services/'.$image.'.jpg')}})"></div>
		</div>
	</div>
</div>