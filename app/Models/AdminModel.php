<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class AdminModel extends Model implements AuthenticatableContract
{
    use Authenticatable, HasFactory;

    protected $guard = 'admin';
    protected $table = 'admin';
    protected $guarded = ['id'];
}
