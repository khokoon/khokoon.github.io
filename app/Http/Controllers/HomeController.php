<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    //
    function page(request $request){
        $seo = DB::table('seoproperties')->where('pageName','=','Home')->first();
        return view('pages.home',['seo'=>$seo]);
    }

    function heroData(request $request){
        return DB::table('heroproperties')->first();

    }

    function aboutData(request $request){

        return DB::table('abouts')->first();
    }

    function socialData(request $request){
        return DB::table('socials')->first();

    }

}
