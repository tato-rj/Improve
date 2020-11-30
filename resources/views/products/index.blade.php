@extends('layouts.app')

@push('header')
@endpush

@section('content')
<section class="container mb-6">
	<h2 class="text-center mb-5"><strong>@lang('OUR PRODUCTS')</strong></h2>
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