<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class book extends Model
{
    use HasFactory;

    public function toDetail(){
        return $this->hasOne(detail::class);
        // has one = hanya satu
    }

    public function toCategory(){
        return $this->hasOne(category::class);
        // has one = hanya satu
    }
}


