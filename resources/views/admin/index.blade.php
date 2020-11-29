@extends('layouts.app')

@push('header')
@endpush

@section('content')
<section class="container">
	<div class="row">
		<div class="col-12 text-right mb-4">
			<a href="{{route('products.create')}}" class="btn btn-primary">@fa(['icon' => 'plus'])Create a new product</a>
		</div>
		<div class="col-12 row">
			@forelse($products as $product)
			@include('components.product.card', ['product' => $product, 'label' => 'Edit', 'route' => route('products.edit', $product)])
			@empty
			<div class="col-12 py-4">
				<p class="text-muted text-center"><i>No products yet...</i></p>
			</div>
			@endforelse
		</div>

		<div class="col-12">
			{{$products->links()}}
		</div>
	</div>
</section>
@endsection

@push('scripts')
<script type="text/javascript">
</script>
@endpush