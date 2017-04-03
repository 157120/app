<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Article;

use App\Http\Requests;

class ArticleController extends Controller
{
    public function get(){
    $id = request ()->route("id");
        $category = Category::find($id);
        //$articles = $category->articles; 
         return view("article", ['category'=>$category]);
}

public function create (){
    $data = request()->all();
    $category_id = array_get ($data, "category_id");
    $article = new Article();
    $article ->title = array_get ($data, "title");
    $article ->content = array_get ($data, "content");
    $article ->category_id = $category_id;
    $article->save();
    return redirect(route("article.get", ["id"=>$category_id]));
    
}


/*public function create(){
    echo 'it works';
}*/
}

