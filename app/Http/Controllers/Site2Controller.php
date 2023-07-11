<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Site2Controller extends Controller
{
    public function index(){
        return view('site2assets.index');
    }

    public function notfound(){
        return view('site2assets.404');
    }



    public function about(){
       return view('site2assets.about');
    }


    public function cart(){
        return view('site2assets.cart');
     }


    public function checkout(){
        return view('site2assets.checkout');
     }


     public function contact(){
        return view('site2assets.contact');
     }


     public function index_2(){
        return view('site2assets.index_2');
     }

     public function news(){
        return view('site2assets.news');
     }


     public function shop(){
        return view('site2assets.shop');
     }

     public function single(){
        return view('site2assets.single-news');
     }

     public function singlee(){
        return view('site2assets.news');
     }

}


