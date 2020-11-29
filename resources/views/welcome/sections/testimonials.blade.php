<section class="container mb-6">
	<h2 class="text-center mb-5"><strong>@lang('CLIENTS TESTIMONIALS')</strong></h2>
	<div class="row">
		<div class="col-lg-2 col-md-2 col-6 order-lg-1 order-md-1 order-2 cursor-pointer mb-3 pr-2" style="min-height: 120px">
			<div class="bg-align-center position-relative h-100" data-toggle="testimonial" data-direction="previous" style="background-image: url({{asset('images/avatars/user1.jpg')}});">
				<div class="absolute-center" style="z-index: 1; opacity: 0.8">
					@fa(['icon' => 'long-arrow-alt-left', 'color' => 'white', 'mr' => 0, 'size' => 'lg'])
				</div>
				<div class="overlay-red" style="opacity: 0.65"></div>
			</div>
		</div>
		<div id="testimonial" data-testimonial="2" class="col-lg-8 col-md-8 col-12 order-lg-2 order-md-2 order-1 mb-3">
			<div class="row no-gutters w-100 shadow-center" style="border-left: 4px solid #ed1c24">
				<div class="bg-align-center testimonial-image col-4" style="background-image: url({{asset('images/avatars/user2.jpg')}})"></div>
				<div class="col-8 p-4">
					<h1>@fa(['icon' => 'quote-left', 'color' => 'primary'])</h1>
					<p class="testimonial-text">@lang('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua').</p>
					<h4 class="m-0 testimonial-name">Joe Davis</h4>
					<div class="text-muted"><small class="testimonial-position">@lang('Job description')</small></div>
				</div>
			</div>
		</div>
		<div class="col-lg-2 col-md-2 col-6 order-lg-3 order-md-3 order-3 cursor-pointer mb-3 pl-2">
			<div data-toggle="testimonial" data-direction="next" class="position-relative bg-align-center h-100" style="background-image: url({{asset('images/avatars/user3.jpg')}});">
				<div class="absolute-center" style="z-index: 1; opacity: 0.8">
					@fa(['icon' => 'long-arrow-alt-right', 'color' => 'white', 'mr' => 0, 'size' => 'lg'])
				</div>
				<div class="overlay-red" style="opacity: 0.65"></div>
			</div>
		</div>
	</div>
</section>