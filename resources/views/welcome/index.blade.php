@extends('layouts.app')

@push('header')
@endpush

@section('content')
    @include('welcome.sections._lead')
    @include('welcome.sections.highlights')
    @include('welcome.sections.products')
    @include('welcome.sections.band')
    @include('welcome.sections.services')
    @include('welcome.sections.testimonials')
    @include('welcome.sections.contact')
@endsection

@push('scripts')
<script type="text/javascript">
$(document).ready(function() {
	setInterval(function() {
		changeBackgroundIn('#testing-images');
	}, 3500);

	setInterval(function() {
		changeBackgroundIn('#services-images');
	}, 3123);


});

$(window).scroll(function() {
  let scrollTop = $(this).scrollTop();

  zoomBackground('#lead-bg', scrollTop);
});

function zoomBackground(id, scrollTop)
{
	if (! onMobile()) {
	  let zoom = 100 + (scrollTop / 15);
	  $(id).css('background-size', zoom+'%');
	}
}

function changeBackgroundIn(element)
{
	let $next = $(element).find('>div:visible').fadeOut().next();

	if ($next.length) {
		$next.fadeIn();
	} else {
		$(element).find('>div').first().fadeIn();
	}
}
</script>
@endpush