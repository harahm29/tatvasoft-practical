<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
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
        return view('home');
    }
    public function home()
    {
        //dd(Auth::user()->id);
        return view('welcome');
    }

    public function blog(Request $Request,$user=null)
    {

        $where['is_delete']="false";
        $where['is_active']="false";
        if($user){
            $where['user_id']=$user;
        }
        //dd($where);
       $data= Blog::with('user')->where($where)->get();
       return json_encode($data);
    }
}
