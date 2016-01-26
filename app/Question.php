<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{

    protected $table = 'question';

    protected $fillable = ['title', 'message', 'user_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
