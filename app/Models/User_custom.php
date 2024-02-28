<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;;

use Illuminate\Database\Eloquent\Model;

class User_custom extends Model
{
    use HasFactory;

    protected $table = 'users';

    // method Aksesors
    public function getPasswordAttribute($value)
    {
        return null;
    }

    protected $guarded = [];

    public function post()
    {
        return $this->hasMany(Post::class, 'users_id', 'id');
    }
}
