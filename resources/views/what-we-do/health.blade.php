@extends('layouts.app')

@push('header')
@endpush

@section('content')
	@title(['title' => 'Health', 'position' => 'center'])

	@include('what-we-do.sections.list', [
		'title' => 'Anthropometry & Body Composition Assessment',
		'items' => ['Height & Weight', 'Body Mass Index (BMI)', '% of Lean Body Mass', '% of Fat Mass', 'Posture Evaluation', 'Waist Circumference', 'Waist to Hight Ratio (WHR)'],
		'image' => 'gym-woman-lift',
		'icon' => 'dumbbell'
	])

	@include('what-we-do.sections.list', [
		'flipped' => true,
		'title' => 'Health-related Fitness Testing',
		'items' => ['Aerobic Endurance', 'Muscular Strength ', 'Muscular endurance', 'Flexibility', 'Balance '],
		'image' => 'gym-cables',
		'icon' => 'dumbbell'
	])

    @include('welcome.sections.testimonials')
    @include('welcome.sections.contact')
@endsection

@push('scripts')
<script type="text/javascript">
</script>
@endpush