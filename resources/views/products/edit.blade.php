@extends('layouts.app')

@push('header')
@endpush

@section('content')
<section class="container mb-5">
	<div class="text-center">
		<img src="{{$product->image}}" style="width: 120px" class="mb-4">
	</div>
	<form method="POST" action="{{route('products.update', $product)}}" enctype="multipart/form-data" class="mb-3">
		@csrf
		@method('PATCH')
		<div class="row mb-4">
			<div class="col-lg-6 col-md-6 col-12">
				<h4>Engligh</h4>
				<input value="{{$product->name_en}}" placeholder="Name" type="text" name="name_en" class="form-control {{$errors->has('name_en') ? 'is-invalid' : ''}} mb-2" required>
				<input type="text" value="{{$product->headline_en}}" name="headline_en" placeholder="Headline" class="form-control {{$errors->has('headline_en') ? 'is-invalid' : ''}} mb-2" required>
				<textarea name="description_en" placeholder="Description" class="form-control {{$errors->has('description_en') ? 'is-invalid' : ''}} mb-2" rows="5" required>{{$product->description_en}}</textarea>
				<div class="input-group mb-3">
				  <div class="input-group-prepend">
				    <span class="input-group-text">$</span>
				  </div>
				  <input type="number" value="{{$product->price_en}}" min="0" name="price_en" placeholder="Price in USD" class="form-control {{$errors->has('price_en') ? 'is-invalid' : ''}}" required>
				  <div class="input-group-append">
				    <span class="input-group-text">.00</span>
				  </div>
				</div>
			</div>

			<div class="col-lg-6 col-md-6 col-12">
				<h4>Albanian</h4>
				<input value="{{$product->name_sq}}" placeholder="Emrin" type="text" name="name_sq" class="form-control {{$errors->has('name_sq') ? 'is-invalid' : ''}} mb-2">				
				<input type="text" value="{{$product->headline_sq}}" placeholder="Titull" name="headline_sq" class="form-control {{$errors->has('headline_sq') ? 'is-invalid' : ''}} mb-2">
				<textarea placeholder="Përshkrim" name="description_sq" class="form-control {{$errors->has('description_sq') ? 'is-invalid' : ''}} mb-2" rows="5">{{$product->description_sq}}</textarea>
				<div class="input-group mb-3">
				  <div class="input-group-prepend">
				    <span class="input-group-text">€</span>
				  </div>
				  <input type="number" min="0" name="price_sq" value="{{$product->price_sq}}" placeholder="Çmimi në EURO" class="form-control {{$errors->has('price-sq') ? 'is-invalid' : ''}}">
				  <div class="input-group-append">
				    <span class="input-group-text">.00</span>
				  </div>
				</div>
			</div>

			<div class="col-12">
		      <div class="custom-file">
		        <input type="file" class="custom-file-input {{$errors->has('cover_image') ? 'is-invalid' : ''}}" name="cover_image" id="customFile">
		        <label class="custom-file-label truncate" style="font-size: 1rem" for="customFile">Cover image</label>
		      </div>
			</div>
		</div>

		<div class="text-center">
			<button type="submit" class="btn btn-primary">Update product</button>
		</div>
	</form>

	<div class="text-center">
		<button class="btn btn-outline-secondary" data-toggle="modal" data-target="#delete-modal">@fa(['icon' => 'trash'])Delete product</button>
		@include('products.delete')
	</div>
</section>
@endsection

@push('scripts')
<script type="text/javascript">
</script>
@endpush