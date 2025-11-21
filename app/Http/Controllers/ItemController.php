<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function index(){
        $items = Item::latest()->paginate(8);
        return view('item_management.view_items', [
            'title'=> 'Item Management',
            'active' => 'item_management',
            'items' => $items
        ]);
    }

    public function create(){
        return view('item_management.new_item', [
            'title'=> '',
            'active'=> '',
        ]);
    }
}
