<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    //For load page
    function page(request $request){
        $seo= DB::table('seoproperties')->where('pageName','=','projects')->first();
        return view('pages.projects',['seo'=>$seo]);

    }

    // for gating data in project section
    function projectsData(request $request){
        return DB::table('projects')->get();

    }
}

