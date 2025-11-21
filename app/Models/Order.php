<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public $timestamps = false; //tidak menggunakan timestamps sesuai permintaan soal
    protected $guarded = [];

    public function account(){
        return $this->belongsTo(User::class);
    }

    public function items(){
        return $this->belongsTo(Item::class, 'item_id', 'id');
    }
}
