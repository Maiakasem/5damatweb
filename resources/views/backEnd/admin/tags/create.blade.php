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
<form action="{{route('tags.store')}}" method="post">
                           
                           @include('backEnd.admin.tags.form')
                            

                           
                            <button type="submit" class="btn btn-primary pull-right">Add Tag</button>
                            <div class="clearfix"></div>

                        </form>
@endsection