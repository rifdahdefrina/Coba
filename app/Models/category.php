<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;

    public function toBook(){
        return $this->hasMany(book::class);
        // has one = punya bnyk
    }
}


