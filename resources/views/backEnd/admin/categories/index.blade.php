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
@component('backEnd.shared.table',['pageTitle'=>$pageTitle, 'pageDesc'=>$pageDesc])
                    
                    @slot('addButton')
                        <div class="col-md-4 text-right">
                            <a href="{{route($routeName.'.create')}}" class="btn btn-white btn-round">Add Category<div class="ripple-container"></div></a>
                        </div>
                    @endslot
                    <div class="table-responsive">
                    <table class="table">
                        <thead class="text-primary">
                                <tr>
                                <th>
                                Id 
                                </th>
                                <th>
                                Name
                                </th>
                              <th>Control</th>
                                
                                </tr>
                        </thead>
                        <tbody>
                                <?php $i=0 ?>
                                @foreach($rows as $row)
                                <?php $i++ ?>
                                    
                                    <tr>
                                    <th>{{$i}}</th>
                                    <th>{{$row->name}}</th>
                                   
                                    <td class="td-actions text-left">
                                        <div class="btn-group" role="group" aria-label="Action buttons">
                                            @include('backEnd.shared.buttons.edit')
                                            @include('backEnd.shared.buttons.delete', ['routeName' => "categories"])
                                        </div>
                                    </td>
                                    </tr>
                                    
                                    @endforeach   
                            
                        </tbody>
                    </table>
                </div>
@endcomponent
@endsection