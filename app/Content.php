<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
   protected $fillable = ['span' , 'title' , 'content'];

    public function user()
    {
       return $this->belongsTo(User::class);
    }

}
