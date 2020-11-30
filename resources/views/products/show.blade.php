@extends('layouts.app')

@push('header')
@endpush

@section('content')
<section class="container mb-5">
	<div class="row mb-5 pb-5 border-bottom">
		<div class="col-lg-6 col-md-6 col-12 mb-4">
			<img src="{{$product->image}}" class="w-100">
		</div>

		<div class="col-lg-6 col-md-6 col-12 mb-4">
			<h1>{{$product->name}}</h1>
			<p class="text-muted mb-4">{{$product->headline}}</p>
			<p style="white-space: pre-wrap;" class="mb-4">{{$product->description}}</p>
			<h1 class="mb-4">{!! $product->price !!}</h1>
			<a href="mailto:{{email()}}?
				subject=My order for {{$product->name}}" class="btn btn-primary">ORDER NOW</a>
		</div>
	</div>
	
	<h5 class="mb-4"><strong>OTHER PRODUCTS</strong></h5>
	
	<div class="row">
		@foreach($suggestions as $suggestion)
		@include('components.product.card', ['sm' => true, 'product' => $suggestion, 'label' => 'SHOW NOW', 'route' => route('products.show', $suggestion)])
		@endforeach
	</div>
</section>
@endsection

@push('scripts')
<script type="text/javascript">
</script>
@endpush