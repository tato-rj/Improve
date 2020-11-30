@extends('layouts.app')

@push('header')
@endpush

@section('content')
<section class="container mb-5">
	<div class="row align-items-center bg-light px-4 py-3 mb-4">
		<div class="col-lg-2 col-md-3 col-sm-5 col-12 my-2">
			<img src="{{$product->image}}" class="w-100">
		</div>
		<div class="col-lg-10 col-md-9 col-sm-7 col-12 my-2">
			<p><strong>{{$product->name}}</strong></p>
			<p class="text-muted">{{$product->headline}}</p>
			<button class="btn btn-outline-secondary" data-toggle="modal" data-target="#delete-modal">@fa(['icon' => 'trash'])Delete product</button>
			@include('products.delete')
		</div>	
	</div>
	<form method="POST" action="{{route('products.update', $product)}}" enctype="multipart/form-data" class="mb-3">
		@csrf
		@method('PATCH')
		@include('products.forms.all')

		<div class="text-center">
			<button type="submit" class="btn btn-primary">Update product</button>
		</div>
	</form>
</section>
@endsection

@push('scripts')
<script type="text/javascript">

</script>
@endpush