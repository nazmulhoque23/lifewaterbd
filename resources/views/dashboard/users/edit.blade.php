<form method="POST" action="{{ route('users.update', [$user]) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="modal-body">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="name" class="form-control" id="name" value="{{$user->name}}" name="name"
                placeholder="Enter User name">
        </div>
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" id="email" value="{{$user->email}}"
                name="description" placeholder="Enter User e-mail">
        </div>
        <div class="form-group">
            <label for="mobile_no">Mobile No</label>
            <input type="mobile_no" class="form-control" id="mobile_no" value="{{$user->mobile_no}}" name="mobile_no"
                placeholder="Enter user mobile number">
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="address" class="form-control" id="address" value="{{$user->address}}" name="address"
                placeholder="Enter User address">
        </div>

        
        <button type="submit" class="btn btn-primary">Edit product</button>
    </div>
</form>