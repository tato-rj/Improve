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

	changeTestimonial('next');

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
	let testimonials = {
		1: {
			'name' : 'Mark Ross',
			'text' : 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
			'position' : 'Marathon runner',
			'image' : '{{asset('images/avatars/user1.jpg')}}'
		},
		2: {
			'name' : 'Joe Davis',
			'text' : 'In metus vulputate eu scelerisque. Ullamcorper dignissim cras tincidunt lobortis feugiat!',
			'position' : 'Lab technician',
			'image' : '{{asset('images/avatars/user2.jpg')}}'
		},
		3: {
			'name' : 'Joan Reeves',
			'text' : 'Augue neque gravida in fermentum et. Maecenas ultricies mi eget mauris pharetra et. Facilisi morbi tempus iaculis urna id volutpat lacus.',
			'position' : 'Journalist',
			'image' : '{{asset('images/avatars/user3.jpg')}}'
		},
		4: {
			'name' : 'Brian Greene',
			'text' : 'Arcu cursus euismod quis viverra nibh. Aliquam malesuada bibendum arcu vitae elementum curabitur! Tincidunt eget nullam non nisi.',
			'position' : 'Engineer',
			'image' : '{{asset('images/avatars/user4.jpg')}}'
		},
		5: {
			'name' : 'Ashley Jones',
			'text' : 'Adipiscing vitae proin sagittis nisl rhoncus mattis. Ante in nibh mauris cursus mattis molestie a iaculis.',
			'position' : 'Athlete',
			'image' : '{{asset('images/avatars/user5.jpg')}}'
		}
	};
	let max = Object.size(testimonials);
	let $container = $('#testimonial');

	direction == 'next' ? needle+=1 : needle-=1;

	if (needle < 1) {
		needle = max;
	} else if (needle > max) {
		needle = 1;
	}

	let before = needle > 1 ? needle - 1 : max;
	let after = needle < max ? needle + 1 : 1;

	$('[data-toggle="testimonial"][data-direction="previous"]').css('background-image', 'url('+testimonials[before]['image']+')');
	$('[data-toggle="testimonial"][data-direction="next"]').css('background-image', 'url('+testimonials[after]['image']+')');
	$('.testimonial-image').css('background-image', 'url('+testimonials[needle]['image']+')');
	$container.attr('data-testimonial', needle);
	$container.find('.testimonial-text').text(testimonials[needle]['text']);
	$container.find('.testimonial-name').text(testimonials[needle]['name']);
	$container.find('.testimonial-position').text(testimonials[needle]['position']);
}

Object.size = function(obj) {
    var size = 0, key;
    for (key in obj) {
        if (obj.hasOwnProperty(key)) size++;
    }
    return size;
};
</script>
@endpush