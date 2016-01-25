<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $table = 'posts';

    protected $fillable = ['title', 'message', 'user_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
