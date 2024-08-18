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
                           @include('backEnd.admin.videos.form')
   
                           @php $url=getYoutubeId($row->youtube) @endphp

@if($url)
<iframe width="560" height="315" src="https://www.youtube.com/embed/{{$url}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>                  
@endif
                    </div>
                   
                          
                            <button type="submit" class="btn btn-primary pull-right">Update Video</button>
                            <div class="clearfix"></div>

                        </form>
                       
</div>
@endcomponent
@endsection