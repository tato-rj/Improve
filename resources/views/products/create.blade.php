@extends('layouts.app')

@push('header')
@endpush

@section('content')
<section class="container mb-5">
	<form method="POST" action="{{route('products.store')}}" enctype="multipart/form-data">
		@csrf
		@include('products.forms.all')

		<div class="text-center">
			<button type="submit" class="btn btn-primary">Save product</button>
		</div>
	</form>
</section>
@endsection

@push('scripts')
<script src="{{asset('js/vendor/simple-mask-money.js')}}"></script>
<script type="text/javascript">
SimpleMaskMoney.setMask('#price_en');
SimpleMaskMoney.setMask('#price_sq');
</script>
@endpush