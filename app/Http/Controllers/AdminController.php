<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function category(){


      $categories = Category::all();
     return view('admin-dashboard.starter',[
        "categories" =>   $categories
     ]);

    }

    public function store_category(Request $request){

         $request->validate([
            'name' => ['required', 'string'] ,
             'image' => ['required', 'img']
           ]);


        $path = '';
        if($request->file('image')){
          $image = $request->file('image');
          $path = $image->store('category','public');
        }

        $categories = new Category();
        $categories->name = $request->name;
        $categories->image = $request->image;
        $categories->save();


        $categories = Category::all();
       return view('admin-dashboard.category.show',[
        "categories" =>   $categories
       ]);
    }
}
