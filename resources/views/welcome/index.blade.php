@extends('layouts.app')

@push('header')
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600&display=swap" rel="stylesheet">
@endpush

@section('content')
    @include('welcome.sections._lead')
    @include('welcome.sections.highlights')
    @include('welcome.sections.products')
    @include('welcome.sections.band')
    @include('welcome.sections.services')
@endsection

@push('scripts')
<script type="text/javascript">
if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
	console.log('Cannot animate backgound on mobile.');
} else {
	$(window).scroll(function() {
	  let scrollTop = $(this).scrollTop();
	  let zoom = 100 + (scrollTop / 15);

	  $('#lead-bg').css('background-size', zoom+'%');
	});
}

</script>
@endpush