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
}
