<form action = "{{ route('brands.store') }}" method = "POST" enctype="multipart/form-data">
    @csrf
    <div class="modal-body">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="name" class="form-control" id="name" name= "name" placeholder="Enter name">
    </div>
    <div class="form-group col-md-4">
        <div class="form-group">
            <strong>Image:</strong>
            <input type="file" name="image" class="form-control" placeholder="image">
        </div>    
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
