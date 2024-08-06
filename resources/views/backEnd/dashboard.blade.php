@extends('layouts.app')
@section('Header')
   DashBoard
@endsection
@push('css')

@endpush
@section('content')

    @component('layouts.header', ['nav_title' => 'DashBoard'])

    @endcomponent
@endsection
<script>
    
</script>