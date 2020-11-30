<h4>Albanian</h4>
<input type="text" 
	   name="name_sq" 
	   value="{{$new ? old('name_sq') : $product->name_sq}}" 
	   placeholder="Emrin" 
	   class="form-control {{$errors->has('name_sq') ? 'is-invalid' : ''}} mb-2">	

<input type="text" 
	   name="headline_sq" 
	   value="{{$new ? old('headline_sq') : $product->headline_sq}}" 
	   placeholder="Titull" 
	   class="form-control {{$errors->has('headline_sq') ? 'is-invalid' : ''}} mb-2">

<textarea name="description_sq" 
		  rows="5"
		  placeholder="Përshkrim" 
		  class="form-control {{$errors->has('description_sq') ? 'is-invalid' : ''}} mb-2">{{$new ? old('description_sq') : $product->description_sq}}</textarea>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text">€</span>
  </div>
  <input type="number" 
  		 min="0" 
  		 name="price_sq" 
  		 value="{{$new ? old('price_sq') : $product->price_sq}}" 
  		 placeholder="Çmimi në EURO" 
  		 class="form-control {{$errors->has('price-sq') ? 'is-invalid' : ''}}">
  <div class="input-group-append">
    <span class="input-group-text">.00</span>
  </div>
</div>