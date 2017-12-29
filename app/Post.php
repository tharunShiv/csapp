<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Here we can set the primary key, table name, timestamps etc.,
    public function user(){
        return $this->belongsTo('App\User');
    }
}
