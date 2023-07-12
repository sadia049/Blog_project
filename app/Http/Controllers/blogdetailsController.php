<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class blogdetailsController extends Controller
{

    function page($blog_id){

        $data = DB::table('blogs')
        ->join('blog_details', 'blogs.id','=','blog_details.blog_id')
        ->select('blogs.title','blogs.image','blog_details.*')
        ->where('blogs.id','=',$blog_id)
        ->get();

        echo $data;
        
        

        return view('pages.blogDetails',['data'=>$data]);
    }
    function blogdetails(){
        // $data = DB::table('blogs')
        // ->join('blog_details', 'blogs.id','=','blog_details.blog_id')
        // ->select('blogs.title','blogs.image','blog_details.*')
        // ->where('blogs.id','=',$blog_id)
        // ->get();

        //return view('components.blog_details',['blogDetails' => $data]);

    }
}
