<?php

namespace App\Http\Controllers\Dahsboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function index()
    {
        $users = User::all();
        $orders = Order::all();
        return view('dashboard.users.index', compact(['users','orders']));
    }

    public function update(Request $request, $id)
    {
       
        $user = User::find($id);
        $input = $request->all();

        
        $user->update($input);

        return redirect()->back()->with('success');
    }
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->back();
    }
}
