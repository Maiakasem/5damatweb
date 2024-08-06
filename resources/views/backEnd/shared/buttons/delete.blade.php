<form action="{{route($routeName.'.destroy',[$IdName=>$row->id])}}" method="post">
                                              {{method_field('delete')}}
                                              {{csrf_field()}}
                                            <button type="submit" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Remove">
                                                <i class="material-icons">delete</i>
                                            </button>
</form>