<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <div class="row">
                    <div class="col-md-8">
                        <h4 class="card-title ">{{$moduleName}} {{$pageTitle}}</h4>
                        <p class="card-category"> {{$pageDesc}}</p>
                    </div>
                            
                </div>
                @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                @endif
            </div>
                       
        </div>
       
        <div class="card-body">           
        {{ $slot }}
        </div>          
          
                         
    </div> 
</div>