<div class="{{isset($sm) && $sm ? 'col-lg-3 col-md-3 col-sm-6' : 'col-lg-3 col-md-4 col-sm-6'}} col-12 mb-4">
	<a href="{{$route}}" class="link-none">
		<div class="p-4 border product hover-shadow t-2 position-relative">
			@include('components.product.discount')
			<div class="w-100 mb-4" style="background-image: url({{$product->image}}); background-repeat: no-repeat; background-size: cover; background-position: center; height: 300px">
			</div>
			<div>
				
				@if(! isset($sm))
					<h4 class="mb-1">{{$product->name}}</h4>
					<p class="text-muted">{{$product->headline}}</p>
				@else
					<h5>{{$product->name}}</h5>
				@endif
				<h2 class=" mb-3">{!! $product->formattedPrice !!}</h2>
				<button class="btn btn-primary">{{__($label)}}</button>
			</div>
		</div>
	</a>
</div>