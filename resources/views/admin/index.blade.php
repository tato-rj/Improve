@extends('layouts.app')

@push('header')
@endpush

@section('content')
<section class="container mb-5">
	<div class="row">
		<div class="col-12 mb-5">
			<h2 class="text-center"><strong>Admin dashboard</strong></h2>
		</div>
		<div class="col-12 text-right mb-4">
			<a href="{{route('products.create')}}" class="btn btn-primary">@fa(['icon' => 'plus'])Create a new product</a>
		</div>

		@include('components.product.filters')

		@forelse($products as $product)

		@include('components.product.card', ['sm' => true, 'label' => 'Edit', 'route' => route('products.edit', $product)])
		
		@empty
		
		<div class="col-12 py-4">
			<p class="text-muted text-center"><i>No products yet...</i></p>
		</div>
		
		@endforelse

		@include('components/product/links')
	</div>
</section>
@endsection

@push('scripts')
<script type="text/javascript">
</script>
@endpush