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
@component('backEnd.shared.edit',['moduleName'=>$moduleName,'pageTitle'=>$pageTitle,'pageDesc'=>$pageDesc])

<form action="{{ route($routeName.'.update', [$IdName => $row->id]) }}" method="post">
                           {{method_field('put')}}
                           @include('backEnd.admin.categories.form')
                            
                    </div>
                           
                            <button type="submit" class="btn btn-primary pull-right">Update Category</button>
                            <div class="clearfix"></div>

                        </form>
</div>
@endcomponent
@endsection