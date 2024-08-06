@csrf  <!-- Include CSRF token for security -->
    
    <div class="row">
        <div class="col-md-4">
            <div class="form-floating mb-3">    
                <input type="email" class="form-control" id="floatingInput" name="email" value="{{ isset($row) ? $row->email : '' }}">
                <label for="floatingInput">Email address</label>
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-floating mb-3">    
                <input type="text" class="form-control" id="floatingInput1" name="name" value="{{ isset($row) ? $row->name : '' }}">
                <label for="floatingInput1">User Name</label>
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-floating mb-3">
                <input type="password" class="form-control" name="password" id="floatingInput2">
                <label for="floatingInput2">Password</label>
            </div>
        </div>
    </div>
