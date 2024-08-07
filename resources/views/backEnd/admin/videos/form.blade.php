{{csrf_field()}}
                            <div class="row">
                                <div class="col-md-4">
                                        <div class="form-floating mb-3">    
                                            <label for="floatingInput1">Page Name</label>
                                            <input type="text" class="form-control" id="floatingInput1" name="name" value="{{isset($row)? $row->name :''}}" >
                                        </div>
                                </div>
                                    
                                <div class="col-md-4">
                                        <div class="form-floating mb-3">    
                                            <label for="floatingInput1"> Meta Keywords</label>
                                            <input type="text" class="form-control" id="floatingInput1" name="meta_keywords" value="{{isset($row)? $row->meta_keywords :''}}" >
                                        </div>
                                </div>
                                <div class="col-md-4">
                                        <div class="form-floating mb-3">    
                                            <label for="floatingInput1"> Description </label>
                                            <input type="text" class="form-control" id="floatingInput1" name="des" value="{{isset($row)? $row->meta_keywords :''}}" >
                                        </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-floating mb-3">
                                             
                                                    <label for="youtube">Youtube url</label>
                                                    <input type="url" class="form-control" id="youtube" name="youtube" value="{{isset($row)? $row->youtube :''}}" >

                                              
                                        </div>
                                    </div>
                            </div>
                            <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-floating mb-3">
                                             
                                                    <label for="youtube">Video Status</label>
                                                    <select name="published">
                                                        <option value="1" {{isset($row) && ($row->published==1 ? 'selected' : '')}}>published</option>
                                                        <option value="0" {{isset($row) && ($row->published==0 ? 'selected' : '')}}>hidden</option>
                                                    </select>
                                              
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating mb-3">
                                             
                                                    <label for="youtube">Video Category</label>
                                                    <select name="cat_id">
                                                       @foreach($categories as $category)
                                                       <option value="{{$category->id}}"  {{isset($row) && ($row->id==$category->id ? 'selected' : '')}}>{{$category->name}}</option>
                                                       @endforeach
                                                    </select>
                                              
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating mb-3">    
                                            <label for="floatingInput1">Video Iamge</label>
                                            <input type="text" class="form-control" id="floatingInput1" name="image" value="{{isset($row)? $row->name :''}}" >
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
                            