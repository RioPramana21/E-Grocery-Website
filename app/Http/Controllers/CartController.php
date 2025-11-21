<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $curr_user = Auth::user();
        $orders = Order::where('user_id', $curr_user->id)->paginate(10);
        $total_price = 0;
        foreach($orders as $order){
            $total_price += $order->items->price;
        };
        return view('main_pages.cart', [
            'title' => 'Shopping Cart',
            'active' => 'order',
            'orders' => $orders,
            'total_price' => $total_price
        ]);
    }

    public function add_item(Request $request){
        $order = new Order();
        $order->user_id = Auth::user()->id;
        $order->item_id = $request->item_id;
        $order->price = $request->item_price;
        $order->save();

        return redirect()->route('my_cart')->with('success_message', 'Item added to cart!');
    }

    public function success()
    {
        return view('others.checkout_success', [
            'title' => 'Checkout Successful',
            'active' => 'order'
        ]);
    }

    public function delete_item(Request $request){
        Order::destroy($request->id);
        return redirect()->route('my_cart')->with('success_message', 'Item deleted!');
    }

    public function check_out(){
        $curr_user = Auth::user();
        $curr_user->order()->delete();
        return redirect()->route('success')->with('success_message', 'Checkout successful!');
    }

}
