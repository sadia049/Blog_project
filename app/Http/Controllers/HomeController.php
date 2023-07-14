<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function page(Request $request){

        $value1 =  DB::table('banners')->get();
        $value2  = DB::table('introductions')->get();
        $value3 = DB::table('categories')
        ->join('blogs','categories.id','=','blogs.category_id')
        ->get();
        $value4 =  DB::table('blogs')
        ->join('blog_details', 'blogs.id','=','blog_details.blog_id')
        ->get();

         return view('pages.home',['banner'=>$value1,'intro'=>$value2,'blog'=>$value3,'blogDetails'=>$value4]);

    }

    function bannerData(Request $request){

        $data =  DB::table('banners')->first();
        return view('components.banner',['banner'=>$data]);
        
    }

    function intoData(Request $request){

        $data =  DB::table('introductions')->first();
        return view('components.intro',['intro' => $data]);
        
    }
    function blogpostData(Request $request){

        $data =  DB::table('categories')
        ->join('blogs','categories.id','=','blogs.category_id')
        ->get();
        return view('components.blog',['blog' => $data]);
        
    }


}
