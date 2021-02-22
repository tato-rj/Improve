@extends('layouts.app')

@push('header')
@endpush

@section('content')
	@title(['title' => 'Performance', 'position' => 'center'])

	@include('what-we-do.sections.list', [
		'title' => 'Anthropometry & Body Composition Assessment',
		'items' => ['Body Mass Index (BMI)', '% of Lean Body Mass', '% of Fat Mass', 'Limb Circumference', 'Posture Evaluation'],
		'image' => 'gym-lift',
		'icon' => 'dumbbell'
	])

	@include('what-we-do.sections.list', [
		'flipped' => true,
		'title' => 'Performance Testing',
		'items' => ['Speed', 'Agility', 'Change of Direction (COD)', 'Strength (Biodex)', 'Power (Biodex)', 'Flexibility', 'Aerobic Endurance', 'Muscular Endurance', 'Balance', 'Coordination'],
		'image' => 'gym-kettlebells',
		'icon' => 'dumbbell'
	])

    @include('welcome.sections.testimonials')
    @include('welcome.sections.contact')
@endsection

@push('scripts')
<script type="text/javascript">
</script>
@endpush