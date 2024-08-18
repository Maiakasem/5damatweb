{{csrf_field()}}
                            <div class="row">
                                <div class="col-md-4">
                                        <div class="form-floating mb-3">    
                                            <label for="floatingInput1">Video Name</label>
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
                                        <div class="form-group">
                                            <label for="published" class="bmd-label-floating">Video Status</label>
                                            <select name="published" id="published" class="form-control">
                                                <option value="1" {{ isset($row) && $row->published == 1 ? 'selected' : '' }} style="color: black;">
                                                    Published
                                                </option>
                                                <option value="0" {{ isset($row) && $row->published == 0 ? 'selected' : '' }} style="color: black;">
                                                    Hidden
                                                </option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="col-md-4">
                                        <div class="form-floating mb-3">
                                            <label for="youtube">Video Category</label>
                                            <select name="cat_id" id="youtube" class="form-control">
                                                @foreach($categories as $category)
                                                    <option value="{{$category->id}}" {{isset($row) && $row->id == $category->id ? 'selected' : ''}} style="color: black;">
                                                        {{$category->name}}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-floating mb-3">
                                            <label for="example-multiple-select"> Video Skills </label>
                                            <select name="skills[]"  id="example-multiple-select" class="form-control select2" multiple="multiple">
                                                
                                                @foreach($skills as $skill)
                                                    <option value="{{$skill->id}}" 
                                                         {{in_array ($skill->id,$selectedSkills)? 'selected' : ''}}
                                                            style="color: black;">
                                                        {{$skill->name}}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>



                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                            <div class="form-floating mb-3">    
                                                <label for="floatingInput1">Video Iamge</label>
                                                <input type="file"  id="floatingInput1" name="image"  >
                                            </div>
                                </div>
                               
                                <div class="col-md-4">
                                        <div class="form-floating mb-3">
                                            <label for="example-multiple-select"> Video Tags </label>
                                            <select name="tags[]"  id="example-multiple-select" class="form-control select2" multiple="multiple">
                                                
                                                @foreach($tags as $tag)
                                                    <option value="{{$tag->id}}" 
                                                         {{in_array ($tag->id,$selectedTags)? 'selected' : ''}}
                                                            style="color: black;">
                                                        {{$tag->name}}
                                                    </option>
                                                @endforeach
                                            </select>
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
                            