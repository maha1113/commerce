<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ChangeLangController extends Controller
{
    //

    public function changeLang(){



        App::getLocale() == 'ar' ? App::setLocale('en') : App::setLocale('ar');


        // if(App::getLocale() == 'ar'){
        //     App::setLocale('en');
        // } else {
        //     App::setLocale('ar');

        // }


        return redirect()->route('admin.teams.index');
    }
}
