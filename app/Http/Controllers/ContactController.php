<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    //for manage SEO

    function page(request $request){
        $seo = DB::table('seoproperties')->where('pageName','=','contact')->first();
        return view('pages.contact',['seo'=>$seo]);

    }

    // for manage contact page data
    function contactRequest(request $request){
        return DB::table('contacts')->insert($request->input());

    }
}
