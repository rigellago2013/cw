<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
class BlogController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
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
        $fdeals=DB::table('crypto_feeds')->where('sr_no', $id)->paginate(20);
       // return view('crypto_feeds',["domains"=>$fdeals,"tags"=>$tags]);

        return view('blogview');
    }

    public function createblogview(Request $request){
        return view('createblog');
    }

    public function updateview(Request $request,$id){
             $blog=DB::table('blog')->where('blog_id', $id)->join('users', 'blog.blog_user', '=', 'users.id')->paginate(10); 
        //$blog=DB::table('blog')->where('blog_id', $id)->paginate(20);
        $users=DB::table('users')->paginate(100);

        return view('updateblog',[
            "blog"=>$blog,
            "users"=>$users
        ]);
    }


    public function publish(Request $request){
        $bstatus=$request['p'];
        $id= DB::table('blog')->where('blog_id', $request['bid'])->update(["status"=>$bstatus]);
        //$id= DB::table('blog')->where('blog_id', $request['bid'])->update(["status"=>0]);
        echo "success";
    }
    public function updatesave(Request $request){

        $data_array=array(
            "blog_title"=>rm_special_char($request['blog_title']),
            "video"=>$request['video'],
            "title_img"=>$request['title_img'], 
            "blog"=>rm_special_char($request['blog']),
            "keywords"=>$request['keywords'],
                "blog_user"=> $request['author'],
            "published_on"=>$request['published_on'],
            "slug"=>$request['slug'],
            "status"=>0
        );
        //->where('id', $data['id']) ->limit(1) ->update( [ 'name' => $data['name'], 'address' => $data['address'], 'email' => $data['email'], 'contactno' => $data['contactno'] ]); 
       $id= DB::table('blog')->where('blog_id', $request['blog_id'])->update( $data_array);

         return json_encode($data_array  );
    }

    public function saveblog(Request $request){
      //  echo "asdf";
       //echo $request['blog'];
      // return;
       // $blog = str_replace( array("#", "'", ";"), '', $request['blog']);
            $data_array=array(
                "blog_title"=>rm_special_char($request['blog_title']),
                "video"=>$request['video'],
                "title_img"=>$request['title_img'], 
                "blog"=>rm_special_char($request['blog']),
                "keywords"=>$request['keywords'],
                "blog_user"=> Auth::user()->id,
                "published_on"=>$request['published_on'],
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
        $fdeals = DB::table('blog')
        ->join('users', 'blog.blog_user', '=', 'users.id')->paginate(10);
        
      //  $fdeals=DB::table('blog')->orderBy('id', 'asc')->paginate(10);
        //print_r($fdeals);
        return view('blog_multiple_view',["blogs"=>$fdeals]);
      }

      
}

function rm_special_char($str) {

    //Remove "#","'" and ";" using str_replace() function
    
    $result = str_replace( array("#", "'", ";"), '', $str);
    return $result;
    //The output after remove
    
  //  echo "<br/><b>Text after remove: </b> <br/>".$result;
    
    }