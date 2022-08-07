<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail extends Model
{
    use HasFactory;

    public function toBook(){
        return $this->hasOne(book::class);
        // has one = hanya satu
    }
}


