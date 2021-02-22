@extends('layouts.app')

@push('header')
@endpush

@section('content')
	@title(['title' => 'Athletic development', 'position' => 'center'])

	@component('what-we-do.sections.list', [
		'title' => 'Long-term athletic development planning & monitoring',
		'image' => 'gym-woman-backlift'
	])
	<div class="py-5">
		<p class="lead m-0">@lang('IMPROVE offers long-term systematic testing, program designing and monitoring of sports related parameters specific to a particular sport.')</p>
	</div>
	@endcomponent

    @include('welcome.sections.testimonials')
    @include('welcome.sections.contact')
@endsection

@push('scripts')
<script type="text/javascript">
</script>
@endpush