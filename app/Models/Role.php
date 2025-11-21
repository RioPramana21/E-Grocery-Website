<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    public $timestamps = false; //tidak menggunakan timestamps sesuai permintaan soal

    public function account(){
        return $this->belongsTo(User::class);
    }
}
