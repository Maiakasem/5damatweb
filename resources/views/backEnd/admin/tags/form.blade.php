{{csrf_field()}}
                            <div class="row">
                                <div class="col-md-4">
                                        <div class="form-floating mb-3">    
                                            <label for="floatingInput1">Tag Name</label>
                                            <input type="text" class="form-control" id="floatingInput1" name="name" value="{{isset($row)? $row->name :''}}" >
                                        </div>
                                </div>
                                    
                                
                            </div>
                            