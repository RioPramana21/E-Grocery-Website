<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index()
    {
        return view('indexpage', [
        'title' => 'Starting Page',
        'active' => 'starting_page'
        ]);
    }

    public function home()
    {
        return view('main_pages.homepage', [
        'title' => 'Home',
        'active' => 'home',
        'items' => Item::latest()->paginate(10)
        ]);
    }

    public function show(Item $item)
    {
        return view('main_pages.item_detail', [
        'item' => $item,
        'active' => 'products'
        ]);
    }
}
