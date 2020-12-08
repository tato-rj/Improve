@if($product->discount)
<div class="badge badge-success position-absolute p-2 rounded-0" style="top: 0; left: 0; transform: rotate(-45deg) translate(-25%, -25%);">
	{{$product->discount}}% OFF
</div>
@endif