<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //    
    protected $tables = "comments";
    
    public function articles() {
    return $this->belongsto('App\Article');
}

}
    
    