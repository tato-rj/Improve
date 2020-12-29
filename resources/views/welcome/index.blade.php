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

	$('[data-toggle="testimonial"]').click(function() {
		changeTestimonial($(this).data('direction'));
	});
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

var needle = 1;

function changeTestimonial(direction)
{
	let $testimonials = $('#testimonials');
	let $current = $('#testimonials > div:visible');
	let $next, $prev;

	if (direction == 'next') {
		$next = getNext($current);
		$next.show();
		updateArrow($next);
	} else if (direction == 'previous') {
		$prev = getPrev($current);
		$prev.show();
		updateArrow($prev);
	}

	$current.hide();
}

function updateArrow($current)
{
	let $nextThumb = $('[data-direction="next"]');
	let $prevThumb = $('[data-direction="previous"]');

	$nextThumb.css('background-image', getNext($current).find('.testimonial-image').css('background-image'));
	$prevThumb.css('background-image', getPrev($current).find('.testimonial-image').css('background-image'));
}

function getNext($current)
{
	return $current.next().length ? $current.next() : $('#testimonials').find('>div').first();
}

function getPrev($current)
{
	return $current.prev().length ? $current.prev() : $('#testimonials').find('>div').last();
}
</script>
@endpush