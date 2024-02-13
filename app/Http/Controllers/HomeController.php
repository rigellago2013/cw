<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
class HomeController extends Controller
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
       // $blogs= DB::table('blog')->paginate(15);
        $blogs = DB::table('blog')
        ->join('users', 'blog.blog_user', '=', 'users.id')->orderBy('published_on', 'desc')->paginate(20);
        return view('home',["blogs"=>$blogs]);
        //return view('home');
    }

    public function loadmyblogs(Request $request){
        $blogs = DB::table('blog')
        ->join('users', 'blog.blog_user', '=', 'users.id')->where("blog_user",Auth::user()->id )->orderBy('blog_id', 'desc')->paginate(20);
        return view('home',["blogs"=>$blogs]);
    }
    public function getUsers(Request $request, User $ser)
    {

        $input = \Arr::except($request->all(),array('_token', '_method'));

        //$data = User::where('is_active', '1');
        if(isset($input['username'])) {
            $data = DB::table('crypto_100')->where('company', 'like', '%'.$input['username'].'%')->paginate(30);
        }else{
            $data = DB::table('crypto_100')->where('company', 'like', '%'.$input['username'].'%')->paginate(30);;
        }
    
       
        return \DataTables::of($data)
            ->addColumn('Actions', function($data) {
                return '<button type="button" data-id="'.$data->id.'" data-toggle="modal" data-target="#DeleteUserModal" class="btn btn-danger btn-sm" id="getDeleteId">Delete</button>';
            })
            ->rawColumns(['Actions'])
            ->make(true);
    } 
}
