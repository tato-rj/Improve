<section class="container mb-6">
	<h2 class="text-center mb-5"><strong>OUR PRODUCTS</strong></h2>
	<div class="row">
		@foreach([1,2,3,4,5,6] as $product)
		@include('components.product.card', ['number' => $product])
		@endforeach
	</div>
	<div class="text-center p-3">
		<a href="" class="link-primary">View all products @fa(['icon' => 'long-arrow-alt-right', 'mr' => 0, 'ml' => 1])</a>
	</div>
</section>