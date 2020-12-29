<section class="container mb-6">
	<h2 class="text-center text-uppercase mb-5"><strong>@lang('Our products')</strong></h2>
	<div class="row">
		@foreach($products as $product)
		@include('components.product.card', ['label' => 'SHOW NOW', 'route' => route('products.show', $product)])
		@endforeach
	</div>
	<div class="text-center p-3">
		<a href="{{route('products.index')}}" class="link-primary">@lang('View all products') @fa(['icon' => 'long-arrow-alt-right', 'mr' => 0, 'ml' => 1])</a>
	</div>
</section>