<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
// use Illuminate\Auth\Authenticatable;
use Illuminate\Foundation\Auth\User as Model;

class AdminModel extends Model
{
    use  HasFactory;

    // protected $guard = 'admin';
    protected $table = 'admin';
    protected $guarded = ['id'];
}
