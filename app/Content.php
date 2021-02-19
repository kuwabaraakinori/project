<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    public function user()
    {
       return $this->belongsTo(User::class);
    }

   protected $fillable = ['span' , 'title' , 'content'];
}
