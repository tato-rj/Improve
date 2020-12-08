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
