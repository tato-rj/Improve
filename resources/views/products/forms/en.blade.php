<h4>Engligh</h4>
<input type="text" 
	   name="name_en" 
	   value="{{$new ? old('name_en') : $product->name_en}}" 
	   placeholder="Name (max. 60 characters)" 
	   maxlength="60" 
	   required
	   class="form-control {{$errors->has('name_en') ? 'is-invalid' : ''}} mb-2">

<input type="text" 
	   name="headline_en" 
	   value="{{$new ? old('headline_en') : $product->headline_en}}" 
	   placeholder="Headline" 
	   required
	   class="form-control {{$errors->has('headline_en') ? 'is-invalid' : ''}} mb-2">

<textarea name="description_en" 
		  rows="5"
		  placeholder="Description" class="form-control {{$errors->has('description_en') ? 'is-invalid' : ''}} mb-2"  
		  required>{{$new ? old('description_en') : $product->description_en}}</textarea>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text">$</span>
  </div>
  <input type="number" 
  		 name="price_en" 
  		 min="0" 
  		 value="{{$new ? old('price_en') : $product->price_en}}" 
  		 placeholder="Price in USD" 
  		 required
  		 class="form-control {{$errors->has('price_en') ? 'is-invalid' : ''}}">
  <div class="input-group-append">
    <span class="input-group-text">.00</span>
  </div>
</div>