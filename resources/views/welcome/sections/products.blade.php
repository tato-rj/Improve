<section class="container mb-6">
	@title(['title' => 'Sports nutrition', 'position' => 'center'])
	<div class="row">
		@foreach($products as $product)
		@include('components.product.card', ['label' => 'SHOW NOW', 'route' => route('products.show', $product)])
		@endforeach
	</div>
	<div class="text-center p-3">
		<a href="{{route('products.index')}}" class="link-primary">@lang('View all products') @fa(['icon' => 'long-arrow-alt-right', 'mr' => 0, 'ml' => 1])</a>
	</div>
</section>