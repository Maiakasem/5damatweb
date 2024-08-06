@extends('layouts.app')
        @section('title')
        {{$moduleName}} {{$pageTitle}}
        @endsection

@section('content')
@component('layouts.header')
@slot('nav_title')
{{$moduleName}} {{$pageTitle}}
@endslot
@endcomponent
@component('backEnd.shared.create',['pageTitle'=>$pageTitle,'moduleName'=>$moduleName,'pageDesc'=>$pageDesc])
                      
                   
@endcomponent
<form action="{{route('skills.store')}}" method="post">
                           
                           @include('backEnd.admin.skills.form')
                            

                           
                            <button type="submit" class="btn btn-primary pull-right">Add Sklill</button>
                            <div class="clearfix"></div>

                        </form>
@endsection