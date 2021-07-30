<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use Illuminate\Support\Carbon;
class CommonController extends Controller
{
    public function blog($user=null)
    {

        $where['is_delete']="false";

        if($user){
            $where['user_id']=base64_decode($user);
        }
        //dd($where);

        $date= Carbon::now();

       $data= Blog::with('user')->where($where)->where('start_date','>=',$date)->orWhere('end_date','>=',$date)->orderBy('created_at','desc')->get();
       return json_encode($data);
    }
}
