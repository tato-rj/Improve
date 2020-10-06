<section class="container mb-6">
	@include('components.service', [
		'title' => 'Physiology and Biomarker Testing', 
		'button' => ['label' => 'Schedule a test with an expert', 'icon' => 'calendar-alt'],
		'image' => 'testing'])

	@include('components.service', [
		'title' => 'Performance Nutrition Coaching', 
		'button' => ['label' => 'Start your healthy program now', 'icon' => 'utensils'],
		'image' => 'services'])
</section>