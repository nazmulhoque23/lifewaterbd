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
                @foreach($user->order as $orderproduct)
                    <li><i class = "fa fa-caret-right"></i>{{$orderproduct->product_id}}=>amount: {{$orderproduct->quantity}} </li>
                @endforeach    
            </ul>
        </td>
            <td>

                <form action="" method="POST">
     
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
      
                    
                    
                    
                </form>
               
            </td>
        </tr>
        @endforeach
    </table>

        
@endsection
