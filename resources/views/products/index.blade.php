@extends('layouts.app')

@push('header')
@endpush

@section('content')
<section class="container mb-6">
	@title(['title' => 'Sports nutrition', 'position' => 'center'])
	<div class="row">
		@include('components.product.filters')
		
		@foreach($products as $product)
		@include('components.product.card', ['label' => 'SHOW NOW', 'route' => route('products.show', $product)])
		@endforeach

		@include('components/product/links')
	</div>
</section>
@endsection

@push('scripts')
<script type="text/javascript">
</script>
@endpush