<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
class CommonController extends Controller
{
    public function blog($user=null)
    {

        $where['is_delete']="false";

        if($user){
            $where['user_id']=base64_decode($user);
        }
        //dd($where);
       $data= Blog::with('user')->where($where)->orderBy('created_at','desc')->get();
       return json_encode($data);
    }
}
