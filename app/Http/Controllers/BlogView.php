<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
class BlogView extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('createblog');
    }
    public function  single_blog_view(Request $request,$id){
       $bid=explode("_",$id);

        $fdeals=DB::table('blog')->where('blog_id', $bid[1])->join('users', 'blog.blog_user', '=', 'users.id')->where('status', 1)->orderBy('published_on', 'desc')->paginate(10);
        $multiple_blog = DB::table('blog')
        ->join('users', 'blog.blog_user', '=', 'users.id')->orderBy('published_on', 'desc')->paginate(12);
        
       // return view('crypto_feeds',["domains"=>$fdeals,"tags"=>$tags]);

        return view('blogview',["blogs"=>$fdeals,"tempblogs"=>$multiple_blog] );
    }

    public function createblogview(Request $request){
        return view('createblog');
    }

    public function saveblog(Request $request){
    
            $data_array=array(
                "blog_title"=>$request['blog_title'],
                "video"=>$request['video'],
                "title_img"=>$request['title_img'], 
                "blog"=>$request['blog'],
                "keywords"=>$request['keywords'],
                "blog_user"=> Auth::user()->id,
                "slug"=>$request['slug'],
                "status"=>0
            );
           $id= DB::table('blog')->insert( $data_array);

        return json_encode($data_array);
  
    }

    public function load_all_blogs(Request $request){
        $blogs= DB::table('blog')->paginate(15);
        return view('home',["blogs"=>$blogs]);
    }
    public function multiple_blog_view(Request $request){
 
       if($request['ajax']=="search"){
            $fdeals = DB::table('blog')
            ->join('users', 'blog.blog_user', '=', 'users.id')->orWhere('blog_title', 'like', '%' . $request['search'] . '%')->orderBy('published_on', 'desc')->paginate(5);
            
             return view('cryptoblogcomponent',["blogs"=>$fdeals]);
        }

        $fdeals = DB::table('blog')
        ->join('users', 'blog.blog_user', '=', 'users.id')->where('status', 1)->orderBy('published_on', 'desc')->paginate(12);
        
           return view('blog_multiple_view',["blogs"=>$fdeals,"tempblogs"=>$fdeals]);
    
      }
      
      
      
}
