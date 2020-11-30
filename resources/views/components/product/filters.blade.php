@if($products && ! $products->isEmpty())
<div class="col-12 d-flex d-apart mb-4">
	<div class="text-muted">
	<small>Showing {{$products->firstItem()}} - {{$products->lastItem()}} of {{$products->total()}} products</small>
	</div>
	<div>
		<select name="sortby" class="form-control form-control-sm">
			<option selected disabled>Order by</option>
			<option {{request()->sortby == 'newest' ? 'selected' : null}} value="{{route(request()->route()->getName(), ['sortby' => 'newest'])}}">Newest</option>
			<option {{request()->sortby == 'oldest' ? 'selected' : null}} value="{{route(request()->route()->getName(), ['sortby' => 'oldest'])}}">Oldest</option>

			<option {{request()->sortby == 'az' ? 'selected' : null}} value="{{route(request()->route()->getName(), ['sortby' => 'az'])}}">A to Z</option>
			<option {{request()->sortby == 'za' ? 'selected' : null}} value="{{route(request()->route()->getName(), ['sortby' => 'za'])}}">Z to A</option>
		</select>
	</div>
</div>
@endif