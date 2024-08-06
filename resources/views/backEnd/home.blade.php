@extends('layouts.app')
@section('Header')
    Home Page
@endsection
@push('css')

@endpush
@section('content')

    @component('layouts.header', ['nav_title' => 'Home Page'])

    @endcomponent
@endsection
<script>
    
</script>