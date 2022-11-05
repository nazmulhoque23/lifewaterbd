<form action = "{{ route('products.store') }}" method = "POST" enctype="multipart/form-data">
    @csrf
    <div class="modal-body">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="name" class="form-control" id="name" name= "name" placeholder="Enter Product name">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <input type="description" class="form-control" id="description" name= "description" placeholder="Enter Product Description">
    </div>
    <div class="form-group">
        <label for="price">Price</label>
        <input type="price" class="form-control" id="price" name= "price" placeholder="Enter Product price">
    </div>
    <div class="form-group">
        <label for="origin">Origin</label>
        <input type="origin" class="form-control" id="origin" name= "origin" placeholder="Enter Product origin">
    </div>

    <div class="form-group">
        <label for="membrane">Membrane</label>
        <input type="membrane" class="form-control" id="membrane" name= "membrane" placeholder="Enter Product membrane">
    </div>

    <div class="form-group">
        <label for="capacity">Capacity</label>
        <input type="capacity" class="form-control" id="capacity" name= "capacity" placeholder="Enter Product capacity">
    </div>

    <div class="form-group">
        <label for="dimension">Dimension</label>
        <input type="dimension" class="form-control" id="dimension" name= "dimension" placeholder="Enter Product dimension">
    </div>

    <div class="form-group">
        <label for="technology">Technology</label>
        <input type="technology" class="form-control" id="technology" name= "technology" placeholder="Enter Product technology">
    </div>

    <div class="form-group">
        <label for="warranty">Warranty</label>
        <input type="warranty" class="form-control" id="warranty" name= "warranty" placeholder="Enter Product warranty">
    </div>

    <div class="form-group col-md-4">
        <label>Select Brand</label>
            <select type="text" name="brand_id" class="form-control">
                <option value="">None</option>
                   
                    @foreach($brands as $brand)
                        
                        <option value="{{$brand->id}}">{{$brand->name}}</option>
                            
                    @endforeach
                   
            </select>
        </label>    
    </div>

    <div class="form-group col-md-4">
        <label>Select category</label>
            <select type="text" name="category_id" class="form-control">
                <option value="">None</option>
                   
                    @foreach($categories as $category)
                        
                        <option value="{{$category->id}}">{{$category->name}}</option>
                            
                    @endforeach
                   
            </select>
        </label>    
    </div>

    <div class="form-group col-md-4">
        <label>Select Separation</label>
            <select type="text" name="features" class="form-control">
                <option value="">None</option>
                <option value="new arrival">New Arrival</option>
                <option value="special offers">Special Offers</option>
                <option value="featured">Featured</option>
            </select>
        </label>    
    </div>

    <div class="form-group">
        <strong>Image:</strong>
        <input type="file" name="image" class="form-control" placeholder="image">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
