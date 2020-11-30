@php($new = ! isset($product))

<div class="row mb-4">
	<div class="col-lg-6 col-md-6 col-12">
		@include('products.forms.en')
	</div>

	<div class="col-lg-6 col-md-6 col-12">
		@include('products.forms.sq')
	</div>

	<div class="col-12">
      <div class="custom-file">
        <input name="cover_image" 
        	   type="file" 
        	   id="customFile" 
        	   class="custom-file-input {{$errors->has('cover_image') ? 'is-invalid' : ''}}">
        <label class="custom-file-label truncate" style="font-size: 1rem" for="customFile">Cover image</label>
      </div>
	</div>
</div>