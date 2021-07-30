<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{

    protected $table = 'blogs';
    protected $primaryKey = 'id';
    protected $fillable = [
        'user_id', 'title', 'des', 'start_date', 'end_date', 'img', 'is_active', 'is_delete'
    ];

    public function user()
    {
        return $this->hasOne('App\User','id','user_id');
    }
}
