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
                <h2>User Information</h2>
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
            <th>Address</th>
            <th>Mobile No</th>
            <th>Email</th>
            <th>Ordered Products</th>
            <th width="280px">Action</th>
        </tr>

        @foreach ($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->address }}</td>
            <td>{{ $user->mobile_no }}</td>
            <td>{{ $user->email }}</td>
            <td>
            <ul class = "sclist" style="list-style: none;">
                @foreach($orders as $order)
                @if($user->id == $order->user_id)
                    <li><i class = "fa fa-caret-right"></i>{{$order->product->name}}=>amount: {{$order->quantity}}, price: {{$order->price}} </li>
                @endif
                @endforeach    
            </ul>
        </td>
            <td>

                <button type="submit" class="btn btn-primary" data-target="#editModal{{$user->id}}" data-toggle="modal">Edit</button>
                <div class="modal fade" id="editModal{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">User Edit</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            
                               
                            @include('dashboard.users.edit')
                            
                            
                        </div>
                    </div>
                </div>
                <form action="{{route('users.destroy', $user->id)}}" method="POST">
     
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
      
                    
                    
                    
                </form>
                
            </td>
        </tr>
        @endforeach
    </table>

        
@endsection
