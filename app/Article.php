<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $tables = "articles";


    public function comments() {
    return $this->hasMany('App\Comment', 'category_id');}
        
    public function category() {
    return $this->belongsto('App\Category');
    }
}
