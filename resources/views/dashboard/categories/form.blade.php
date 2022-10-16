<!-- action('App\Http\Controllers\Dahsboard\CategoryController@store')-->
<form action = "{{ action('CategoryController@store') }}" method = "POST">
    {{csrf_field()}} 
    <div class="modal-body">
    <div class="form-group">
        <label for="cat_name">Name</label>
        <input type="cat_name" class="form-control" id="cat_name" placeholder="Enter name">
    </div>
    <div class="form-group col-md-4">
        <label>Select parent category</label>
            <select type="text" name="category_id" class="form-control">
                <option value="">None</option>
                   
                    @foreach($categories as $category)
                        
                        <option value="{{$category->id}}">{{$category->name}}</option>
                                
                    @endforeach
                   
            </select>
        </label>    
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
