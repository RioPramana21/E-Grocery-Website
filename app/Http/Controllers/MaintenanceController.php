<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class MaintenanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('admin.maintain', [
            'title' => 'Account Maintenance',
            'active' => 'maintain',
            'users' => $users
        ]);
    }

    public function updateRole($id){
        $user = User::where('id', $id)->first();
        return view('admin.update', [
            'title' => 'Update Role',
            'active' => 'maintain',
            'user' => $user
        ]);
    }

    public function saveRole(Request $request, $id){
        $request->validate([
            'role_id' => 'required'
        ]);

        $user = User::find($id);
        $user->role_id = $request->role_id;
        $user->save();

        return redirect()->route('account_maintenance')->with('success_message', 'Update role success!');
    }

    public function deleteRole($id){
        $orders = Order::where('user_id', $id)->get();
        foreach($orders as $order){
            Order::destroy($order->id);
        }
        User::destroy($id);
        return redirect()->route('account_maintenance')->with('success_message', 'Delete account success!');
    }

}
