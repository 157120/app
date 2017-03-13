<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Category;

class CategoryController extends Controller {

    //
public function get(){
    $id = request ()->route("id");
    if(is_null($id)){
        $categories = \App\Categroy::all();
        return view("categories", ['categories'=>$caterories]);
    }
     $category = Category::find($id);
     if(is_null($category)){
     return redirect ("category");
     }
     return view("category", ['category'=>$caterory]);
     
}
    
    public function staticCreate() {

        $category = Category::firstOrCreate(
                        ['name' => 'First Category']);
        return "Category: " . $category->name . " is ready";

        /*
          $category = new App\Category();
          $category->name="First Category";
          $category->save();
         */
    }

}
