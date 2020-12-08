@php($new = ! isset($product))

<div class="row mb-4">
	<div class="col-lg-6 col-md-6 col-12">
		@include('products.forms.en')
	</div>

	<div class="col-lg-6 col-md-6 col-12">
		@include('products.forms.sq')
	</div>

	<div class="col-12 mt-3 mb-4 border-top"></div>

  <div class="col">
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text">€</span>
      </div>
      <input inputmode="numeric"
           name="price" 
           value="{{$new ? old('price') : $product->price}}" 
           placeholder="Price in USD" 
           id="price" 
           required
           class="form-control {{$errors->has('price') ? 'is-invalid' : ''}}">
    </div>
  </div>

	<div class="col">
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text">%</span>
      </div>
      <input type="number" 
      		 name="discount" 
      		 value="{{$new ? old('discount') : $product->discount}}" 
      		 placeholder="Discount" 
           min="0"
           max="100" 
      		 class="form-control {{$errors->has('discount') ? 'is-invalid' : ''}}">
    </div>
	</div>

	<div class="col">
      <div class="custom-file">
        <input name="cover_image" 
        	   type="file" 
        	   id="customFile" 
        	   class="custom-file-input {{$errors->has('cover_image') ? 'is-invalid' : ''}}">
        <label class="custom-file-label truncate" style="font-size: 1rem" for="customFile">Cover image</label>
      </div>
	</div>
</div>