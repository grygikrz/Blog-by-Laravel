<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class blog_short extends Model
{

    protected $table = 'blog_short';


        public function blog()
    {
        
        return $this->belongsTo('App\blog');
    }
}
