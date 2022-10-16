<form action = "{{ route('categories.store') }}" method = "POST">
    @csrf
    <div class="modal-body">
    <div class="form-group">
        <label for="cat_name">Name</label>
        <input type="cat_name" class="form-control" id="cat_name" name= "cat_name" placeholder="Enter name">
    </div>
    <div class="form-group col-md-4">
        <label>Select parent category</label>
            <select type="text" name="category_id" class="form-control">
                <option value="">None</option>
                   
                    @foreach($categories as $category)
                        
                        <option value="{{$category->id}}">{{$category->cat_name}}</option>
                            
                    @endforeach
                   
            </select>
        </label>    
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
