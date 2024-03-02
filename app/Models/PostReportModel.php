<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostReportModel extends Model
{
    use HasFactory;
    protected $table = 'post_report';
    protected $guarded = ['id'];

    public function complainant()
    {
        return $this->belongsTo(User::class,  'complainant_user_id', 'id');
    }

    public function reported()
    {
        return $this->belongsTo(User::class,  'reported_user_id', 'id');
    }

    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id', 'id');
    }
}
