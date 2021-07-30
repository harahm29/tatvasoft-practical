<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Blog;
use App\User;
use Illuminate\Auth\Events\Validator;


class BlogController extends Controller
{

    public function index()
    {
        return view('blog.add');
    }

    public function store(Request $request)
    {


        if($request->id){

            $validator= Validator::make($request->all(), [
                'title' => ['required', 'string', 'max:255'],
                'des' => ['required', 'string', 'max:655'],
                'start_date' => ['required'],
                'end_date' => ['required'],
            ]);

            if ($validator->fails()) {
               notify()->error($validator->fails());
               return back();
            }
            $data=array(
            'title' =>$request->title ,
            'des' => $request->des,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            );

            $blog = Blog::where('id',$request->id)->update($data);
            if($blog){
                notify()->success('Blog Updated!!');
            }else{
                notify()->error('Blog not Updated!!');
            }
            return redirect('/');
        }else{

            $validator= Validator::make($request->all(), [
                'title' => ['required', 'string', 'max:255'],
                'des' => ['required', 'string', 'max:655'],
                'start_date' => ['required'],
                'end_date' => ['required'],
                'img' => ['required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',]
            ]);

            if ($validator->fails()) {
               return back()
               ->withErrors($validator)
               ->withInput();
            }

            $data=array(
                'user_id'=>Auth::user()->id,
                'title' =>$request->title ,
                'des' => $request->des,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
            );


            $blog = Blog::create($data);
            if($blog){
                notify()->success('Blog Created!!');
            }else{
                notify()->error('Blog not Created!!');
            }
            return redirect('/');


        }


        return redirect('/');


    }
}
