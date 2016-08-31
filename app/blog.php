<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    
    protected $table = 'blog';
    
    
    public function comments()
    {
        
        return $this->hasMany('App\comments');
    }
    
    public function short_blog()
    {
        
        return $this->hasOne('App\blog_short');
    }
    
}
