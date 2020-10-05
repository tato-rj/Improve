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
</script>
@endpush