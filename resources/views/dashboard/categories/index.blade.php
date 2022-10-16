@extends('admin.home')

@section('content')
    
<style>
    .pull-left{
        display: inline-block;
        vertical-align: middle;
        margin: 15px;
    }
    .pull-right{
        display: inline-block;
        vertical-align: middle;
        margin-left: 650px;
    }
</style>
    
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left" style = "flex:auto">
                <h2>Category Information</h2>
            </div>
            <div class="pull-right">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Create Category </button>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            
                               
<form action = "{{ route('categories.store') }}" method = "POST">
    @csrf
    <div class="modal-body">
    <div class="form-group">
        <label for="cat_name">Name</label>
        <input type="cat_name" class="form-control" id="cat_name" placeholder="Enter name">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
     
    <table style= "border: 1px solid black; border-collapse: collapse; margin-left:5px;" class="table table-bordered" >
        <tr>
            <th>Category Name</th>
            
            
            <th width="280px">Action</th>
        </tr>
        @foreach ($categories as $category)
        <tr>
            <td>{{ $category->cat_name }}</td>
            
            <td>
                <form action="" method="POST">
     
                    <a class="btn btn-info" href="">Show</a>
      
                    <a class="btn btn-primary" href="">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

        
@endsection
