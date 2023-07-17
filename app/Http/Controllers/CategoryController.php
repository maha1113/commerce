<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

      $categories = Category::all();
      return view('admin-dashboard.category.show',[
         "categories" =>   $categories
      ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin-dashboard.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          $validator  =  $request->validate([

            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg','max:2048'],
            'name' => ['required', 'string', 'max:255'],
           ]);


        $path = '';
        if($request->file('image')){
          $image = $request->file('image');
          $path = $image->store('category','public');
        }

        $categories = new Category();
        $categories->name = $request->name;
        $categories->image = $path;
        $categories->save();


        $categories = Category::all();
       return view('admin-dashboard.category.show',[
        "categories" =>   $categories
       ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        // $categories = Category::all();
        return view('admin-dashboard.category.show',[
            "category" =>   $category
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $category = Category::findorFail($id);
        return view('admin-dashboard.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {


        $validator  =  $request->validate([

            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg','max:2048'],
            'name' => ['required', 'string', 'max:255'],
           ]);



        $path = '';
        if($request->file('image')){
          $image = $request->file('image');
          $path = $image->store('category','public');
        }
//
        // $categories = new Category();
        $category->name = $request->name;
        $category->image =  $path;
        $category->save();


        $categories = Category::all();
       return view('admin-dashboard.category.show',[
        "categories" =>   $categories
       ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $deleted = Category::destroy($id);
        if($deleted > 0){
           return redirect()->back();
        }else{
           return 'failed' ;
        }

        return view('admin-dashboard.category.show');
    }

}
