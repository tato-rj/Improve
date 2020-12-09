@if($products && ! $products->isEmpty())
<div class="col-12 d-flex d-apart mb-4">
	<div class="text-muted">
	<small>Showing {{$products->firstItem()}} - {{$products->lastItem()}} of {{$products->total()}} products</small>
	</div>

	<div>
		<form class="d-flex" method="GET" action="{{route(request()->route()->getName())}}">
			<select name="view" class="form-control form-control-sm mr-2">
				<option selected disabled>Filter by</option>
				<option {{request()->view == 'all' ? 'selected' : null}} value="all">View all</option>
				<option {{request()->view == 'onsale' ? 'selected' : null}} value="onsale">On sale</option>
			</select>

			<select name="sortby" class="form-control form-control-sm">
				<option selected disabled>Order by</option>
				<option {{request()->sortby == 'newest' ? 'selected' : null}} value="newest">Newest</option>
				<option {{request()->sortby == 'oldest' ? 'selected' : null}} value="oldest">Oldest</option>

				<option {{request()->sortby == 'az' ? 'selected' : null}} value="az">A to Z</option>
				<option {{request()->sortby == 'za' ? 'selected' : null}} value="za">Z to A</option>
			</select>
		</form>
	</div>
</div>
@endif