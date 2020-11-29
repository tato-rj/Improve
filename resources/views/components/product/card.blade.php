<div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-4">
	<a href="{{$route}}" class="link-none">
		<div class="p-4 border product hover-shadow t-2">
			<div class="w-100 mb-4" style="background-image: url({{$product->image}}); background-repeat: no-repeat; background-size: cover; background-position: center; height: 300px">
			</div>
			<div>
				<h4 class="mb-1">{{$product->name_en}}</h4>
				<p class="text-muted mb-1">{{$product->headline_en}}</p>
				<h4 class="text-primary mb-3">${{$product->price_en}}<small>.00</small></h4>
				<button class="btn btn-primary">{{__($label)}}</button>
			</div>
		</div>
	</a>
</div>