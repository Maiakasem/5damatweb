{{csrf_field()}}
                            <div class="row">
                                <div class="col-md-4">
                                        <div class="form-floating mb-3">    
                                            <label for="floatingInput1">User Name</label>
                                            <input type="text" class="form-control" id="floatingInput1" name="name" value="{{isset($row)? $row->name :''}}" >
                                        </div>
                                </div>
                                    
                                <div class="col-md-4">
                                        <div class="form-floating mb-3">    
                                            <label for="floatingInput1"> Meta Keywords</label>
                                            <input type="text" class="form-control" id="floatingInput1" name="meta_keywords" value="{{isset($row)? $row->meta_keywords :''}}" >
                                        </div>
                                </div>
                            </div>
                                <div class="row">
                                    <div class="col-md-12">
                                            <div class="form-floating mb-3">    
                                                <label for="floatingInput1">Meta Description</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="meta_des">{{ isset($row) ? $row->meta_des : '' }}</textarea>

                                                
                                            </div>
                                    </div>
                                </div>
                            