<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ResumeController extends Controller
{
    //
    function page(request $request){
        $seo= DB::table('seoproperties')->where('pageName','=','resume')->first();
        return view('pages.resume', ['seo'=>$seo]);

    }

    // link to download
    function resumeLink(request $request){
        return DB::table('resumes')->first();

    }

    // data load
    function experienceData(request $request){
        return DB::table('experiences')->get();

    }

    //dataload
    function educationData(request $request){
        return DB::table('educations')->get();

    }

    //dataload
    function skillData(request $request){
        return DB::table('skills')->get();

    }

    //data load
    function languageData(request $request){
        return DB::table('languages')->get();

    }
}
