<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;
    protected $table = 'users';

    public function categories()
    {
        return $this->hasMany(Category::class,'user_id');
    }
}
