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
<form action="{{route('categories.store')}}" method="post">
                           
                           @include('backEnd.admin.categories.form')
                            

                           
                            <button type="submit" class="btn btn-primary pull-right">Add Category</button>
                            <div class="clearfix"></div>

                        </form>
@endsection