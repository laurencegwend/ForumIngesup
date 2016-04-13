<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    protected $table = 'vote';

    protected $fillable = ['note', 'answer_id', 'user_id'];

    public function answer()
    {
        return $this->belongsTo('App\Answer');
    }

}
