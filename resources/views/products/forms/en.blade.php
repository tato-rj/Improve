<h4>English</h4>
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
