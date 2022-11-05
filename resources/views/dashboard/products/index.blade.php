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
                <h2>Product Information</h2>
            </div>
            <div class="pull-right">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Create Product </button>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Product Creation</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            
                               
                            @include('dashboard.products.form')
                            
                            
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
     
    <table style= "border: 1px solid black; border-collapse: collapse; width=100%" class="table table-bordered" >
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Origin</th>
            <th>Brand</th>
            <th>Category</th>
            <th>Membrane</th>
            <th>Separation</th>
            <th>Image</th>
            <th width="280px">Action</th>
        </tr>

        @foreach ($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->origin }}</td>
            <td>{{ $product->brand->name }}</td>
            <td>{{ $product->category->name }}</td>
            <td>{{ $product->membrane }}</td>
            <td>{{ $product->separation }}</td>
            <td><img src="/frontend/images/products/{{ $product->image }}" width="100px"></td>
            <td>
                <form action="" method="POST">
     
                   
      
                    <!--EDIT MODAL-->
                    
                    <a class="btn btn-primary" data-target="#editModal{{$product->id}}" data-toggle="modal">Edit</a>
                    <div class="modal fade" id="editModal{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Product Edit</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                
                                   
                                @include('dashboard.products.edit')
                                
                                
                            </div>
                        </div>
                    </div>
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

        
@endsection
